@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Plant Unit Data
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('npk.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                    	<div class="form-group">
									    <label for="exampleInputEmail1">Kode Gabungan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="code_gabungan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Gabungan">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Kode Perusahaan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="code_company" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Perusahaan">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Perusahaan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="company" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perusahaan">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Kode Plant Unit</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="code_plant" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Kode Plant Unit">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Plant Unit</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="plant" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Unit">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Kode Plant Section</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="code_section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Plant Section">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Plant Section</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Section">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Kode Plant Sub Section</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="code_sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Plant Sub Section">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">PLant Sub Section</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PLant Sub Section">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Equipment</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="equipment" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">Description</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Design &amp; Test Data</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Material Specification</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file2" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">PKP File</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file3" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Drawing File</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file4" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Picture of Equipment</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file5" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Spart Part Equipment</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file6" class="form-control-file" id="exampleFormControlFile1">
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