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
					<a href="#">ເພີ່ມຂໍ້ມູນປະເພດາສິນຄ້າ</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>ເພີ່ມປະເພດສິນຄ້າ</h2>
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
						<form class="form-horizontal" action="{{ url('/save-category') }}" method="post">
						{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="category_name">ຊື່ປະເພດສິນຄ້າ</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="category_name">
							  </div>
							</div>

							<!-- <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  -->
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> ອະທິບາຍກ່ຽວກັບປະເພດສິນຄ້າ </label>
							  <div class="controls">
								<textarea class="cleditor" name="category_desc" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> ສະຖານະ </label>
							  <div class="controls">
								<input type="checkbox" name="public_state">
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