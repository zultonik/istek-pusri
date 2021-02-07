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
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Heat Exchanger</h3>
				            </div>

				            <div class="panel-body">
								<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Equipment Code</th>
											<th scope="col">Exchanger Type</th>
											<th scope="col">Risk Ranking</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rbiurea2bhe as $rbiurea2bhe)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiurea2bhe->equipment_code}}</td>
											<td>{{$rbiurea2bhe->exchanger_type}}</td>
											<td>{{$rbiurea2bhe->risk_ranking}}</td>
											<td>
												<a href="/rbiurea2bhe/{{$rbiurea2bhe->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="/rbiurea2bhe/{{$rbiurea2bhe->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Report?')"><i class="fa fa-remove"></i></a>
												<a href="/rbiurea2bhe/{{$rbiurea2bhe->id}}/detail" class="btn btn-info btn-sm"><i class="fa fa-folder"></i></a>
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