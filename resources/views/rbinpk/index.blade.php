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
								Add RBI Analysis
							</div>
							<div class="panel-body">
								<a href="{{ route('rbinpk.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> <small>Add PRD</small>
								</a>
								<a href="{{ route('rbinpkpv.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i>
								<small>Add PV & Piping</small>
								</a>
								<a href="{{ route('rbinpktank.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i>
								<small>Add AST</small>
								</a>
								<a href="{{ route('rbinpkhe.create') }}" class="btn btn-md btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i>
								<small>Add HE</small>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar2" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar3" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar4" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar5" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar6" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar7" style="width:100%; height:400px;">
								
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
		        text: 'Pressure Relief Device'
		    },
		    subtitle: {
		        text: '<a href="/prd_npk">Fail to Open</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Fail to Open',
			   colorByPoint: true,
			   data: {!! json_encode($hasil) !!}
			 }]
		});
	</script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar2', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Pressure Relief Device'
		    },
		    subtitle: {
		        text: '<a href="/prd_npk">Leaking Final</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Leaking Final',
			   colorByPoint: true,
			   data: {!! json_encode($hasil2) !!}
			 }]
		});
	</script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar3', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Pressure Vessel & Piping'
		    },
		    subtitle: {
		        text: '<a href="/pv_npk">Risk Ranking Area</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Risk Ranking Area',
			   colorByPoint: true,
			   data: {!! json_encode($hasil3) !!}
			 }]
		});
	</script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar4', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Pressure Vessel & Piping'
		    },
		    subtitle: {
		        text: '<a href="/pv_npk">Risk Ranking Financial</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Risk Ranking Financial',
			   colorByPoint: true,
			   data: {!! json_encode($hasil4) !!}
			 }]
		});
	</script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar5', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Atmosferic Storage Tank'
		    },
		    subtitle: {
		        text: '<a href="/ast_npk">Risk Ranking Area</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Risk Ranking Area',
			   colorByPoint: true,
			   data: {!! json_encode($hasil5) !!}
			 }]
		});
	</script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar6', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Atmosferic Storage Tank'
		    },
		    subtitle: {
		        text: '<a href="/ast_npk">Risk Ranking Financial</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Risk Ranking Financial',
			   colorByPoint: true,
			   data: {!! json_encode($hasil6) !!}
			 }]
		});
	</script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		Highcharts.chart('bar7', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Heat Exchanger'
		    },
		    subtitle: {
		        text: '<a href="/he_npk">Risk Ranking</a>'
		    },
		    xAxis: {
		        categories: ['High', 'Medium High', 'Medium', 'Low'],
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
			   name: 'Risk Ranking',
			   colorByPoint: true,
			   data: {!! json_encode($hasil7) !!}
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