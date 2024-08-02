<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [\App\Http\Controllers\InertiaPageController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\InertiaPageController::class, 'register'])->name('register');



//Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::get('/', [\App\Http\Controllers\InertiaPageController::class, 'index']);
    Route::get('/index', [\App\Http\Controllers\InertiaPageController::class, 'index']);
    Route::get('/home', [\App\Http\Controllers\InertiaPageController::class, 'index']);
    Route::get('/feedback', [\App\Http\Controllers\InertiaPageController::class, 'feedback']);
    Route::get('/feedback/{id}', [\App\Http\Controllers\InertiaPageController::class, 'feedbackView']);
//});
