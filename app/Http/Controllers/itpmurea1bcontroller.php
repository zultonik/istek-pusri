<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea1bprd;
use App\rbiurea1bpv;
use App\rbiurea1btank;
use App\rbiurea1bhe;

class itpmurea1bcontroller extends Controller
{
    public function index()
    {
    	$rbiurea1bprd = rbiurea1bprd::oldest()->get();
    	$rbiurea1bpv = rbiurea1bpv::oldest()->get();
    	$rbiurea1btank = rbiurea1btank::oldest()->get();
    	$rbiurea1bhe = rbiurea1bhe::oldest()->get();
    	return view('itpm.urea1b', compact('rbiurea1bprd','rbiurea1bpv','rbiurea1btank','rbiurea1bhe'));
    }
}
