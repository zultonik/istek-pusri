<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbistgbbjettyprd;
use App\rbistgbbjettypv;
use App\rbistgbbjettyhe;
use App\rbistgbbjettytank;
use App\ranking;

class rbistgbbjettycontroller extends Controller
{
    public function index()
    {
    	$hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbistgbbjettyprd::where('fto_rank',$kategori)->count();
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
            $total = rbistgbbjettyprd::where('lf_rank',$kategori)->count();
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
            $total = rbistgbbjettypv::where('area_rank',$kategori)->count();
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
            $total = rbistgbbjettypv::where('fin_rank',$kategori)->count();
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
            $total = rbistgbbjettytank::where('area_rank',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil5, $a);
        }

        $hasil6 = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbistgbbjettytank::where('fin_rank',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil6, $a);
        }

        $hasil7 = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbistgbbjettyhe::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil7, $a);
        }
    	return view('rbistgbbjetty.index', compact('hasil','hasil2','hasil3','hasil4','hasil5','hasil6','hasil7'));
    }

    public function create()
    {
        return view('rbistgbbjetty.createprd');
    }

    public function store(Request $request)
    {
    $rbistgbbjettyprd = rbistgbbjettyprd::create([
        'equipment_code'     => $request->input('equipment_code'),
        'ind_unit'      => $request->input('ind_unit'),
        'ins_date'      => $request->input('ins_date'),
        'pid'   => $request->input('pid'),
        'lid'     => $request->input('lid'),
        'overhaul_date'     => $request->input('overhaul_date'),
        'pof'     => $request->input('pof'),
        'comp_damage'     => $request->input('comp_damage'),
        'surround_damage'     => $request->input('surround_damage'),
        'upl'     => $request->input('upl'),
        'environment_cost'     => $request->input('environment_cost'),
        'pers_inj'      => $request->input('pers_inj'),
        'total_fincost'      => $request->input('total_fincost'),
        'pof_pol'   => $request->input('pof_pol'),
        'mild_moderate'     => $request->input('mild_moderate'),
        'stuck'     => $request->input('stuck'),
        'cof_col'     => $request->input('cof_col'),
        'gff'     => $request->input('gff'),
        'pof_overpress'     => $request->input('pof_overpress'),
        'pof_overcat'     => $request->input('pof_overcat'),
        'cof_overpress'     => $request->input('cof_overpress'),
        'cof_overcat'      => $request->input('cof_overcat'),
        'fto_rank'      => $request->input('fto_rank'),
        'pol'   => $request->input('pol'),
        'pol_cat'     => $request->input('pol_cat'),
        'col'     => $request->input('col'),
        'col_cat'     => $request->input('col_cat'),
        'lf_rank'     => $request->input('lf_rank'),
        'eta'     => $request->input('eta'),
        'dua_ta'     => $request->input('dua_ta'),
        'tiga_ta'     => $request->input('tiga_ta'),
        'empat_ta'     => $request->input('empat_ta'),
        'suggest_act'     => $request->input('suggest_act')
    ]);
        return redirect('/rbistgbbjetty')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbistgbbjettyprd = \App\rbistgbbjettyprd::find($id);
    	return view('rbistgbbjetty.editprd',['rbistgbbjettyprd'=>$rbistgbbjettyprd]);
    }

    public function update(Request $request,$id)
    {
    	$rbistgbbjettyprd = \App\rbistgbbjettyprd::find($id);
    	$rbistgbbjettyprd->update($request->all());
    	return redirect('/rbistgbbjetty')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbistgbbjettyprd = \App\rbistgbbjettyprd::find($id);
    	$rbistgbbjettyprd->delete();
    	return redirect('/rbistgbbjetty')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbistgbbjettyprd = rbistgbbjettyprd::oldest()->get();
    	return view('prdstgbbjetty.fto', compact('rbistgbbjettyprd'));
    }

    public function index2()
    {
    	$rbistgbbjettypv = rbistgbbjettypv::oldest()->get();
    	return view('pvstgbbjetty.area', compact('rbistgbbjettypv'));
    }

    public function index3()
    {
    	$rbistgbbjettytank = rbistgbbjettytank::oldest()->get();
    	return view('tankstgbbjetty.area', compact('rbistgbbjettytank'));
    }

    public function index4()
    {
    	$rbistgbbjettyhe = rbistgbbjettyhe::oldest()->get();
    	return view('hestgbbjetty.risk', compact('rbistgbbjettyhe'));
    }

    public function detail($id)
    {
        $rbistgbbjettyprd = \App\rbistgbbjettyprd::find($id);
        return view('prdstgbbjetty.detailprd',['rbistgbbjettyprd'=>$rbistgbbjettyprd]);
    }
}
