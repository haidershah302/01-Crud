<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Register');
})->name('register');

Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');
