<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CreateCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
// use App\Livewire\Admin\CreateProductsComponent;

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
Route::get('/',[AppController::class, 'index'])->name('layouts.base');
Route::get('/shop',[ShopController::class, 'index'])->name('shop.index');
Route::get('/', [HomeController::class,'index'])->name('app.index');
Route::get('/product/{slug}',[ShopController::class, 'productDetails'])->name('shop.product.details');

// Cart Routes
Route::get('/cart', [CartController::class,'index'])->name('cart.index'); // cart page
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store'); // add to cart
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update'); // update cart
Route::delete('/cart/remove', [CartController::class, 'deleteCartItem'])->name('cart.remove'); // remove cart item
Route::delete('/cart/destroy', [CartController::class, 'destroyCart'])->name('cart.destroy'); // destroy cart

// Checkout Routes
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout'); // checkout page
Route::post('/checkout', [OrdersController::class, 'store'])->name('order.store'); // process order

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
});

// Admin Routes
Route::middleware(['auth', 'auth.admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Route::get('/admin/create-product', [CreateProductsComponent::class, 'render'])->name('livewire.admin.create-products-component'); // create product page
    // Route::post('/admin/store-product', [CreateProductsComponent::class, 'create'])->name('admin.products.store'); // store product
    //categories
    Route::get('/admin/categories', [CategoriesController::class,'index'])->name('admin.categories'); // all categories page
    Route::get('/admin/create-category', [CreateCategoryController::class,'index'])->name('admin.category'); // create category form page
    Route::post('/admin/create-category', [CreateCategoryController::class, 'store'])->name('admin.categories.store'); // store category in db
    // products
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.product'); // view product
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.create'); // create product
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.store'); // store products in DB
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // edit products
    Route::patch('/admin/products/{product}', [ProductController::class, 'update'])->name('products.update'); // update edits
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // delete products
});