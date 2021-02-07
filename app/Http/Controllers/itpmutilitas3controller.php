<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiutilitas3pv;
use App\rbiutilitas3tank;
use App\rbiutilitas3he;

class itpmutilitas3controller extends Controller
{
    public function index()
    {
    	$rbiutilitas3pv = rbiutilitas3pv::oldest()->get();
    	$rbiutilitas3tank = rbiutilitas3tank::oldest()->get();
    	$rbiutilitas3he = rbiutilitas3he::oldest()->get();
    	return view('itpm.utilitas3', compact('rbiutilitas3pv','rbiutilitas3tank','rbiutilitas3he'));
    }
}
