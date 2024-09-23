<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

//Login
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login.show');
    Route::post('login-process', 'login')->name('login.process');
});

//Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'showRegisterForm')->name('register.show');
    Route::post('register-process', 'register')->name('register.process');
});

Route::middleware(['web', 'user', 'preventBackHistory'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{category}', 'edit')->name('edit');
            Route::put('update/{category}', 'update')->name('update');
            Route::delete('delete/{category}', 'delete')->name('delete');
        });
    });

});
