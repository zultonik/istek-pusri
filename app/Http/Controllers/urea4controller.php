<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\urea4;

class urea4controller extends Controller
{
    public function index()
    {
    	$urea4 = urea4::oldest()->get();
        return view('urea4.index', compact('urea4'));
    }

    public function create()
    {
        return view('urea4.create');
    }

    public function store(Request $request)
    {
    $urea4 = urea4::create([
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
            $urea4->file = $request->file('file')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea4->file2 = $request->file('file2')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea4->file3 = $request->file('file3')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea4->file4 = $request->file('file4')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea4->file5 = $request->file('file5')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea4->file6 = $request->file('file6')->getClientOriginalName();
            $urea4->save();
        }
        return redirect('/urea4')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$urea4 = \App\urea4::find($id);
    	return view('urea4.edit',['urea4'=>$urea4]);
    }

    public function update(Request $request,$id)
    {
    	$urea4 = \App\urea4::find($id);
    	$urea4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $urea4->file = $request->file('file')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea4->file2 = $request->file('file2')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea4->file3 = $request->file('file3')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea4->file4 = $request->file('file4')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea4->file5 = $request->file('file5')->getClientOriginalName();
            $urea4->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea4->file6 = $request->file('file6')->getClientOriginalName();
            $urea4->save();
        }
    	return redirect('/urea4')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$urea4 = \App\urea4::find($id);
    	$urea4->delete();
    	return redirect('/urea4')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $urea4 = \App\urea4::find($id);
        return view('urea4.detail-urea',['urea4'=>$urea4]);
    }
}
