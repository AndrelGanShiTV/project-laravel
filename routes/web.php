<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Home');
});

Route::get('/shop', function () {
    return view('Shop');
});

Route::get('/cart', function () {
    return view('Cart');
});

Route::get('/checkout', function () {
    return view('Checkout');
});
