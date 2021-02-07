<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcammonia1b;
use App\kesimpulan;

class hcammonia1bcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcammonia1b::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcammonia1b = hcammonia1b::oldest()->get();
        return view('hcammonia1b.index', compact('hcammonia1b','hasil'));

    }

    public function create()
    {
        return view('hcammonia1b.create');
    }

    public function store(Request $request)
    {
    $hcammonia1b = hcammonia1b::create([
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
            $hcammonia1b->file = $request->file('file')->getClientOriginalName();
            $hcammonia1b->save();
        }
        return redirect('/hcammonia1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcammonia1b = \App\hcammonia1b::find($id);
    	return view('hcammonia1b.edit',['hcammonia1b'=>$hcammonia1b]);
    }

    public function update(Request $request,$id)
    {
    	$hcammonia1b = \App\hcammonia1b::find($id);
    	$hcammonia1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcammonia1b->file = $request->file('file')->getClientOriginalName();
            $hcammonia1b->save();
        }
    	return redirect('/hcammonia1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcammonia1b = \App\hcammonia1b::find($id);
    	$hcammonia1b->delete();
    	return redirect('/hcammonia1b')->with('sukses','Data Berhasil Dihapus');
    }
}
