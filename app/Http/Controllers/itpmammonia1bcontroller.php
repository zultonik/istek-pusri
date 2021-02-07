<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\rbiammonia1bprd;
use App\rbiammonia1bpv;
use App\rbiammonia1bhe;

class itpmammonia1bcontroller extends Controller
{
    public function index()
    {
    	$rbiammonia1bprd = rbiammonia1bprd::oldest()->get();
    	$rbiammonia1bpv = rbiammonia1bpv::oldest()->get();
    	$rbiammonia1bhe = rbiammonia1bhe::oldest()->get();
    	return view('itpm.ammonia1b', compact('rbiammonia1bprd','rbiammonia1bpv','rbiammonia1bhe'));
    }
}
