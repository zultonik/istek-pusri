<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomnpk;

class rekomnpkcontroller extends Controller
{
    public function index()
    {
    	$rekomnpk = rekomnpk::oldest()->get();
        return view('rekomnpk.index', compact('rekomnpk'));
    }

    public function create()
    {
        return view('rekomnpk.create');
    }

    public function store(Request $request)
    {
    $rekomnpk = rekomnpk::create([
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
            $rekomnpk->file = $request->file('file')->getClientOriginalName();
            $rekomnpk->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomnpk->file2 = $request->file('file2')->getClientOriginalName();
            $rekomnpk->save();
        }
        return redirect('/rekomnpk')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomnpk = \App\rekomnpk::find($id);
    	return view('rekomnpk.edit',['rekomnpk'=>$rekomnpk]);
    }

    public function update(Request $request,$id)
    {
    	$rekomnpk = \App\rekomnpk::find($id);
    	$rekomnpk->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomnpk->file = $request->file('file')->getClientOriginalName();
            $rekomnpk->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomnpk->file2 = $request->file('file2')->getClientOriginalName();
            $rekomnpk->save();
        }
    	return redirect('/rekomnpk')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomnpk = \App\rekomnpk::find($id);
    	$rekomnpk->delete();
    	return redirect('/rekomnpk')->with('sukses','Data Berhasil Dihapus');
    }
}
