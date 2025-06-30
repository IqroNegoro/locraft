<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Follow;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class UserController extends Controller
{
    public function register()
    {
        return Inertia::render('register');
    }

    public function registerPost(RegisterRequest $request)
    {
        try {
            $validated = $request->validated();

            User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password'])
            ]);

            if (Auth::attempt([
                'email' => $validated['email'],
                'password' => $validated['password'],
            ])) {
                $request->session()->regenerate();

                return redirect()->route('creators', Auth::user()->username)->with('success', 'Registration success, welcome to lokafest!');
            } else {
                return back()->with('error', 'Email or password wrong!');
            }
        } catch (\Throwable $e) {
            return back()->with('error', 'Oops, we cannot proceed your request right now, try again later');
        }
    }

    public function login()
    {
        return Inertia::render('login');
    }

    public function loginPost(LoginRequest $request)
    {
        try {
            $validated = $request->validated();

            if (Auth::attempt([
                'email' => $validated['email'],
                'password' => $validated['password'],
            ])) {
                $request->session()->regenerate();

                if (Auth::user()->role === 'admin') return redirect()->route('admin.index');
                return redirect()->route('home');
            } else {
                return back()->with('error', 'Email or password wrong!');
            }
        } catch (\Throwable $e) {
            return back()->with('error', 'Oops, we cannot proceed your request right now, try again later');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        $user = $user->loadExists('followers');
        $products = Product::whereUserId($user->id)->with('category')->withCount('images')->withExists('liked')->get();
        $product = request()->get('product') ? Product::with('category')->with('images')->withExists('liked')->firstWhere('slug', request()->get('product')) : null;
        return Inertia::render('creator', compact('user', 'products', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return Inertia::render('user/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request)
    {
        $avatar = "";
        try {
            $data = $request->validated();

            $user = Auth::user();

            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('images/avatar', 'public');
                $data['avatar'] = basename($path);
                $avatar = basename($path);
            }
            
            $user->update($data);
            
            if ($request->hasFile('avatar') && $user->avatar && Storage::disk('public')->exists('images/avatar/' . $user->avatar)) {
                Storage::disk('public')->delete('images/avatar/' . $user->avatar);
            }

            return redirect()->back()->with('success', 'Your profile has been updated');
        } catch (\Throwable $e) {
            if ($avatar && Storage::disk('public')->exists('images/products/' . $avatar)) {
                Storage::disk('public')->delete('images/products/' . $avatar);
            }
            return redirect()->back()->with('error', 'Failed to update profile, try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function follow(User $user)
    {
        try {
            $follower = Follow::where('user_id', Auth::id())
                ->where('followed_user_id', $user->id)
                ->first();

            if ($follower) {
                $follower->delete();
                return back()->with('success', "You are unfollowing $user->name");
            } else {
                Follow::create([
                    'user_id' => Auth::id(),
                    'followed_user_id' => $user->id,
                ]);
                return back()->with('success', "You are starting to follow $user->name");
            }
        } catch (\Throwable $e) {
            return back()->with('error', "Failed to follow creator, try again later");
        }
    }

    public function search(Request $request) {
        try {
            $query = $request->input('q');

            $users = Product::when($query, function($query) {
                return $query->where('name', 'like', '%' . $query . '%');
            })
            ->limit(10)
            ->get();

            return response()->json([
                'data' => $users
            ]);
        } catch (\Throwable $e) {
            return response()->json([], 500);
        }
    }
}
