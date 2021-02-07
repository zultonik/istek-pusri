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
				              <h3 class="panel-title">Employee Data</h3>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
					                <thead>
					                  <tr>
					                    <th scope="col">NO</th>
					                    <th scope="col">Nama</th>
					                    <th scope="col">Jabatan</th>
					                  </tr>
					                </thead>
					                <tbody>
					                @foreach($usermanage as $usermanage)
				                	<tr>
				                      <td>{{$loop->iteration}}</td>
										<td>{{$usermanage->nama}}</td>
										<td>{{$usermanage->jabatan}}</td>
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