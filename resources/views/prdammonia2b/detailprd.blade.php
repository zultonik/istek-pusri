@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Pressure Relief Device</h3>
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
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code"value="{{$rbiammonia2bprd->equipment_code}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit"value="{{$rbiammonia2bprd->ind_unit}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Installation Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ins_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Installation Date"value="{{$rbiammonia2bprd->ins_date}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Previous Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Previous Inspection Date"value="{{$rbiammonia2bprd->pid}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Latest Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Latest Inspection Date"value="{{$rbiammonia2bprd->lid}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Overhaul Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="overhaul_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Overhaul Date"value="{{$rbiammonia2bprd->overhaul_date}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF"value="{{$rbiammonia2bprd->pof}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="comp_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Component Damage"value="{{$rbiammonia2bprd->comp_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Surrounding Equip Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="surround_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surrounding Equipment Damage"value="{{$rbiammonia2bprd->surround_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Unit Production Lost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="upl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Production Lost"value="{{$rbiammonia2bprd->upl}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Environmental Cleanup Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="environment_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Environmental Cleanup Cost"value="{{$rbiammonia2bprd->environment_cost}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pers_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Personel Injury"value="{{$rbiammonia2bprd->pers_inj}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total Financial Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="total_fincost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total Financial Cost"value="{{$rbiammonia2bprd->total_fincost}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF/POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF/POL"value="{{$rbiammonia2bprd->pof_pol}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mild/Moderate</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="mild_moderate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mild/Moderate"value="{{$rbiammonia2bprd->mild_moderate}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Stuck to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="stuck" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Stuck to Open"value="{{$rbiammonia2bprd->stuck}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF/COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF/COL"value="{{$rbiammonia2bprd->cof_col}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">GFF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="gff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="GFF"value="{{$rbiammonia2bprd->gff}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Demand"value="{{$rbiammonia2bprd->pof_overpress}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Category"value="{{$rbiammonia2bprd->pof_overcat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COF Overpressure Demand"value="{{$rbiammonia2bprd->cof_overpress}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF Overpressure Category"value="{{$rbiammonia2bprd->cof_overcat}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Fail to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="fto_rank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fail to Open"value="{{$rbiammonia2bprd->fto_rank}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL"value="{{$rbiammonia2bprd->pol}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL Category"value="{{$rbiammonia2bprd->pol_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COL"value="{{$rbiammonia2bprd->col}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COL Category"value="{{$rbiammonia2bprd->col_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Leaking Final</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lf_rank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Leaking Final"value="{{$rbiammonia2bprd->lf_rank}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA"value="{{$rbiammonia2bprd->eta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA"value="{{$rbiammonia2bprd->dua_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA"value="{{$rbiammonia2bprd->tiga_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA"value="{{$rbiammonia2bprd->empat_ta}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action" disabled="">{{$rbiammonia2bprd->suggest_act}}</textarea>
									    </div>
								  	</div>
	                              	<div class="modal-footer">
	                                	<a href="/prd_ammonia2b">
	                                		<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                		</div>
	                                	</a>
	                                	<a href="/prd_ammonia2b" target="_blank">
	                                		<div class="btn btn-default"><i class="fa fa-print"></i>
	                                		</div>
	                                	</a>
	                                	<a href="/rbiammonia2b/{{$rbiammonia2bprd->id}}/edit">
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