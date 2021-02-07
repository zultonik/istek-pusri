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
								<h3 class="panel-title">Update Surat Keluar</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Surat Keluar!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/skeluar/{{$skeluar->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   <div class="form-group">
								    <label for="exampleInputEmail1">Nomor Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Surat"value="{{$skeluar->no_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Jenis Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="jenis_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Surat"value="{{$skeluar->jenis_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tujuan Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tujuan_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan Surat"value="{{$skeluar->tujuan_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tembusan Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tembusan_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Tembusan Surat"value="{{$skeluar->tembusan_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Perihal</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="perihal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perihal"value="{{$skeluar->perihal}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tanggal Surat Keluar</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="tanggal_keluar" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$skeluar->tanggal_keluar}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Sifat Surat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="sifat_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sifat Surat"value="{{$skeluar->sifat_surat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Penyelesaian Disposisi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="penyelesaian_disposisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penyelesaian Disposisi"value="{{$skeluar->penyelesaian_disposisi}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Agenda Disposisi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_agenda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Agenda Disposisi"value="{{$skeluar->no_agenda}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/skeluar">
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