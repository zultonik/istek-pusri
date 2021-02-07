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
								<h3 class="panel-title">Update Plant Unit</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Plant Unit!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/urea2b/{{$urea2b->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   <div class="form-group">
								    <label for="exampleInputEmail1">Kode Gabungan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="code_gabungan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Gabungan" value="{{$urea2b->code_gabungan}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Perusahaan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="code_company" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Perusahaan" value="{{$urea2b->code_company}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Perusahaan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="company" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perusahaan" value="{{$urea2b->company}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Plant Unit</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="code_plant" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Kode Plant Unit" value="{{$urea2b->code_plant}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Plant Unit</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="plant" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Unit" value="{{$urea2b->plant}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Plant Section</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="code_section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Plant Section" value="{{$urea2b->code_section}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Plant Section</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Section" value="{{$urea2b->section}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Plant Sub Section</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="code_sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Plant Sub Section" value="{{$urea2b->code_sub}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">PLant Sub Section</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PLant Sub Section" value="{{$urea2b->sub}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Equipment</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="equipment" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment" value="{{$urea2b->equipment}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Description</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="{{$urea2b->description}}">
									</div>
								  </div>
								  <div class="form-group">
										<label for="exampleFormControlFile1">Design &amp; Test Data</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Material Specification</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file2" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">PKP File</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file3" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Drawing File</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file4" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Picture of Equipment</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file5" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Spart Part Equipment</label>
										<div class="col-md-8 col-sm-6 col-xs-12">
										<input type="file" name="file6" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
						        	<div class="modal-footer">
									<a href="/urea2b">
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