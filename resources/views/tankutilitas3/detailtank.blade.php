@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Atmosferic Storage Tank</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-info alert-dismissible fade in" role="alert">
			                        <strong>Informasi!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  <div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code" value="{{$rbiutilitas3tank->equipment_code}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit" value="{{$rbiutilitas3tank->ind_unit}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Thinning</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="thinning" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thinning" value="{{$rbiutilitas3tank->thinning}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">External Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ex_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="External Damage" value="{{$rbiutilitas3tank->ex_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Brittle Fracture</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="brit_frac" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brittle Fracture" value="{{$rbiutilitas3tank->brit_frac}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Stress Corrosion Cracking</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="stress_crack" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stress Corrosion Cracking" value="{{$rbiutilitas3tank->stress_crack}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">HTHA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="htha" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HTHA" value="{{$rbiutilitas3tank->htha}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mechanical Fatigue</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="mech_fatigue" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mechanical Fatigue" value="{{$rbiutilitas3tank->mech_fatigue}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total DF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="totaldf" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total DF" value="{{$rbiutilitas3tank->totaldf}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">FMS</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="fms" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FMS" value="{{$rbiutilitas3tank->fms}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total GFF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="totalgff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total GFF" value="{{$rbiutilitas3tank->totalgff}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  <div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF" value="{{$rbiutilitas3tank->pof}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Category" value="{{$rbiutilitas3tank->pof_category}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="flam_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Component Damage" value="{{$rbiutilitas3tank->flam_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="flam_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Personel Injury" value="{{$rbiutilitas3tank->flam_inj}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="toxic_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Component Damage" value="{{$rbiutilitas3tank->toxic_damage}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="toxic_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Personel Injury" value="{{$rbiutilitas3tank->toxic_inj}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="non_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Component Damage" value="{{$rbiutilitas3tank->non_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="non_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Personel Injury" value="{{$rbiutilitas3tank->non_inj}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Area Based COF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="final_area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Area Based COF" value="{{$rbiutilitas3tank->final_area}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Financial Based COF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="final_fin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Financial Based COF" value="{{$rbiutilitas3tank->final_fin}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Area Based COF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="area_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Based COF Category" value="{{$rbiutilitas3tank->area_based}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  <div class="form-group">
									    <label for="exampleInputEmail1">Finan-Based COF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="fin_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Finan-Based COF Category" value="{{$rbiutilitas3tank->fin_based}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Area</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="area_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Area" value="{{$rbiutilitas3tank->area_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Financial</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="fin_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Financial" value="{{$rbiutilitas3tank->fin_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Ranking Area</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="area_rank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Ranking Area" value="{{$rbiutilitas3tank->area_rank}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Ranking Financial</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="fin_rank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Ranking Financial" value="{{$rbiutilitas3tank->fin_rank}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA" value="{{$rbiutilitas3tank->eta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA" value="{{$rbiutilitas3tank->dua_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA" value="{{$rbiutilitas3tank->tiga_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA" value="{{$rbiutilitas3tank->empat_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action" disabled="">{{$rbiutilitas3tank->suggest_act}}</textarea>
									    </div>
								  	</div>
	                              <div class="modal-footer">
	                                <a href="/ast_utilitas3">
	                                	<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                	</div>
	                                </a>
	                                <a href="/ast_utilitas3" target="_blank">
	                                	<div class="btn btn-default"><i class="fa fa-print"></i>
	                                	</div>
	                                </a>
	                                <a href="/rbiutilitas3tank/{{$rbiutilitas3tank->id}}/edit">
	                                	<div class="btn btn-default"><i class="fa fa-edit"></i>
	                                	</div>
	                                </a>
	                               </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop