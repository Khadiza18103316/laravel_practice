<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.master');
});

//Dashboard
Route::get ('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

// Product
Route::get ('/product',[ProductController::class,'list'])->name('product.list');
Route::get ('/product/create',[ProductController::class,'create'])->name('product.create');

// Category
Route::get ('/category',[CategoryController::class,'list'])->name('category.list');
Route::get ('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post ('/category/store',[CategoryController::class,'store'])->name('category.store');


// Brand
Route::get ('/brand',[BrandController::class,'list'])->name('brand.list');
Route::get ('/brand/create',[BrandController::class,'create'])->name('brand.create');
Route::post ('/brand/store',[BrandController::class,'store'])->name('brand.store');