<?php

namespace App\Http\Controllers\Donor;

use App\Models\Blood;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DonorRegistrationRequest;
use App\Models\Donor;

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
        return redirect()->route('donor.login');
    }

    public function authenticate()
    {
        # code...
    }
}
