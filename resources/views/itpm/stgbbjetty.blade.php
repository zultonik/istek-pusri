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
										@foreach($rbistgbbjettyprd as $rbistgbbjettyprd)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbistgbbjettyprd->equipment_code}}</td>
											<td>{{$rbistgbbjettyprd->ind_unit}}</td>
											<td>{{$rbistgbbjettyprd->fto_rank}}</td>
											<td>{{$rbistgbbjettyprd->lf_rank}}</td>
											<td>{{$rbistgbbjettyprd->eta}}</td>
											<td>{{$rbistgbbjettyprd->dua_ta}}</td>
											<td>{{$rbistgbbjettyprd->tiga_ta}}</td>
											<td>{{$rbistgbbjettyprd->empat_ta}}</td>
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
										@foreach($rbistgbbjettypv as $rbistgbbjettypv)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbistgbbjettypv->equipment_code}}</td>
											<td>{{$rbistgbbjettypv->ind_unit}}</td>
											<td>{{$rbistgbbjettypv->area_rank}}</td>
											<td>{{$rbistgbbjettypv->fin_rank}}</td>
											<td>{{$rbistgbbjettypv->eta}}</td>
											<td>{{$rbistgbbjettypv->dua_ta}}</td>
											<td>{{$rbistgbbjettypv->tiga_ta}}</td>
											<td>{{$rbistgbbjettypv->empat_ta}}</td>
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
										@foreach($rbistgbbjettytank as $rbistgbbjettytank)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbistgbbjettytank->equipment_code}}</td>
											<td>{{$rbistgbbjettytank->ind_unit}}</td>
											<td>{{$rbistgbbjettytank->area_rank}}</td>
											<td>{{$rbistgbbjettytank->fin_rank}}</td>
											<td>{{$rbistgbbjettytank->eta}}</td>
											<td>{{$rbistgbbjettytank->dua_ta}}</td>
											<td>{{$rbistgbbjettytank->tiga_ta}}</td>
											<td>{{$rbistgbbjettytank->empat_ta}}</td>
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
										@foreach($rbistgbbjettyhe as $rbistgbbjettyhe)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$rbistgbbjettyhe->equipment_code}}</td>
											<td>{{$rbistgbbjettyhe->ind_unit}}</td>
											<td>{{$rbistgbbjettyhe->risk_ranking}}</td>
											<td>{{$rbistgbbjettyhe->eta}}</td>
											<td>{{$rbistgbbjettyhe->dua_ta}}</td>
											<td>{{$rbistgbbjettyhe->tiga_ta}}</td>
											<td>{{$rbistgbbjettyhe->empat_ta}}</td>
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