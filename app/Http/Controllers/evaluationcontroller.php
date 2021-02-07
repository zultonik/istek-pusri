<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\evaluation;
use App\Exports\evaluationExport;
use Maatwebsite\Excel\Facades\Excel;

class evaluationcontroller extends Controller
{
    public function index()
    {
    	$evaluation = evaluation::oldest()->get();
        return view('evaluation.index', compact('evaluation'));
    }

    public function create()
    {
        return view('evaluation.create');
    }

    public function store(Request $request)
    {
        $evaluation = evaluation::create([
            'plant_unit'     => $request->input('plant_unit'),
            'inspection_report'      => $request->input('inspection_report'),
            'create_date'   => $request->input('create_date'),
            'document_title'     => $request->input('document_title'),
            'repair_resume'     => $request->input('repair_resume')
        ]);
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $evaluation->file = $request->file('file')->getClientOriginalName();
            $evaluation->save();
        }
        return redirect('/evaluation')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$evaluation = \App\evaluation::find($id);
    	return view('evaluation.edit',['evaluation'=>$evaluation]);
    }

    public function update(Request $request,$id)
    {
    	$evaluation = \App\evaluation::find($id);
    	$evaluation->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $evaluation->file = $request->file('file')->getClientOriginalName();
            $evaluation->save();
        }
    	return redirect('/evaluation')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$evaluation = \App\evaluation::find($id);
    	$evaluation->delete();
    	return redirect('/evaluation')->with('sukses','Data Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new evaluationExport, 'evaluation.xlsx');
    }
}
