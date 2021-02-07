<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcurea2b;
use App\kesimpulan;

class hcurea2bcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcurea2b::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcurea2b = hcurea2b::oldest()->get();
        return view('hcurea2b.index', compact('hcurea2b','hasil'));

    }

    public function create()
    {
        return view('hcurea2b.create');
    }

    public function store(Request $request)
    {
    $hcurea2b = hcurea2b::create([
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
            $hcurea2b->file = $request->file('file')->getClientOriginalName();
            $hcurea2b->save();
        }
        return redirect('/hcurea2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcurea2b = \App\hcurea2b::find($id);
    	return view('hcurea2b.edit',['hcurea2b'=>$hcurea2b]);
    }

    public function update(Request $request,$id)
    {
    	$hcurea2b = \App\hcurea2b::find($id);
    	$hcurea2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcurea2b->file = $request->file('file')->getClientOriginalName();
            $hcurea2b->save();
        }
    	return redirect('/hcurea2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcurea2b = \App\hcurea2b::find($id);
    	$hcurea2b->delete();
    	return redirect('/hcurea2b')->with('sukses','Data Berhasil Dihapus');
    }
}
