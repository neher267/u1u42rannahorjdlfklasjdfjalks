@extends('frontend.master') @section('content')
<style type="text/css">
    .w_nav {
    float: right;
    color: #555555;
    font-size: 0.8125em;
    padding: 0;
    list-style: none;
}
.w_nav li {
    display: inline-block;
}

.w_nav li a{
    color: #AD1457;
}

</style>
<section class="banner-bottom-wthreelayouts py-3">
    <div class="container-fluid">
        <div class="inner-sec-shop px-lg-4 px-3">
            <!-- <h3 class="tittle-w3layouts my-lg-4 my-4 text-center">CHOOSE YOUR FOODS</h3> -->
            <!-- <hr> -->

            <!-- row -->

            <div style="margin-bottom: 5px">
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
                                    <!-- <span class="product-new-top">New</span> -->
                                </div>
                                <div class="item-info-product">

                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <h4 style="min-height: 57px;">
                                                    <a class="color-primary" href="{{route('food-detatils', $food)}}">{{$food->name}}</a>
    											</h4>
                                                <div class="grid-price mt-2">
                                                    <span class="money "> ৳ {{$food->price}} </span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="googles single-item hvr-outline-out">
                                            <form action="{{route('cart.add', $food)}}" method="post">
                                                {{ csrf_field() }}

                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                    <i class="fas fa-cart-plus color-primary"></i>
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
            <!-- end row -->

        </div>
    </div>
</section>

@endsection