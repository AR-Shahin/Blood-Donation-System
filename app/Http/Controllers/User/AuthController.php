<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Blood;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Http\Requests\UserRegistrationRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('user.auth.login');
    }

    public function registration()
    {
        $divisons = Division::latest()->get();
        $bloods = Blood::latest()->get();
        return view('user.auth.register',compact('divisons','bloods'));
    }

    public function store(UserRegistrationRequest $request)
    {

         //return $request->blood_id;
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "blood_id" => $request->blood_id,
            "age" => $request->age,
            "phone" => $request->phone,
            "date_of_birth" => $request->date_of_birth,
            "upazila_id" => $request->upazila_id
        ]);
        session()->flash('success',"Authentication successfully!");
        return redirect()->intended(route('user.login'));
    }

    public function authenticate(UserLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::USER_HOME);
    }


    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.login');
    }
}
