<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcammonia2b;
use App\kesimpulan;

class hcammonia2bcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcammonia2b::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcammonia2b = hcammonia2b::oldest()->get();
        return view('hcammonia2b.index', compact('hcammonia2b','hasil'));

    }

    public function create()
    {
        return view('hcammonia2b.create');
    }

    public function store(Request $request)
    {
    $hcammonia2b = hcammonia2b::create([
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
            $hcammonia2b->file = $request->file('file')->getClientOriginalName();
            $hcammonia2b->save();
        }
        return redirect('/hcammonia2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcammonia2b = \App\hcammonia2b::find($id);
    	return view('hcammonia2b.edit',['hcammonia2b'=>$hcammonia2b]);
    }

    public function update(Request $request,$id)
    {
    	$hcammonia2b = \App\hcammonia2b::find($id);
    	$hcammonia2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcammonia2b->file = $request->file('file')->getClientOriginalName();
            $hcammonia2b->save();
        }
    	return redirect('/hcammonia2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcammonia2b = \App\hcammonia2b::find($id);
    	$hcammonia2b->delete();
    	return redirect('/hcammonia2b')->with('sukses','Data Berhasil Dihapus');
    }
}
