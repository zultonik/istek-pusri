<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiutilitas2bpv;
use App\rbiutilitas2btank;
use App\rbiutilitas2bhe;

class itpmutilitas2bcontroller extends Controller
{
    public function index()
    {
    	$rbiutilitas2bpv = rbiutilitas2bpv::oldest()->get();
    	$rbiutilitas2btank = rbiutilitas2btank::oldest()->get();
    	$rbiutilitas2bhe = rbiutilitas2bhe::oldest()->get();
    	return view('itpm.utilitas2b', compact('rbiutilitas2bpv','rbiutilitas2btank','rbiutilitas2bhe'));
    }
}
