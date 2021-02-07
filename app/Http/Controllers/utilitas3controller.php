<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\utilitas3;

class utilitas3controller extends Controller
{
    public function index()
    {
    	$utilitas3 = utilitas3::oldest()->get();
        return view('utilitas3.index', compact('utilitas3'));
    }

    public function create()
    {
        return view('utilitas3.create');
    }

    public function store(Request $request)
    {
    $utilitas3 = utilitas3::create([
        'code_gabungan'     => $request->input('code_gabungan'),
        'code_company'      => $request->input('code_company'),
        'company'           => $request->input('company'),
        'code_plant'        => $request->input('code_plant'),
        'plant'             => $request->input('plant'),
        'code_section'      => $request->input('code_section'),
        'section'           => $request->input('section'),
        'code_sub'          => $request->input('code_sub'),
        'sub'               => $request->input('sub'),
        'equipment'         => $request->input('equipment'),
        'description'       => $request->input('description')
    ]);
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $utilitas3->file = $request->file('file')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas3->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas3->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas3->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas3->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas3->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas3->save();
        }
        return redirect('/utilitas3')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$utilitas3 = \App\utilitas3::find($id);
    	return view('utilitas3.edit',['utilitas3'=>$utilitas3]);
    }

    public function update(Request $request,$id)
    {
    	$utilitas3 = \App\utilitas3::find($id);
    	$utilitas3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $utilitas3->file = $request->file('file')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas3->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas3->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas3->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas3->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas3->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas3->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas3->save();
        }
    	return redirect('/utilitas3')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$utilitas3 = \App\utilitas3::find($id);
    	$utilitas3->delete();
    	return redirect('/utilitas3')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $utilitas3 = \App\utilitas3::find($id);
        return view('utilitas3.detail-utilitas',['utilitas3'=>$utilitas3]);
    }
}
