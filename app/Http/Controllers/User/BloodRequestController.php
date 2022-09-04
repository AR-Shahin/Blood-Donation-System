<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Blood;
use App\Models\Donor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\BloodRequestMail;
use App\Models\BloodRequest;
use Illuminate\Support\Facades\Mail;

class BloodRequestController extends Controller
{
    public function index()
    {
        $user = auth('user')->user()->load(['blood_requests.blood',"blood_requests.upazila","blood_requests.donor"]);
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
//return $request;
        $request->validate([
            "blood_id" => ['required'],
            "date" => ['required'],
            "address" => ['required'],
            "time" => ['required'],
        ],
            [
                "blood_id.required" => 'This field is required',
                "date.required" => 'This field is required',
            ]
        );

        $user = auth('user')->user();
        $donors = Donor::userDesireAvailableDonors($request->blood_id, auth('user')->user()->upazila_id);

        if(count($donors) === 0){
            session()->flash('error', 'No donors available in your region!');
            return redirect()->route('user.request.create');
        }
        if($donors){
            $blood_req = BloodRequest::create([
                "blood_id" => $request->blood_id,
                "date" => $request->date,
                "address" => $request->address,
                "blood_id" => $request->blood_id,
                "upazila_id" => auth('user')->user()->upazila_id,
                "user_id" => auth('user')->id(),
                "blood_id" => $request->blood_id,
                "time" => $request->time
            ]);
            if($blood_req){
                foreach($donors as $donor){
                    Mail::to($donor->email)->send(new BloodRequestMail($blood_req,$user,$donor));
                }
            }
        }
        session()->flash('success', 'Your Request has been sent!');
        return redirect()->route('user.request.index');
    }
}
