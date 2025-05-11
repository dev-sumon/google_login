<?php

use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('auth/google', [GoogleController::class,'redirectToGoogle'])->name('redirect.google');
Route::get('auth/google/callback', [GoogleController::class,'handleGoogleCallback']);