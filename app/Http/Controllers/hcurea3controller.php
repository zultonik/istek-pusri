<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcurea3;
use App\kesimpulan;

class hcurea3controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcurea3::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcurea3 = hcurea3::oldest()->get();
        return view('hcurea3.index', compact('hcurea3','hasil'));

    }

    public function create()
    {
        return view('hcurea3.create');
    }

    public function store(Request $request)
    {
    $hcurea3 = hcurea3::create([
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
            $hcurea3->file = $request->file('file')->getClientOriginalName();
            $hcurea3->save();
        }
        return redirect('/hcurea3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcurea3 = \App\hcurea3::find($id);
    	return view('hcurea3.edit',['hcurea3'=>$hcurea3]);
    }

    public function update(Request $request,$id)
    {
    	$hcurea3 = \App\hcurea3::find($id);
    	$hcurea3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcurea3->file = $request->file('file')->getClientOriginalName();
            $hcurea3->save();
        }
    	return redirect('/hcurea3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcurea3 = \App\hcurea3::find($id);
    	$hcurea3->delete();
    	return redirect('/hcurea3')->with('sukses','Data Berhasil Dihapus');
    }
}
