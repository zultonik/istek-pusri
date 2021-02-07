<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcutilitas3;
use App\kesimpulan;

class hcutilitas3controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcutilitas3::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcutilitas3 = hcutilitas3::oldest()->get();
        return view('hcutilitas3.index', compact('hcutilitas3','hasil'));

    }

    public function create()
    {
        return view('hcutilitas3.create');
    }

    public function store(Request $request)
    {
    $hcutilitas3 = hcutilitas3::create([
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
            $hcutilitas3->file = $request->file('file')->getClientOriginalName();
            $hcutilitas3->save();
        }
        return redirect('/hcutilitas3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcutilitas3 = \App\hcutilitas3::find($id);
    	return view('hcutilitas3.edit',['hcutilitas3'=>$hcutilitas3]);
    }

    public function update(Request $request,$id)
    {
    	$hcutilitas3 = \App\hcutilitas3::find($id);
    	$hcutilitas3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcutilitas3->file = $request->file('file')->getClientOriginalName();
            $hcutilitas3->save();
        }
    	return redirect('/hcutilitas3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcutilitas3 = \App\hcutilitas3::find($id);
    	$hcutilitas3->delete();
    	return redirect('/hcutilitas3')->with('sukses','Data Berhasil Dihapus');
    }
}
