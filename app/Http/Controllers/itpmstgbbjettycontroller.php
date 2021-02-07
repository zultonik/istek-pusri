<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbistgbbjettyprd;
use App\rbistgbbjettypv;
use App\rbistgbbjettytank;
use App\rbistgbbjettyhe;

class itpmstgbbjettycontroller extends Controller
{
    public function index()
    {
    	$rbistgbbjettyprd = rbistgbbjettyprd::oldest()->get();
    	$rbistgbbjettypv = rbistgbbjettypv::oldest()->get();
    	$rbistgbbjettytank = rbistgbbjettytank::oldest()->get();
    	$rbistgbbjettyhe = rbistgbbjettyhe::oldest()->get();
    	return view('itpm.stgbbjetty', compact('rbistgbbjettyprd','rbistgbbjettypv','rbistgbbjettytank','rbistgbbjettyhe'));
    }
}
