<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomurea3;

class rekomurea3controller extends Controller
{
    public function index()
    {
    	$rekomurea3 = rekomurea3::oldest()->get();
        return view('rekomurea3.index', compact('rekomurea3'));
    }

    public function create()
    {
        return view('rekomurea3.create');
    }

    public function store(Request $request)
    {
    $rekomurea3 = rekomurea3::create([
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
            $rekomurea3->file = $request->file('file')->getClientOriginalName();
            $rekomurea3->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomurea3->file2 = $request->file('file2')->getClientOriginalName();
            $rekomurea3->save();
        }
        return redirect('/rekomurea3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomurea3 = \App\rekomurea3::find($id);
    	return view('rekomurea3.edit',['rekomurea3'=>$rekomurea3]);
    }

    public function update(Request $request,$id)
    {
    	$rekomurea3 = \App\rekomurea3::find($id);
    	$rekomurea3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomurea3->file = $request->file('file')->getClientOriginalName();
            $rekomurea3->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomurea3->file2 = $request->file('file2')->getClientOriginalName();
            $rekomurea3->save();
        }
    	return redirect('/rekomurea3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomurea3 = \App\rekomurea3::find($id);
    	$rekomurea3->delete();
    	return redirect('/rekomurea3')->with('sukses','Data Berhasil Dihapus');
    }
}
