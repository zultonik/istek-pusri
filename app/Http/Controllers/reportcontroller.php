<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\report;
use App\Exports\reportExport;
use Maatwebsite\Excel\Facades\Excel;

class reportcontroller extends Controller
{
    public function index()
    {
    	$report = report::oldest()->get();
        return view('report.index', compact('report'));
    }

     public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
    $report = report::create([
        'tahun'     => $request->input('tahun'),
        'bulan'      => $request->input('bulan')
        
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $report->file = $request->file('file')->getClientOriginalName();
            $report->save();
        }
        return redirect('/report')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$report = \App\report::find($id);
    	return view('report.edit',['report'=>$report]);
    }

    public function update(Request $request,$id)
    {
    	$report = \App\report::find($id);
    	$report->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $report->file = $request->file('file')->getClientOriginalName();
            $report->save();
        }
    	return redirect('/report')->with('sukses','Report Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$report = \App\report::find($id);
    	$report->delete();
    	return redirect('/report')->with('sukses','Report Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new reportExport, 'report.xlsx');
    }
}
