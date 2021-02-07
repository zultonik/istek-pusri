<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ammonia3;

class ammonia3controller extends Controller
{
    public function index()
    {
    	$ammonia3 = ammonia3::oldest()->get();
        return view('ammonia3.index', compact('ammonia3'));
    }

    public function create()
    {
        return view('ammonia3.create');
    }

    public function store(Request $request)
    {
    $ammonia3 = ammonia3::create([
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
            $ammonia3->file = $request->file('file')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia3->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia3->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia3->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia3->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia3->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia3->save();
        }
        return redirect('/ammonia3')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$ammonia3 = \App\ammonia3::find($id);
    	return view('ammonia3.edit',['ammonia3'=>$ammonia3]);
    }

    public function update(Request $request,$id)
    {
    	$ammonia3 = \App\ammonia3::find($id);
    	$ammonia3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $ammonia3->file = $request->file('file')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia3->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia3->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia3->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia3->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia3->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia3->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia3->save();
        }
    	return redirect('/ammonia3')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$ammonia3 = \App\ammonia3::find($id);
    	$ammonia3->delete();
    	return redirect('/ammonia3')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $ammonia3 = \App\ammonia3::find($id);
        return view('ammonia3.detail-ammonia',['ammonia3'=>$ammonia3]);
    }
}
