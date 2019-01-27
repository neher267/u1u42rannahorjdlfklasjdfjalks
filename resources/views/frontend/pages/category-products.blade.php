@extends('frontend.master')

@section('content')
<section class="banner-bottom-wthreelayouts py-3">
    <div class="inner_sec">
        <p class="sub text-center mb-lg-5 mb-3">Find Your Foods</p>
        <div class="container-fluid container-fluid2">
        <div class="inner-sec-shop px-lg-4 px-3">
            <div class="sorting">
                <ul class="w_nav">
                    <li>Sort : </li>
                    <li><a class="active" href="?filter=popular">Popular</a></li>
                    <li>Price : </li>
                    <li><a href="?filter=low">Low </a></li>
                    <li><a href="?filter=high">High</a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clearfix"></div>
            </div>

            @foreach($foods as $foodsChunk)
                <div class="row mt-lg-3 mt-0">
                    @foreach($foodsChunk as $food)                
                    <div class="col-md-3 product-men women_two">
                        <div class="product-googles-info googles">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="{{asset($food->thumbnail)}}" class="img-fluid" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{route('food-detatils', $food)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product" style="border: 1px solid #e4e4e4; padding-left: 5px;">
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <p class="category-name">
                                                    <a class="color-primary" href="{{route('food-detatils', $food)}}">{{$food->name}}</a>
                                                </p> 
                                                <div class="grid-price mt-2">
                                                    <span class="money "> ৳ {{$food->price}} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="googles single-item hvr-outline-out">
                                            <form action="{{route('cart.add', $food)}}" method="post">
                                                {{ csrf_field() }}

                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                    <i class="fas fa-cart-plus color-primary" style="font-size: 19px;"></i>
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    @endforeach             
                </div>                
            @endforeach
        </div>
    </div>
    </div>
    
</section>
@endsection