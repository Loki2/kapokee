@extends('layout')
@section('content')
@include('slider')
<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">ໜ້າຫຼັກ</a></li>
				  <li class="active">ລາຍລະອຽດສິນຄ້າທັງໝົດ</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php 
					 $contents=Cart::content(); // Select From Contents Category
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">ສະແດງຮູບພາບ</td>
							<td class="description">ຊື່ສິນຄ້າ</td>
							<td class="price">ລາຄາ</td>
							<td class="quantity">ຈຳນວນ</td>
							<td class="total">ລາຄາລວມທັງໝົດ</td>
							<td>Action </td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($contents as $v_contents ){?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contents->options->image)}}" alt="" height="80px" width="80px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{$v_contents->price}} $</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{url('/update-cart')}}" method="post">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="text" name="qty" value="{{$v_contents->qty}}" autocomplete="off" size="2">
									<input class="cart_quantity_input" type="hidden" name="rowId" value="{{$v_contents->rowId}}">
									<input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container col-sm-12">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>ລາຄາລວມທັງໝົດ: <span>{{Cart::subtotal()}} $</span></li>
							<li>ຄ່າພາສີ: <span>{{Cart::tax()}}</span></li>
							<li>ຄ່າຂົນສົ່ງ: <span>Free</span></li>
							<li>ລາຄາລວມທັງໝົດ: <span>{{Cart::total()}} $</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a><br>
							<?php $customer_id=Session::get('customer_id'); ?>
							<?php if($customer_id != NULL) {?>
								<li><a href="{{URL::to('/login-check')}}"><i class="btn btn-default update">Checkout</i></a></li>
								<?php }else {?>
									<li><a href="{{URL::to('/checkout')}}"><i class="btn btn-default check_out"> Checkout</i></a></li>
								<?php } ?> 
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection 