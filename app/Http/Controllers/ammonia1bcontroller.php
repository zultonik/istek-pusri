<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ammonia1b;

class ammonia1bcontroller extends Controller
{
    public function index()
    {
    	$ammonia1b = ammonia1b::oldest()->get();
    	return view('unit_data.index', compact('ammonia1b'));
    }

    public function create()
    {
    	return view('unit_data.create');
    }

    public function store(Request $request)
    {
    $ammonia1b = ammonia1b::create([
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
            $ammonia1b->file = $request->file('file')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia1b->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia1b->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia1b->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia1b->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia1b->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia1b->save();
        }
        return redirect('/ammonia1b')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$ammonia1b = \App\ammonia1b::find($id);
    	return view('unit_data.edit',['ammonia1b'=>$ammonia1b]);
    }

    public function update(Request $request,$id)
    {
    	$ammonia1b = \App\ammonia1b::find($id);
    	$ammonia1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $ammonia1b->file = $request->file('file')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia1b->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia1b->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia1b->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia1b->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia1b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia1b->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia1b->save();
        }
        
    	return redirect('/ammonia1b')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$ammonia1b = \App\ammonia1b::find($id);
    	$ammonia1b->delete();
    	return redirect('/ammonia1b')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $ammonia1b = \App\ammonia1b::find($id);
        return view('unit_data.detail-ammonia',['ammonia1b'=>$ammonia1b]);
    }
}
