<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ProductController;



Route::get('/', function () {
    return view('Home');
});

// Route::get('/shop', function () {
//     return view('Shop');
// });

Route::get('/shop', [ProductController::class, 'search'])->name('shop');

Route::get('/cart', function () {
    return view('Cart');
});

Route::get('/checkout', function () {
    return view('Checkout');
});
