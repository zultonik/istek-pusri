<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcutilitas4;
use App\kesimpulan;

class hcutilitas4controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcutilitas4::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcutilitas4 = hcutilitas4::oldest()->get();
        return view('hcutilitas4.index', compact('hcutilitas4','hasil'));

    }

    public function create()
    {
        return view('hcutilitas4.create');
    }

    public function store(Request $request)
    {
    $hcutilitas4 = hcutilitas4::create([
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
            $hcutilitas4->file = $request->file('file')->getClientOriginalName();
            $hcutilitas4->save();
        }
        return redirect('/hcutilitas4')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcutilitas4 = \App\hcutilitas4::find($id);
    	return view('hcutilitas4.edit',['hcutilitas4'=>$hcutilitas4]);
    }

    public function update(Request $request,$id)
    {
    	$hcutilitas4 = \App\hcutilitas4::find($id);
    	$hcutilitas4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcutilitas4->file = $request->file('file')->getClientOriginalName();
            $hcutilitas4->save();
        }
    	return redirect('/hcutilitas4')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcutilitas4 = \App\hcutilitas4::find($id);
    	$hcutilitas4->delete();
    	return redirect('/hcutilitas4')->with('sukses','Data Berhasil Dihapus');
    }
}
