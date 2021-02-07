<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcurea1b;
use App\kesimpulan;

class hcurea1bcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcurea1b::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcurea1b = hcurea1b::oldest()->get();
        return view('hcurea1b.index', compact('hcurea1b','hasil'));

    }

    public function create()
    {
        return view('hcurea1b.create');
    }

    public function store(Request $request)
    {
    $hcurea1b = hcurea1b::create([
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
            $hcurea1b->file = $request->file('file')->getClientOriginalName();
            $hcurea1b->save();
        }
        return redirect('/hcurea1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcurea1b = \App\hcurea1b::find($id);
    	return view('hcurea1b.edit',['hcurea1b'=>$hcurea1b]);
    }

    public function update(Request $request,$id)
    {
    	$hcurea1b = \App\hcurea1b::find($id);
    	$hcurea1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcurea1b->file = $request->file('file')->getClientOriginalName();
            $hcurea1b->save();
        }
    	return redirect('/hcurea1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcurea1b = \App\hcurea1b::find($id);
    	$hcurea1b->delete();
    	return redirect('/hcurea1b')->with('sukses','Data Berhasil Dihapus');
    }
}
