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
					<a href="#">ເພີ່ມຂໍ້ມູນ Slider</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>ເພີ່ມປະເພດສິນຄ້າ</h2>
					</div>
					<!-- Message Alert -->
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
						<form class="form-horizontal" action="{{ url('/save-slider') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
                            <div class="control-group">
							  <label class="control-label" for="fileInput"> Slider Image </label>
							  <div class="controls">
								<input class="input-file uniform_on" name="slider_image" id="fileInput" type="file">
							  </div>
						  </div>  
						<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> ສະຖານະ </label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required="">
							  </div>
						</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"> Add Slider </button>
							  <button type="reset" class="btn">ຍ້ອນກັບ</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection