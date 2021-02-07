<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomurea2b;

class rekomurea2bcontroller extends Controller
{
    public function index()
    {
    	$rekomurea2b = rekomurea2b::oldest()->get();
        return view('rekomurea2b.index', compact('rekomurea2b'));
    }

    public function create()
    {
        return view('rekomurea2b.create');
    }

    public function store(Request $request)
    {
    $rekomurea2b = rekomurea2b::create([
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
            $rekomurea2b->file = $request->file('file')->getClientOriginalName();
            $rekomurea2b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomurea2b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomurea2b->save();
        }
        return redirect('/rekomurea2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomurea2b = \App\rekomurea2b::find($id);
    	return view('rekomurea2b.edit',['rekomurea2b'=>$rekomurea2b]);
    }

    public function update(Request $request,$id)
    {
    	$rekomurea2b = \App\rekomurea2b::find($id);
    	$rekomurea2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomurea2b->file = $request->file('file')->getClientOriginalName();
            $rekomurea2b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomurea2b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomurea2b->save();
        }
    	return redirect('/rekomurea2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomurea2b = \App\rekomurea2b::find($id);
    	$rekomurea2b->delete();
    	return redirect('/rekomurea2b')->with('sukses','Data Berhasil Dihapus');
    }
}
