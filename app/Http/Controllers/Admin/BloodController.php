<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function index()
    {
        $bloods = Blood::latest()->get();
        return view('backend.blood.index',compact('bloods'));
    }
}
