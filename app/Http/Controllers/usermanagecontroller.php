<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\usermanage;

class usermanagecontroller extends Controller
{
    public function index()
    {
        $usermanage = usermanage::oldest()->get();
    	return view('usermanage.index', compact('usermanage'));
    }

    public function create(Request $request)
    {
		return view('usermanage.create');
    }

    public function store(Request $request)
    {
        $user = new \App\User;
        $user->name = $request->nama;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(45);
        $user->save(); 

        $request->request->add(['user_id' => $user->id ]);
        $usermanage = \App\usermanage::create($request->all());

        return redirect('/usermanage')->with('sukses','Data Berhasil Diinput');

     }
}
