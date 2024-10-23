<?php
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Sale\SaleController;


Route::apiResource('products', ProductController::class);
Route::post('/home',[SaleController::class,'insert']);
