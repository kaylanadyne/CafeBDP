<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
Route::get('/product', [UserController::class, 'index'])->name('indexx');
Route::get('cart', [UserController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [UserController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [UserController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [UserController::class, 'remove'])->name('remove_from_cart');
Route::post('/checkout',[UserController::class,'checkout'])->name('checkout');

// admin
Route::get('/login', [AdminController::class, 'indexLogin'])->name('login');
Route::post('/loginAuth', [AdminController::class, 'auth'])->name('auth');
