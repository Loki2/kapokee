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
						<form class="form-horizontal" action="{{ url('/save-product') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="product_name">ຊື່ປະເພດສິນຄ້າ</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name">
							  </div>
              </div>
				<!-- Select From Category table -->
          <div class="control-group">
						<label class="control-label" for="selectError3">Product Category</label>
							<div class="controls">
								<select id="selectError3" name="category_id">
                <option> --Select Category-- </option>
                <?php 
					        $all_published_category=DB::table('tbl_category')
											->where('public_status',1)
											->get();
	                foreach($all_published_category as $v_category ){?>
									<option value="{{ $v_category -> category_id }}">{{ $v_category -> category_name}}</option>
                <?php }?>
						  </select>
						</div>
            </div>
					<!-- Select from Manufacture table -->
            <div class="control-group">
							<label class="control-label" for="selectError3"> Brand Name</label>
								<div class="controls">
								<select id="selectError3" name="manufacture_id">
					      <option> --Select Brands-- </option>
                <?php 
				        $all_published_manufacture=DB::table('tbl_manufacture')
									        ->where('publication_status',1)
							            ->get();
				        foreach($all_published_manufacture as $v_manufacture ){?>
                <option value="{{ $v_manufacture -> manufacture_id }}">{{ $v_manufacture->manufacture_name }}</option>
                <?php }?>
							  </select>
							</div>
					  </div>
							<!-- <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  -->
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Product Short Description </label>
							  <div class="controls">
								<textarea class="cleditor" name="product_short_desc" rows="3"></textarea>
							  </div>
              </div>
                            
            <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Product Long Description </label>
							  <div class="controls">
								<textarea class="cleditor" name="product_long_desc" rows="3"></textarea>
							  </div>
              </div>
                            
            <div class="control-group">
							  <label class="control-label" for="product_price">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price">
							  </div>
              </div>

            <div class="control-group">
							  <label class="control-label" for="fileInput"> Select Image </label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
						  </div>  

							<div class="control-group">
							  <label class="control-label" for="product_size"> Product Size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_size">
							  </div>
             </div>

						 <div class="control-group">
							  <label class="control-label" for="product_color"> Product Color </label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_color">
							  </div>
            </div>

						<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> ສະຖານະ </label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
						</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">ເພີ່ມສິນຄ້າ</button>
							  <button type="reset" class="btn">ຍ້ອນກັບ</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection