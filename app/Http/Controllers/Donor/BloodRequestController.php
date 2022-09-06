<?php

namespace App\Http\Controllers\Donor;

use App\Models\BloodRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodRequestController extends Controller
{
    public function index()
    {

        $reqs =  BloodRequest::whereBloodId(auth('donor')->user()->blood_id)->whereUpazilaId(auth('donor')->user()->upazila_id)->with('blood.donors')
        ->whereDonorId(null)
        ->latest()
        ->get();

        return view('donor.request.index',compact('reqs'));
    }

    public function acceptBloodRequest(BloodRequest $request)
    {
        if($request->status == "pending"){
            $request->update([
                "donor_id" => auth('donor')->id(),
                "status"=> "accepted"
            ]);
            auth('donor')->user()->update([
                "last_donation" => $request->date
            ]);
            return redirect()->route('donor.request.own');
        }
        return redirect()->route('donor.request.index');

    }

    public function myRequest()
    {
         $reqs = auth('donor')->user()->blood_requests;
        return view('donor.request.own',compact('reqs'));

    }

    public function show(BloodRequest $request)
    {
        $request = $request->load(['user','blood']);
        return view('donor.request.view',compact('request'));
    }
}
