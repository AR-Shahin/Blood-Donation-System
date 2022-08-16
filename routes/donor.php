<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Donor\AuthController;
use Illuminate\Support\Facades\Route;

Route::name('donor.')->prefix('donor')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login')->middleware('guest:donor');
    Route::get('registration',[AuthController::class,'registration'])->name('registration')->middleware('guest:donor');

    Route::post('store',[AuthController::class,'store'])->name('store')->middleware('guest:donor');
    Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate')->middleware('guest:donor');

    Route::middleware('auth:donor')->group(function(){
        Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        Route::post('logout',[AuthController::class,'logout'])->name('logout');
    });

});

