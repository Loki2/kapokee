@extends('layout')
@section('content')

<h2 class="title text-center">Features Items || ສິນຄ້າປະຈຸບັນ</h2>
<?php foreach($product_by_manufacture as $v_manufacture_by_product ){?>
<div class="col-sm-4">
        <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                    <img src="{{URL::to($v_manufacture_by_product -> product_image)}}" style="width:100%; height:100%;" alt="" />
                    <p>{{ $v_manufacture_by_product -> product_name }}</p>
                    <h2>{{ $v_manufacture_by_product -> product_price }} $</h2>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                    <p>{{ $v_manufacture_by_product -> product_name }}</p>
                    <h2>{{ $v_manufacture_by_product -> product_price }} $</h2>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>{{ $v_manufacture_by_product -> manufacture_name }}</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>View Product</a></li>
                </ul>
            </div>
        </div>
    </div>
    
<?php } ?>
</div><!--features_items-->
                
<!--category-tab-->
        
    
<!--/category-tab-->                    
    <div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">recommended items || ສິນຄ້າແນະນຳ</h2>                        
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="item active">	
        <div class="col-sm-4">
             <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                    <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                    <p>Easy Polo Black Edition</p>
                    <h2>$56</h2>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>        
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
             <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
                    <p>Easy Polo Black Edition</p>
                    <h2>$56</h2>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>                                   
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                        <p>Easy Polo Black Edition</p>
                        <h2>$56</h2>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>                                
                    </div>
                </div>
            </div>
        </div>
        <div class="item">	
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                        <p>Easy Polo Black Edition</p>
                        <h2>$56</h2>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>                                    
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
                        <p>Easy Polo Black Edition</p>
                        <h2>$56</h2>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>                             
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                        <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                        <p>Easy Polo Black Edition</p>
                        <h2>$56</h2>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>                                    
                </div>
                </div>
            </div>
        </div>
    </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>			
        </div>
    </div><!--/recommended_items-->
@endsection