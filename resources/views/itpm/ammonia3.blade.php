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
										@foreach($rbiammonia3prd as $rbiammonia3prd)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia3prd->equipment_code}}</td>
											<td>{{$rbiammonia3prd->ind_unit}}</td>
											<td>{{$rbiammonia3prd->fto_rank}}</td>
											<td>{{$rbiammonia3prd->lf_rank}}</td>
											<td>{{$rbiammonia3prd->eta}}</td>
											<td>{{$rbiammonia3prd->dua_ta}}</td>
											<td>{{$rbiammonia3prd->tiga_ta}}</td>
											<td>{{$rbiammonia3prd->empat_ta}}</td>
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
										@foreach($rbiammonia3pv as $rbiammonia3pv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia3pv->equipment_code}}</td>
											<td>{{$rbiammonia3pv->ind_unit}}</td>
											<td>{{$rbiammonia3pv->area_rank}}</td>
											<td>{{$rbiammonia3pv->fin_rank}}</td>
											<td>{{$rbiammonia3pv->eta}}</td>
											<td>{{$rbiammonia3pv->dua_ta}}</td>
											<td>{{$rbiammonia3pv->tiga_ta}}</td>
											<td>{{$rbiammonia3pv->empat_ta}}</td>
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
										@foreach($rbiammonia3he as $rbiammonia3he)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia3he->equipment_code}}</td>
											<td>{{$rbiammonia3he->ind_unit}}</td>
											<td>{{$rbiammonia3he->risk_ranking}}</td>
											<td>{{$rbiammonia3he->eta}}</td>
											<td>{{$rbiammonia3he->dua_ta}}</td>
											<td>{{$rbiammonia3he->tiga_ta}}</td>
											<td>{{$rbiammonia3he->empat_ta}}</td>
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