<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckEmail;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//route cua category
Route::get('/category',[CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');
Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::get('category/show',[CategoryController::class,'show'])->name('categories.show');

//route cua product
Route::get('/product',[ProductController::class, 'index'])->name('products.index');
Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
Route::post('/product/store',[ProductController::class,'store'])->name('products.store');
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::put('product/update/{id}',[ProductController::class,'update'])->name('products.update');
Route::delete('product/{id}', [ProductController::class,'delete'])->name('product.destroy');

// Route::get('/check', function() {
//     return 'dasdasdas';
// })->middleware('check'); 

// Route::get('checksochan', function(){
//     return 'casdsaddasd';
// })
// ->middleware('checksochan');
Route::get('/layout', function () {
    return view('demo.layout');
});
Route::get('/layout1', function () {
    return view('demo.layout1');
});