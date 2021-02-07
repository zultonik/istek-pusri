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
								<h3 class="panel-title">Update Inspection Report</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Inspection Report!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/insreport/{{$insreport->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Plant Unit Data</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="plant_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Unit Data" value="{{$insreport->plant_unit}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Inspection Report</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="inspection_report" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Inspection Report" value="{{$insreport->inspection_report}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Create Date</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="create_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$insreport->create_date}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Document Title</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="document_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Document Title" value="{{$insreport->document_title}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Repair Resume</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="repair_resume" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Repair Resume" value="{{$insreport->repair_resume}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/insreport">
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