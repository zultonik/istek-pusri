<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiutilitas4pv;
use App\rbiutilitas4tank;
use App\rbiutilitas4he;

class itpmutilitas4controller extends Controller
{
    public function index()
    {
    	$rbiutilitas4pv = rbiutilitas4pv::oldest()->get();
    	$rbiutilitas4tank = rbiutilitas4tank::oldest()->get();
    	$rbiutilitas4he = rbiutilitas4he::oldest()->get();
    	return view('itpm.utilitas4', compact('rbiutilitas4pv','rbiutilitas4tank','rbiutilitas4he'));
    }
}
