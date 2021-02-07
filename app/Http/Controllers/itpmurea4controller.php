<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea4prd;
use App\rbiurea4pv;
use App\rbiurea4tank;
use App\rbiurea4he;

class itpmurea4controller extends Controller
{
    public function index()
    {
    	$rbiurea4prd = rbiurea4prd::oldest()->get();
    	$rbiurea4pv = rbiurea4pv::oldest()->get();
    	$rbiurea4tank = rbiurea4tank::oldest()->get();
    	$rbiurea4he = rbiurea4he::oldest()->get();
    	return view('itpm.urea4', compact('rbiurea4prd','rbiurea4pv','rbiurea4tank','rbiurea4he'));
    }
}
