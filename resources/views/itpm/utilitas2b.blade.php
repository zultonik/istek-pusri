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
										@foreach($rbiutilitas2bpv as $rbiutilitas2bpv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiutilitas2bpv->equipment_code}}</td>
											<td>{{$rbiutilitas2bpv->ind_unit}}</td>
											<td>{{$rbiutilitas2bpv->area_rank}}</td>
											<td>{{$rbiutilitas2bpv->fin_rank}}</td>
											<td>{{$rbiutilitas2bpv->eta}}</td>
											<td>{{$rbiutilitas2bpv->dua_ta}}</td>
											<td>{{$rbiutilitas2bpv->tiga_ta}}</td>
											<td>{{$rbiutilitas2bpv->empat_ta}}</td>
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
										@foreach($rbiutilitas2btank as $rbiutilitas2btank)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiutilitas2btank->equipment_code}}</td>
											<td>{{$rbiutilitas2btank->ind_unit}}</td>
											<td>{{$rbiutilitas2btank->area_rank}}</td>
											<td>{{$rbiutilitas2btank->fin_rank}}</td>
											<td>{{$rbiutilitas2btank->eta}}</td>
											<td>{{$rbiutilitas2btank->dua_ta}}</td>
											<td>{{$rbiutilitas2btank->tiga_ta}}</td>
											<td>{{$rbiutilitas2btank->empat_ta}}</td>
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
										@foreach($rbiutilitas2bhe as $rbiutilitas2bhe)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbiutilitas2bhe->equipment_code}}</td>
											<td>{{$rbiutilitas2bhe->ind_unit}}</td>
											<td>{{$rbiutilitas2bhe->risk_ranking}}</td>
											<td>{{$rbiutilitas2bhe->eta}}</td>
											<td>{{$rbiutilitas2bhe->dua_ta}}</td>
											<td>{{$rbiutilitas2bhe->tiga_ta}}</td>
											<td>{{$rbiutilitas2bhe->empat_ta}}</td>
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