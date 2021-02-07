<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiutilitas3pv;
use App\rbiutilitas3he;
use App\rbiutilitas3tank;
use App\ranking;

class rbiutilitas3controller extends Controller
{
    public function index()
    {
        $hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiutilitas3pv::where('area_rank',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil, $a);
        }

        $hasil2 = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiutilitas3pv::where('fin_rank',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil2, $a);
        }

        $hasil3 = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiutilitas3tank::where('area_rank',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil3, $a);
        }

        $hasil4 = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiutilitas3tank::where('fin_rank',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil4, $a);
        }

        $hasil5 = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiutilitas3he::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil5, $a);
        }
    	return view('rbiutilitas3.index', compact('hasil','hasil2','hasil3','hasil4','hasil5'));
    }

    public function create()
    {
        return view('rbiutilitas3.createpv');
    }

    public function store(Request $request)
    {
    $rbiutilitas3pv = rbiutilitas3pv::create([
        'equipment_code'     => $request->input('equipment_code'),
        'ind_unit'   => $request->input('ind_unit'),
        'thinning'      => $request->input('thinning'),
        'ex_damage'     => $request->input('ex_damage'),
        'brit_frac'     => $request->input('brit_frac'),
        'stress_crack'     => $request->input('stress_crack'),
        'htha'     => $request->input('htha'),
        'mech_fatigue'     => $request->input('mech_fatigue'),
        'totaldf'     => $request->input('totaldf'),
        'fms'     => $request->input('fms'),
        'totalgff'     => $request->input('totalgff'),
        'pof'     => $request->input('pof'),
        'pof_category'     => $request->input('pof_category'),
        'flam_damage'     => $request->input('flam_damage'),
        'flam_inj'     => $request->input('flam_inj'),
        'toxic_damage'     => $request->input('toxic_damage'),
        'toxic_inj'     => $request->input('toxic_inj'),
        'non_damage'   => $request->input('non_damage'),
        'non_inj'      => $request->input('non_inj'),
        'final_area'     => $request->input('final_area'),
        'area_based'     => $request->input('area_based'),
        'final_fin'     => $request->input('final_fin'),
        'fin_based'     => $request->input('fin_based'),
        'area_cat'     => $request->input('area_cat'),
        'fin_cat'     => $request->input('fin_cat'),
        'area_rank'     => $request->input('area_rank'),
        'fin_rank'     => $request->input('fin_rank'),
        'eta'     => $request->input('eta'),
        'dua_ta'     => $request->input('dua_ta'),
        'tiga_ta'     => $request->input('tiga_ta'),
        'empat_ta'     => $request->input('empat_ta'),
        'suggest_act'     => $request->input('suggest_act')
    ]);
        return redirect('/rbiutilitas3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiutilitas3pv = \App\rbiutilitas3pv::find($id);
    	return view('rbiutilitas3.editpv',['rbiutilitas3pv'=>$rbiutilitas3pv]);
    }

    public function update(Request $request,$id)
    {
    	$rbiutilitas3pv = \App\rbiutilitas3pv::find($id);
    	$rbiutilitas3pv->update($request->all());
    	return redirect('/rbiutilitas3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiutilitas3pv = \App\rbiutilitas3pv::find($id);
    	$rbiutilitas3pv->delete();
    	return redirect('/rbiutilitas3')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbiutilitas3pv = rbiutilitas3pv::oldest()->get();
    	return view('pvutilitas3.area', compact('rbiutilitas3pv'));
    }

    public function index2()
    {
    	$rbiutilitas3tank = rbiutilitas3tank::oldest()->get();
    	return view('tankutilitas3.area', compact('rbiutilitas3tank'));
    }

    public function index3()
    {
    	$rbiutilitas3he = rbiutilitas3he::oldest()->get();
    	return view('heutilitas3.risk', compact('rbiutilitas3he'));
    }

    public function detail($id)
    {
        $rbiutilitas3pv = \App\rbiutilitas3pv::find($id);
        return view('pvutilitas3.detailpv',['rbiutilitas3pv'=>$rbiutilitas3pv]);
    }
}
