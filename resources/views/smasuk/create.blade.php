@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    Surat Masuk
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('smasuk.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       <div class="form-group">
								    <label for="exampleInputEmail1">Nomor Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Surat">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Jenis Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="jenis_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Surat">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Asal Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="asal_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Surat">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tanggal Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tanggal_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Perihal</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="perihal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tanggal Surat Terima</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tanggal_terima" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Sifat Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="sifat_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sifat Surat">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tujuan Disposisi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan Disposisi">
								</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Agenda Disposisi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_agenda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Agenda Disposisi">
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