@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Gugus Inovasi
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('gugus.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
				                    <div class="form-group">
									    <label for="exampleInputEmail1">Innovation Type</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="innovation_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Innovation Type">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Team Name</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="team_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Name">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Team Structure</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="team_structure" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Structure">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Year</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="year" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Year">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Innovation Title</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="innovation_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Innovation Title">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Abstraction</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="abstraction" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Abstraction">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Achievement</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="achievement" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Achievement">
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