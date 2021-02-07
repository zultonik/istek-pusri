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
								<h3 class="panel-title">Update Rekomendasi</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Rekomendasi!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/rekomutilitas1b/{{$rekomutilitas1b->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Date</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date" value="{{$rekomutilitas1b->date}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nomor Alat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Alat" value="{{$rekomutilitas1b->no_alat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Alat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat" value="{{$rekomutilitas1b->nama_alat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Area</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Area" value="{{$rekomutilitas1b->area}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Rekomendasi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_rekom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Rekomendasi" value="{{$rekomutilitas1b->no_rekom}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No Notifikasi</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_notif" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Notifikasi" value="{{$rekomutilitas1b->no_notif}}">
									</div>
								  </div>
								  <div class="form-group">
									    <label for="exampleFormControlTextarea1">For Action</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <textarea name="act" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="For Action">{{$rekomutilitas1b->act}}</textarea>
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
									<a href="/rekomutilitas1b">
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