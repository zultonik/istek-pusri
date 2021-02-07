<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiammonia4prd;
use App\rbiammonia4pv;
use App\rbiammonia4he;

class itpmammonia4controller extends Controller
{
    public function index()
    {
    	$rbiammonia4prd = rbiammonia4prd::oldest()->get();
    	$rbiammonia4pv = rbiammonia4pv::oldest()->get();
    	$rbiammonia4he = rbiammonia4he::oldest()->get();
    	return view('itpm.ammonia4', compact('rbiammonia4prd','rbiammonia4pv','rbiammonia4he'));
    }
}
