@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						@if(session('sukses'))
						<div class="alert alert-success" role="alert">
						  {{session('sukses')}}
						</div>
						@endif
						<a href="{{ route('smasuk.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
						<br>
						<br>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Surat Masuk</h3>
				              <div class="right">
				              	<a href="/print-smasuk"class="btn btn-primary">Export</a>
				              </div>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Nomor Surat</th>
											<th scope="col">Jenis Surat</th>
											<th scope="col">Asal Surat</th>
											<th scope="col">Tanggal Surat</th>
											<th scope="col">Perihal</th>
											<th scope="col">Tanggal Surat Terima</th>
											<th scope="col">Sifat Surat</th>
											<th scope="col">Tujuan Disposisi</th>
											<th scope="col">No Agenda Disposisi</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($smasuk as $smasuk)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$smasuk->no_surat}}</td>
											<td>{{$smasuk->jenis_surat}}</td>
											<td>{{$smasuk->asal_surat}}</td>
											<td>{{$smasuk->tanggal_surat}}</td>
											<td>{{$smasuk->perihal}}</td>
											<td>{{$smasuk->tanggal_terima}}</td>
											<td>{{$smasuk->sifat_surat}}</td>
											<td>{{$smasuk->tujuan}}</td>
											<td>{{$smasuk->no_agenda}}</td>
											<td>
												<a href="/files/{{$smasuk->file}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<br>
												<br>
												<a href="/smasuk/{{$smasuk->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<br>
												<br>
												<a href="/smasuk/{{$smasuk->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Report?')"><i class="fa fa-remove"></i></a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('script')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
@stop