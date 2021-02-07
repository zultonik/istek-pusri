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
						<a href="{{ route('juklak.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
						<br>
						<br>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Petunjuk Pelaksanaan</h3>
				              <div class="right">
				              	<a href="/print-juklak"class="btn btn-primary">Export</a>
				              </div>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">No Juklak</th>
											<th scope="col">Subject</th>
											<th scope="col">Create Date</th>
											<th scope="col">Resume Short</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($juklak as $juklak)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$juklak->no_juklak}}</td>
											<td>{{$juklak->subject}}</td>
											<td>{{$juklak->create_date}}</td>
											<td>{{$juklak->resume_short}}</td>
											<td>
												<a href="/files/{{$juklak->file}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<a href="/juklak/{{$juklak->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="/juklak/{{$juklak->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin  Menghapus Report?')"><i class="fa fa-remove"></i></a>
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