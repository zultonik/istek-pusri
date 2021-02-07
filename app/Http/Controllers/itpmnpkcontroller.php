<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbinpkprd;
use App\rbinpkpv;
use App\rbinpktank;
use App\rbinpkhe;

class itpmnpkcontroller extends Controller
{
    public function index()
    {
    	$rbinpkprd = rbinpkprd::oldest()->get();
    	$rbinpkpv = rbinpkpv::oldest()->get();
    	$rbinpktank = rbinpktank::oldest()->get();
    	$rbinpkhe = rbinpkhe::oldest()->get();
    	return view('itpm.npk', compact('rbinpkprd','rbinpkpv','rbinpktank','rbinpkhe'));
    }
}
