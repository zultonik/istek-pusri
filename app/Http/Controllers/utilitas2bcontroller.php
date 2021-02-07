<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\utilitas2b;

class utilitas2bcontroller extends Controller
{
    public function index()
    {
    	$utilitas2b = utilitas2b::oldest()->get();
        return view('utilitas2b.index', compact('utilitas2b'));
    }

    public function create()
    {
        return view('utilitas2b.create');
    }

    public function store(Request $request)
    {
    $utilitas2b = utilitas2b::create([
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
            $utilitas2b->file = $request->file('file')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas2b->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas2b->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas2b->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas2b->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas2b->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas2b->save();
        }
        return redirect('/utilitas2b')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$utilitas2b = \App\utilitas2b::find($id);
    	return view('utilitas2b.edit',['utilitas2b'=>$utilitas2b]);
    }

    public function update(Request $request,$id)
    {
    	$utilitas2b = \App\utilitas2b::find($id);
    	$utilitas2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $utilitas2b->file = $request->file('file')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $utilitas2b->file2 = $request->file('file2')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $utilitas2b->file3 = $request->file('file3')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $utilitas2b->file4 = $request->file('file4')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $utilitas2b->file5 = $request->file('file5')->getClientOriginalName();
            $utilitas2b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $utilitas2b->file6 = $request->file('file6')->getClientOriginalName();
            $utilitas2b->save();
        }
    	return redirect('/utilitas2b')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$utilitas2b = \App\utilitas2b::find($id);
    	$utilitas2b->delete();
    	return redirect('/utilitas2b')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $utilitas2b = \App\utilitas2b::find($id);
        return view('utilitas2b.detail-utilitas',['utilitas2b'=>$utilitas2b]);
    }
}
