@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Heat Exchanger</h3>
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
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code" value="{{$rbiurea4he->equipment_code}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit" value="{{$rbiurea4he->ind_unit}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Exchanger Type</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="exchanger_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exchanger Type" value="{{$rbiurea4he->exchanger_type}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Installation Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ins_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Installation Date" value="{{$rbiurea4he->ins_date}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Latest Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Latest Inspection Date" value="{{$rbiurea4he->lid}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Plan TA 1</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="plan_tasatu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plan TA 1" value="{{$rbiurea4he->plan_tasatu}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Plan TA 2</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="plan_tadua" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plan TA 2" value="{{$rbiurea4he->plan_tadua}}" disabled="">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">Shell Diameter (m)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="shell_diameter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Shell Diameter (m)" value="{{$rbiurea4he->shell_diameter}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Length (m)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Length (m)" value="{{$rbiurea4he->tube_length}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Type</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Type" value="{{$rbiurea4he->tube_type}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Matl</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_matl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Matl" value="{{$rbiurea4he->tube_matl}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Quantity</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_quantity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Quantity" value="{{$rbiurea4he->tube_quantity}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Outside Diameter</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_outdiameter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Outside Diameter" value="{{$rbiurea4he->tube_outdiameter}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Furnished Thickness</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_thickness" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Furnished Thickness" value="{{$rbiurea4he->tube_thickness}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Pitch</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_pitch" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Pitch" value="{{$rbiurea4he->tube_pitch}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Baffle Type</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="baffle_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baffle Type" value="{{$rbiurea4he->baffle_type}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Baffle Cut (mm)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="baffle_cut" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baffle Cut (mm)" value="{{$rbiurea4he->baffle_cut}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Baffle Spacing (mm)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="baffle_spacing" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baffle Spacing (mm)" value="{{$rbiurea4he->baffle_spacing}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Joint Design</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_joint" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Joint Design" value="{{$rbiurea4he->tube_joint}}" disabled="">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">Tubesheet Material Spec</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tubesheet" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tubesheet Material Spec" value="{{$rbiurea4he->tubesheet}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF" value="{{$rbiurea4he->pof}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Category" value="{{$rbiurea4he->pof_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Production Losses Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="plc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Production Losses Cost" value="{{$rbiurea4he->plc}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Bundle Replacement Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="bundle_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bundle Replacement Cost" value="{{$rbiurea4he->bundle_cost}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Environmental Impact</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="environment_impact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Environmental Impact" value="{{$rbiurea4he->environment_impact}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
									{{csrf_field()}}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Maintenance Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="maintenance_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Maintenance Cost" value="{{$rbiurea4he->maintenance_cost}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Bundle Failure Final Cons</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="bundle_cons" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bundle Failure Final Cons" value="{{$rbiurea4he->bundle_cons}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF" value="{{$rbiurea4he->cof}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF Category" value="{{$rbiurea4he->cof_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Level</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="risk_level" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Level" value="{{$rbiurea4he->risk_level}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
								    	<label for="exampleInputEmail1">Risk Ranking</label>
								    	<div class="col-md-6 col-sm-6 col-xs-12">
								    	<input name="risk_ranking" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Ranking" value="{{$rbiurea4he->risk_ranking}}" disabled="">
								    	</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Action Taken</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Action Taken" disabled="">{{$rbiurea4he->act}}</textarea>
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">OBRF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="opt_bundle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Opt Bundle Replacement Frequency" value="{{$rbiurea4he->opt_bundle}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA" value="{{$rbiurea4he->eta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA" value="{{$rbiurea4he->dua_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA" value="{{$rbiurea4he->tiga_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA" value="{{$rbiurea4he->empat_ta}}" disabled="">
										</div>
								  	</div>
	                              	<div class="modal-footer">
	                                	<a href="/he_urea4">
	                                		<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                		</div>
	                                	</a>
	                                	<a href="/prd_urea4" target="_blank">
	                                		<div class="btn btn-default"><i class="fa fa-print"></i>
	                                		</div>
	                                	</a>
	                                	<a href="/rbiurea4he/{{$rbiurea4he->id}}/edit">
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