<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;

Route::middleware('guest')->group(function () {

    Route::get('/register', function (){
        return Inertia::render('Register');
    })->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    Route::get('/login', function (){
        return Inertia::render('Login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');




    Route::get('/auth/google/redirect', function () {
        return Socialite::driver('google')->redirect();
    })->name('google.redirect');

    Route::get('/auth/google/callback', [AuthController::class, 'loginGoogle'])->name('google.callback');


});

Route::middleware('auth')->group(function () {
    Route::inertia('/', 'Home')->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Profile Pages
    Route::get('/profile', function (){
        return Inertia::render('Profile/user', ['user' => auth()->user()]);
    })->name('profile.user');

    Route::get('/profile/view/{user}', function (\App\Models\User $user){
        return Inertia::render('Profile/view', ['user' => $user]);
    })->name('profile.view');

    Route::get('/profile/edit', function (){
        return Inertia::render('Profile/edit', ['user' => auth()->user()]);
    })->name('profile.edit');

    Route::post('/profile/edit', [AuthController::class, 'edit'])->name('profile.edit.post');
});
