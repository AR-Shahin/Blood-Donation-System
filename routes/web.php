<?php

use App\Mail\TestMail;
use App\Models\Division;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DonorController;



Route::get('/', function () {
    // return view('layouts.frontend_app');
    return view('welcome');
});
Route::get('/donor', function () {
    // return view('layouts.frontend_app');
    $divisons = Division::latest()->get();
    return view('frontend.donor_registration',compact('divisons'));
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/admin_auth.php';
require __DIR__ . '/admin.php';

Route::get('mail',function(){
    Mail::to("a@mail.com")->send(new TestMail);
});

# Donor Registration

Route::prefix('donor')->name('donor.')->controller(DonorController::class)->group(function () {


});

Route::get('division-districts/{division}',[DonorController::class,'getDistrictsByDivision'])->name('division-districts');
Route::get('district-upazilas/{district}',[DonorController::class,'getUpazilasByDistrict'])->name('division-upazilas');
