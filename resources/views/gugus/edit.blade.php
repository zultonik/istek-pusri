@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								@if(session('sukses'))
								<div class="alert alert-success" role="alert">
								  {{session('sukses')}}
								</div>
								@endif
								<h3 class="panel-title">Update Gugus Inovasi</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Gugus Inovasi!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/gugus/{{$gugus->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Innovation Type</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="innovation_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Innovation Type" value="{{$gugus->innovation_type}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Team Name</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="team_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Name" value="{{$gugus->team_name}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Team Structure</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="team_structure" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Structure" value="{{$gugus->team_structure}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Year</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="year" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Year" value="{{$gugus->year}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Innovation Title</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="innovation_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Innovation Title" value="{{$gugus->innovation_title}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Abstraction</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="abstraction" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Abstraction" value="{{$gugus->abstraction}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Achievement</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="achievement" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Achievement" value="{{$gugus->achievement}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/gugus">
	                                	<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                	</div>
	                                </a>
							        <button type="submit" class="btn btn-warning"><i class="fa fa-send"></i></button>
							    	</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop