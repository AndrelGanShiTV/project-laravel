<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\OrderController;
use App\Http\Controllers\Api\v1\ShoppingCartController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->get('/profile', [AuthController::class, 'profile']);
    Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

    //api/v1/products
    Route::prefix('products')->group(function () {
        Route::get('/search', [ProductController::class, 'search']);
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'show']);
        Route::post('/', [ProductController::class, 'store']);
        Route::put('/{id}', [ProductController::class, 'update']);
        Route::delete('/{id}', [ProductController::class, 'destroy']);
    });

    //api/v1/orders
    Route::prefix('orders')->middleware('auth:sanctum')->group(function () {
        Route::get('/', [OrderController::class, 'index']);
        Route::get('/{id}', [OrderController::class, 'show']);
        Route::post('/create', [OrderController::class, 'create']);
    });

    //api/v1/cart
    Route::prefix('cart')->middleware('auth:sanctum')->group(function () {
        Route::get('/', [ShoppingCartController::class, 'index']);
        Route::post('/add', [ShoppingCartController::class, 'store']);
        Route::put('/update/{cartItemId}', [ShoppingCartController::class, 'update']);
        Route::delete('/remove/{cartItemId}', [ShoppingCartController::class, 'destroy']);
    });
});
