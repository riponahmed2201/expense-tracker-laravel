<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

//Login
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login.show');
    Route::post('login-process', 'login')->name('login.process');
});

Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{category}', 'edit')->name('edit');
        Route::put('update', 'update')->name('update');
        Route::delete('delete', 'delete')->name('delete');
    });

});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
