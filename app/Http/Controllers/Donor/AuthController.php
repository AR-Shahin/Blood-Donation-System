<?php

namespace App\Http\Controllers\Donor;

use App\Models\Blood;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
