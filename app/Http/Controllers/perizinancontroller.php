<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\perizinan;
use App\Exports\perizinanExport;
use Maatwebsite\Excel\Facades\Excel;


class perizinancontroller extends Controller
{
    public function index()
    {
        $perizinan = perizinan::oldest()->get();
        return view('perizinan.index', compact('perizinan'));
    }

    public function create()
    {
        return view('perizinan.create');
    }

    public function store(Request $request)
    {
    $perizinan = perizinan::create([
        'plant_unit'     => $request->input('plant_unit'),
        'last_date'      => $request->input('last_date'),
        'date_test'   => $request->input('date_test'),
        'certification_institution'     => $request->input('certification_institution'),
        'certification_number'     => $request->input('certification_number')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $perizinan->file = $request->file('file')->getClientOriginalName();
            $perizinan->save();
        }
        return redirect('/perizinan')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$perizinan = \App\perizinan::find($id);
    	return view('perizinan.edit',['perizinan'=>$perizinan]);
    }

    public function update(Request $request,$id)
    {
    	$perizinan = \App\perizinan::find($id);
    	$perizinan->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $perizinan->file = $request->file('file')->getClientOriginalName();
            $perizinan->save();
        }
    	return redirect('/perizinan')->with ('sukses','Perizinan Peralatan Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$perizinan = \App\perizinan::find($id);
    	$perizinan->delete();
    	return redirect('/perizinan')->with ('sukses','Perizinan Peralatan Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new perizinanExport, 'perizinan.xlsx');
    }
}



