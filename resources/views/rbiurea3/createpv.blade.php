@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Pressure Vessel & Piping
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('rbiurea3pv.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Thinning</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="thinning" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thinning">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">External Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="ex_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="External Damage">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Brittle Fracture</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="brit_frac" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brittle Fracture">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Stress Corrosion Cracking</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="stress_crack" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stress Corrosion Cracking">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">HTHA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="htha" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HTHA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mechanical Fatigue</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="mech_fatigue" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mechanical Fatigue">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total DF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="totaldf" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total DF">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">FMS</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fms" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FMS">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total GFF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="totalgff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total GFF">
										</div>
								  	</div>
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pof_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Category">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="flam_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Component Damage">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="flam_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Personel Injury">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="toxic_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Component Damage">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="toxic_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Personel Injury">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="non_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Component Damage">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="non_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Personel Injury">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Area Based COF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="final_area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Area Based COF">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Area Based COF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Based COF Category">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Financial Based COF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="final_fin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Financial Based COF">
										</div>
								  	</div>
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Finan-Based COF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fin_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Financial Based COF Category">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Area">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Financial</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fin_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Financial">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="area_rank" class="form-control" id="exampleFormControlSelect1">
										      <option>Low</option>
										      <option>Medium</option>
										      <option>Medium High</option>
										      <option>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking Financial</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="fin_rank" class="form-control" id="exampleFormControlSelect1">
										      <option>Low</option>
										      <option>Medium</option>
										      <option>Medium High</option>
										      <option>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action"></textarea>
									    </div>
								  	</div>
									<div class="modal-footer">
				                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i></button>
				                        <button type="reset" class="btn btn-warning" data-dismiss=""><i class="fa fa-refresh"></i></button>
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

@section('create')
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script>
	    CKEDITOR.replace( 'content' );
	</script>
@stop