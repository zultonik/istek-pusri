<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea2bprd;
use App\rbiurea2bpv;
use App\rbiurea2btank;
use App\rbiurea2bhe;

class itpmurea2bcontroller extends Controller
{
    public function index()
    {
    	$rbiurea2bprd = rbiurea2bprd::oldest()->get();
    	$rbiurea2bpv = rbiurea2bpv::oldest()->get();
    	$rbiurea2btank = rbiurea2btank::oldest()->get();
    	$rbiurea2bhe = rbiurea2bhe::oldest()->get();
    	return view('itpm.urea2b', compact('rbiurea2bprd','rbiurea2bpv','rbiurea2btank','rbiurea2bhe'));
    }
}
