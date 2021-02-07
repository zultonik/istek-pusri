<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\utilitas4;

class utilitas4controller extends Controller
{
    public function index()
    {
    	$utilitas4 = utilitas4::oldest()->get();
        return view('utilitas4.index', compact('utilitas4'));
    }

    public function create()
    {
        return view('utilitas4.create');
    }

    public function store(Request $request)
    {
    $utilitas4 = utilitas4::create([
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
            $utilitas4->file = $request->file('file')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas4->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas4->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas4->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas4->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas4->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas4->save();
        }
        return redirect('/utilitas4')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$utilitas4 = \App\utilitas4::find($id);
    	return view('utilitas4.edit',['utilitas4'=>$utilitas4]);
    }

    public function update(Request $request,$id)
    {
    	$utilitas4 = \App\utilitas4::find($id);
    	$utilitas4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $utilitas4->file = $request->file('file')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas4->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas4->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas4->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas4->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas4->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas4->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas4->save();
        }
    	return redirect('/utilitas4')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$utilitas4 = \App\utilitas4::find($id);
    	$utilitas4->delete();
    	return redirect('/utilitas4')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $utilitas4 = \App\utilitas4::find($id);
        return view('utilitas4.detail-utilitas',['utilitas4'=>$utilitas4]);
    }
}
