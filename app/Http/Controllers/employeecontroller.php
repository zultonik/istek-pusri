<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usermanage;

class employeecontroller extends Controller
{
    public function index()
    {
        $usermanage = usermanage::oldest()->get();
    	return view('employee.index', compact('usermanage'));
    }
}
