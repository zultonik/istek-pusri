@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    New Rekomendasi
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('rekomutilitas4.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">Date</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">No Alat</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="no_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Alat">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Nama Alat</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Area</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">No Rekomendasi</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="no_rekom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Rekomendasi">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">No Notifikasi</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="no_notif" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Notifikasi">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlTextarea1">For Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="For Action"></textarea>
									    </div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlFile1">Lampiran</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    	<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleFormControlFile1">Rekomendasi</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    	<input type="file" name="file2" class="form-control-file" id="exampleFormControlFile1">
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