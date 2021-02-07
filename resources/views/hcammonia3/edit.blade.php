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
								<h3 class="panel-title">Update History Card</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data History Card!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/hcammonia3/{{$hcammonia3->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Date</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date" value="{{$hcammonia3->date}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nomor Alat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Alat" value="{{$hcammonia3->no_alat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Alat</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat" value="{{$hcammonia3->nama_alat}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Hasil Pemeriksaan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="hasil_pemeriksaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hasil Pemeriksaan" value="{{$hcammonia3->hasil_pemeriksaan}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Metode Perbaikan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="metode_perbaikan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Metode Perbaikan" value="{{$hcammonia3->metode_perbaikan}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Saran</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="saran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saran" value="{{$hcammonia3->saran}}">
									</div>
								  </div>
								  <div class="form-group">
									    <label for="exampleFormControlSelect1">Kesimpulan</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="kesimpulan" class="form-control" id="exampleFormControlSelect1">
										      <option value="A" @if($hcammonia3->kesimpulan == 'A') selected @endif>A</option>
										      <option value="B" @if($hcammonia3->kesimpulan == 'B') selected @endif>B</option>
										      <option value="C" @if($hcammonia3->kesimpulan == 'C') selected @endif>C</option>
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
									<a href="/hcammonia3">
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