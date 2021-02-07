<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomammonia2b;

class rekomammonia2bcontroller extends Controller
{
    public function index()
    {
    	$rekomammonia2b = rekomammonia2b::oldest()->get();
        return view('rekomammonia2b.index', compact('rekomammonia2b'));
    }

    public function create()
    {
        return view('rekomammonia2b.create');
    }

    public function store(Request $request)
    {
    $rekomammonia2b = rekomammonia2b::create([
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
            $rekomammonia2b->file = $request->file('file')->getClientOriginalName();
            $rekomammonia2b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia2b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia2b->save();
        }
        return redirect('/rekomammonia2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomammonia2b = \App\rekomammonia2b::find($id);
    	return view('rekomammonia2b.edit',['rekomammonia2b'=>$rekomammonia2b]);
    }

    public function update(Request $request,$id)
    {
    	$rekomammonia2b = \App\rekomammonia2b::find($id);
    	$rekomammonia2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomammonia2b->file = $request->file('file')->getClientOriginalName();
            $rekomammonia2b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia2b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia2b->save();
        }
    	return redirect('/rekomammonia2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomammonia2b = \App\rekomammonia2b::find($id);
    	$rekomammonia2b->delete();
    	return redirect('/rekomammonia2b')->with('sukses','Data Berhasil Dihapus');
    }
}
