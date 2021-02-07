<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\juklak;
use App\Exports\juklakExport;
use Maatwebsite\Excel\Facades\Excel;

class juklakcontroller extends Controller
{
    public function index()
    {
    	$juklak = juklak::oldest()->get();
        return view('juklak.index', compact('juklak'));
    }

    public function create()
    {
        return view('juklak.create');
    }

    public function store(Request $request)
    {
    $juklak = juklak::create([
        'no_juklak'     => $request->input('no_juklak'),
        'subject'      => $request->input('subject'),
        'create_date'   => $request->input('create_date'),
        'resume_short'     => $request->input('resume_short')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $juklak->file = $request->file('file')->getClientOriginalName();
            $juklak->save();
        }
        return redirect('/juklak')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$juklak = \App\juklak::find($id);
    	return view('juklak.edit',['juklak'=>$juklak]);
    }

    public function update(Request $request,$id)
    {
    	$juklak = \App\juklak::find($id);
    	$juklak->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $juklak->file = $request->file('file')->getClientOriginalName();
            $juklak->save();
        }
    	return redirect('/juklak')->with('sukses','Petunjuk Pelaksanaan Berhasil Diupdate');
    }

    public function delete($id)
    {
        $juklak = \App\juklak::find($id);
        $juklak->delete();
        return redirect('/juklak')->with('sukses','Petunjuk Pelaksanaan Berhasil Dihapus');
    }
     public function export()
    {
        return Excel::download(new juklakExport, 'juklak.xlsx');
    }
}
