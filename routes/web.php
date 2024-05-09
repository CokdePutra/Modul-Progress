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
Route::group(['prefix' => '/menu'], function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/{id}', [MenuController::class, 'show'])->name('menu.show');
    Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
});
Route::group(['prefix' => '/user'], function () {
    Route::get('/', [UsersController::class, 'index'])->name('user.index');
    Route::get('/create', [UsersController::class, 'create'])->name('user.create');
    Route::post('/', [UsersController::class, 'store'])->name('user.store');
    Route::get('/{id}', [UsersController::class, 'show'])->name('user.show');
    Route::get('/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
    Route::put('/{id}', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/{id}', [UsersController::class, 'destroy'])->name('user.destroy');
});
