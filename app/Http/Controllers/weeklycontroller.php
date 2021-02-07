<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\weekly;
use App\Exports\weeklyExport;
use Maatwebsite\Excel\Facades\Excel;

class weeklycontroller extends Controller
{
    public function index()
    {
        $weekly = weekly::oldest()->get();
    	return view('weekly.index', compact('weekly'));
    }

    public function create()
    {
    	return view('weekly.create');
    }

    public function store(Request $request)
    {
        $weekly = weekly::create([
            'tahun'     => $request->input('tahun'),
            'bulan'      => $request->input('bulan'),
            'minggu'   => $request->input('minggu')
        ]);
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $weekly->file = $request->file('file')->getClientOriginalName();
            $weekly->save();
        }
        return redirect('/weekly')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$weekly = \App\weekly::find($id);
    	return view('weekly.edit',['weekly'=>$weekly]);
    }

    public function update(Request $request,$id)
    {
    	$weekly = \App\weekly::find($id);
    	$weekly->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $weekly->file = $request->file('file')->getClientOriginalName();
            $weekly->save();
        }
    	return redirect('/weekly')->with('sukses','Report Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$weekly = \App\weekly::find($id);
    	$weekly->delete();
    	return redirect('/weekly')->with('sukses','Report Berhasil Dihapus');
    }

    public function export()
    {
        return Excel::download(new weeklyExport, 'weekly.xlsx');
    }
}
