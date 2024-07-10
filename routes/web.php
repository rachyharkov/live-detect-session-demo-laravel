<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('auth');
});

Route::resource('auth', AuthController::class);
Route::resource('session', SessionController::class);
// Route::get('logout')->name('auth.logout')->uses(AuthController::class . '@destroy');
// Route::post('login')->name('login')->uses('AuthController@store');

Route::group(['middleware' => 'authenticated'], function () {
    Route::resource('home', HomeController::class);
});
