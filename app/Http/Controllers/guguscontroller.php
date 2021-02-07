<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\gugus;
use App\Exports\gugusExport;
use Maatwebsite\Excel\Facades\Excel;

class guguscontroller extends Controller
{
    public function index()
    {
    	$gugus = gugus::oldest()->get();
        return view('gugus.index', compact('gugus'));
    }

   public function create()
    {
        return view('gugus.create');
    }

    public function store(Request $request)
    {
    $gugus = gugus::create([
        'innovation_type'     => $request->input('innovation_type'),
        'team_name'      => $request->input('team_name'),
        'team_structure'   => $request->input('team_structure'),
        'year'     => $request->input('year'),
        'innovation_title'     => $request->input('innovation_title'),
        'abstraction'     => $request->input('abstraction'),
        'achievement'      => $request->input('achievement')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $gugus->file = $request->file('file')->getClientOriginalName();
            $gugus->save();
        }
        return redirect('/gugus')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$gugus = \App\gugus::find($id);
    	return view('gugus.edit',['gugus'=>$gugus]);
    }

    public function update(Request $request,$id)
    {
        $gugus = \App\gugus::find($id);
        $gugus->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $gugus->file = $request->file('file')->getClientOriginalName();
            $gugus->save();
        }
        return redirect('/gugus')->with('sukses','Gugus Inovasi Berhasil Diupdate');
    }

    public function delete($id)
    {
        $gugus = \App\gugus::find($id);
        $gugus->delete();
        return redirect('/gugus')->with('sukses','Gugus Inovasi Berhasil Dihapus');
    } 
    public function export()
    {
        return Excel::download(new gugusExport, 'gugus.xlsx');
    }
    
}
