<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hcstgbbjetty;
use App\kesimpulan;

class hcstgbbjettycontroller extends Controller
{
    public function index()
    {
        $hasil = [];

        $kesimpulan = kesimpulan::get();
        foreach ($kesimpulan as $key => $kesimpulan) {
            $id_kesimpulan = $kesimpulan->id;
            $kategori = $kesimpulan->kategori;
            $total = hcstgbbjetty::where('kesimpulan',$kategori)->count();
            $colors = ["#008000","#FFFF00","#FF0000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

    	$hcstgbbjetty = hcstgbbjetty::oldest()->get();
        return view('hcstgbbjetty.index', compact('hcstgbbjetty','hasil'));

    }

    public function create()
    {
        return view('hcstgbbjetty.create');
    }

    public function store(Request $request)
    {
    $hcstgbbjetty = hcstgbbjetty::create([
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
            $hcstgbbjetty->file = $request->file('file')->getClientOriginalName();
            $hcstgbbjetty->save();
        }
        return redirect('/hcstgbbjetty')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$hcstgbbjetty = \App\hcstgbbjetty::find($id);
    	return view('hcstgbbjetty.edit',['hcstgbbjetty'=>$hcstgbbjetty]);
    }

    public function update(Request $request,$id)
    {
    	$hcstgbbjetty = \App\hcstgbbjetty::find($id);
    	$hcstgbbjetty->update($request->all());
        if ($request->Hasfile('file')){
            $request->file('file')->move('files/',$request->file('file')->getClientOriginalName());
            $hcstgbbjetty->file = $request->file('file')->getClientOriginalName();
            $hcstgbbjetty->save();
        }
    	return redirect('/hcstgbbjetty')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$hcstgbbjetty = \App\hcstgbbjetty::find($id);
    	$hcstgbbjetty->delete();
    	return redirect('/hcstgbbjetty')->with('sukses','Data Berhasil Dihapus');
    }
}
