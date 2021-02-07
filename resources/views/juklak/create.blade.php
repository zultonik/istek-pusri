@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Petunjuk Pelaksanaan
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('juklak.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                    	<div class="form-group">
									    <label for="exampleInputEmail1">No Juklak</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="no_juklak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Juklak">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Subject</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="subject" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Create Date</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="create_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Resume Short</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="resume_short" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Resume Short">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleFormControlFile1">Input File</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    	<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
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