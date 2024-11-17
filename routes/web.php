<?php

use App\Events\SwitchFlipped;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExchangeHistoryController;
use App\Http\Controllers\FrameController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ThemeController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Reverb\Events\MessageSent;


// Guest MiddleWare
Route::controller(AuthController::class)->middleware('guest')->group(function () {

    Route::get('/register', 'viewRegister')->name('register');
    Route::post('/register', 'register')->name('register.post');

    Route::get('/login', 'viewLogin')->name('login');
    Route::post('/login', 'login')->name('login.post');


    Route::get('/auth/google/redirect', 'googleRedirect')->name('google.redirect');
    Route::get('/auth/google/callback', 'loginGoogle')->name('google.callback');

});

// Auth MiddleWare
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::inertia('/admin', 'Admin/index')->name('admin');

    // Profile Pages
    Route::controller(ProfileController::class)->group(function () {

        Route::get('/', 'home')->name('home');

        Route::get('/profile', 'user')->name('profile.user');

        Route::get('/profile/view/{user}', 'view')->name('profile.view');

        Route::get('/profile/edit', 'editView')->name('profile.edit');

        Route::post('/profile/edit', 'editPost')->name('profile.edit.post');

        Route::get('/profile/recharge', 'rechargeView')->name('profile.recharge');

        Route::get('/profile/exchange', 'exchangeView')->name('profile.exchange');

        Route::post('/profile/increment/coin', 'incrementCoin')->name('profile.increment.coin');
    });

    // Exchange Controller
    Route::controller(ExchangeHistoryController::class)->group(function () {
        Route::get('profile/history/exchange', 'index')->name('exchange.history');

        Route::post('/profile/increment/diamonds', 'incrementDiamonds')->name('profile.increment.diamonds');
    });

    // RoomController
    Route::controller(RoomController::class)->group(function () {

        Route::get('/myRoom', 'myRoom')->name('myRoom');

        Route::post('/myRoom/create', 'store')->name('myRoom.create');

        Route::get('/admin/room', 'index')->name('admin.room.index');

        Route::get('/room/{room}/show', 'show')->name('admin.room.show');

        Route::post('/room/switch/{user}', function (Request $request,User $user){
            Cache::forever('toggleSwitch', $request->switch);
            broadcast(new SwitchFlipped($request->all()))->toOthers();
        })->name('room.switch');

    });

    //RoomThemeController
    Route::controller(ThemeController::class)->group(function () {
        Route::get('/admin/room/theme', 'index')->name('admin.room.theme.index');

        Route::get('/admin/room/theme/create', 'create')->name('admin.room.theme.create');

        Route::post('/admin/room/theme/store', 'store')->name('admin.room.theme.store');

        Route::get('/admin/room/theme/{theme}', 'edit')->name('admin.room.theme.edit');

        Route::post('/admin/room/theme/{theme}', 'update')->name('admin.room.theme.update');

        Route::delete('/admin/room/theme/{theme}', 'destroy')->name('admin.room.theme.destroy');
    });

    //FrameController
    Route::controller(FrameController::class)->group(function () {

        Route::get('/admin/frame', 'index')->name('admin.frame.index');

        Route::get('/admin/frame/create', 'create')->name('admin.frame.create');

        Route::post('/admin/frame/store', 'store')->name('admin.frame.store');

        Route::get('/admin/frame/{frame}', 'edit')->name('admin.frame.edit');

        Route::post('/admin/frame/{frame}', 'update')->name('admin.frame.update');

        route::delete('/admin/frame/{frame}', 'destroy')->name('admin.frame.destroy');

    });

    //GiftController
    Route::controller(GiftController::class)->group(function () {

        Route::get('/admin/gift', 'index')->name('admin.gift.index');

        Route::get('/admin/gift/create', 'create')->name('admin.gift.create');

        Route::post('/admin/gift/store', 'store')->name('admin.gift.store');

        Route::get('/admin/gift/{gift}', 'edit')->name('admin.gift.edit');

        Route::post('/admin/gift/{gift}', 'update')->name('admin.gift.update');

        route::delete('/admin/gift/{gift}', 'destroy')->name('admin.gift.destroy');

    });
});
