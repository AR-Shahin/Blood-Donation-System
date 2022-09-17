<?php

namespace App\Http\Controllers\Donor;

use App\Models\Blood;
use App\Models\Donor;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\DonorLoginRequest;
use App\Http\Requests\DonorRegistrationRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('donor.auth.login');
    }

    public function registration()
    {
        $divisons = Division::latest()->get();
        $bloods = Blood::latest()->get();

        return view('donor.auth.register',compact('divisons','bloods'));
    }

    public function store(DonorRegistrationRequest $request)
    {

         //return $request->blood_id;
        Donor::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "blood_id" => $request->blood_id,
            "age" => $request->age,
            "phone" => $request->phone,
            "date_of_birth" => $request->date_of_birth,
            "last_donation" => $request->last_donation ? $request->last_donation : null,
            "upazila_id" => $request->upazila_id
        ]);
        session()->flash('success',"Authentication successfully!");
        return redirect()->route('donor.login');
    }

    public function authenticate(DonorLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::DONOR_HOME);
    }


    public function logout(Request $request)
    {
        Auth::guard('donor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('donor.login');
    }

}
