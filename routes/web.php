<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
})->name('landing-page');

Route::get('login', function () {
    return Inertia::render('login');
})->name('login');

Route::get('register', function () {
    return Inertia::render('register');
})->name('register');

Route::get('home', function () {
    return Inertia::render('home');
})->name('home');

Route::get('/products/{id}', function(string $id) {
    return Inertia::render('product');
});

Route::get('/creators/{id}', function(string $id) {
    return Inertia::render('creator');
});

Route::get('upload', function() {
    return Inertia::render('upload');
});