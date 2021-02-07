<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\urea3;

class urea3controller extends Controller
{
    public function index()
    {
    	$urea3 = urea3::oldest()->get();
        return view('urea3.index', compact('urea3'));
    }

    public function create()
    {
        return view('urea3.create');
    }

    public function store(Request $request)
    {
    $urea3 = urea3::create([
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
            $urea3->file = $request->file('file')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea3->file2 = $request->file('file2')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea3->file3 = $request->file('file3')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea3->file4 = $request->file('file4')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea3->file5 = $request->file('file5')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea3->file6 = $request->file('file6')->getClientOriginalName();
            $urea3->save();
        }
        return redirect('/urea3')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$urea3 = \App\urea3::find($id);
    	return view('urea3.edit',['urea3'=>$urea3]);
    }

    public function update(Request $request,$id)
    {
    	$urea3 = \App\urea3::find($id);
    	$urea3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $urea3->file = $request->file('file')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $urea3->file2 = $request->file('file2')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $urea3->file3 = $request->file('file3')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $urea3->file4 = $request->file('file4')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $urea3->file5 = $request->file('file5')->getClientOriginalName();
            $urea3->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $urea3->file6 = $request->file('file6')->getClientOriginalName();
            $urea3->save();
        }
    	return redirect('/urea3')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$urea3 = \App\urea3::find($id);
    	$urea3->delete();
    	return redirect('/urea3')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $urea3 = \App\urea3::find($id);
        return view('urea3.detail-urea',['urea3'=>$urea3]);
    }
}
