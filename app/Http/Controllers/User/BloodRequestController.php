<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Blood;
use App\Models\Donor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BloodRequest;

class BloodRequestController extends Controller
{
    public function index()
    {
        $user = auth('user')->user()->load(['blood_requests']);
        return view('user.request.index',compact('user'));
    }

    public function createRequest()
    {
       // return Carbon::now()->subMonth(3)->format('Y-m-d');
        $do = Donor::userDesireAvailableDonors(1,auth('user')->user()->upazila_id);
      //  return $do->load('upazila.district.division');
        $bloods = Blood::latest()->get();
        return view('user.request.create',compact('bloods'));
    }
    public function sendBloodRequest(Request $request)
    {
        BloodRequest::create([
            "blood_id" => $request->blood_id,
            "date" => $request->date,
            "address" => $request->address,
            "blood_id" => $request->blood_id,
            "upazila_id" => auth('user')->user()->upazila_id,
            "user_id" => auth('user')->id(),
            "blood_id" => $request->blood_id,
        ]);

        return redirect()->route('user.request.index');
    }
}
