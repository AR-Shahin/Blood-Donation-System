<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Blood;
use App\Models\Donor;
use App\Mail\TestMail;
use App\Models\Division;
use App\Models\BloodRequest;
use App\Mail\BloodRequestMail;
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
    $bloods = Blood::latest()->get();
    return view('frontend.donor_registration',compact('divisons','bloods'));
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/admin_auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/donor.php';
require __DIR__ . '/user.php';

Route::get('mail',function(){
    echo Carbon::now()->subYears(18)->format('Y-m-d');
    // Mail::to("a@mail.com")->send(new TestMail);
});

# Donor Registration

Route::prefix('donor')->name('donor.')->controller(DonorController::class)->group(function () {


});

Route::get('division-districts/{division}',[DonorController::class,'getDistrictsByDivision'])->name('division-districts');
Route::get('district-upazilas/{district}',[DonorController::class,'getUpazilasByDistrict'])->name('division-upazilas');

Route::get('mailr',function(){
    $user = User::find(1);
    $donor = Donor::find(1);
    $req = BloodRequest::find(5);

    return new BloodRequestMail($req,$user,$donor);
});
