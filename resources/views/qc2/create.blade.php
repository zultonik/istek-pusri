@extends('layout.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="panel">
			                <div class="panel-heading">
			                    New Direct Charge
			                </div>
			                <div class="panel-body">
			                    <form class="form-horizontal form-label-left input_mask col-md-6 col-sm-3 col-xs-12" action="{{ route('qc2.store') }}" method="POST" enctype="multipart/form-data">
			                        {{csrf_field()}}
			                       	<div class="form-group">
									    <label for="exampleInputEmail1">No GR</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="no_gr" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No GR">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">No QC</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="no_qc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No QC">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">PO</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="po" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PO">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">PR</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="pr" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="PR">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">MATL CODE</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="matl_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MATL CODE">
										</div>
								  	</div>
								 	<div class="form-group">
									    <label for="exampleInputEmail1">NAMA BARANG</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA BARANG">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">ITEM</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="item" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ITEM">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">VENDOR</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="vendor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="VENDOR">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">P</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="p" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="P">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">M</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="m" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="M">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">G</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="g" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="G">
										</div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleFormControlSelect1">Lead Time Process</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
										    <select name="t" class="form-control" id="exampleFormControlSelect1">
										      <option><5 hari</option>
										      <option>5-10 hari</option>
										      <option>>10 hari</option>
										    </select>
										</div>
									</div>
								  	<div class="form-group">
									    <label for="exampleInputEmail1">PENYERAHAN</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="penyerahan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PENYERAHAN">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleInputEmail1">TE/TO</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    <input name="te_to" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TE/TO">
										</div>
								  	</div>
									<div class="form-group">
									    <label for="exampleFormControlFile1">Input File</label>
									    <div class="col-md-8 col-sm-6 col-xs-12">
									    	<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
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