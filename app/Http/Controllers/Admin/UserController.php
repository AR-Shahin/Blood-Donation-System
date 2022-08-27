<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['upazila','blood'])->latest()->get();
        return view('backend.user.index',compact('users'));
    }

    public function showDonor(User $user)
    {
        $user->with(["upazila.district.division","blood"]);
        return view('backend.user.show',compact('user'));
    }
}
