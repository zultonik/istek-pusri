<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcammonia3;
use App\kesimpulan;

class hcammonia3controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcammonia3::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcammonia3 = hcammonia3::oldest()->get();
        return view('hcammonia3.index', compact('hcammonia3','hasil'));

    }

    public function create()
    {
        return view('hcammonia3.create');
    }

    public function store(Request $request)
    {
    $hcammonia3 = hcammonia3::create([
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
            $hcammonia3->file = $request->file('file')->getClientOriginalName();
            $hcammonia3->save();
        }
        return redirect('/hcammonia3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcammonia3 = \App\hcammonia3::find($id);
    	return view('hcammonia3.edit',['hcammonia3'=>$hcammonia3]);
    }

    public function update(Request $request,$id)
    {
    	$hcammonia3 = \App\hcammonia3::find($id);
    	$hcammonia3->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcammonia3->file = $request->file('file')->getClientOriginalName();
            $hcammonia3->save();
        }
    	return redirect('/hcammonia3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcammonia3 = \App\hcammonia3::find($id);
    	$hcammonia3->delete();
    	return redirect('/hcammonia3')->with('sukses','Data Berhasil Dihapus');
    }
}
