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
								<h3 class="panel-title">Update Pressure Relief Device</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Pressure Relief Device!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-8 col-sm-3 col-xs-12" action="/rbiammonia4/{{$rbiammonia4prd->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   	<div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code"value="{{$rbiammonia4prd->equipment_code}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit"value="{{$rbiammonia4prd->ind_unit}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Installation Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ins_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Installation Date"value="{{$rbiammonia4prd->ins_date}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Previous Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pid" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Previous Inspection Date"value="{{$rbiammonia4prd->pid}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Latest Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lid" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Latest Inspection Date"value="{{$rbiammonia4prd->lid}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Overhaul Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="overhaul_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Overhaul Date"value="{{$rbiammonia4prd->overhaul_date}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF"value="{{$rbiammonia4prd->pof}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="comp_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Component Damage"value="{{$rbiammonia4prd->comp_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Surrounding Equipment Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="surround_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surrounding Equipment Damage"value="{{$rbiammonia4prd->surround_damage}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Unit Production Lost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="upl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Production Lost"value="{{$rbiammonia4prd->upl}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Environmental Cleanup Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="environment_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Environmental Cleanup Cost"value="{{$rbiammonia4prd->environment_cost}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pers_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Personel Injury"value="{{$rbiammonia4prd->pers_inj}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total Financial Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="total_fincost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total Financial Cost"value="{{$rbiammonia4prd->total_fincost}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF/POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF/POL"value="{{$rbiammonia4prd->pof_pol}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mild/Moderate</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="mild_moderate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mild/Moderate"value="{{$rbiammonia4prd->mild_moderate}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Stuck to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="stuck" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Stuck to Open"value="{{$rbiammonia4prd->stuck}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF/COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF/COL"value="{{$rbiammonia4prd->cof_col}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">GFF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="gff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="GFF"value="{{$rbiammonia4prd->gff}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Demand"value="{{$rbiammonia4prd->pof_overpress}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Category"value="{{$rbiammonia4prd->pof_overcat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COF Overpressure Demand"value="{{$rbiammonia4prd->cof_overpress}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF Overpressure Category"value="{{$rbiammonia4prd->cof_overcat}}">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleFormControlSelect1">Fail to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
										    <select name="fto_rank" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbiammonia4prd->fto_rank == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbiammonia4prd->fto_rank == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbiammonia4prd->fto_rank == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbiammonia4prd->fto_rank == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL"value="{{$rbiammonia4prd->pol}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL Category"value="{{$rbiammonia4prd->pol_cat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COL"value="{{$rbiammonia4prd->col}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COL Category"value="{{$rbiammonia4prd->col_cat}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Leaking Final</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
										    <select name="lf_rank" class="form-control" id="exampleFormControlSelect1">
										      <option value="Low" @if($rbiammonia4prd->lf_rank == 'Low') selected @endif>Low</option>
										      <option value="Medium" @if($rbiammonia4prd->lf_rank == 'Medium') selected @endif>Medium</option>
										      <option value="Medium High" @if($rbiammonia4prd->lf_rank == 'Medium High') selected @endif>Medium High</option>
										      <option value="High" @if($rbiammonia4prd->lf_rank == 'High') selected @endif>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA"value="{{$rbiammonia4prd->eta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA"value="{{$rbiammonia4prd->dua_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA"value="{{$rbiammonia4prd->tiga_ta}}">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA"value="{{$rbiammonia4prd->empat_ta}}">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action">{{$rbiammonia4prd->suggest_act}}</textarea>
									    </div>
								  	</div>
						        	<div class="modal-footer">
									<a href="/prd_ammonia4">
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