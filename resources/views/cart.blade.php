
@extends('layouts/app')
@section('count')
@stop
@section('content')



    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>




    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url({{asset('template/img/bg-img/bg-6.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-md-5" >
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50" style="background-color: #fdc">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">summary</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu" >
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                      count = {{$count}}
                                    </li>
                                    <li data-toggle="collapse" data-target="#clothing">
                                        totle = ${{$total}}
                                      </li>
<li> <a href="checkout.html" class="btn essence-btn">check out</a></li>
                                </ul>


                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->

                    </div>
                </div>

                <div class="col-md-7">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                    <p style="font-size:17px"><span >{{$count}}</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- Single Product -->


                          @foreach ($products as $product )

                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                    <img src="/product_images/{{$product->image}}" alt="">
                                        <!-- Hover Thumb -->

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div>
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>{{$product->name}}</span>
                                        <a href="{{route('home.show',['id'=>$product->id])}}">
                                            <h6>{{$product->details}}</h6>
                                        </a>
                                        <p class="product-price">{{$product->price}}$ </p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @endforeach






                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
    @endsection
