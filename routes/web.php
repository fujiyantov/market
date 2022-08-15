<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;

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

/* if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
} */

Route::get('/', [HomeController::class, 'index'])->name('home');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product-details/{product_id}', [ProductController::class, 'show'])->name('products.show');

// Travels
Route::get('/travels', [TravelController::class, 'index'])->name('travels.index');
Route::get('/travel-details/{travel_id}', [TravelController::class, 'show'])->name('travels.show');

// Checkout
Route::get('/checkout/{type}/{id}/{slug}', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/checkout/{type}/{id}/{slug}', [CheckoutController::class, 'store'])->name('checkout.store');

// Contact
Route::get('/contact', [MasterController::class, 'contact'])->name('contact');

// Discuss
Route::post('/discuss/{type}/{id}/{slug}', [MasterController::class, 'discuss'])->name('discuss.store');