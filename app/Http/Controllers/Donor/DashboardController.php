<?php

namespace App\Http\Controllers\Donor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth('donor')->user()->load(['upazila.district.division','blood']);
        return view('donor.dashboard',compact('user'));
    }
}
