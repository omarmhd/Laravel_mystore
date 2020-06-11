

@extends('layouts/app')
@section('content')

<section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel owl-theme owl-loaded">



            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2700px, 0px, 0px);
             transition: all 1s ease 0s; width: 4725px;"><div class="owl-item cloned"
              style="width: 675px; margin-right: 0px;"><img src="/product_images/{{$product->image}}" alt="">
            </div>
            <div class="owl-item cloned" style="width: 675px; margin-right: 0px;">
                <img width=333px src="/product_images/{{$product->image}}" alt=""> alt=""></div><div class="owl-item" style="width: 675px; margin-right: 0px;"><img src="img/product-img/product-big-1.jpg" alt=""></div><div class="owl-item" style="width: 675px; margin-right: 0px;"><img src="img/product-img/product-big-2.jpg" alt=""></div><div class="owl-item active" style="width: 675px; margin-right: 0px;">
                <img src="/product_images/{{$product->image}}"  alt=""></div><div class="owl-item cloned" style="width: 675px; margin-right: 0px;">
                    <img src="/product_images/{{$product->image}}"  alt=""></div><div class="owl-item cloned" style="width: 675px; margin-right: 0px;"><img src="img/product-img/product-big-2.jpg" alt=""></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><img src="img/core-img/long-arrow-left.svg" alt=""></div><div class="owl-next" style=""><img src="/product_images/{{$product->image}}" alt=""></div></div><div class="owl-dots" style="display: none;"></div></div></div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <h4>{{$product->name}}</h4>
            <a href="cart.html">
                <h5>{{$product->details}}</h5>
            </a>
            <p class="product-price">{{$product->price}}</p>
            <p class="product-desc">{{$product->long_description}} </p>

            <!-- Form -->
        <form class="cart-form clearfix"  action="{{route('cart.store',['id'=>$product->id])}}"method="post">
                @csrf
                <div class="form-group">
                    <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
                  </div>

                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                <input type="submit" name="addtocart" class="btn essence-btn" value="Add to cart">
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
 @endsection
