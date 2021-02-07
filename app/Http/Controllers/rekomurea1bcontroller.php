<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomurea1b;

class rekomurea1bcontroller extends Controller
{
    public function index()
    {
    	$rekomurea1b = rekomurea1b::oldest()->get();
        return view('rekomurea1b.index', compact('rekomurea1b'));
    }

    public function create()
    {
        return view('rekomurea1b.create');
    }

    public function store(Request $request)
    {
    $rekomurea1b = rekomurea1b::create([
        'date'     => $request->input('date'),
        'no_alat'      => $request->input('no_alat'),
        'nama_alat'   => $request->input('nama_alat'),
        'area'     => $request->input('area'),
        'no_rekom'     => $request->input('no_rekom'),
        'no_notif'     => $request->input('no_notif'),
        'act'     => $request->input('act')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomurea1b->file = $request->file('file')->getClientOriginalName();
            $rekomurea1b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomurea1b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomurea1b->save();
        }
        return redirect('/rekomurea1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomurea1b = \App\rekomurea1b::find($id);
    	return view('rekomurea1b.edit',['rekomurea1b'=>$rekomurea1b]);
    }

    public function update(Request $request,$id)
    {
    	$rekomurea1b = \App\rekomurea1b::find($id);
    	$rekomurea1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomurea1b->file = $request->file('file')->getClientOriginalName();
            $rekomurea1b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomurea1b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomurea1b->save();
        }
    	return redirect('/rekomurea1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomurea1b = \App\rekomurea1b::find($id);
    	$rekomurea1b->delete();
    	return redirect('/rekomurea1b')->with('sukses','Data Berhasil Dihapus');
    }
}
