<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product.index', ['title' => 'Products']);
});
Route::get('/product/create', function () {
    return view('product.create', ['title' => 'Create Products']);
});
