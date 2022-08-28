<?php

namespace App\Http\Controllers\Donor;

use Carbon\Carbon;
use App\Models\BloodRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {

        // return auth('donor')->user()->last_donation;

        $today =  today()->format('y-m-d');
        // return Carbon::now()
        // ->subMonth(3)
        // ->format('Y-m-d') > null;
        $reqs =  BloodRequest::whereBloodId(auth('donor')->user()->blood_id)->whereUpazilaId(auth('donor')->user()->upazila_id)->with('blood.donors')
        ->get();
      //  return count($reqs);
        $bloodRequests = [];
        foreach($reqs as $req){
            foreach($req->blood->donors as $donor){
                if(($donor->last_donation == null || canDonateBlood($req->date,$donor->last_donation)) && $req->upazila_id == $donor->upazila_id && $req->blood_id == auth('donor')->user()->blood_id){
                    echo ($donor->name) . "<br>";
                    // echo $req->date . "<br>";
                    array_push($bloodRequests,$req);
                }
            }
        }
        // return dd($bloodRequests[0]);
        // dd($bloodRequests[0]);
        //  return count($bloodRequests);
        $user = auth('donor')->user()->load(['upazila.district.division','blood']);
        return view('donor.dashboard',compact('user'));
    }
}
