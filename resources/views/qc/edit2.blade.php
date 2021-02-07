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
								<h3 class="panel-title">Update QC Management</h3>
							</div>
							<div class="panel-body">
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
			                        <strong>Ubah Data Direct Charge!</strong>
			                     </div>
								<form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="/qc2/{{$qc2->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{csrf_field()}}
								   <div class="form-group">
								    <label for="exampleInputEmail1">No GR</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_gr" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No GR" value="{{$qc2->no_gr}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">No QC</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="no_qc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No QC" value="{{$qc2->no_qc}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">PO</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="po" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PO" value="{{$qc2->po}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">PR</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="pr" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="PR" value="{{$qc2->pr}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">MATL CODE</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="matl_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MATL CODE" value="{{$qc2->matl_code}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">NAMA BARANG</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA BARANG" value="{{$qc2->nama_barang}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">ITEM</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="item" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ITEM" value="{{$qc2->item}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">VENDOR</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="vendor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="VENDOR" value="{{$qc2->vendor}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">P</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="p" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="P" value="{{$qc2->p}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">M</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="m" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="M" value="{{$qc2->m}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">G</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="g" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="G" value="{{$qc2->g}}"> 
									</div>
								  </div>
								  <div class="form-group">
									    <label for="exampleFormControlSelect1">Lead Time Process</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="t" class="form-control" id="exampleFormControlSelect1">
										      <option value="<5 hari" @if($qc->t == '<5 hari') selected @endif><5 hari</option>
										      <option value="5-10 hari" @if($qc->t == '5-10 hari') selected @endif>5-10 hari</option>
										      <option value=">10 hari" @if($qc->t == '>10 hari') selected @endif>>10 hari</option>
										    </select>
										</div>
									</div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">PENYERAHAN</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="penyerahan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PENYERAHAN" value="{{$qc2->penyerahan}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">TE/TO</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input name="te_to" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TE/TO" value="{{$qc2->te_to}}">
									</div>
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlFile1">Input File</label>
								    <div class="col-md-8 col-sm-6 col-xs-12">
								    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
								  </div>
						        	<div class="modal-footer">
									<a href="/qc2">
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