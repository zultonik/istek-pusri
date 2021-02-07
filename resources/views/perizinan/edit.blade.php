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
								<h3 class="panel-title">Update Perizinan Peralatan</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Perizinan Peralatan!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/perizinan/{{$perizinan->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Plant Unit Data</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="plant_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Unit Data" value="{{$perizinan->plant_unit}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Last Test Date</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="last_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$perizinan->last_date}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Date of Testing Period</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="date_test" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$perizinan->date_test}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Certification Institution</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="certification_institution" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Certification Institution" value="{{$perizinan->certification_institution}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Certification Number</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="certification_number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Certification Number" value="{{$perizinan->certification_number}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/perizinan">
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