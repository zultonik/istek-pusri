@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Pressure Relief Device
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-8 col-sm-3 col-xs-12" action="{{ route('rbiurea1b.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Equipment Code</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="equipment_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment Code">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Industry Unit</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ind_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry Unit">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Installation Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="ins_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Installation Date">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Previous Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pid" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Previous Inspection Date">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Latest Inspection Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="lid" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Latest Inspection Date">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Overhaul Date</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="overhaul_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Overhaul Date">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Component Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="comp_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Component Damage">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Surrounding Equipment Damage</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="surround_damage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surrounding Equipment Damage">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Unit Production Lost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="upl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit Production Lost">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Environmental Cleanup Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="environment_cost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Environmental Cleanup Cost">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Personel Injury</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pers_inj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Personel Injury">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Total Financial Cost</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="total_fincost" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total Financial Cost">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF/POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF/POL">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Mild/Moderate</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="mild_moderate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mild/Moderate">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Stuck to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="stuck" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Stuck to Open">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF/COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF/COL">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">GFF</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="gff" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="GFF">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Demand">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POF Overpressure Category">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Demand</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overpress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COF Overpressure Demand">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COF Overpressure Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="cof_overcat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COF Overpressure Category">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleFormControlSelect1">Fail to Open</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
										    <select name="fto_rank" class="form-control" id="exampleFormControlSelect1">
										      <option>Low</option>
										      <option>Medium</option>
										      <option>Medium High</option>
										      <option>High</option>
										    </select>
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">POL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">POL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="pol_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POL Category">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="COL">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">COL Category</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="col_cat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="COL Category">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Leaking Final</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
										    <select name="lf_rank" class="form-control" id="exampleFormControlSelect1">
										      <option>Low</option>
										      <option>Medium</option>
										      <option>Medium High</option>
										      <option>High</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Every TA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="eta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Every TA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">2xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="dua_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2xTA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">3xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="tiga_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="3xTA">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">4xTA</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
									    <input name="empat_ta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="4xTA">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Suggested Action</label>
									    <div class="col-md-6 col-sm-6 col-xs-12">
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