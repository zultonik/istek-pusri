<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcutilitas2b;
use App\kesimpulan;

class hcutilitas2bcontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcutilitas2b::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcutilitas2b = hcutilitas2b::oldest()->get();
        return view('hcutilitas2b.index', compact('hcutilitas2b','hasil'));

    }

    public function create()
    {
        return view('hcutilitas2b.create');
    }

    public function store(Request $request)
    {
    $hcutilitas2b = hcutilitas2b::create([
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
            $hcutilitas2b->file = $request->file('file')->getClientOriginalName();
            $hcutilitas2b->save();
        }
        return redirect('/hcutilitas2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcutilitas2b = \App\hcutilitas2b::find($id);
    	return view('hcutilitas2b.edit',['hcutilitas2b'=>$hcutilitas2b]);
    }

    public function update(Request $request,$id)
    {
    	$hcutilitas2b = \App\hcutilitas2b::find($id);
    	$hcutilitas2b->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcutilitas2b->file = $request->file('file')->getClientOriginalName();
            $hcutilitas2b->save();
        }
    	return redirect('/hcutilitas2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcutilitas2b = \App\hcutilitas2b::find($id);
    	$hcutilitas2b->delete();
    	return redirect('/hcutilitas2b')->with('sukses','Data Berhasil Dihapus');
    }
}
