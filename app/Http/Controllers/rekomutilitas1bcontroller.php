<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomutilitas1b;

class rekomutilitas1bcontroller extends Controller
{
    public function index()
    {
    	$rekomutilitas1b = rekomutilitas1b::oldest()->get();
        return view('rekomutilitas1b.index', compact('rekomutilitas1b'));
    }

    public function create()
    {
        return view('rekomutilitas1b.create');
    }

    public function store(Request $request)
    {
    $rekomutilitas1b = rekomutilitas1b::create([
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
            $rekomutilitas1b->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas1b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas1b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas1b->save();
        }
        return redirect('/rekomutilitas1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomutilitas1b = \App\rekomutilitas1b::find($id);
    	return view('rekomutilitas1b.edit',['rekomutilitas1b'=>$rekomutilitas1b]);
    }

    public function update(Request $request,$id)
    {
    	$rekomutilitas1b = \App\rekomutilitas1b::find($id);
    	$rekomutilitas1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomutilitas1b->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas1b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas1b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas1b->save();
        }
    	return redirect('/rekomutilitas1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomutilitas1b = \App\rekomutilitas1b::find($id);
    	$rekomutilitas1b->delete();
    	return redirect('/rekomutilitas1b')->with('sukses','Data Berhasil Dihapus');
    }
}
