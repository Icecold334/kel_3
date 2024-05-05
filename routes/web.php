<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;

Route::controller(HomeController::class)->group(function () {
  Route::get('/', 'index');
});

Route::get('/manage', [DashboardController::class, 'index']);
Route::resource('/products', ProductsController::class);
Route::post('/check', [ProductsController::class, 'check']);
Route::get('/about', [AboutController::class, 'index']);
