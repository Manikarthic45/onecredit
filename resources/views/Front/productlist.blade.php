@extends('Common.Frontheader')
@section('content')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Our Products</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
                <li class="nav-item"><span class="current-page">All Products</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <div class="block-item recently-products-cat md-margin-bottom-39">
                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}' >

                            @foreach ($productlist as $list)
                                <li class="product-item">
                                    <div class="contain-product layout-02">
                                        <div class="product-thumb">
                                            <a href="{{url('/productdetails')}}?itemid={{$list->id}}" class="link-to-product">
                                                <img src="{{$list->itemname}}" alt="dd"  style="width: 150px; height: 150px;">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">
                                                @foreach ($catlist as $cat)
                                                    @if($cat->catcode==$list->catcode)
                                                        @if(session()->get('languag')=="Tamil"){{$cat->catname_tamil}}@else{{$cat->catname}}@endif
                                                    @endif
                                                @endforeach
                                            </b>
                                            <h4 class="product-title"><a href="{{url('/productdetails')}}?itemid={{$list->id}}" class="pr-name">@if(session()->get('languag')=="Tamil"){{$list->name_tamil}}@else{{$list->plantname}}@endif</a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">Rs.</span>{{$list->amt}}</span></ins>
                                                                                            <del><span class="price-amount"><span class="currencySymbol">Rs.</span>{{$list->actprice}}</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </div>

                    <div class="product-category grid-style">


                        <div class="row">
                            <ul class="products-list">
                                @foreach ($productlist as $list)
                                <li class="product-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="{{url('/productdetails')}}?itemid={{$list->id}}" class="link-to-product">
                                                <img src="{{$list->itemname}}" alt="dd"  
                                                style="height:auto;min-height: 350px;">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">
                                                @foreach ($catlist as $cat)
                                                    @if($cat->catcode==$list->catcode)
                                                        @if(session()->get('languag')=="Tamil"){{$cat->catname_tamil}}@else{{$cat->catname}}@endif
                                                    @endif
                                                @endforeach
                                            </b>
                                            <h4 class="product-title"><a href="{{url('/productdetails')}}?itemid={{$list->id}}" class="pr-name">@if(session()->get('languag')=="Tamil"){{$list->name_tamil}}@else{{$list->plantname}}@endif</a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">Rs.</span>{{$list->amt}}</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">Rs.</span>{{$list->actprice}}</span></del>
                                            </div>
                                            <div class="shipping-info">
                                                <p class="shipping-day">3-Day Shipping</p>
                                                <p class="for-today">Pree Pickup Today</p>
                                            </div>
                                            <div class="slide-down-box">
{{--                                                <p class="message">All products are carefully selected to ensure food safety.</p>--}}
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="{{url('/productdetails')}}?itemid={{$list->id}}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach

                            </ul>
                        </div>

                        <div class="biolife-panigations-block">
                            <ul class="panigation-contain">
                                <li><span class="current-page">1</span></li>
                                <li><a href="#" class="link-page">2</a></li>
                                <li><a href="#" class="link-page">3</a></li>
                                <li><span class="sep">....</span></li>
                                <li><a href="#" class="link-page">20</a></li>
                                <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- Sidebar -->
                <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="biolife-mobile-panels">
                        <span class="biolife-current-panel-title">Sidebar</span>
                        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                    </div>
                    <div class="sidebar-contain">
                        <div class="widget biolife-filter">
                            <h4 class="wgt-title"></h4>
                            @if(session()->get('languag')=="Tamil") வகைகள் @else Categories @endif
                            </h4>
                            <div class="wgt-content">
                                <ul class="cat-list">
                                    @foreach ($catlist as $list)
                                    <li class="cat-list-item"><a href="{{url('/products')}}?code={{$list->catcode}}" class="cat-link">
                                            @if(session()->get('languag')=="Tamil"){{$list->catname_tamil}}@else{{$list->catname}}@endif
                                        </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>




                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Recently Viewed</h4>
                            <div class="wgt-content">
                                <ul class="products">
                                    @foreach ($productlist1 as $list)
                                    <li class="pr-item">
                                        <div class="contain-product style-widget">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product" tabindex="0">
                                                    <img src="{{$list->itemname}}" alt="dd"  class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">

                                                    @foreach ($catlist as $cat)
                                                        @if($cat->catcode==$list->catcode)
                                                            @if(session()->get('languag')=="Tamil"){{$cat->catname_tamil}}@else{{$cat->catname}}@endif
                                                        @endif
                                                    @endforeach



                                                </b>
                                                <h4 class="product-title"><a href="#" class="pr-name" tabindex="0">@if(session()->get('languag')=="Tamil"){{$list->name_tamil}}@else {{$list->plantname}}@endif</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">Rs.</span>{{$list->amt}}</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">Rs.</span>{{$list->actprice}}</span></del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>


                    </div>

                </aside>
            </div>
        </div>
    </div>
@endsection

