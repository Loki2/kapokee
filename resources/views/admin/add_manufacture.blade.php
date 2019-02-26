@extends('admin_layout')
@section('admin_content')	
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">ໜ້າຫຼັກ</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#"> Add Manufacture </a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Add Manufacture </h2>
						<!-- <div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div> -->
					</div>
					<p>
						<?php
								$message = Session::get('message');
								if($message){
									echo $message;
									Session::put('message',null);
								}
								?>
					</p>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/save-manufacture') }}" method="post">
						{{ csrf_field() }}
						  <fieldset>
							<!-- <div class="control-group">
							  <label class="control-label" for="typeahead">Category Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
							  </div>
							</div> -->
							<!-- <div class="control-group">
							  <label class="control-label" for="category_id">Category ID</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" name="category_id">
							  </div>
							</div> -->
							<div class="control-group">
							  <label class="control-label" for="manufacture_name">Manufacture Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="manufacture_name">
							  </div>
							</div>

							<!-- <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  -->
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Manufacture Description </label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacture_desc" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> ສະຖານະ </label>
							  <div class="controls">
								<input type="checkbox" name="publication_state">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
							  <button type="reset" class="btn">ຍ້ອນກັບ</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->



@endsection