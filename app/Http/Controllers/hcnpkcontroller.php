<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcnpk;
use App\kesimpulan;

class hcnpkcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcnpk::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcnpk = hcnpk::oldest()->get();
        return view('hcnpk.index', compact('hcnpk','hasil'));

    }

    public function create()
    {
        return view('hcnpk.create');
    }

    public function store(Request $request)
    {
    $hcnpk = hcnpk::create([
        'date'     => $request->input('date'),
        'no_alat'      => $request->input('no_alat'),
        'nama_alat'   => $request->input('nama_alat'),
        'hasil_pemeriksaan'     => $request->input('hasil_pemeriksaan'),
        'metode_perbaikan'     => $request->input('metode_perbaikan'),
        'saran'     => $request->input('saran'),
        'kesimpulan'     => $request->input('kesimpulan')
    ]);
    if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcnpk->file = $request->file('file')->getClientOriginalName();
            $hcnpk->save();
        }
        return redirect('/hcnpk')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcnpk = \App\hcnpk::find($id);
    	return view('hcnpk.edit',['hcnpk'=>$hcnpk]);
    }

    public function update(Request $request,$id)
    {
    	$hcnpk = \App\hcnpk::find($id);
    	$hcnpk->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcnpk->file = $request->file('file')->getClientOriginalName();
            $hcnpk->save();
        }
    	return redirect('/hcnpk')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcnpk = \App\hcnpk::find($id);
    	$hcnpk->delete();
    	return redirect('/hcnpk')->with('sukses','Data Berhasil Dihapus');
    }
}
