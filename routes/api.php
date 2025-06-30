<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('products/search', [ProductController::class, 'search'])->name('api.products.search');
Route::get('categories/search', [CategoryController::class, 'search'])->name('api.categories.search');
Route::get('tags/search', [TagController::class, 'search'])->name('api.tags.search');
Route::get('search', function (Request $request) {
    try {
        $q = $request->input('q');

        $products = Product::when($q, function($query) use ($q) {
            return $query->where('name', 'like', '%' . $q . '%');
        })
        ->orderBy('likes', 'desc')
        ->limit(10)
        ->get();

        $users = User::when($q, function($query) use ($q) {
            return $query->where('name', 'like', '%' . $q . '%');
        })
        ->limit(10)
        ->get();

        $categories = Category::when($q, function($query) use ($q) {
            return $query->where('name', 'like', '%' . $q . '%');
        })
        ->withCount('products')
        ->orderBy('name')
        ->limit(10)
        ->get();

        return response()->json([
            'products' => $products,
            'users' => $users,
            'categories' => $categories,
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'products' => [],
            'users' => [],
            'categories' => [],
        ], 500);
    }
})->name('api.search');