<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\urea2b;

class urea2bcontroller extends Controller
{
    public function index()
    {
    	$urea2b = urea2b::oldest()->get();
        return view('urea2b.index', compact('urea2b'));
    }

    public function create()
    {
        return view('urea2b.create');
    }

    public function store(Request $request)
    {
    $urea2b = urea2b::create([
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
            $urea2b->file = $request->file('file')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea2b->file2 = $request->file('file2')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea2b->file3 = $request->file('file3')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea2b->file4 = $request->file('file4')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea2b->file5 = $request->file('file5')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea2b->file6 = $request->file('file6')->getClientOriginalName();
            $urea2b->save();
        }
        return redirect('/urea2b')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$urea2b = \App\urea2b::find($id);
    	return view('urea2b.edit',['urea2b'=>$urea2b]);
    }

    public function update(Request $request,$id)
    {
    	$urea2b = \App\urea2b::find($id);
    	$urea2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $urea2b->file = $request->file('file')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea2b->file2 = $request->file('file2')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea2b->file3 = $request->file('file3')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea2b->file4 = $request->file('file4')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea2b->file5 = $request->file('file5')->getClientOriginalName();
            $urea2b->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea2b->file6 = $request->file('file6')->getClientOriginalName();
            $urea2b->save();
        }
    	return redirect('/urea2b')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$urea2b = \App\urea2b::find($id);
    	$urea2b->delete();
    	return redirect('/urea2b')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $urea2b = \App\urea2b::find($id);
        return view('urea2b.detail-urea',['urea2b'=>$urea2b]);
    }
}
