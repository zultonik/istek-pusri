<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea3prd;
use App\rbiurea3pv;
use App\rbiurea3tank;
use App\rbiurea3he;

class itpmurea3controller extends Controller
{
    public function index()
    {
    	$rbiurea3prd = rbiurea3prd::oldest()->get();
    	$rbiurea3pv = rbiurea3pv::oldest()->get();
    	$rbiurea3tank = rbiurea3tank::oldest()->get();
    	$rbiurea3he = rbiurea3he::oldest()->get();
    	return view('itpm.urea3', compact('rbiurea3prd','rbiurea3pv','rbiurea3tank','rbiurea3he'));
    }
}
