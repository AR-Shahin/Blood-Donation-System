<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function getDistrictsByDivision(Division $division)
    {
        return $division->load('districts');
    }

    public function getUpazilasByDistrict(District $district)
    {
        return $district->load('upazilas');
    }
}
