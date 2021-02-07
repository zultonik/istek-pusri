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
				              <h3 class="panel-title">Pressure Relief Device</h3>
				            </div>

				            <div class="panel-body">
								<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Equipment Code</th>
											<th scope="col">Industry Unit</th>
											<th scope="col">Fail To Open</th>
											<th scope="col">Leaking Final</th>
											<th scope="col">Every TA</th>
											<th scope="col">2xTA</th>
											<th scope="col">3xTA</th>
											<th scope="col">4xTA</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rbiurea3prd as $rbiurea3prd)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiurea3prd->equipment_code}}</td>
											<td>{{$rbiurea3prd->ind_unit}}</td>
											<td>{{$rbiurea3prd->fto_rank}}</td>
											<td>{{$rbiurea3prd->lf_rank}}</td>
											<td>{{$rbiurea3prd->eta}}</td>
											<td>{{$rbiurea3prd->dua_ta}}</td>
											<td>{{$rbiurea3prd->tiga_ta}}</td>
											<td>{{$rbiurea3prd->empat_ta}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
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
										@foreach($rbiurea3pv as $rbiurea3pv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiurea3pv->equipment_code}}</td>
											<td>{{$rbiurea3pv->ind_unit}}</td>
											<td>{{$rbiurea3pv->area_rank}}</td>
											<td>{{$rbiurea3pv->fin_rank}}</td>
											<td>{{$rbiurea3pv->eta}}</td>
											<td>{{$rbiurea3pv->dua_ta}}</td>
											<td>{{$rbiurea3pv->tiga_ta}}</td>
											<td>{{$rbiurea3pv->empat_ta}}</td>
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
								<table class="table table-bordered" id="myTable4">
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
										@foreach($rbiurea3tank as $rbiurea3tank)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiurea3tank->equipment_code}}</td>
											<td>{{$rbiurea3tank->ind_unit}}</td>
											<td>{{$rbiurea3tank->area_rank}}</td>
											<td>{{$rbiurea3tank->fin_rank}}</td>
											<td>{{$rbiurea3tank->eta}}</td>
											<td>{{$rbiurea3tank->dua_ta}}</td>
											<td>{{$rbiurea3tank->tiga_ta}}</td>
											<td>{{$rbiurea3tank->empat_ta}}</td>
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
										@foreach($rbiurea3he as $rbiurea3he)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiurea3he->equipment_code}}</td>
											<td>{{$rbiurea3he->ind_unit}}</td>
											<td>{{$rbiurea3he->risk_ranking}}</td>
											<td>{{$rbiurea3he->eta}}</td>
											<td>{{$rbiurea3he->dua_ta}}</td>
											<td>{{$rbiurea3he->tiga_ta}}</td>
											<td>{{$rbiurea3he->empat_ta}}</td>
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
    <script>
      $(document).ready( function () {
          $('#myTable4').DataTable();
      } );
    </script>
@stop