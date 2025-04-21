<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/home', function () {
    return view('welcome');
});
Route::get('/get',[ProductController::class, 'index']);
Route::get('/create',[ProductController::class, 'create']);
Route::post('/create',[ProductController::class, 'store']);
