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
								<h3 class="panel-title">Update Heat Exchanger</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Heat Exchanger!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-8 col-sm-3 col-xs-12" action="/rbistgbbjettyhe/{{$rbistgbbjettyhe->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   	<div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code" value="{{$rbistgbbjettyhe->equipment_code}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit" value="{{$rbistgbbjettyhe->ind_unit}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Exchanger Type</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="exchanger_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exchanger Type" value="{{$rbistgbbjettyhe->exchanger_type}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Installation Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ins_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Installation Date" value="{{$rbistgbbjettyhe->ins_date}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Latest Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lid" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Latest Inspection Date" value="{{$rbistgbbjettyhe->lid}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Plan TA 1</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="plan_tasatu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plan TA 1" value="{{$rbistgbbjettyhe->plan_tasatu}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Plan TA 2</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="plan_tadua" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plan TA 2" value="{{$rbistgbbjettyhe->plan_tadua}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">Shell Diameter (m)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="shell_diameter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Shell Diameter (m)" value="{{$rbistgbbjettyhe->shell_diameter}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Length (m)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_length" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Length (m)" value="{{$rbistgbbjettyhe->tube_length}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Type</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Type" value="{{$rbistgbbjettyhe->tube_type}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Matl</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_matl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Matl" value="{{$rbistgbbjettyhe->tube_matl}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Quantity</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_quantity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Quantity" value="{{$rbistgbbjettyhe->tube_quantity}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Outside Diameter</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_outdiameter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Outside Diameter" value="{{$rbistgbbjettyhe->tube_outdiameter}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Furnished Thickness</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_thickness" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Furnished Thickness" value="{{$rbistgbbjettyhe->tube_thickness}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Pitch</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_pitch" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Pitch" value="{{$rbistgbbjettyhe->tube_pitch}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Baffle Type</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="baffle_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baffle Type" value="{{$rbistgbbjettyhe->baffle_type}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Baffle Cut (mm)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="baffle_cut" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baffle Cut (mm)" value="{{$rbistgbbjettyhe->baffle_cut}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Baffle Spacing (mm)</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="baffle_spacing" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baffle Spacing (mm)" value="{{$rbistgbbjettyhe->baffle_spacing}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Tube Joint Design</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tube_joint" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tube Joint Design" value="{{$rbistgbbjettyhe->tube_joint}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">Tubesheet Material Spec</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tubesheet" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tubesheet Material Spec" value="{{$rbistgbbjettyhe->tubesheet}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF" value="{{$rbistgbbjettyhe->pof}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Category" value="{{$rbistgbbjettyhe->pof_cat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Production Losses Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="plc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Production Losses Cost" value="{{$rbistgbbjettyhe->plc}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Bundle Replacement Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="bundle_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bundle Replacement Cost" value="{{$rbistgbbjettyhe->bundle_cost}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Environmental Impact</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="environment_impact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Environmental Impact" value="{{$rbistgbbjettyhe->environment_impact}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">Maintenance Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="maintenance_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Maintenance Cost" value="{{$rbistgbbjettyhe->maintenance_cost}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Bundle Failure Final Cons</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="bundle_cons" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bundle Failure Final Cons" value="{{$rbistgbbjettyhe->bundle_cons}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF" value="{{$rbistgbbjettyhe->cof}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF Category" value="{{$rbistgbbjettyhe->cof_cat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Risk Level</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="risk_level" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Risk Level" value="{{$rbistgbbjettyhe->risk_level}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Risk Ranking</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
										    <select name="risk_ranking" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbistgbbjettyhe->risk_ranking == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbistgbbjettyhe->risk_ranking == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbistgbbjettyhe->risk_ranking == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbistgbbjettyhe->risk_ranking == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Action Taken</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <textarea name="act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Action Taken">{{$rbistgbbjettyhe->act}}</textarea>
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Opt Bundle Replacement Frequency</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="opt_bundle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Opt Bundle Replacement Frequency" value="{{$rbistgbbjettyhe->opt_bundle}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA" value="{{$rbistgbbjettyhe->eta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA" value="{{$rbistgbbjettyhe->dua_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA" value="{{$rbistgbbjettyhe->tiga_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA" value="{{$rbistgbbjettyhe->empat_ta}}">
										</div>
								  	</div>
						        	<div class="modal-footer">
									<a href="/he_stgbbjetty">
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