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
								<h3 class="panel-title">Update Pressure Vessel & Piping</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Pressure Vessel & Piping!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/rbiammonia1bpv/{{$rbiammonia1bpv->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   	<div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code" value="{{$rbiammonia1bpv->equipment_code}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit" value="{{$rbiammonia1bpv->ind_unit}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Thinning</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="thinning" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Thinning" value="{{$rbiammonia1bpv->thinning}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">External Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="ex_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="External Damage" value="{{$rbiammonia1bpv->ex_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Brittle Fracture</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="brit_frac" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brittle Fracture" value="{{$rbiammonia1bpv->brit_frac}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Stress Corrosion Cracking</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="stress_crack" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stress Corrosion Cracking" value="{{$rbiammonia1bpv->stress_crack}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">HTHA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="htha" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HTHA" value="{{$rbiammonia1bpv->htha}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mechanical Fatigue</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="mech_fatigue" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mechanical Fatigue" value="{{$rbiammonia1bpv->mech_fatigue}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total DF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="totaldf" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total DF" value="{{$rbiammonia1bpv->totaldf}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">FMS</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fms" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FMS" value="{{$rbiammonia1bpv->fms}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total GFF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="totalgff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total GFF" value="{{$rbiammonia1bpv->totalgff}}">
										</div>
								  	</div>
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF" value="{{$rbiammonia1bpv->pof}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pof_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Category" value="{{$rbiammonia1bpv->pof_category}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="flam_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Component Damage" value="{{$rbiammonia1bpv->flam_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Flam.Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="flam_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Flam.Personel Injury" value="{{$rbiammonia1bpv->flam_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="toxic_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Component Damage" value="{{$rbiammonia1bpv->toxic_damage}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Toxic Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="toxic_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Toxic Personel Injury" value="{{$rbiammonia1bpv->toxic_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Component Damage</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="non_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Component Damage" value="{{$rbiammonia1bpv->non_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Non-Personel Injury</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="non_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Non-Personel Injury" value="{{$rbiammonia1bpv->non_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Area Based COF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="final_area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Area Based COF" value="{{$rbiammonia1bpv->final_area}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Area Based COF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area Based COF Category" value="{{$rbiammonia1bpv->area_based}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Final Financial Based COF</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="final_fin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Final Financial Based COF" value="{{$rbiammonia1bpv->final_fin}}">
										</div>
								  	</div>
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Finan-Based COF Category</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fin_based" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Financial Based COF Category" value="{{$rbiammonia1bpv->fin_based}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Area" value="{{$rbiammonia1bpv->area_cat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Category Financial</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="fin_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Category Financial" value="{{$rbiammonia1bpv->fin_cat}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="area_rank" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbiammonia1bpv->area_rank == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbiammonia1bpv->area_rank == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbiammonia1bpv->area_rank == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbiammonia1bpv->area_rank == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking Financial</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="fin_rank" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbiammonia1bpv->fin_rank == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbiammonia1bpv->fin_rank == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbiammonia1bpv->fin_rank == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbiammonia1bpv->fin_rank == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA" value="{{$rbiammonia1bpv->eta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA" value="{{$rbiammonia1bpv->dua_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA" value="{{$rbiammonia1bpv->tiga_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA" value="{{$rbiammonia1bpv->empat_ta}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action">{{$rbiammonia1bpv->suggest_act}}</textarea>
									    </div>
								  	</div>
						        	<div class="modal-footer">
									<a href="/pv_ammonia1b">
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