<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea3prd;
use App\rbiurea3pv;
use App\rbiurea3he;
use App\rbiurea3tank;
use App\ranking;

class rbiurea3controller extends Controller
{
    public function index()
    {
    	$hasil = [];

        $ranking = ranking::get();
        foreach ($ranking as $key => $ranking) {
            $id_ranking = $ranking->id;
            $kategori = $ranking->kategori;
            $total = rbiurea3prd::where('fto_rank',$kategori)->count();
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
            $total = rbiurea3prd::where('lf_rank',$kategori)->count();
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
            $total = rbiurea3pv::where('area_rank',$kategori)->count();
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
            $total = rbiurea3pv::where('fin_rank',$kategori)->count();
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
            $total = rbiurea3tank::where('area_rank',$kategori)->count();
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
            $total = rbiurea3tank::where('fin_rank',$kategori)->count();
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
            $total = rbiurea3he::where('risk_ranking',$kategori)->count();
            $colors = ["#FF0000","#FFA500","#FFFF00","#008000"];

            $a['name'] = $kategori;
            $a['y'] = $total;
            $a['color'] = $colors[$key];
            array_push($hasil7, $a);
        }
    	return view('rbiurea3.index', compact('hasil','hasil2','hasil3','hasil4','hasil5','hasil6','hasil7'));
    }

    public function create()
    {
        return view('rbiurea3.createprd');
    }

    public function store(Request $request)
    {
    $rbiurea3prd = rbiurea3prd::create([
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
        return redirect('/rbiurea3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiurea3prd = \App\rbiurea3prd::find($id);
    	return view('rbiurea3.editprd',['rbiurea3prd'=>$rbiurea3prd]);
    }

    public function update(Request $request,$id)
    {
    	$rbiurea3prd = \App\rbiurea3prd::find($id);
    	$rbiurea3prd->update($request->all());
    	return redirect('/rbiurea3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiurea3prd = \App\rbiurea3prd::find($id);
    	$rbiurea3prd->delete();
    	return redirect('/rbiurea3')->with('sukses','Data Berhasil Dihapus');
    }

    public function index1()
    {
    	$rbiurea3prd = rbiurea3prd::oldest()->get();
    	return view('prdurea3.fto', compact('rbiurea3prd'));
    }

    public function index2()
    {
    	$rbiurea3pv = rbiurea3pv::oldest()->get();
    	return view('pvurea3.area', compact('rbiurea3pv'));
    }

    public function index3()
    {
    	$rbiurea3tank = rbiurea3tank::oldest()->get();
    	return view('tankurea3.area', compact('rbiurea3tank'));
    }

    public function index4()
    {
    	$rbiurea3he = rbiurea3he::oldest()->get();
    	return view('heurea3.risk', compact('rbiurea3he'));
    }

    public function detail($id)
    {
        $rbiurea3prd = \App\rbiurea3prd::find($id);
        return view('prdurea3.detailprd',['rbiurea3prd'=>$rbiurea3prd]);
    }
}
