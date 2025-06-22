<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\TopProduct;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
})->name('landing-page');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'registerPost'])->name('register.post');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'loginPost'])->name('login.post');

Route::delete('logout', [UserController::class, 'logout'])->name('logout');

Route::get('home', function () {
    return Inertia::render('home', [
        'top_products' => TopProduct::all(),
    ]);
})->name('home');

Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

Route::put('/products/{product:slug}/like', [ProductController::class, 'like'])->name('products.like');
Route::post('/products/{product:slug}/review', [ReviewController::class, 'store'])->name('products.review');

Route::get('/creators/{user:username}', [UserController::class, 'show'])->name('creators');
Route::put('/creators/{user:username}/follow', [UserController::class, 'follow'])->name('creators.follow');

Route::get('upload', [ProductController::class, 'create'])->name('products.create');
Route::post('upload', [ProductController::class, 'store'])->name('products.store');