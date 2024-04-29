<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::resource('/menu', MenuController::class);
Route::resource('/user', UsersController::class);
