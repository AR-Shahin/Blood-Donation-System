<?php

use App\Http\Controllers\Donor\AuthController;
use Illuminate\Support\Facades\Route;

Route::name('donor.')->prefix('donor')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::get('registration',[AuthController::class,'registration'])->name('registration');

    Route::post('store',[AuthController::class,'store'])->name('store');
    Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate');

});

