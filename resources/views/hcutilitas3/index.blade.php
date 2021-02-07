@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-md-12">
						@if(session('sukses'))
						<div class="alert alert-success" role="alert">
						  {{session('sukses')}}
						</div>
						@endif
						
						<a href="{{ route('hcutilitas3.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
						<br>
						<br>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Management History Card</h3>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Date</th>
											<th scope="col">No Alat</th>
											<th scope="col">Nama Alat</th>
											<th scope="col">Hasil Pemeriksaan</th>
											<th scope="col">Metode Perbaikan</th>
											<th scope="col">Saran</th>
											<th scope="col">Kesimpulan</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($hcutilitas3 as $hcutilitas3)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$hcutilitas3->date}}</td>
											<td>{{$hcutilitas3->no_alat}}</td>
											<td>{{$hcutilitas3->nama_alat}}</td>
											<td>{{$hcutilitas3->hasil_pemeriksaan}}</td>
											<td>{{$hcutilitas3->metode_perbaikan}}</td>
											<td>{{$hcutilitas3->saran}}</td>
											<td>{{$hcutilitas3->kesimpulan}}</td>
											<td>
												<a href="/files/{{$hcutilitas3->file}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<a href="/hcutilitas3/{{$hcutilitas3->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="/hcutilitas3/{{$hcutilitas3->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Report?')"><i class="fa fa-remove"></i></a>
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

@section('footer')
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Management History Card'
		    },
		    subtitle: {
		        text: 'Kesimpulan'
		    },
		    xAxis: {
		        categories: ['A', 'B', 'C'],
		        title: {
		            text: null
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Jumlah'
		        },
		        labels: {
		            overflow: 'justify'
		        }
		    },
		    tooltip: {
		        valueSuffix: ''
		    },
		    plotOptions: {
		        bar: {
		            dataLabels: {
		                enabled: false
		            }
		        }
		    },
		    legend: {
	  			enabled: false
		    },
		    credits: {
		        enabled: false
		    },
		    series: [{
			   name: 'Kesimpulan',
			   colorByPoint: true,
			   data: {!! json_encode($hasil) !!}
			 }]
		});
	</script>
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