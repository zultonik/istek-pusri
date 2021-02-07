@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    New Report
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('weekly.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                        <div class="form-group">
									    <label for="exampleFormControlSelect1">Tahun</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="tahun" class="form-control" id="exampleFormControlSelect1">
										      <option>2019</option>
										      <option>2020</option>
										      <option>2021</option>
										      <option>2022</option>
										      <option>2023</option>
										      <option>2024</option>
										      <option>2025</option>
										      <option>2026</option>
										      <option>2027</option>
										      <option>2028</option>
										      <option>2029</option>
										      <option>2030</option>
										    </select>
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleFormControlSelect1">Bulan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="bulan" class="form-control" id="exampleFormControlSelect1">
										      <option>Januari</option>
										      <option>Februari</option>
										      <option>Maret</option>
										      <option>April</option>
										      <option>Mei</option>
										      <option>Juni</option>
										      <option>Juli</option>
										      <option>Agustus</option>
										      <option>September</option>
										      <option>Oktober</option>
										      <option>November</option>
										      <option>Desember</option>
										    </select>
										</div>
									</div>
									<div class="form-group">
									    <label for="exampleFormControlSelect1">Minggu Ke-</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="minggu" class="form-control" id="exampleFormControlSelect1">
										      <option>1</option>
										      <option>2</option>
										      <option>3</option>
										      <option>4</option>
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