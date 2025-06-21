<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function register() {
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
        
                return redirect()->route('home')->with('success', 'Registration success, welcome to lokafest!');
            } else {
                return back()->with('error', 'Email or password wrong!');
            }
        } catch (\Throwable $e) {
            return back()->with('error', 'Oops, we cannot proceed your request right now, try again later');
        }
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
        $products = Product::withCount('images')->get();
        $product = request()->get('product') ? Product::with('images')->firstWhere('slug', request()->get('product')) : null;
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
}
