<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomutilitas3;

class rekomutilitas3controller extends Controller
{
    public function index()
    {
    	$rekomutilitas3 = rekomutilitas3::oldest()->get();
        return view('rekomutilitas3.index', compact('rekomutilitas3'));
    }

    public function create()
    {
        return view('rekomutilitas3.create');
    }

    public function store(Request $request)
    {
    $rekomutilitas3 = rekomutilitas3::create([
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
            $rekomutilitas3->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas3->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas3->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas3->save();
        }
        return redirect('/rekomutilitas3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomutilitas3 = \App\rekomutilitas3::find($id);
    	return view('rekomutilitas3.edit',['rekomutilitas3'=>$rekomutilitas3]);
    }

    public function update(Request $request,$id)
    {
    	$rekomutilitas3 = \App\rekomutilitas3::find($id);
    	$rekomutilitas3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomutilitas3->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas3->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas3->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas3->save();
        }
    	return redirect('/rekomutilitas3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomutilitas3 = \App\rekomutilitas3::find($id);
    	$rekomutilitas3->delete();
    	return redirect('/rekomutilitas3')->with('sukses','Data Berhasil Dihapus');
    }
}
