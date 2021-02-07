<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiammonia2bprd;
use App\rbiammonia2bpv;
use App\rbiammonia2bhe;

class itpmammonia2bcontroller extends Controller
{
    public function index()
    {
    	$rbiammonia2bprd = rbiammonia2bprd::oldest()->get();
    	$rbiammonia2bpv = rbiammonia2bpv::oldest()->get();
    	$rbiammonia2bhe = rbiammonia2bhe::oldest()->get();
    	return view('itpm.ammonia2b', compact('rbiammonia2bprd','rbiammonia2bpv','rbiammonia2bhe'));
    }
}
