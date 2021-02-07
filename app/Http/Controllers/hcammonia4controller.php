<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcammonia4;
use App\kesimpulan;

class hcammonia4controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcammonia4::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcammonia4 = hcammonia4::oldest()->get();
        return view('hcammonia4.index', compact('hcammonia4','hasil'));

    }

    public function create()
    {
        return view('hcammonia4.create');
    }

    public function store(Request $request)
    {
    $hcammonia4 = hcammonia4::create([
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
            $hcammonia4->file = $request->file('file')->getClientOriginalName();
            $hcammonia4->save();
        }
        return redirect('/hcammonia4')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcammonia4 = \App\hcammonia4::find($id);
    	return view('hcammonia4.edit',['hcammonia4'=>$hcammonia4]);
    }

    public function update(Request $request,$id)
    {
    	$hcammonia4 = \App\hcammonia4::find($id);
    	$hcammonia4->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcammonia4->file = $request->file('file')->getClientOriginalName();
            $hcammonia4->save();
        }
    	return redirect('/hcammonia4')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcammonia4 = \App\hcammonia4::find($id);
    	$hcammonia4->delete();
    	return redirect('/hcammonia4')->with('sukses','Data Berhasil Dihapus');
    }
}
