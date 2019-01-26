@extends('frontend.master') @section('content')
<style type="text/css">
    .comment {
        margin-top: 15px;
    }
    
    .comment-body {
        /*background-color: #ddd;
        border-radius: 50px;
        padding: 6px 25px;*/
        background-color: #f2f3f5;
        border-radius: 18px;
        box-sizing: border-box;
        color: #1c1e21;
        display: inline-block;
        line-height: 16px;
        margin: 0;
        max-width: 100%;
        word-wrap: break-word;
        position: relative;
        white-space: normal;
        word-break: break-word;
        padding: 8px 10px;
    }
    
    .comment-color {
        color: #1c1e21;
    }
    
    .replay {
        margin-left: 40px;
        margin-top: 5px;
    }
</style>
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop pt-lg-4 pt-3">
            <div class="row">
                <div class="col-lg-4 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">

                            <ul class="slides">
                                @foreach($product->images()->get() as $image)
                                <li data-thumb="{{asset($image->src)}}">
                                    <div class="thumb-image">
                                        <img src="{{asset($image->src)}}" data-imagezoom="true" class="img-fluid" alt="{{$product->name}}">
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                    <h3 style="color: #AD1457">{{$product->name}}</h3>
                    <p>
                        <span class="item_price">৳ {{number_format($product->price,2)}}</span>
                        <!-- <del>$1,199</del> -->
                    </p>
                    <!-- <h5>Quality :</h5>
                    <div class="rating1">
                        <ul class="stars">
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> -->

                    <div class="color-quality">
                        <div class="color-quality-right">

                            <h5>Description :</h5>

                            <div style="text-align: justify;">
                                <?php echo html_entity_decode($product->description) ?>
                            </div>

                            <form method="post" action="{{route('add-to-cart', $product)}}" style="display: inline;">
                                {{csrf_field()}}

                                <input class="form-control" type="number" name="qty" style="width: 80px; display: inline; padding: 2px; border-radius: 4px; text-align: center;" value="1">

                                <button type="submit" class="btn btn-sm" style="margin-bottom: 2px;">Add To <i class="fas fa-cart-plus color-primary"></i></button>
                            </form>
                        </div>
                    </div>

                    <!-- <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>

                    </ul>
 -->
                </div>
                <div class="clearfix"> </div>
                <!--/tabs-->
                <div class="responsive_tabs col-md-8 col-sm-12" style="border:1px solid #e4e4e4;">
                    @include('frontend.partials._comments',['comments'=>$product->comments])
                </div>
                <!--//tabs-->
                <div class="clearfix"> </div>
                <div class="col-md-4 col-sm-12 side-view">     
                @foreach($product->category->products as $food)  
                    <div class="row mt-lg-3 mt-0">
                        <div class="product-googles-info col-md-12 col-sm-12">
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
                </div>
                @endforeach                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection