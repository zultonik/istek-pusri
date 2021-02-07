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
								<h3 class="panel-title">Update Petunjuk Pelaksanaan</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Petunjuk Pelaksanaan!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/juklak/{{$juklak->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Juklak</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_juklak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Juklak" value="{{$juklak->no_juklak}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Subject</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="subject" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject" value="{{$juklak->subject}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Create Date</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="create_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$juklak->create_date}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Resume Short</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="resume_short" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Resume Short" value="{{$juklak->resume_short}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/juklak">
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