<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreCategoryController;
use App\Http\Controllers\StoreProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin routes
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('/admin')->name('admin.')->group(function() {
    // admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
    // crud users
    Route::get('/users', [UserController::class, 'index'])->name('users.show');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    
    // CRUD Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // CRUD Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');
    Route::get('/product/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy');

    // Crud Commands
    Route::get('/orders', [OrderAdminController::class, 'index'])->name('order.index');
});

// Only authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'index'])->name('store.cart');
    Route::post('/store/cart/store/{user}/{product}', [CartController::class, 'store'])->name('store.cart.store');
    Route::post('/increment/{cart_item}', [CartController::class, 'increment'])->name('increment');
    Route::post('/decrement/{cart_item}', [CartController::class, 'decrement'])->name('decrement');

    Route::get('/order/store', [OrderController::class, 'store'])->name('order.store');
});

// Every one could use this Route
Route::prefix('/store')->name('store.')->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('index');
    
    Route::get('/categories', [StoreCategoryController::class, 'index'])->name('categories');
    Route::get('/categories/{category}', [StoreCategoryController::class, 'showCategory'])->name('showCategory');

    Route::get('/products', [StoreProductController::class, 'index'])->name('products');

    Route::post('/product/search', [StoreProductController::class, 'search'])->name('product.search');
});

require __DIR__.'/auth.php';
