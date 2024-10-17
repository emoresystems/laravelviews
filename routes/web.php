<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/services', 'services');
Route::view('/contact', 'contact');

Route::resource('/products', ProductsController::class);