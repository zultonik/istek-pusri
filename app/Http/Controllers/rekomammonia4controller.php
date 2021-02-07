<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomammonia4;

class rekomammonia4controller extends Controller
{
    public function index()
    {
    	$rekomammonia4 = rekomammonia4::oldest()->get();
        return view('rekomammonia4.index', compact('rekomammonia4'));
    }

    public function create()
    {
        return view('rekomammonia4.create');
    }

    public function store(Request $request)
    {
    $rekomammonia4 = rekomammonia4::create([
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
            $rekomammonia4->file = $request->file('file')->getClientOriginalName();
            $rekomammonia4->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia4->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia4->save();
        }
        return redirect('/rekomammonia4')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomammonia4 = \App\rekomammonia4::find($id);
    	return view('rekomammonia4.edit',['rekomammonia4'=>$rekomammonia4]);
    }

    public function update(Request $request,$id)
    {
    	$rekomammonia4 = \App\rekomammonia4::find($id);
    	$rekomammonia4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomammonia4->file = $request->file('file')->getClientOriginalName();
            $rekomammonia4->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomammonia4->file2 = $request->file('file2')->getClientOriginalName();
            $rekomammonia4->save();
        }
    	return redirect('/rekomammonia4')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomammonia4 = \App\rekomammonia4::find($id);
    	$rekomammonia4->delete();
    	return redirect('/rekomammonia4')->with('sukses','Data Berhasil Dihapus');
    }
}
