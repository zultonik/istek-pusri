<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\insreport;
use App\Exports\insreportExport;
use Maatwebsite\Excel\Facades\Excel;

class insreportcontroller extends Controller
{
    public function index()
    {
    	$insreport = insreport::oldest()->get();
        return view('insreport.index', compact('insreport'));
    }

    public function create()
    {
    	return view('insreport.create');
    }

    public function store(Request $request)
    {
        $insreport = insreport::create([
            'plant_unit'     => $request->input('plant_unit'),
            'inspection_report'      => $request->input('inspection_report'),
            'create_date'   => $request->input('create_date'),
            'document_title'     => $request->input('document_title'),
            'repair_resume'     => $request->input('repair_resume')
        ]);
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $insreport->file = $request->file('file')->getClientOriginalName();
            $insreport->save();
        }
        return redirect('/insreport')->with('sukses','Report Berhasil Diinput');

    }

    public function edit($id)
    {
    	$insreport = \App\insreport::find($id);
    	return view('insreport.edit',['insreport'=>$insreport]);
    }

    public function update(Request $request,$id)
    {
    	$insreport = \App\insreport::find($id);
    	$insreport->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $insreport->file = $request->file('file')->getClientOriginalName();
            $insreport->save();
        }
    	return redirect('/insreport')->with('sukses','Report Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$insreport = \App\insreport::find($id);
    	$insreport->delete();
    	return redirect ('/insreport')->with('sukses','Report Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new insreportExport, 'inspection report.xlsx');
    }
}
