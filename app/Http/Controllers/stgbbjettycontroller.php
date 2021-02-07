<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\stgbbjetty;

class stgbbjettycontroller extends Controller
{
    public function index()
    {
    	$stgbbjetty = stgbbjetty::oldest()->get();
        return view('stgbbjetty.index', compact('stgbbjetty'));
    }

    public function create()
    {
        return view('stgbbjetty.create');
    }

    public function store(Request $request)
    {
    $stgbbjetty = stgbbjetty::create([
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
            $stgbbjetty->file = $request->file('file')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $stgbbjetty->file2 = $request->file('file2')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $stgbbjetty->file3 = $request->file('file3')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $stgbbjetty->file4 = $request->file('file4')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $stgbbjetty->file5 = $request->file('file5')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $stgbbjetty->file6 = $request->file('file6')->getClientOriginalName();
            $stgbbjetty->save();
        }
        return redirect('/stgbbjetty')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$stgbbjetty = \App\stgbbjetty::find($id);
    	return view('stgbbjetty.edit',['stgbbjetty'=>$stgbbjetty]);
    }

    public function update(Request $request,$id)
    {
    	$stgbbjetty = \App\stgbbjetty::find($id);
    	$stgbbjetty->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $stgbbjetty->file = $request->file('file')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $stgbbjetty->file2 = $request->file('file2')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file3')){
            $request->file('file3')->move('files/',$request->file('file3')->getClientOriginalName());
            $stgbbjetty->file3 = $request->file('file3')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file4')){
            $request->file('file4')->move('files/',$request->file('file4')->getClientOriginalName());
            $stgbbjetty->file4 = $request->file('file4')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file5')){
            $request->file('file5')->move('files/',$request->file('file5')->getClientOriginalName());
            $stgbbjetty->file5 = $request->file('file5')->getClientOriginalName();
            $stgbbjetty->save();
        }
        if ($request->Hasfile('file6')){
            $request->file('file6')->move('files/',$request->file('file6')->getClientOriginalName());
            $stgbbjetty->file6 = $request->file('file6')->getClientOriginalName();
            $stgbbjetty->save();
        }
    	return redirect('/stgbbjetty')->with('sukses','Plant Unit Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$stgbbjetty = \App\stgbbjetty::find($id);
    	$stgbbjetty->delete();
    	return redirect('/stgbbjetty')->with('sukses','Plant Unit Berhasil Dihapus');
    }

    public function detail($id)
    {
        $stgbbjetty = \App\stgbbjetty::find($id);
        return view('stgbbjetty.detail-stgbbjetty',['stgbbjetty'=>$stgbbjetty]);
    }
}
