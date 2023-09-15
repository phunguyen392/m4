<?php

use App\Http\Controllers\CategoryController;
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
Route::get('/category',[CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');
Route::put('/category/update/{id}',[CategoryController::class],'update')->name('categories.update');
Route::get('category/edit/{id}',[CategoryController::class],'edit')->name('categories.edit');