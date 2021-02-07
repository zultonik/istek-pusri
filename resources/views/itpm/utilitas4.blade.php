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
				              <h3 class="panel-title">Pressure Vessel & Piping</h3>
				            </div>

				            <div class="panel-body">
								<table class="table table-bordered" id="myTable2">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Equipment Code</th>
											<th scope="col">Industry Unit</th>
											<th scope="col">Risk Ranking Area</th>
											<th scope="col">Risk Ranking Financial</th>
											<th scope="col">Every TA</th>
											<th scope="col">2xTA</th>
											<th scope="col">3xTA</th>
											<th scope="col">4xTA</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rbiutilitas4pv as $rbiutilitas4pv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiutilitas4pv->equipment_code}}</td>
											<td>{{$rbiutilitas4pv->ind_unit}}</td>
											<td>{{$rbiutilitas4pv->area_rank}}</td>
											<td>{{$rbiutilitas4pv->fin_rank}}</td>
											<td>{{$rbiutilitas4pv->eta}}</td>
											<td>{{$rbiutilitas4pv->dua_ta}}</td>
											<td>{{$rbiutilitas4pv->tiga_ta}}</td>
											<td>{{$rbiutilitas4pv->empat_ta}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Atmosferic Storage Tank</h3>
				            </div>

				            <div class="panel-body">
								<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Equipment Code</th>
											<th scope="col">Industry Unit</th>
											<th scope="col">Risk Ranking Area</th>
											<th scope="col">Risk Ranking Financial</th>
											<th scope="col">Every TA</th>
											<th scope="col">2xTA</th>
											<th scope="col">3xTA</th>
											<th scope="col">4xTA</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rbiutilitas4tank as $rbiutilitas4tank)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiutilitas4tank->equipment_code}}</td>
											<td>{{$rbiutilitas4tank->ind_unit}}</td>
											<td>{{$rbiutilitas4tank->area_rank}}</td>
											<td>{{$rbiutilitas4tank->fin_rank}}</td>
											<td>{{$rbiutilitas4tank->eta}}</td>
											<td>{{$rbiutilitas4tank->dua_ta}}</td>
											<td>{{$rbiutilitas4tank->tiga_ta}}</td>
											<td>{{$rbiutilitas4tank->empat_ta}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Heat Exchanger</h3>
				            </div>

				            <div class="panel-body">
								<table class="table table-bordered" id="myTable3">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Equipment Code</th>
											<th scope="col">Industry Unit</th>
											<th scope="col">Risk Ranking</th>
											<th scope="col">Every TA</th>
											<th scope="col">2xTA</th>
											<th scope="col">3xTA</th>
											<th scope="col">4xTA</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rbiutilitas4he as $rbiutilitas4he)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiutilitas4he->equipment_code}}</td>
											<td>{{$rbiutilitas4he->ind_unit}}</td>
											<td>{{$rbiutilitas4he->risk_ranking}}</td>
											<td>{{$rbiutilitas4he->eta}}</td>
											<td>{{$rbiutilitas4he->dua_ta}}</td>
											<td>{{$rbiutilitas4he->tiga_ta}}</td>
											<td>{{$rbiutilitas4he->empat_ta}}</td>
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
    <script>
      $(document).ready( function () {
          $('#myTable2').DataTable();
      } );
    </script>
    <script>
      $(document).ready( function () {
          $('#myTable3').DataTable();
      } );
    </script>
@stop