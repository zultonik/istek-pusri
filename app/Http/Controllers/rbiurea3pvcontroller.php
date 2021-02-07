<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea3pv;

class rbiurea3pvcontroller extends Controller
{
    public function create()
    {
        return view('rbiurea3.createpv');
    }

    public function store(Request $request)
    {
    $rbiurea3pv = rbiurea3pv::create([
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
        return redirect('/rbiurea3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiurea3pv = \App\rbiurea3pv::find($id);
    	return view('rbiurea3.editpv',['rbiurea3pv'=>$rbiurea3pv]);
    }

    public function update(Request $request,$id)
    {
    	$rbiurea3pv = \App\rbiurea3pv::find($id);
    	$rbiurea3pv->update($request->all());
    	return redirect('/rbiurea3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiurea3pv = \App\rbiurea3pv::find($id);
    	$rbiurea3pv->delete();
    	return redirect('/rbiurea3')->with('sukses','Data Berhasil Dihapus');
    }

    public function detail($id)
    {
        $rbiurea3pv = \App\rbiurea3pv::find($id);
        return view('pvurea3.detailpv',['rbiurea3pv'=>$rbiurea3pv]);
    }
}
