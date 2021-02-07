@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Perizinan Peralatan
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('perizinan.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Plant Unit Data</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="plant_unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Unit Data">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Last Test Date</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="last_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Date of Testing Period</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="date_test" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Certification Institution</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="certification_institution" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Certification Institution">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Certification Number</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="certification_number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Certification Number">
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