<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\smasukExport;
use Maatwebsite\Excel\Facades\Excel;

use App\smasuk;

class smasukcontroller extends Controller
{
    public function index()
    {
    	$smasuk = smasuk::oldest()->get();
        return view('smasuk.index', compact('smasuk'));
    }

    public function create()
    {
        return view('smasuk.create');
    }

    public function store(Request $request)
    {
    $smasuk = smasuk::create([
        'no_surat'     => $request->input('no_surat'),
        'jenis_surat'      => $request->input('jenis_surat'),
        'asal_surat'   => $request->input('asal_surat'),
        'tanggal_surat'     => $request->input('tanggal_surat'),
        'perihal'     => $request->input('perihal'),
        'tanggal_terima'     => $request->input('tanggal_terima'),
        'sifat_surat'     => $request->input('sifat_surat'),
        'tujuan'     => $request->input('tujuan'),
        'no_agenda'     => $request->input('no_agenda')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $smasuk->file = $request->file('file')->getClientOriginalName();
            $smasuk->save();
        }
        return redirect('/smasuk')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$smasuk = \App\smasuk::find($id);
    	return view('smasuk.edit',['smasuk'=>$smasuk]);
    }

    public function update(Request $request,$id)
    {
    	$smasuk = \App\smasuk::find($id);
    	$smasuk -> update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $smasuk->file = $request->file('file')->getClientOriginalName();
            $smasuk->save();
        }
    	return redirect('/smasuk')->with('sukses','Surat Masuk Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$smasuk = \App\smasuk::find($id);
    	$smasuk -> delete();
    	return redirect('/smasuk')->with('sukses','Surat Masuk Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new smasukExport, 'smasuk.xlsx');
    }
}
