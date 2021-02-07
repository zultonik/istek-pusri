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
										@foreach($rbiammonia1bprd as $rbiammonia1bprd)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia1bprd->equipment_code}}</td>
											<td>{{$rbiammonia1bprd->ind_unit}}</td>
											<td>{{$rbiammonia1bprd->fto_rank}}</td>
											<td>{{$rbiammonia1bprd->lf_rank}}</td>
											<td>{{$rbiammonia1bprd->eta}}</td>
											<td>{{$rbiammonia1bprd->dua_ta}}</td>
											<td>{{$rbiammonia1bprd->tiga_ta}}</td>
											<td>{{$rbiammonia1bprd->empat_ta}}</td>
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
										@foreach($rbiammonia1bpv as $rbiammonia1bpv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia1bpv->equipment_code}}</td>
											<td>{{$rbiammonia1bpv->ind_unit}}</td>
											<td>{{$rbiammonia1bpv->area_rank}}</td>
											<td>{{$rbiammonia1bpv->fin_rank}}</td>
											<td>{{$rbiammonia1bpv->eta}}</td>
											<td>{{$rbiammonia1bpv->dua_ta}}</td>
											<td>{{$rbiammonia1bpv->tiga_ta}}</td>
											<td>{{$rbiammonia1bpv->empat_ta}}</td>
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
										@foreach($rbiammonia1bhe as $rbiammonia1bhe)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia1bhe->equipment_code}}</td>
											<td>{{$rbiammonia1bhe->ind_unit}}</td>
											<td>{{$rbiammonia1bhe->risk_ranking}}</td>
											<td>{{$rbiammonia1bhe->eta}}</td>
											<td>{{$rbiammonia1bhe->dua_ta}}</td>
											<td>{{$rbiammonia1bhe->tiga_ta}}</td>
											<td>{{$rbiammonia1bhe->empat_ta}}</td>
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