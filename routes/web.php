<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('guest')->group(function () {
    Route::inertia('/', 'Register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    Route::inertia('/login', 'Login')->name('login');

});
