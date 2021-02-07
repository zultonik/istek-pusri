<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcurea4;
use App\kesimpulan;

class hcurea4controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcurea4::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcurea4 = hcurea4::oldest()->get();
        return view('hcurea4.index', compact('hcurea4','hasil'));

    }

    public function create()
    {
        return view('hcurea4.create');
    }

    public function store(Request $request)
    {
    $hcurea4 = hcurea4::create([
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
            $hcurea4->file = $request->file('file')->getClientOriginalName();
            $hcurea4->save();
        }
        return redirect('/hcurea4')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcurea4 = \App\hcurea4::find($id);
    	return view('hcurea4.edit',['hcurea4'=>$hcurea4]);
    }

    public function update(Request $request,$id)
    {
    	$hcurea4 = \App\hcurea4::find($id);
    	$hcurea4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcurea4->file = $request->file('file')->getClientOriginalName();
            $hcurea4->save();
        }
    	return redirect('/hcurea4')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcurea4 = \App\hcurea4::find($id);
    	$hcurea4->delete();
    	return redirect('/hcurea4')->with('sukses','Data Berhasil Dihapus');
    }
}
