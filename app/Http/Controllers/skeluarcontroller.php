<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\skeluar;
use App\Exports\skeluarExport;
use Maatwebsite\Excel\Facades\Excel;

class skeluarcontroller extends Controller
{
    public function index()
    {
        $skeluar = skeluar::oldest()->get();
        return view('skeluar.index', compact('skeluar'));
    }
    public function create()
    {
        return view('skeluar.create');
    }

    public function store(Request $request)
    {
    $skeluar = skeluar::create([
        'no_surat'     => $request->input('no_surat'),
        'jenis_surat'      => $request->input('jenis_surat'),
        'tujuan_surat'   => $request->input('tujuan_surat'),
        'tembusan_surat'     => $request->input('tembusan_surat'),
        'perihal'     => $request->input('perihal'),
        'tanggal_keluar'     => $request->input('tanggal_keluar'),
        'sifat_surat'     => $request->input('sifat_surat'),
        'penyelesaian_disposisi'     => $request->input('penyelesaian_disposisi'),
        'no_agenda'     => $request->input('no_agenda')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $skeluar->file = $request->file('file')->getClientOriginalName();
            $skeluar->save();
        }
        return redirect('/skeluar')->with('sukses','Report Berhasil Diinput');
    }

     public function edit($id)
    {
    	$skeluar = \App\skeluar::find($id);
    	return view('skeluar.edit',['skeluar'=>$skeluar]);
    }
    public function update(Request $request,$id)
    {
    	$skeluar = \App\skeluar::find($id);
    	$skeluar -> update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $skeluar->file = $request->file('file')->getClientOriginalName();
            $skeluar->save();
        }
    	return redirect('/skeluar')->with('sukses','Surat Keluar Berhasil Diupdate');
    }
     public function delete($id)
    {
    	$skeluar = \App\skeluar::find($id);
    	$skeluar -> delete();
    	return redirect('/skeluar')->with('sukses','Surat Keluar Berhasil Dihapus');
    }
     public function export()
    {
        return Excel::download(new skeluarExport, 'skeluar.xlsx');
    }
}
