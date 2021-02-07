<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\urea1b;

class urea1bcontroller extends Controller
{
    public function index()
    {
    	$urea1b = urea1b::oldest()->get();
        return view('urea1b.index', compact('urea1b'));
    }

    public function create()
    {
        return view('urea1b.create');
    }

    public function store(Request $request)
    {
    $urea1b = urea1b::create([
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
            $urea1b->file = $request->file('file')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea1b->file2 = $request->file('file2')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea1b->file3 = $request->file('file3')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea1b->file4 = $request->file('file4')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea1b->file5 = $request->file('file5')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea1b->file6 = $request->file('file6')->getClientOriginalName();
            $urea1b->save();
        }
        return redirect('/urea1b')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$urea1b = \App\urea1b::find($id);
    	return view('urea1b.edit',['urea1b'=>$urea1b]);
    }

    public function update(Request $request,$id)
    {
    	$urea1b = \App\urea1b::find($id);
    	$urea1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $urea1b->file = $request->file('file')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea1b->file2 = $request->file('file2')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea1b->file3 = $request->file('file3')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea1b->file4 = $request->file('file4')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea1b->file5 = $request->file('file5')->getClientOriginalName();
            $urea1b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea1b->file6 = $request->file('file6')->getClientOriginalName();
            $urea1b->save();
        }
    	return redirect('/urea1b')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$urea1b = \App\urea1b::find($id);
    	$urea1b->delete();
    	return redirect('/urea1b')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $urea1b = \App\urea1b::find($id);
        return view('urea1b.detail-urea',['urea1b'=>$urea1b]);
    }
}
