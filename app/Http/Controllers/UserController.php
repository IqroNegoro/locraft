<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Follow;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $products = Product::whereUserId($user->id)->withCount('images')->withExists('liked')->get();
        $product = request()->get('product') ? Product::with('images')->withExists('liked')->firstWhere('slug', request()->get('product')) : null;
        return Inertia::render('creator', compact('user', 'products', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
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
                $user->decrement('followers');
                return back()->with('success', "You are unfollowing $user->name");
            } else {
                Follow::create([
                    'user_id' => Auth::id(),
                    'followed_user_id' => $user->id,
                ]);
                $user->increment('followers');
                return back()->with('success', "You are starting to follow $user->name");
            }
        } catch (\Throwable $e) {
            return back()->with('error', "Failed to follow creator, try again later");
        }
    }
}
