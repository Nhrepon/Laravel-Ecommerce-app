<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

////// Page router /////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});



////// Api router /////////////////////////////////////////////////////////
// User router
Route::get('/user-list', [UserController::class, 'index'])->name('user-list');

// Brand router
Route::get('/brand-list', [BrandController::class, 'index'])->name('brand-list');
Route::post('/create-brand', [BrandController::class, 'createBrand']);
Route::post('/update-brand', [BrandController::class, 'updateBrand']);

// Category router
Route::get('/category-list', [CategoryController::class, 'index'])->name('category-list');


// Product router
Route::get('/product-list', [ProductController::class, 'productList'])->name('product-list');

