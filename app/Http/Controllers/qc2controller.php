<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\qc2;
use App\pie;
use App\ltp;
use App\Exports\qc2Export;
use Maatwebsite\Excel\Facades\Excel;

class qc2controller extends Controller
{
    public function index()
    {
    	// $data = [['name'=>'Diterima','y'=>60],['name'=>'Ditolak','y'=>60]];
        $hasil = [];

        $pie = pie::get();
        foreach ($pie as $key => $pie) {
            $id_pie = $pie->id;
            $kategori = $pie->kategori;
            $total = qc2::where('te_to',$kategori)->count();
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
            $total = qc2::where('t',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil2, $a);
        }
        $qc2 = qc2::oldest()->get();
        return view('qc2.index', compact('qc2','hasil','hasil2'));
    }

    public function create()
    {
        return view('qc2.create');
    }

    public function store(Request $request)
    {
    $qc2 = qc2::create([
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
            $qc2->file = $request->file('file')->getClientOriginalName();
            $qc2->save();
        }
        return redirect('/qc2')->with('sukses','Report Berhasil Diinput');
    }

    public function edit($id)
    {
        $qc2 = \App\qc2::find($id);
        return view('qc.edit2',['qc2'=>$qc2]);
        
    }

    public function update(Request $request,$id)
    {
        $qc2 = \App\qc2::find($id);
        $qc2->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $qc2->file = $request->file('file')->getClientOriginalName();
            $qc2->save();
        }
        return redirect('/qc2')->with('sukses','Direct Charge Berhasil Diupdate');
    }

    public function delete($id)
    {
        $qc2 = \App\qc2::find($id);
        $qc2->delete();
        return redirect('/qc2')->with('sukses','Direct Charge Berhasil Dihapus');
    }
    public function export()
    {
        return Excel::download(new qc2Export, 'qc2.xlsx');
    }
}
