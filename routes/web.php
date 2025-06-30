<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
})->name('landing-page');

Route::middleware('guest')->group(function() {
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'registerPost'])->name('register.post');
    
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'loginPost'])->name('login.post');
    
    Route::delete('logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('home', function () {
    $product = Product::with('user', 'category');
    return Inertia::render('home', [
        'latest_products' => $product->latest()->take(20)->get(),
        'random_products' => $product->inRandomOrder()->get()
    ]);
})->name('home');

Route::get('setting', [UserController::class, 'edit'])->name('user.setting');
Route::put('setting', [UserController::class, 'update'])->name('user.update');

Route::get('products/{product:slug}', [ProductController::class, 'show'])->name('products.show');
Route::put('products/{product:slug}/like', [ProductController::class, 'like'])->name('products.like');
Route::post('products/{product:slug}/review', [ReviewController::class, 'store'])->name('products.review');

Route::get('creators/{user:username}', [UserController::class, 'show'])->name('creators');
Route::put('creators/{user:username}/follow', [UserController::class, 'follow'])->name('creators.follow');

Route::get('upload', [ProductController::class, 'create'])->name('products.create');
Route::post('upload', [ProductController::class, 'store'])->name('products.store');

Route::get('search', function(Request $request) {
    $products = Product::with('user', 'category');

    if ($request->filled('category')) {
        $products->whereHas('category', function($q) use ($request) {
            $q->where('slug', $request->input('category'));
        });
    }

        if ($request->filled('top')) {
            $top = $request->input('top');
            if ($top === 'products-of-the-day') {
                $products->whereDate('created_at', now());
            } elseif ($top === 'products-of-the-week') {
                $products->whereBetween('created_at', [
                    now()->subWeek()->startOfWeek(), now()->subWeek()->endOfWeek()
                ]);
            } elseif ($top === 'products-of-the-month') {
                $products->whereMonth('created_at', now()->subMonth()->month)
                      ->whereYear('created_at', now()->year);
            } elseif ($top === 'products-of-all-time') {
            } elseif ($top === 'top-users') {
                $userIds = User::withCount(['products as total_likes' => function($q) {
                    $q->select(DB::raw('SUM(likes)'));
                }])->orderByDesc('total_likes')->limit(10)->pluck('id');
                $products->whereIn('user_id', $userIds);
            }
            $products->orderByDesc('likes');
        }

        if ($request->filled('sort')) {
            switch ($request->input('sort')) {
                case 'popular':
                    $products->orderByDesc('likes');
                    break;
                // case 'lowest-price':
                //     $products->orderBy('price', 'asc');
                //     break;
                // case 'higher-price':
                //     $products->orderBy('price', 'desc');
                //     break;
                case 'newest':
                    $products->orderByDesc('created_at');
                    break;
                case 'oldest':
                    $products->orderBy('created_at', 'asc');
                    break;
            }
        }

    return Inertia::render('search', [
        'products' => $products->get(),
        'categories' => Category::all(['name', 'slug'])
    ]);
})->name('search');

Route::prefix('admin')->middleware(Admin::class)->name('admin.')->group(function() {
    Route::get('/', function() {
        return Inertia::render('admin/index');
    })->name('index');

    Route::resource('reports', ReportController::class)->only(['index', 'show', 'destroy']);
    Route::resource('categories', CategoryController::class);
});