<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomutilitas4;

class rekomutilitas4controller extends Controller
{
    public function index()
    {
    	$rekomutilitas4 = rekomutilitas4::oldest()->get();
        return view('rekomutilitas4.index', compact('rekomutilitas4'));
    }

    public function create()
    {
        return view('rekomutilitas4.create');
    }

    public function store(Request $request)
    {
    $rekomutilitas4 = rekomutilitas4::create([
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
            $rekomutilitas4->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas4->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas4->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas4->save();
        }
        return redirect('/rekomutilitas4')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomutilitas4 = \App\rekomutilitas4::find($id);
    	return view('rekomutilitas4.edit',['rekomutilitas4'=>$rekomutilitas4]);
    }

    public function update(Request $request,$id)
    {
    	$rekomutilitas4 = \App\rekomutilitas4::find($id);
    	$rekomutilitas4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomutilitas4->file = $request->file('file')->getClientOriginalName();
            $rekomutilitas4->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomutilitas4->file2 = $request->file('file2')->getClientOriginalName();
            $rekomutilitas4->save();
        }
    	return redirect('/rekomutilitas4')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomutilitas4 = \App\rekomutilitas4::find($id);
    	$rekomutilitas4->delete();
    	return redirect('/rekomutilitas4')->with('sukses','Data Berhasil Dihapus');
    }
}
