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
						<div class="panel-dark">
							<div class="panel-body">
								<a href="{{ route('utilitas4.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> <small>Plant Unit</small>
								</a>
								<a class="btn btn-md btn-primary" href="qr_scan" style="margin-bottom: 10px">
			                      <i class="fa fa-qrcode"></i> <small>Scan QR</small>
			                    </a>
			                    <a class="btn btn-md btn-primary" data-toggle="modal" data-target=".print" style="margin-bottom: 10px">
			                      <i class="fa fa-print"></i> <small>Cetak</small>
			                    </a>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Plant Unit Data List</h3>
							</div>

							<div class="panel-body">
								<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Kode Gabungan</th>
											<th scope="col">Kode Perusahaan</th>
											<th scope="col">Perusahaan</th>
											<th scope="col">Kode Plant Unit</th>
											<th scope="col">Plant Unit</th>
											<th scope="col">Kode Plant Section</th>
											<th scope="col">Plant Section</th>
											<th scope="col">Kode Plant Sub Section</th>
											<th scope="col">PLant Sub Section</th>
											<th scope="col">Equipment</th>
											<th scope="col">Description</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($utilitas4 as $utilitas4)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$utilitas4->code_gabungan}}</td>
											<td>{{$utilitas4->code_company}}</td>
											<td>{{$utilitas4->company}}</td>
											<td>{{$utilitas4->code_plant}}</td>
											<td>{{$utilitas4->plant}}</td>
											<td>{{$utilitas4->code_section}}</td>
											<td>{{$utilitas4->section}}</td>
											<td>{{$utilitas4->code_sub}}</td>
											<td>{{$utilitas4->sub}}</td>
											<td>{{$utilitas4->equipment}}</td>
											<td>{{$utilitas4->description}}</td>
											<td>
												<a href="/utilitas4/{{$utilitas4->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<br>
												<br>
												<a href="/utilitas4/{{$utilitas4->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Report?')"><i class="fa fa-remove"></i></a>
												<br>
												<br>
												<a href="/utilitas4/{{$utilitas4->id}}/detail" class="btn btn-info btn-sm"><i class="fa fa-folder"></i></a>
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