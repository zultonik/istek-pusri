@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-body">
								<button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-upload"></i></button>
							</div>
						</div>
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Plant Unit Data</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-info alert-dismissible fade in" role="alert">
			                        <strong>Informasi!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="" method="get">
						        	{{csrf_field()}}
								   <div class="form-group">
								    <label for="exampleInputEmail1">Kode Gabungan</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="code_gabungan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Gabungan" value="{{$urea3->code_gabungan}}" disabled="">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Perusahaan</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="code_company" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Perusahaan" value="{{$urea3->code_company}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Perusahaan</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="company" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perusahaan" value="{{$urea3->company}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Plant Unit</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="code_plant" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Kode Plant Unit" value="{{$urea3->code_plant}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Plant Unit</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="plant" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Unit" value="{{$urea3->plant}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Plant Section</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="code_section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Plant Section" value="{{$urea3->code_section}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Plant Section</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="section" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plant Section" value="{{$urea3->section}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Kode Plant Sub Section</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="code_sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Plant Sub Section" value="{{$urea3->code_sub}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">PLant Sub Section</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PLant Sub Section" value="{{$urea3->sub}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Equipment</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="equipment" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Equipment" value="{{$urea3->equipment}}" disabled="">
								  	</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Description</label>
								    <div class="col-md-8 col-sm-8 col-xs-12">
								    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="{{$urea3->description}}" disabled="">
								  	</div>
								  </div>
								</form>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="" method="get">
									<div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">Design &amp; Test Data</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
	                                <a href="/files/{{$urea3->file}}" target="_blank"><div class="btn btn-round btn-default"><i class="fa fa-search"></i> View</div></a>  
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">Material Specification</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
	                                <a href="/files/{{$urea3->file2}}" target="_blank"><div class="btn btn-round btn-default"><i class="fa fa-search"></i> View</div></a>  
	                                </div>
	                              </div>                              
	                              <div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">PKP File</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
	                                <a href="/files/{{$urea3->file3}}" target="_blank"><div class="btn btn-round btn-default"><i class="fa fa-search"></i> View</div></a> 
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">Drawing File</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
	                                <a href="/files/{{$urea3->file4}}" target="_blank"><div class="btn btn-round btn-default"><i class="fa fa-search"></i> View</div></a>              
	                                </div>
	                              </div>
	                                                                
	                              <div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">Picture of Equipment</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
	                                <a href="/files/{{$urea3->file5}}" target="_blank"><div class="btn btn-round btn-default"><i class="fa fa-search"></i> View</div></a> 
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">Spart Part Equipment</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
	                                <a href="/files/{{$urea3->file6}}" target="_blank"><div class="btn btn-round btn-default"><i class="fa fa-search"></i> View</div></a> 
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <label class="control-label col-md-4 col-sm-3 col-xs-12">QR CODE</label>
	                                <div class="col-md-3 col-sm-9 col-xs-12">
		                              <tr>
									  	<td>
									  		<img src="data:image/png;base64,{{\DNS2D::getBarcodePNG($urea3->code_gabungan, 'QRCODE')}}" alt="barcode" style="width: 80px;" />
									  	</td>
									  </tr>
									  </div>
	                              </div>
	                              <div class="modal-footer">
	                                <a href="/urea3">
	                                	<div class="btn btn-default"><i class="fa fa-angle-double-left"></i>
	                                	</div>
	                                </a>
	                                <a href="/urea3" target="_blank">
	                                	<div class="btn btn-default"><i class="fa fa-print"></i>
	                                	</div>
	                                </a>
	                                <a href="/urea3" target="_blank">
	                                	<div class="btn btn-default"><i class="fa fa-qrcode"></i>
	                                	</div>
	                                </a>
	                                <a href="/urea3/{{$urea3->id}}/edit">
	                                	<div class="btn btn-default"><i class="fa fa-edit"></i>
	                                	</div>
	                                </a>
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