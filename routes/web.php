<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/', [App\Http\controllers\ProductController::class, 'index']);
Route::get('cart', [App\Http\controllers\ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\controllers\ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\controllers\ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\controllers\ProductController::class, 'remove'])->name('remove.from.cart');
