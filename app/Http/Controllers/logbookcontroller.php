<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logbookcontroller extends Controller
{
    public function index()
    {
        return view('logbook.index');
    }
}
