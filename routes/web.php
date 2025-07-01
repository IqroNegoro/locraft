<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Report;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index', [
        'top_products' => Product::with('user', 'category', 'tags')->whereBetween('created_at', [
            now()->subWeek()->startOfWeek(), now()->subWeek()->endOfWeek()
        ])->whereNotNull('total_likes')->orderBy('total_likes', 'desc')->take(3)->get(),
    ]);
})->name('landing-page');

Route::middleware('guest')->group(function() {
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'registerPost'])->name('register.post');
    
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'loginPost'])->name('login.post');
});

Route::get('home', function () {
    return Inertia::render('home', [
        'top_products' => Product::with('user', 'category', 'tags')->whereDate('created_at', now()->yesterday())->whereNotNull('total_likes')->orderBy('total_likes', 'desc')->take(10)->get(),
        'latest_products' => Product::with('user', 'category', 'tags')->latest()->take(9)->get(),
        'random_products' => Product::with('user', 'category', 'tags')->inRandomOrder()->take(9)->get()
    ]);
})->name('home');

Route::middleware('auth')->group(function() {
    Route::get('setting', [UserController::class, 'edit'])->name('user.setting');
    Route::put('setting', [UserController::class, 'update'])->name('user.update');

    Route::put('creators/{user:username}/follow', [UserController::class, 'follow'])->name('creators.follow');
    Route::put('products/{product:slug}/like', [ProductController::class, 'like'])->name('products.like');
    Route::post('products/{product:slug}/review', [ReviewController::class, 'store'])->name('products.review');
    Route::get('products/{product:slug}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::delete('products/{product:slug}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('upload', [ProductController::class, 'create'])->name('products.create');
    Route::post('upload', [ProductController::class, 'store'])->name('products.store');

    Route::post('reports', [ReportController::class, 'store'])->name('reports.store');

    Route::delete('logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
});


Route::get('products/{product:slug}', [ProductController::class, 'show'])->name('products.show');
// Route::put('products/{product:slug}', [ProductController::class, 'update'])->name('products.update');
Route::get('creators/{user:username}', [UserController::class, 'show'])->name('creators');

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
                $products->whereDate('created_at', now()->yesterday());
            } elseif ($top === 'products-of-the-week') {
                $products->whereBetween('created_at', [
                    now()->subWeek()->startOfWeek(), now()->subWeek()->endOfWeek()
                ]);
            } elseif ($top === 'products-of-the-month') {
                $products->whereMonth('created_at', now()->subMonth()->month)
                      ->whereYear('created_at', now()->year);
            }
            $products->orderByDesc('total_likes');
        }

        if ($request->filled('sort')) {
            switch ($request->input('sort')) {
                case 'popular':
                    $products->orderByDesc('likes');
                    break;
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
        return Inertia::render('admin/index', [
        'totalProducts' => Product::count(),
        'totalTags' => Tag::count(),
        'totalCategories' => Category::count(),
        'totalReports' => Report::count(),
        'reports' => Report::with('user', 'product')->latest()->take(5)->get()
        ]);
    })->name('index');

    Route::resource('products', ProductController::class)->except(['store', 'update']);
    Route::resource('reports', ReportController::class)->only(['index', 'show', 'update', 'destroy']);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
});

Route::get('error', function() {
    return Inertia::render('ErrorPage', ['status' => 401]);
});