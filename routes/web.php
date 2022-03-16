<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Models\Product;

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

Route::get('/', fn () => redirect('/shop'));
Route::get('/shop', [ProductController::class, 'index'])->name('home');

Route::get('/product/{product}', [ProductController::class, 'view']);

Route::get('/category/{name}', [CategoryController::class, 'view'])->name('category');

Route::post('/review/add', [ReviewController::class, 'add']);

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/order', [CartController::class, 'order'])->name('order');
Route::post('/cart/{product}', [CartController::class, 'add']);
