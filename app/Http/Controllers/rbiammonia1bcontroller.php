<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiammonia1bprd;
use App\rbiammonia1bhe;
use App\rbiammonia1bpv;
use App\ranking;

class rbiammonia1bcontroller extends Controller
{
    public function index()
    {
    	$hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiammonia1bprd::where('fto_rank',$kategori)->count();
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
            $total = rbiammonia1bprd::where('lf_rank',$kategori)->count();
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
            $total = rbiammonia1bpv::where('area_rank',$kategori)->count();
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
            $total = rbiammonia1bpv::where('fin_rank',$kategori)->count();
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
            $total = rbiammonia1bhe::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil5, $a);
        }
    	return view('rbiammonia1b.index', compact('hasil','hasil2','hasil3','hasil4','hasil5'));
    }

    public function create()
    {
        return view('rbiammonia1b.createprd');
    }

    public function store(Request $request)
    {
    $rbiammonia1bprd = rbiammonia1bprd::create([
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
        return redirect('/rbiammonia1b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiammonia1bprd = \App\rbiammonia1bprd::find($id);
    	return view('rbiammonia1b.editprd',['rbiammonia1bprd'=>$rbiammonia1bprd]);
    }

    public function update(Request $request,$id)
    {
    	$rbiammonia1bprd = \App\rbiammonia1bprd::find($id);
    	$rbiammonia1bprd->update($request->all());
    	return redirect('/rbiammonia1b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiammonia1bprd = \App\rbiammonia1bprd::find($id);
    	$rbiammonia1bprd->delete();
    	return redirect('/rbiammonia1b')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbiammonia1bprd = rbiammonia1bprd::oldest()->get();
    	return view('prdammonia1b.fto', compact('rbiammonia1bprd'));
    }

    public function index2()
    {
    	$rbiammonia1bhe = rbiammonia1bhe::oldest()->get();
    	return view('heammonia1b.risk', compact('rbiammonia1bhe'));
    }

    public function index3()
    {
        $rbiammonia1bpv = rbiammonia1bpv::oldest()->get();
        return view('pvammonia1b.risk', compact('rbiammonia1bpv'));
    }

    public function detail($id)
    {
        $rbiammonia1bprd = \App\rbiammonia1bprd::find($id);
        return view('prdammonia1b.detailprd',['rbiammonia1bprd'=>$rbiammonia1bprd]);
    }
}
