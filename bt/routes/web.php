<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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


//shopping cart

Route::middleware(['login'])->group(function () {
    Route::get('/product', [ProductController::class, 'index']);
    
    Route::get('cart', [ProductController::class, 'cart'])->name('cart');
    
    Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    
    Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
    
    Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
    }); 




Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/welcome', [AuthController::class, 'welcome']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/regenerate', [AuthController::class, 'regenerateSession']);