<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\rbiutilitas3he;

class rbiutilitas3hecontroller extends Controller
{
    public function create()
    {
        return view('rbiutilitas3.createhe');
    }

    public function store(Request $request)
    {
    $rbiutilitas3he = rbiutilitas3he::create([
        'equipment_code'     => $request->input('equipment_code'),
        'ind_unit'   => $request->input('ind_unit'),
        'exchanger_type'   => $request->input('exchanger_type'),
        'ins_date'      => $request->input('ins_date'),
        'lid'     => $request->input('lid'),
        'plan_tasatu'     => $request->input('plan_tasatu'),
        'plan_tadua'     => $request->input('plan_tadua'),
        'shell_diameter'     => $request->input('shell_diameter'),
        'tube_length'     => $request->input('tube_length'),
        'tube_type'     => $request->input('tube_type'),
        'tube_matl'     => $request->input('tube_matl'),
        'tube_quantity'     => $request->input('tube_quantity'),
        'tube_outdiameter'   => $request->input('tube_outdiameter'),
        'tube_thickness'   => $request->input('tube_thickness'),
        'tube_pitch'      => $request->input('tube_pitch'),
        'baffle_type'     => $request->input('baffle_type'),
        'baffle_cut'     => $request->input('baffle_cut'),
        'baffle_spacing'     => $request->input('baffle_spacing'),
        'tube_joint'     => $request->input('tube_joint'),
        'tubesheet'     => $request->input('tubesheet'),
        'pof'     => $request->input('pof'),
        'pof_cat'   => $request->input('pof_cat'),
        'plc'   => $request->input('plc'),
        'bundle_cost'      => $request->input('bundle_cost'),
        'environment_impact'     => $request->input('environment_impact'),
        'maintenance_cost'     => $request->input('maintenance_cost'),
        'bundle_cons'     => $request->input('bundle_cons'),
        'cof'     => $request->input('cof'),
        'cof_cat'     => $request->input('cof_cat'),
        'risk_level'     => $request->input('risk_level'),
        'risk_ranking'     => $request->input('risk_ranking'),
        'act'     => $request->input('act'),
        'opt_bundle'     => $request->input('opt_bundle'),
        'eta'     => $request->input('eta'),
        'dua_ta'     => $request->input('dua_ta'),
        'tiga_ta'     => $request->input('tiga_ta'),
        'empat_ta'     => $request->input('empat_ta')
    ]);
        return redirect('/rbiutilitas3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiutilitas3he = \App\rbiutilitas3he::find($id);
    	return view('rbiutilitas3.edithe',['rbiutilitas3he'=>$rbiutilitas3he]);
    }

    public function update(Request $request,$id)
    {
    	$rbiutilitas3he = \App\rbiutilitas3he::find($id);
    	$rbiutilitas3he->update($request->all());
    	return redirect('/rbiutilitas3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiutilitas3he = \App\rbiutilitas3he::find($id);
    	$rbiutilitas3he->delete();
    	return redirect('/rbiutilitas3')->with('sukses','Data Berhasil Dihapus');
    }

    public function detail($id)
    {
        $rbiutilitas3he = \App\rbiutilitas3he::find($id);
        return view('heutilitas3.detailhe',['rbiutilitas3he'=>$rbiutilitas3he]);
    }
}
