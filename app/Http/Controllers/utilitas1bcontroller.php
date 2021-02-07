<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\utilitas1b;

class utilitas1bcontroller extends Controller
{
    public function index()
    {
    	$utilitas1b = utilitas1b::oldest()->get();
        return view('utilitas1b.index', compact('utilitas1b'));
    }

    public function create()
    {
        return view('utilitas1b.create');
    }

    public function store(Request $request)
    {
    $utilitas1b = utilitas1b::create([
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
            $utilitas1b->file = $request->file('file')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas1b->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas1b->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas1b->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas1b->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas1b->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas1b->save();
        }
        return redirect('/utilitas1b')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$utilitas1b = \App\utilitas1b::find($id);
    	return view('utilitas1b.edit',['utilitas1b'=>$utilitas1b]);
    }

    public function update(Request $request,$id)
    {
    	$utilitas1b = \App\utilitas1b::find($id);
    	$utilitas1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $utilitas1b->file = $request->file('file')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas1b->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas1b->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas1b->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas1b->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas1b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas1b->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas1b->save();
        }
    	return redirect('/utilitas1b')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$utilitas1b = \App\utilitas1b::find($id);
    	$utilitas1b->delete();
    	return redirect('/utilitas1b')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $utilitas1b = \App\utilitas1b::find($id);
        return view('utilitas1b.detail-utilitas',['utilitas1b'=>$utilitas1b]);
    }
}
