<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea2bprd;
use App\rbiurea2bpv;
use App\rbiurea2bhe;
use App\rbiurea2btank;
use App\ranking;

class rbiurea2bcontroller extends Controller
{
    public function index()
    {
    	$hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiurea2bprd::where('fto_rank',$kategori)->count();
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
            $total = rbiurea2bprd::where('lf_rank',$kategori)->count();
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
            $total = rbiurea2bpv::where('area_rank',$kategori)->count();
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
            $total = rbiurea2bpv::where('fin_rank',$kategori)->count();
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
            $total = rbiurea2btank::where('area_rank',$kategori)->count();
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
            $total = rbiurea2btank::where('fin_rank',$kategori)->count();
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
            $total = rbiurea2bhe::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil7, $a);
        }
    	return view('rbiurea2b.index', compact('hasil','hasil2','hasil3','hasil4','hasil5','hasil6','hasil7'));
    }

    public function create()
    {
        return view('rbiurea2b.createprd');
    }

    public function store(Request $request)
    {
    $rbiurea2bprd = rbiurea2bprd::create([
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
        return redirect('/rbiurea2b')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiurea2bprd = \App\rbiurea2bprd::find($id);
    	return view('rbiurea2b.editprd',['rbiurea2bprd'=>$rbiurea2bprd]);
    }

    public function update(Request $request,$id)
    {
    	$rbiurea2bprd = \App\rbiurea2bprd::find($id);
    	$rbiurea2bprd->update($request->all());
    	return redirect('/rbiurea2b')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiurea2bprd = \App\rbiurea2bprd::find($id);
    	$rbiurea2bprd->delete();
    	return redirect('/rbiurea2b')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbiurea2bprd = rbiurea2bprd::oldest()->get();
    	return view('prdurea2b.fto', compact('rbiurea2bprd'));
    }

    public function index2()
    {
    	$rbiurea2bpv = rbiurea2bpv::oldest()->get();
    	return view('pvurea2b.area', compact('rbiurea2bpv'));
    }

    public function index3()
    {
    	$rbiurea2btank = rbiurea2btank::oldest()->get();
    	return view('tankurea2b.area', compact('rbiurea2btank'));
    }

    public function index4()
    {
    	$rbiurea2bhe = rbiurea2bhe::oldest()->get();
    	return view('heurea2b.risk', compact('rbiurea2bhe'));
    }

    public function detail($id)
    {
        $rbiurea2bprd = \App\rbiurea2bprd::find($id);
        return view('prdurea2b.detailprd',['rbiurea2bprd'=>$rbiurea2bprd]);
    }
}
