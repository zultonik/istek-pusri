<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\npk;

class npkcontroller extends Controller
{
    public function index()
    {
    	$npk = npk::oldest()->get();
        return view('npk.index', compact('npk'));
    }

    public function create()
    {
        return view('npk.create');
    }

    public function store(Request $request)
    {
    $npk = npk::create([
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
            $npk->file = $request->file('file')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $npk->file2 = $request->file('file2')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $npk->file3 = $request->file('file3')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $npk->file4 = $request->file('file4')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $npk->file5 = $request->file('file5')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $npk->file6 = $request->file('file6')->getClientOriginalName();
            $npk->save();
        }
        return redirect('/npk')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$npk = \App\npk::find($id);
    	return view('npk.edit',['npk'=>$npk]);
    }

    public function update(Request $request,$id)
    {
    	$npk = \App\npk::find($id);
    	$npk->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $npk->file = $request->file('file')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $npk->file2 = $request->file('file2')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $npk->file3 = $request->file('file3')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $npk->file4 = $request->file('file4')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $npk->file5 = $request->file('file5')->getClientOriginalName();
            $npk->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $npk->file6 = $request->file('file6')->getClientOriginalName();
            $npk->save();
        }
    	return redirect('/npk')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$npk = \App\npk::find($id);
    	$npk->delete();
    	return redirect('/npk')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $npk = \App\npk::find($id);
        return view('npk.detail-npk',['npk'=>$npk]);
    }
}
