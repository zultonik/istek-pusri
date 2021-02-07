<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiutilitas1bpv;
use App\rbiutilitas1btank;
use App\rbiutilitas1bhe;

class itpmutilitas1bcontroller extends Controller
{
    public function index()
    {
    	$rbiutilitas1bpv = rbiutilitas1bpv::oldest()->get();
    	$rbiutilitas1btank = rbiutilitas1btank::oldest()->get();
    	$rbiutilitas1bhe = rbiutilitas1bhe::oldest()->get();
    	return view('itpm.utilitas1b', compact('rbiutilitas1bpv','rbiutilitas1btank','rbiutilitas1bhe'));
    }
}
