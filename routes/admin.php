<?php

use App\Http\Controllers\Admin\BloodController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonorController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->as('admin.')->middleware(['auth:admin'])->group(function () {

    # Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CrudController::class)->name('crud.')->prefix('crud')->group(function () {

        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{crud}', 'destroy')->name('destroy');
        Route::get('{crud}', 'show')->name('view');

        Route::post('{crud}', 'update')->name('update');
    });


    # Blood
    Route::controller(BloodController::class)->prefix('blood')->name('blood.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/donors/{blood}','showDonorsByBloodGroup')->name('donors');
    });

     # Donor
     Route::controller(DonorController::class)->prefix('donor')->name('donor.')->group(function(){
        Route::get('/','index')->name('index');
    });

     # User
     Route::controller(UserController::class)->prefix('user')->name('user.')->group(function(){
        Route::get('/','index')->name('index');
    });
});
