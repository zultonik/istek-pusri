@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								@if(session('sukses'))
								<div class="alert alert-success" role="alert">
								  {{session('sukses')}}
								</div>
								@endif
								<h3 class="panel-title">Update Atmosferic Storage Tank</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Atmosferic Storage Tank!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/rbiutilitas4tank/{{$rbiutilitas4tank->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   	<div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code" value="{{$rbiutilitas4tank->equipment_code}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit" value="{{$rbiutilitas4tank->ind_unit}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Thinning</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="thinning" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thinning" value="{{$rbiutilitas4tank->thinning}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">External Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="ex_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="External Damage" value="{{$rbiutilitas4tank->ex_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Brittle Fracture</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="brit_frac" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brittle Fracture" value="{{$rbiutilitas4tank->brit_frac}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Stress Corrosion Cracking</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="stress_crack" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stress Corrosion Cracking" value="{{$rbiutilitas4tank->stress_crack}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">HTHA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="htha" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HTHA" value="{{$rbiutilitas4tank->htha}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mechanical Fatigue</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="mech_fatigue" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mechanical Fatigue" value="{{$rbiutilitas4tank->mech_fatigue}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total DF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="totaldf" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total DF" value="{{$rbiutilitas4tank->totaldf}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">FMS</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fms" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FMS" value="{{$rbiutilitas4tank->fms}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total GFF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="totalgff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total GFF" value="{{$rbiutilitas4tank->totalgff}}">
										</div>
								  	</div>
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF" value="{{$rbiutilitas4tank->pof}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pof_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Category" value="{{$rbiutilitas4tank->pof_category}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="flam_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Component Damage" value="{{$rbiutilitas4tank->flam_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="flam_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Personel Injury" value="{{$rbiutilitas4tank->flam_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="toxic_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Component Damage" value="{{$rbiutilitas4tank->toxic_damage}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="toxic_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Personel Injury" value="{{$rbiutilitas4tank->toxic_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="non_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Component Damage" value="{{$rbiutilitas4tank->non_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="non_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Personel Injury" value="{{$rbiutilitas4tank->non_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Area Based COF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="final_area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Area Based COF" value="{{$rbiutilitas4tank->final_area}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Financial Based COF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="final_fin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Financial Based COF" value="{{$rbiutilitas4tank->final_fin}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Area Based COF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Based COF Category" value="{{$rbiutilitas4tank->area_based}}">
										</div>
								  	</div>
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Finan-Based COF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fin_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Financial Based COF Category" value="{{$rbiutilitas4tank->fin_based}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Area" value="{{$rbiutilitas4tank->area_cat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Financial</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fin_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Financial" value="{{$rbiutilitas4tank->fin_cat}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="area_rank" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbiutilitas4tank->area_rank == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbiutilitas4tank->area_rank == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbiutilitas4tank->area_rank == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbiutilitas4tank->area_rank == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking Financial</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="fin_rank" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbiutilitas4tank->fin_rank == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbiutilitas4tank->fin_rank == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbiutilitas4tank->fin_rank == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbiutilitas4tank->fin_rank == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA" value="{{$rbiutilitas4tank->eta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA" value="{{$rbiutilitas4tank->dua_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA" value="{{$rbiutilitas4tank->tiga_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA" value="{{$rbiutilitas4tank->empat_ta}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action">{{$rbiutilitas4tank->suggest_act}}</textarea>
									    </div>
								  	</div>
						        	<div class="modal-footer">
									<a href="/ast_utilitas4">
	                                	<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                	</div>
	                                </a>
							        <button type="submit" class="btn btn-warning"><i class="fa fa-send"></i></button>
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