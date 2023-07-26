<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CheckoutController;
use App\Http\Controllers\API\CategoryController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});


Route::get('all-category', [CategoryController::class, 'allcategory'])->middleware('cors.preflight');
Route::post('store-product', [ProductController::class, 'store'])->middleware('cors.preflight');
Route::get('view-product', [ProductController::class, 'index']);

Route::post('checkout', [CheckoutController::class, 'checkout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

