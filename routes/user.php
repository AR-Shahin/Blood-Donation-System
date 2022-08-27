<?php

use App\Http\Controllers\User\{
    DashboardController,AuthController,
    BloodRequestController
};
use Illuminate\Support\Facades\Route;

Route::name('user.')->prefix('user')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login')->middleware('guest:user');
    Route::get('registration',[AuthController::class,'registration'])->name('registration')->middleware('guest:user');

    Route::post('store',[AuthController::class,'store'])->name('store')->middleware('guest:user');
    Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate')->middleware('guest:user');

    Route::middleware('auth:user')->group(function(){
        Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        Route::post('logout',[AuthController::class,'logout'])->name('logout');

        # Blood Request
        Route::controller(BloodRequestController::class)->name('request.')->prefix('request')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'createRequest')->name('create');
            Route::post('/store', 'sendBloodRequest')->name('store');


        });
    });

});

