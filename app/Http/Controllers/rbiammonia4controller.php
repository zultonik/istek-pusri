<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiammonia4prd;
use App\rbiammonia4he;
use App\rbiammonia4pv;
use App\ranking;

class rbiammonia4controller extends Controller
{
    public function index()
    {
    	$hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiammonia4prd::where('fto_rank',$kategori)->count();
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
            $total = rbiammonia4prd::where('lf_rank',$kategori)->count();
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
            $total = rbiammonia4pv::where('area_rank',$kategori)->count();
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
            $total = rbiammonia4pv::where('fin_rank',$kategori)->count();
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
            $total = rbiammonia4he::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil5, $a);
        }
    	return view('rbiammonia4.index', compact('hasil','hasil2','hasil3','hasil4','hasil5'));
    }

    public function create()
    {
        return view('rbiammonia4.createprd');
    }

    public function store(Request $request)
    {
    $rbiammonia4prd = rbiammonia4prd::create([
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
        return redirect('/rbiammonia4')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiammonia4prd = \App\rbiammonia4prd::find($id);
    	return view('rbiammonia4.editprd',['rbiammonia4prd'=>$rbiammonia4prd]);
    }

    public function update(Request $request,$id)
    {
    	$rbiammonia4prd = \App\rbiammonia4prd::find($id);
    	$rbiammonia4prd->update($request->all());
    	return redirect('/rbiammonia4')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiammonia4prd = \App\rbiammonia4prd::find($id);
    	$rbiammonia4prd->delete();
    	return redirect('/rbiammonia4')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbiammonia4prd = rbiammonia4prd::oldest()->get();
    	return view('prdammonia4.fto', compact('rbiammonia4prd'));
    }

    public function index2()
    {
    	$rbiammonia4he = rbiammonia4he::oldest()->get();
    	return view('heammonia4.risk', compact('rbiammonia4he'));
    }

    public function index3()
    {
        $rbiammonia4pv = rbiammonia4pv::oldest()->get();
        return view('pvammonia4.risk', compact('rbiammonia4pv'));
    }

    public function detail($id)
    {
        $rbiammonia4prd = \App\rbiammonia4prd::find($id);
        return view('prdammonia4.detailprd',['rbiammonia4prd'=>$rbiammonia4prd]);
    }
}
