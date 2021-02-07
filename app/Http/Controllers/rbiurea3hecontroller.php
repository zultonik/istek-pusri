<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rbiurea3he;

class rbiurea3hecontroller extends Controller
{
    public function create()
    {
        return view('rbiurea3.createhe');
    }

    public function store(Request $request)
    {
    $rbiurea3he = rbiurea3he::create([
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
        return redirect('/rbiurea3')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$rbiurea3he = \App\rbiurea3he::find($id);
    	return view('rbiurea3.edithe',['rbiurea3he'=>$rbiurea3he]);
    }

    public function update(Request $request,$id)
    {
    	$rbiurea3he = \App\rbiurea3he::find($id);
    	$rbiurea3he->update($request->all());
    	return redirect('/rbiurea3')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
    	$rbiurea3he = \App\rbiurea3he::find($id);
    	$rbiurea3he->delete();
    	return redirect('/rbiurea3')->with('sukses','Data Berhasil Dihapus');
    }

    public function detail($id)
    {
        $rbiurea3he = \App\rbiurea3he::find($id);
        return view('heurea3.detailhe',['rbiurea3he'=>$rbiurea3he]);
    }
}
