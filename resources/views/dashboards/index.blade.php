@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-4 col-md-6">
	                        <div class="panel panel-maroon">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-database fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">Ammonia : {{$count}}</div>
	                                        <div class="huge"><a href="/urea1b" style="color: white">Urea : {{$countur1b}}</a></div>
	                                        <div class="huge"><a href="/utilitas1b" style="color: white">Utilitas : {{$countuti1b}}</a></div>
	                                        <div>Data Master Pusri 1B</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="/ammonia1b">
	                                <div class="panel-footer">
	                                    <span class="pull-left">View Details</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
                    	</div>
	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-aqua">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-database fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">Ammonia : {{$count2}}</div>
	                                        <div class="huge"><a href="/urea2b" style="color: white">Urea : {{$countur2b}}</a></div>
	                                        <div class="huge"><a href="/utilitas2b" style="color: white">Utilitas : {{$countuti2b}}</a></div>
	                                        <div>Data Master Pusri 2B</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="/ammonia2b">
	                                <div class="panel-footer">
	                                    <span class="pull-left">View Details</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-red">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-database fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">Ammonia : {{$count3}}</div>
	                                        <div class="huge"><a href="/urea3" style="color: white">Urea : {{$countur3}}</a></div>
	                                        <div class="huge"><a href="/utilitas3" style="color: white">Utilitas : {{$countuti3}}</a></div>
	                                        <div>Data Master Pusri 3</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="/ammonia3">
	                                <div class="panel-footer">
	                                    <span class="pull-left">View Details</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-yellow">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-database fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">Ammonia : {{$count4}}</div>
	                                        <div class="huge"><a href="/urea4" style="color: white">Urea : {{$countur4}}</a></div>
	                                        <div class="huge"><a href="/utilitas4" style="color: white">Utilitas : {{$countuti4}}</a></div>
	                                        <div>Data Master Pusri 4</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="/ammonia4">
	                                <div class="panel-footer">
	                                    <span class="pull-left">View Details</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-green">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-database fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">NPK : {{$countnpk}}</div>
	                                        <div>Data Master NPK</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="/npk">
	                                <div class="panel-footer">
	                                    <span class="pull-left">View Details</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-primary">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-database fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">STG BB JETTY : {{$countstg}}</div>
	                                        <div>Data Master STG BB JETTY</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="/stgbbjetty">
	                                <div class="panel-footer">
	                                    <span class="pull-left">View Details</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div class="grafik" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div class="grafik2" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div class="grafik3" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div class="grafik4" style="width:100%; height:400px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar5" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar6" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar7" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar8" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar9" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar14" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar15" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar16" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar17" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar18" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar19" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar20" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar21" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar22" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar10" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar11" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar12" style="width:100%; height:500px;">
								
						</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel">
						<div id="bar13" style="width:100%; height:500px;">
								
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
	  text: 'Quality Control Chart - Warehouse'
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
	  text: 'Lead Time Process - Warehouse'
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
	<script src="//code.highcharts.com/highcharts-3d.js"></script>
	<script type="text/javascript">
	$('.grafik3').highcharts({
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
	  text: 'Quality Control Chart - Direct Charge'
	 },
	 subtitle: {
	  text: 'TAHUN 2020'
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
	   name: 'Direct Charge',
	   colorByPoint: true,
	   data: {!! json_encode($hasil3) !!}
	 }]
	});
	</script>

	<script src="//code.highcharts.com/highcharts-3d.js"></script>
	<script type="text/javascript">
	$('.grafik4').highcharts({
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
	  text: 'Lead Time Process - Direct Charge'
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
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiammonia1b">Ammonia Pusri 1B</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil5) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil6) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil7) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil8) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil9) !!}
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
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiurea1b">Urea Pusri 1B</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil10) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil11) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil12) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil13) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil14) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil15) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil16) !!}
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
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiutilitas1b">Utilitas Pusri 1B</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil17) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil18) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil19) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil20) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil21) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar8', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiammonia2b">Ammonia Pusri 2B</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil22) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil23) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil24) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil25) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil26) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar9', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiurea2b">Urea Pusri 2B</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil27) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil28) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil29) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil30) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil31) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil32) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil33) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar10', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Management History Card'
        },
        subtitle: {
            text: 'Kesimpulan - Ammonia'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 120,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Ammonia 1B',
               colorByPoint: true,
               data: {!! json_encode($hasil34) !!}
        }, {
            name: 'Ammonia 2B',
               colorByPoint: true,
               data: {!! json_encode($hasil35) !!}
        }, {
            name: 'Ammonia 3',
               colorByPoint: true,
               data: {!! json_encode($hasil36) !!}
        }, {
            name: 'Ammonia 4',
               colorByPoint: true,
               data: {!! json_encode($hasil37) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar11', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Management History Card'
        },
        subtitle: {
            text: 'Kesimpulan - Urea'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 120,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Urea 1B',
               colorByPoint: true,
               data: {!! json_encode($hasil38) !!}
        }, {
            name: 'Urea 2B',
               colorByPoint: true,
               data: {!! json_encode($hasil39) !!}
        }, {
            name: 'Urea 3',
               colorByPoint: true,
               data: {!! json_encode($hasil40) !!}
        }, {
            name: 'Urea 4',
               colorByPoint: true,
               data: {!! json_encode($hasil41) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar12', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Management History Card'
        },
        subtitle: {
            text: 'Kesimpulan - Utilitas'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 120,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Utilitas 1B',
               colorByPoint: true,
               data: {!! json_encode($hasil42) !!}
        }, {
            name: 'Utilitas 2B',
               colorByPoint: true,
               data: {!! json_encode($hasil43) !!}
        }, {
            name: 'Utilitas 3',
               colorByPoint: true,
               data: {!! json_encode($hasil44) !!}
        }, {
            name: 'Utilitas 4',
               colorByPoint: true,
               data: {!! json_encode($hasil45) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar13', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Management History Card'
        },
        subtitle: {
            text: 'Kesimpulan - NPK & STG BB JETTY'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 120,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'NPK',
               colorByPoint: true,
               data: {!! json_encode($hasil46) !!}
        }, {
            name: 'STG BB JETTY',
               colorByPoint: true,
               data: {!! json_encode($hasil47) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar14', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiutilitas2b">Utilitas Pusri 2B</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil48) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil49) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil50) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil51) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil52) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar15', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiammonia3">Ammonia Pusri 3</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil53) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil54) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil55) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil56) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil57) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar16', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiurea3">Urea Pusri 3</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil58) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil59) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil60) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil61) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil62) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil63) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil64) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar17', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiutilitas3">Utilitas Pusri 3</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil65) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil66) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil67) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil68) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil69) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar18', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiammonia4">Ammonia Pusri 4</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil70) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil71) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil72) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil73) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil74) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar19', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiurea4">Urea Pusri 4</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil75) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil76) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil77) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil78) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil79) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil80) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil81) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar20', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbiutilitas4">Utilitas Pusri 4</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil82) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil83) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil84) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil85) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil86) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar21', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbinpk">NPK</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil87) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil88) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil89) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil90) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil91) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil92) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil93) !!}
        }]
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
    Highcharts.chart('bar22', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'RBI Analysis'
        },
        subtitle: {
            text: '<a href="/rbistgbbjetty">STG BB JETTY</a>'
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
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#00FFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Fail to Open PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil94) !!}
        }, {
            name: 'Leaking Final PRD',
               colorByPoint: true,
               data: {!! json_encode($hasil95) !!}
        }, {
            name: 'Risk Ranking Area PV',
               colorByPoint: true,
               data: {!! json_encode($hasil96) !!}
        }, {
            name: 'Risk Ranking Financial PV',
               colorByPoint: true,
               data: {!! json_encode($hasil97) !!}
        }, {
            name: 'Risk Ranking Area AST',
               colorByPoint: true,
               data: {!! json_encode($hasil98) !!}
        }, {
            name: 'Risk Ranking Financial AST',
               colorByPoint: true,
               data: {!! json_encode($hasil99) !!}
        }, {
            name: 'Risk Ranking HE',
               colorByPoint: true,
               data: {!! json_encode($hasil100) !!}
        }]
    });
</script>
@stop