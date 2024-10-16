<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Inventory\InventoryController;

Route::get('/', function () {
    return view('layouts/master');
});
Route::get('/home', [ProductController::class, 'index']);
Route::get('/inventory',[ProductController::class, 'inventory']);
Route::get('/add-inventory',[ProductController::class, 'addInventory']);
Route::get('/sale',[ProductController::class, 'sale']);
Route::get('/service',[ProductController::class, 'service']);
Route::get('/add-service',[ProductController::class, 'addService']);
Route::get('/chart',[ProductController::class,'chart']);
Route::post('/service/add',[ServiceController::class,'add']);
Route::post('/inventory/add',[InventoryController::class,'store']);

Route::get('/search',[ProductController::class, 'search']);   
Route::get('/service/search',[ProductController::class,'serviceSearch']);
Route::get('/inv-search',[ProductController::class,'inventorySearch']);
Auth::routes();


