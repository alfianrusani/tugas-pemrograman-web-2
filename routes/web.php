<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.delete');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');


