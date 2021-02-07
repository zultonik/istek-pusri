<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ammonia4;

class ammonia4controller extends Controller
{
    public function index()
    {
    	$ammonia4 = ammonia4::oldest()->get();
        return view('ammonia4.index', compact('ammonia4'));
    }

    public function create()
    {
        return view('ammonia4.create');
    }

    public function store(Request $request)
    {
    $ammonia4 = ammonia4::create([
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
            $ammonia4->file = $request->file('file')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia4->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia4->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia4->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia4->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia4->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia4->save();
        }
        return redirect('/ammonia4')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$ammonia4 = \App\ammonia4::find($id);
    	return view('ammonia4.edit',['ammonia4'=>$ammonia4]);
    }

    public function update(Request $request,$id)
    {
    	$ammonia4 = \App\ammonia4::find($id);
    	$ammonia4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $ammonia4->file = $request->file('file')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $ammonia4->file2 = $request->file('file2')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $ammonia4->file3 = $request->file('file3')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $ammonia4->file4 = $request->file('file4')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $ammonia4->file5 = $request->file('file5')->getClientOriginalName();
            $ammonia4->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $ammonia4->file6 = $request->file('file6')->getClientOriginalName();
            $ammonia4->save();
        }
    	return redirect('/ammonia4')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$ammonia4 = \App\ammonia4::find($id);
    	$ammonia4->delete();
    	return redirect('/ammonia4')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $ammonia4 = \App\ammonia4::find($id);
        return view('ammonia4.detail-ammonia',['ammonia4'=>$ammonia4]);
    }
}
