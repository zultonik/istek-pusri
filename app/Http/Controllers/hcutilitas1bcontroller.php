<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcutilitas1b;
use App\kesimpulan;

class hcutilitas1bcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcutilitas1b::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcutilitas1b = hcutilitas1b::oldest()->get();
        return view('hcutilitas1b.index', compact('hcutilitas1b','hasil'));

    }

    public function create()
    {
        return view('hcutilitas1b.create');
    }

    public function store(Request $request)
    {
    $hcutilitas1b = hcutilitas1b::create([
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
            $hcutilitas1b->file = $request->file('file')->getClientOriginalName();
            $hcutilitas1b->save();
        }
        return redirect('/hcutilitas1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcutilitas1b = \App\hcutilitas1b::find($id);
    	return view('hcutilitas1b.edit',['hcutilitas1b'=>$hcutilitas1b]);
    }

    public function update(Request $request,$id)
    {
    	$hcutilitas1b = \App\hcutilitas1b::find($id);
    	$hcutilitas1b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcutilitas1b->file = $request->file('file')->getClientOriginalName();
            $hcutilitas1b->save();
        }
    	return redirect('/hcutilitas1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcutilitas1b = \App\hcutilitas1b::find($id);
    	$hcutilitas1b->delete();
    	return redirect('/hcutilitas1b')->with('sukses','Data Berhasil Dihapus');
    }
}
