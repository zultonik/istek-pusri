<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomutilitas2b;

class rekomutilitas2bcontroller extends Controller
{
    public function index()
    {
    	$rekomutilitas2b = rekomutilitas2b::oldest()->get();
        return view('rekomutilitas2b.index', compact('rekomutilitas2b'));
    }

    public function create()
    {
        return view('rekomutilitas2b.create');
    }

    public function store(Request $request)
    {
    $rekomutilitas2b = rekomutilitas2b::create([
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
            $rekomutilitas2b->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas2b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas2b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas2b->save();
        }
        return redirect('/rekomutilitas2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomutilitas2b = \App\rekomutilitas2b::find($id);
    	return view('rekomutilitas2b.edit',['rekomutilitas2b'=>$rekomutilitas2b]);
    }

    public function update(Request $request,$id)
    {
    	$rekomutilitas2b = \App\rekomutilitas2b::find($id);
    	$rekomutilitas2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomutilitas2b->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas2b->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas2b->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas2b->save();
        }
    	return redirect('/rekomutilitas2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomutilitas2b = \App\rekomutilitas2b::find($id);
    	$rekomutilitas2b->delete();
    	return redirect('/rekomutilitas2b')->with('sukses','Data Berhasil Dihapus');
    }
}
