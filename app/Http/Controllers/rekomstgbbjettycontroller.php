<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekomstgbbjetty;

class rekomstgbbjettycontroller extends Controller
{
    public function index()
    {
    	$rekomstgbbjetty = rekomstgbbjetty::oldest()->get();
        return view('rekomstgbbjetty.index', compact('rekomstgbbjetty'));
    }

    public function create()
    {
        return view('rekomstgbbjetty.create');
    }

    public function store(Request $request)
    {
    $rekomstgbbjetty = rekomstgbbjetty::create([
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
            $rekomstgbbjetty->file = $request->file('file')->getClientOriginalName();
            $rekomstgbbjetty->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomstgbbjetty->file2 = $request->file('file2')->getClientOriginalName();
            $rekomstgbbjetty->save();
        }
        return redirect('/rekomstgbbjetty')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rekomstgbbjetty = \App\rekomstgbbjetty::find($id);
    	return view('rekomstgbbjetty.edit',['rekomstgbbjetty'=>$rekomstgbbjetty]);
    }

    public function update(Request $request,$id)
    {
    	$rekomstgbbjetty = \App\rekomstgbbjetty::find($id);
    	$rekomstgbbjetty->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $rekomstgbbjetty->file = $request->file('file')->getClientOriginalName();
            $rekomstgbbjetty->save();
        }
    if ($request->Hasfile('file2')){
            $request->file('file2')->move('files/',$request->file('file2')->getClientOriginalName());
            $rekomstgbbjetty->file2 = $request->file('file2')->getClientOriginalName();
            $rekomstgbbjetty->save();
        }
    	return redirect('/rekomstgbbjetty')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rekomstgbbjetty = \App\rekomstgbbjetty::find($id);
    	$rekomstgbbjetty->delete();
    	return redirect('/rekomstgbbjetty')->with('sukses','Data Berhasil Dihapus');
    }
}
