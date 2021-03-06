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
										@foreach($rbinpkprd as $rbinpkprd)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbinpkprd->equipment_code}}</td>
											<td>{{$rbinpkprd->ind_unit}}</td>
											<td>{{$rbinpkprd->fto_rank}}</td>
											<td>{{$rbinpkprd->lf_rank}}</td>
											<td>{{$rbinpkprd->eta}}</td>
											<td>{{$rbinpkprd->dua_ta}}</td>
											<td>{{$rbinpkprd->tiga_ta}}</td>
											<td>{{$rbinpkprd->empat_ta}}</td>
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
										@foreach($rbinpkpv as $rbinpkpv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbinpkpv->equipment_code}}</td>
											<td>{{$rbinpkpv->ind_unit}}</td>
											<td>{{$rbinpkpv->area_rank}}</td>
											<td>{{$rbinpkpv->fin_rank}}</td>
											<td>{{$rbinpkpv->eta}}</td>
											<td>{{$rbinpkpv->dua_ta}}</td>
											<td>{{$rbinpkpv->tiga_ta}}</td>
											<td>{{$rbinpkpv->empat_ta}}</td>
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
										@foreach($rbinpktank as $rbinpktank)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbinpktank->equipment_code}}</td>
											<td>{{$rbinpktank->ind_unit}}</td>
											<td>{{$rbinpktank->area_rank}}</td>
											<td>{{$rbinpktank->fin_rank}}</td>
											<td>{{$rbinpktank->eta}}</td>
											<td>{{$rbinpktank->dua_ta}}</td>
											<td>{{$rbinpktank->tiga_ta}}</td>
											<td>{{$rbinpktank->empat_ta}}</td>
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
										@foreach($rbinpkhe as $rbinpkhe)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbinpkhe->equipment_code}}</td>
											<td>{{$rbinpkhe->ind_unit}}</td>
											<td>{{$rbinpkhe->risk_ranking}}</td>
											<td>{{$rbinpkhe->eta}}</td>
											<td>{{$rbinpkhe->dua_ta}}</td>
											<td>{{$rbinpkhe->tiga_ta}}</td>
											<td>{{$rbinpkhe->empat_ta}}</td>
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