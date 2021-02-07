<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomammonia3;

class rekomammonia3controller extends Controller
{
    public function index()
    {
    	$rekomammonia3 = rekomammonia3::oldest()->get();
        return view('rekomammonia3.index', compact('rekomammonia3'));
    }

    public function create()
    {
        return view('rekomammonia3.create');
    }

    public function store(Request $request)
    {
    $rekomammonia3 = rekomammonia3::create([
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
            $rekomammonia3->file = $request->file('file')->getClientOriginalName();
            $rekomammonia3->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia3->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia3->save();
        }
        return redirect('/rekomammonia3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomammonia3 = \App\rekomammonia3::find($id);
    	return view('rekomammonia3.edit',['rekomammonia3'=>$rekomammonia3]);
    }

    public function update(Request $request,$id)
    {
    	$rekomammonia3 = \App\rekomammonia3::find($id);
    	$rekomammonia3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomammonia3->file = $request->file('file')->getClientOriginalName();
            $rekomammonia3->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia3->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia3->save();
        }
    	return redirect('/rekomammonia3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomammonia3 = \App\rekomammonia3::find($id);
    	$rekomammonia3->delete();
    	return redirect('/rekomammonia3')->with('sukses','Data Berhasil Dihapus');
    }
}
