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
						
						<a href="{{ route('rekomstgbbjetty.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
						<br>
						<br>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Rekomendasi</h3>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Date</th>
											<th scope="col">No Alat</th>
											<th scope="col">Nama Alat</th>
											<th scope="col">Area</th>
											<th scope="col">No Rekomendasi</th>
											<th scope="col">No Notifikasi</th>
											<th scope="col">For Action</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rekomstgbbjetty as $rekomstgbbjetty)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rekomstgbbjetty->date}}</td>
											<td>{{$rekomstgbbjetty->no_alat}}</td>
											<td>{{$rekomstgbbjetty->nama_alat}}</td>
											<td>{{$rekomstgbbjetty->area}}</td>
											<td>{{$rekomstgbbjetty->no_rekom}}</td>
											<td>{{$rekomstgbbjetty->no_notif}}</td>
											<td>{{$rekomstgbbjetty->act}}</td>
											<td>
												<a href="/files/{{$rekomstgbbjetty->file}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<a href="/files/{{$rekomstgbbjetty->file2}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<a href="/rekomstgbbjetty/{{$rekomstgbbjetty->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="/rekomstgbbjetty/{{$rekomstgbbjetty->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Report?')"><i class="fa fa-remove"></i></a>
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