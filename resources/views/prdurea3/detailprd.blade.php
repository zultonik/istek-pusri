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
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code"value="{{$rbiurea3prd->equipment_code}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit"value="{{$rbiurea3prd->ind_unit}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Installation Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ins_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Installation Date"value="{{$rbiurea3prd->ins_date}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Previous Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Previous Inspection Date"value="{{$rbiurea3prd->pid}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Latest Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Latest Inspection Date"value="{{$rbiurea3prd->lid}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Overhaul Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="overhaul_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Overhaul Date"value="{{$rbiurea3prd->overhaul_date}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF"value="{{$rbiurea3prd->pof}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="comp_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Component Damage"value="{{$rbiurea3prd->comp_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Surrounding Equip Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="surround_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surrounding Equipment Damage"value="{{$rbiurea3prd->surround_damage}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Unit Production Lost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="upl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Production Lost"value="{{$rbiurea3prd->upl}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Environmental Cleanup Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="environment_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Environmental Cleanup Cost"value="{{$rbiurea3prd->environment_cost}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pers_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Personel Injury"value="{{$rbiurea3prd->pers_inj}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total Financial Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="total_fincost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total Financial Cost"value="{{$rbiurea3prd->total_fincost}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF/POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF/POL"value="{{$rbiurea3prd->pof_pol}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mild/Moderate</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="mild_moderate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mild/Moderate"value="{{$rbiurea3prd->mild_moderate}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Stuck to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="stuck" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Stuck to Open"value="{{$rbiurea3prd->stuck}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF/COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF/COL"value="{{$rbiurea3prd->cof_col}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">GFF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="gff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="GFF"value="{{$rbiurea3prd->gff}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Demand"value="{{$rbiurea3prd->pof_overpress}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Category"value="{{$rbiurea3prd->pof_overcat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COF Overpressure Demand"value="{{$rbiurea3prd->cof_overpress}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF Overpressure Category"value="{{$rbiurea3prd->cof_overcat}}" disabled="">
										</div>
								  	</div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-4 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Fail to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="fto_rank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fail to Open"value="{{$rbiurea3prd->fto_rank}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL"value="{{$rbiurea3prd->pol}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL Category"value="{{$rbiurea3prd->pol_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COL"value="{{$rbiurea3prd->col}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COL Category"value="{{$rbiurea3prd->col_cat}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Leaking Final</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lf_rank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Leaking Final"value="{{$rbiurea3prd->lf_rank}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA"value="{{$rbiurea3prd->eta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA"value="{{$rbiurea3prd->dua_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA"value="{{$rbiurea3prd->tiga_ta}}" disabled="">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA"value="{{$rbiurea3prd->empat_ta}}" disabled="">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="suggest_act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Suggested Action" disabled="">{{$rbiurea3prd->suggest_act}}</textarea>
									    </div>
								  	</div>
	                              	<div class="modal-footer">
	                                	<a href="/prd_urea3">
	                                		<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                		</div>
	                                	</a>
	                                	<a href="/prd_urea3" target="_blank">
	                                		<div class="btn btn-default"><i class="fa fa-print"></i>
	                                		</div>
	                                	</a>
	                                	<a href="/rbiurea3/{{$rbiurea3prd->id}}/edit">
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