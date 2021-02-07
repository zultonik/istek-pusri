@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    User Manage
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('usermanage.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       <div class="form-group">
								    <label for="exampleInputEmail1">Nama</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
									</div>
									</div>
									<div class="form-group">
								    <label for="exampleInputEmail1">Role</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="role" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Role">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Email</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Password</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Jabatan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
									</div>
								  </div>


									<div class="modal-footer">
				                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i></button>
				                        <button type="reset" class="btn btn-warning" data-dismiss=""><i class="fa fa-refresh"></i></button>
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

@section('create')
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script>
	    CKEDITOR.replace( 'content' );
	</script>
@stop