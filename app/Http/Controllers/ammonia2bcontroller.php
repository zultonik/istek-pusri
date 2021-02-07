<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ammonia2b;

class ammonia2bcontroller extends Controller
{
    public function index()
    {
    	$ammonia2b = ammonia2b::oldest()->get();
        return view('ammonia2b.index', compact('ammonia2b'));
    }

    public function create()
    {
        return view('ammonia2b.create');
    }

    public function store(Request $request)
    {
    $ammonia2b = ammonia2b::create([
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
            $ammonia2b->file = $request->file('file')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia2b->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia2b->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia2b->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia2b->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia2b->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia2b->save();
        }
        return redirect('/ammonia2b')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$ammonia2b = \App\ammonia2b::find($id);
    	return view('ammonia2b.edit',['ammonia2b'=>$ammonia2b]);
    }

    public function update(Request $request,$id)
    {
    	$ammonia2b = \App\ammonia2b::find($id);
    	$ammonia2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $ammonia2b->file = $request->file('file')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia2b->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia2b->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia2b->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia2b->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia2b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia2b->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia2b->save();
        }
    	return redirect('/ammonia2b')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$ammonia2b = \App\ammonia2b::find($id);
    	$ammonia2b->delete();
    	return redirect('/ammonia2b')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $ammonia2b = \App\ammonia2b::find($id);
        return view('ammonia2b.detail-ammonia',['ammonia2b'=>$ammonia2b]);
    }
}
