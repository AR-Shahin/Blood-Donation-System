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
}
