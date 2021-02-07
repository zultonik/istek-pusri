@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    New History Card
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('hcurea1b.store') }}" method="POST" enctype="multipart/form-data">
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
									    <label for="exampleFormControlTextarea1">Hasil Pemeriksaan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="hasil_pemeriksaan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Hasil Pemeriksaan"></textarea>
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlTextarea1">Metode Perbaikan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="metode_perbaikan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Metode Perbaikan"></textarea>
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlTextarea1">Saran</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="saran" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Saran"></textarea>
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Kesimpulan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="kesimpulan" class="form-control" id="exampleFormControlSelect1">
										      <option>A</option>
										      <option>B</option>
										      <option>C</option>
										    </select>
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