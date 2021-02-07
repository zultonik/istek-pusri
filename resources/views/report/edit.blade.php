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
								<h3 class="panel-title">Update Report</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Monthly Report!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/report/{{$report->id}}/update" method="POST" enctype="multipart/form-data">
					        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Tahun</label>
							    <div class="col-md-8 col-sm-6 col-xs-12">
							    <select name="tahun" class="form-control" id="exampleFormControlSelect1">
							      <option value="2019" @if($report->tahun == '2019') selected @endif>2019</option>
							      <option value="2020" @if($report->tahun == '2020') selected @endif>2020</option>
							      <option value="2020" @if($report->tahun == '2021') selected @endif>2021</option>
							      <option value="2022" @if($report->tahun == '2022') selected @endif>2022</option>
							      <option value="2023" @if($report->tahun == '2023') selected @endif>2023</option>
							      <option value="2024" @if($report->tahun == '2024') selected @endif>2024</option>
							      <option value="2025" @if($report->tahun == '2025') selected @endif>2025</option>
							      <option value="2026" @if($report->tahun == '2026') selected @endif>2026</option>
							      <option value="2027" @if($report->tahun == '2027') selected @endif>2027</option>
							      <option value="2028" @if($report->tahun == '2028') selected @endif>2028</option>
							      <option value="2029" @if($report->tahun == '2029') selected @endif>2029</option>
							      <option value="2030" @if($report->tahun == '2030') selected @endif>2030</option>
							    </select>
								</div>
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Bulan</label>
							    <div class="col-md-8 col-sm-6 col-xs-12">
							    <select name="bulan" class="form-control" id="exampleFormControlSelect1">
							      <option value="Januari" @if($report->bulan == 'Januari') selected @endif>Januari</option>
							      <option value="Februari" @if($report->bulan == 'Februari') selected @endif>Februari</option>
							      <option value="Maret" @if($report->bulan == 'Maret') selected @endif>Maret</option>
							      <option value="April" @if($report->bulan == 'April') selected @endif>April</option>
							      <option value="Mei" @if($report->bulan == 'Mei') selected @endif>Mei</option>
							      <option value="Juni" @if($report->bulan == 'Juni') selected @endif>Juni</option>
							      <option value="Juli" @if($report->bulan == 'Juli') selected @endif>Juli</option>
							      <option value="Agustus" @if($report->bulan == 'Agustus') selected @endif>Agustus</option>
							      <option value="September" @if($report->bulan == 'September') selected @endif>September</option>
							      <option value="Oktober" @if($report->bulan == 'Oktober') selected @endif>Oktober</option>
							      <option value="November" @if($report->bulan == 'November') selected @endif>November</option>
							      <option value="Desember" @if($report->bulan == 'Desember') selected @endif>Desember</option>
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
								<a href="/report">
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