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
										@foreach($rbiammonia2bprd as $rbiammonia2bprd)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia2bprd->equipment_code}}</td>
											<td>{{$rbiammonia2bprd->ind_unit}}</td>
											<td>{{$rbiammonia2bprd->fto_rank}}</td>
											<td>{{$rbiammonia2bprd->lf_rank}}</td>
											<td>{{$rbiammonia2bprd->eta}}</td>
											<td>{{$rbiammonia2bprd->dua_ta}}</td>
											<td>{{$rbiammonia2bprd->tiga_ta}}</td>
											<td>{{$rbiammonia2bprd->empat_ta}}</td>
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
										@foreach($rbiammonia2bpv as $rbiammonia2bpv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia2bpv->equipment_code}}</td>
											<td>{{$rbiammonia2bpv->ind_unit}}</td>
											<td>{{$rbiammonia2bpv->area_rank}}</td>
											<td>{{$rbiammonia2bpv->fin_rank}}</td>
											<td>{{$rbiammonia2bpv->eta}}</td>
											<td>{{$rbiammonia2bpv->dua_ta}}</td>
											<td>{{$rbiammonia2bpv->tiga_ta}}</td>
											<td>{{$rbiammonia2bpv->empat_ta}}</td>
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
										@foreach($rbiammonia2bhe as $rbiammonia2bhe)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiammonia2bhe->equipment_code}}</td>
											<td>{{$rbiammonia2bhe->ind_unit}}</td>
											<td>{{$rbiammonia2bhe->risk_ranking}}</td>
											<td>{{$rbiammonia2bhe->eta}}</td>
											<td>{{$rbiammonia2bhe->dua_ta}}</td>
											<td>{{$rbiammonia2bhe->tiga_ta}}</td>
											<td>{{$rbiammonia2bhe->empat_ta}}</td>
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