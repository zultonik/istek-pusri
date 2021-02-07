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
						<a href="{{ route('gugus.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
						<br>
						<br>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Gugus Inovasi</h3>
				              <div class="right">
				              	<a href="/print-gugus"class="btn btn-primary">Export</a>
				              </div>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Innovation Type</th>
											<th scope="col">Team Name</th>
											<th scope="col">Team Structure</th>
											<th scope="col">Year</th>
											<th scope="col">Innovation Title</th>
											<th scope="col">Abstraction</th>
											<th scope="col">Achievement</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($gugus as $gugus)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$gugus->innovation_type}}</td>
											<td>{{$gugus->team_name}}</td>
											<td>{{$gugus->team_structure}}</td>
											<td>{{$gugus->year}}</td>
											<td>{{$gugus->innovation_title}}</td>
											<td>{{$gugus->abstraction}}</td>
											<td>{{$gugus->achievement}}</td>
											<td>
												<a href="/files/{{$gugus->file}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<a href="/gugus/{{$gugus->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="/gugus/{{$gugus->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin  Menghapus Report?')"><i class="fa fa-remove"></i></a>
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