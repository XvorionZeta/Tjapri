<?php

// Namespace Seller Controller
use App\Http\Controllers\Seller\ProductSellerController;
// Namespace User Controller
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ChatController;
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
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {

    //** SELLER **//
        Route::get('/my-product',[ProductSellerController::class, 'my_product'])->name('product-seller.my-product');
        Route::get('/add-product',[ProductSellerController::class, 'add_product'])->name('product-seller.add-product');


    //** USER **//
        Route::get('/chat',[ChatController::class, 'index'])->name('chat');
        Route::get('/profile',[ProfileController::class, 'index'])->name('profile');
        Route::get('/wishlist',[WishlistController::class, 'index'])->name('wishlist');


});

require __DIR__.'/auth.php';
