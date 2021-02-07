<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiammonia3prd;
use App\rbiammonia3pv;
use App\rbiammonia3he;

class itpmammonia3controller extends Controller
{
    public function index()
    {
    	$rbiammonia3prd = rbiammonia3prd::oldest()->get();
    	$rbiammonia3pv = rbiammonia3pv::oldest()->get();
    	$rbiammonia3he = rbiammonia3he::oldest()->get();
    	return view('itpm.ammonia3', compact('rbiammonia3prd','rbiammonia3pv','rbiammonia3he'));
    }
}
