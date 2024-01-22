<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Livewire\Admin\AdminCategoriesComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[AppController::class, 'index'])->name('app.index');
Route::get('/shop',[ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class, 'productDetails'])->name('shop.product.details');

// Cart Routes
Route::get('/cart', [CartController::class,'index'])->name('cart.index'); // cart page
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store'); // add to cart
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update'); // update cart
Route::delete('/cart/remove', [CartController::class, 'deleteCartItem'])->name('cart.remove'); // remove cart item
Route::delete('/cart/destroy', [CartController::class, 'destroyCart'])->name('cart.destroy'); // destroy cart

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
});

// Admin Routes
Route::middleware(['auth', 'auth.admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});