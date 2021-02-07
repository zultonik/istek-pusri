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
								<h3 class="panel-title">Update Surat Masuk</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Surat Masuk!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/smasuk/{{$smasuk->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nomor Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Surat" value="{{$smasuk->no_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Jenis Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="jenis_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Surat" value="{{$smasuk->jenis_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Asal Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="asal_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Surat" value="{{$smasuk->asal_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tanggal Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tanggal_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$smasuk->tanggal_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Perihal</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="perihal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal" value="{{$smasuk->perihal}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tanggal Surat Terima</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tanggal_terima" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$smasuk->tanggal_terima}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Sifat Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="sifat_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sifat Surat" value="{{$smasuk->sifat_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tujuan Disposisi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan Disposisi" value="{{$smasuk->tujuan}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Agenda Disposisi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_agenda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Agenda Disposisi" value="{{$smasuk->no_agenda}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/smasuk">
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