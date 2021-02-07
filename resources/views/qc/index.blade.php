@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="grafik" style="width:100%; height:400px;">
								
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="grafik2" style="width:100%; height:400px;">
								
						</div>
					</div>
					<div class="col-md-12">
						@if(session('sukses'))
						<div class="alert alert-success" role="alert">
						  {{session('sukses')}}
						</div>
						@endif
						
						<br>
						<a href="{{ route('qc.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
						<br>
						<br>
						<div class="panel">
				            <div class="panel-heading">
				              <h3 class="panel-title">Warehouse</h3>
				              <div class="right">
				              	<a href="/print-qc"class="btn btn-primary">Export</a>
				              </div>
				            </div>

				            <div class="panel-body">
				            	<table class="table table-bordered" id="myTable">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">No GR</th>
											<th scope="col">No QC</th>
											<th scope="col">PO</th>
											<th scope="col">PR</th>
											<th scope="col">MATL CODE</th>
											<th scope="col">NAMA BARANG</th>
											<th scope="col">ITEM</th>
											<th scope="col">VENDOR</th>
											<th scope="col">P</th>
											<th scope="col">M</th>
											<th scope="col">G</th>
											<th scope="col">PENYERAHAN</th>
											<th scope="col">TE/TO</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($qc as $qc)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$qc->no_gr}}</td>
											<td>{{$qc->no_qc}}</td>
											<td>{{$qc->po}}</td>
											<td>{{$qc->pr}}</td>
											<td>{{$qc->matl_code}}</td>
											<td>{{$qc->nama_barang}}</td>
											<td>{{$qc->item}}</td>
											<td>{{$qc->vendor}}</td>
											<td>{{$qc->p}}</td>
											<td>{{$qc->m}}</td>
											<td>{{$qc->g}}</td>
											<td>{{$qc->penyerahan}}</td>
											<td>{{$qc->te_to}}</td>
											<td>
												<a href="/files/{{$qc->file}}" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a>
												<br>
												<br>
												<a href="/qc/{{$qc->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<br>
												<br>
												<a href="/qc/{{$qc->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus Report?')"><i class="fa fa-remove"></i></a>
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
	<script src="//code.highcharts.com/highcharts-3d.js"></script>
	<script type="text/javascript">
	$('.grafik').highcharts({
	 chart: {
	  type: 'pie',
	  options3d: {
      enabled: true,
      alpha: 45,
      beta: 0
    },
	  marginTop: 80
	 },
	 credits: {
	  enabled: false
	 }, 
	 tooltip: {
	  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	 },
	 title: {
	  text: 'Quality Control Chart'
	 },
	 subtitle: {
	
	 },
	 xAxis: {
	  categories: ['Quality Control Chart'],
	  labels: {
	   style: {
	    fontSize: '10px',
	    fontFamily: 'Verdana, sans-serif'
	   }
	  }
	 },
	 legend: {
	  enabled: true
	 },
	 plotOptions: {
	   pie: {
	     allowPointSelect: true,
	     cursor: 'pointer',
	     depth:45,
	     dataLabels: {
	       enabled: true
	     },
	     showInLegend: true
	   }
	 },
	 series: [{
	   name: 'Warehouse',
	   colorByPoint: true,
	   data: {!! json_encode($hasil) !!}
	 }]
	});
	</script>

	<script src="//code.highcharts.com/highcharts-3d.js"></script>
	<script type="text/javascript">
	$('.grafik2').highcharts({
	 chart: {
	  type: 'pie',
	  options3d: {
      enabled: true,
      alpha: 45,
      beta: 0
    },
	  marginTop: 80
	 },
	 credits: {
	  enabled: false
	 }, 
	 tooltip: {
	  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	 },
	 title: {
	  text: 'Lead Time Process'
	 },
	 subtitle: {
	  
	 },
	 xAxis: {
	  categories: ['Lead Time Process'],
	  labels: {
	   style: {
	    fontSize: '10px',
	    fontFamily: 'Verdana, sans-serif'
	   }
	  }
	 },
	 legend: {
	  enabled: true
	 },
	 plotOptions: {
	   pie: {
	     allowPointSelect: true,
	     cursor: 'pointer',
	     depth:45,
	     dataLabels: {
	       enabled: true
	     },
	     showInLegend: true
	   }
	 },
	 series: [{
	   name: 'Warehouse',
	   colorByPoint: true,
	   data: {!! json_encode($hasil2) !!}
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