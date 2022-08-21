<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth('user')->user()->load(['upazila.district.division','blood']);
        return view('user.dashboard',compact('user'));
    }
}
