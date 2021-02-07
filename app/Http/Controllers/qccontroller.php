<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\qc;
use App\pie;
use App\ltp;
use App\Exports\qcExport;
use Maatwebsite\Excel\Facades\Excel;

class qccontroller extends Controller
{
    public function index()
    {
        // $data = [['name'=>'Diterima','y'=>60],['name'=>'Ditolak','y'=>60]];
        $hasil = [];

        $pie = pie::get();
        foreach ($pie as $key => $pie) {
            $id_pie = $pie->id;
            $kategori = $pie->kategori;
            $total = qc::where('te_to',$kategori)->count();
            $colors = ["#008000","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

        $hasil2 = [];

        $ltp = ltp::get();
        foreach ($ltp as $key => $ltp) {
            $id_ltp = $ltp->id;
            $kategori = $ltp->kategori;
            $total = qc::where('t',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil2, $a);
        }
    	$qc = qc::oldest()->get();
        return view('qc.index', compact('qc','hasil','hasil2'));

    }

    public function create()
    {
        return view('qc.create');
    }

    public function store(Request $request)
    {
    $qc = qc::create([
        'no_gr'     => $request->input('no_gr'),
        'no_qc'      => $request->input('no_qc'),
        'po'   => $request->input('po'),
        'pr'     => $request->input('pr'),
        'matl_code'     => $request->input('matl_code'),
        'nama_barang'     => $request->input('nama_barang'),
        'item'     => $request->input('item'),
        'vendor'     => $request->input('vendor'),
        'p'     => $request->input('p'),
        'm'     => $request->input('m'),
        'g'     => $request->input('g'),
        't'     => $request->input('t'),
        'penyerahan'     => $request->input('penyerahan'),
        'te_to'     => $request->input('te_to')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $qc->file = $request->file('file')->getClientOriginalName();
            $qc->save();
        }
        return redirect('/qc')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
    	$qc = \App\qc::find($id);
    	return view('qc.edit',['qc'=>$qc]);
    }

    public function update(Request $request,$id)
    {
    	$qc = \App\qc::find($id);
    	$qc->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $qc->file = $request->file('file')->getClientOriginalName();
            $qc->save();
        }
    	return redirect('/qc')->with('sukses','Warehouse Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$qc = \App\qc::find($id);
    	$qc->delete();
    	return redirect('/qc')->with('sukses','Warehouse Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new qcExport, 'qc.xlsx');
    }
}
