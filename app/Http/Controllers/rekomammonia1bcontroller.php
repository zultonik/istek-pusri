<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomammonia1b;

class rekomammonia1bcontroller extends Controller
{
    public function index()
    {
    	$rekomammonia1b = rekomammonia1b::oldest()->get();
        return view('rekomammonia1b.index', compact('rekomammonia1b'));
    }

    public function create()
    {
        return view('rekomammonia1b.create');
    }

    public function store(Request $request)
    {
    $rekomammonia1b = rekomammonia1b::create([
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
            $rekomammonia1b->file = $request->file('file')->getClientOriginalName();
            $rekomammonia1b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia1b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia1b->save();
        }
        return redirect('/rekomammonia1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomammonia1b = \App\rekomammonia1b::find($id);
    	return view('rekomammonia1b.edit',['rekomammonia1b'=>$rekomammonia1b]);
    }

    public function update(Request $request,$id)
    {
    	$rekomammonia1b = \App\rekomammonia1b::find($id);
    	$rekomammonia1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomammonia1b->file = $request->file('file')->getClientOriginalName();
            $rekomammonia1b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia1b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia1b->save();
        }
    	return redirect('/rekomammonia1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomammonia1b = \App\rekomammonia1b::find($id);
    	$rekomammonia1b->delete();
    	return redirect('/rekomammonia1b')->with('sukses','Data Berhasil Dihapus');
    }
}
