<?php

use App\Http\Controllers\Donor\AuthController;
use Illuminate\Support\Facades\Route;

Route::name('donor.')->prefix('donor')->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::get('registration',[AuthController::class,'registration'])->name('registration');

});
