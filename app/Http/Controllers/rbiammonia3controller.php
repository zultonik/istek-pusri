<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiammonia3prd;
use App\rbiammonia3he;
use App\rbiammonia3pv;
use App\ranking;

class rbiammonia3controller extends Controller
{
    public function index()
    {
    	$hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiammonia3prd::where('fto_rank',$kategori)->count();
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
            $total = rbiammonia3prd::where('lf_rank',$kategori)->count();
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
            $total = rbiammonia3pv::where('area_rank',$kategori)->count();
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
            $total = rbiammonia3pv::where('fin_rank',$kategori)->count();
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
            $total = rbiammonia3he::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil5, $a);
        }
    	return view('rbiammonia3.index', compact('hasil','hasil2','hasil3','hasil4','hasil5'));
    }

    public function create()
    {
        return view('rbiammonia3.createprd');
    }

    public function store(Request $request)
    {
    $rbiammonia3prd = rbiammonia3prd::create([
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
        return redirect('/rbiammonia3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiammonia3prd = \App\rbiammonia3prd::find($id);
    	return view('rbiammonia3.editprd',['rbiammonia3prd'=>$rbiammonia3prd]);
    }

    public function update(Request $request,$id)
    {
    	$rbiammonia3prd = \App\rbiammonia3prd::find($id);
    	$rbiammonia3prd->update($request->all());
    	return redirect('/rbiammonia3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiammonia3prd = \App\rbiammonia3prd::find($id);
    	$rbiammonia3prd->delete();
    	return redirect('/rbiammonia3')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbiammonia3prd = rbiammonia3prd::oldest()->get();
    	return view('prdammonia3.fto', compact('rbiammonia3prd'));
    }

    public function index2()
    {
    	$rbiammonia3he = rbiammonia3he::oldest()->get();
    	return view('heammonia3.risk', compact('rbiammonia3he'));
    }

    public function index3()
    {
        $rbiammonia3pv = rbiammonia3pv::oldest()->get();
        return view('pvammonia3.risk', compact('rbiammonia3pv'));
    }

    public function detail($id)
    {
        $rbiammonia3prd = \App\rbiammonia3prd::find($id);
        return view('prdammonia3.detailprd',['rbiammonia3prd'=>$rbiammonia3prd]);
    }
}
