@extends('Common.Frontheader')
@section('content')

    <main>



        <section class="page-title-area" data-background="assets/assets/img/bg/page-title-bg.jpg"  style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-wrapper text-center">
                            <h1 class="page-title mb-10">Shop</h1>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Shop</span></li>
                                        <li class="trail-item trail-end"><span>{{$catcode}}</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <!-- shop main area start  -->
        <div class="shop-main-area pt-120 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="shop-main-wrapper mb-60">

                            <div class="products-wrapper">
                                @foreach ($prodlist as $list)
                                    <div class="single-product">
                                        <div class="product-image pos-rel">
                                            <a href="productdetails?itemid={{$list->id}}" class=""><img src="{{$list->itemname}}" alt="img" width="200" height="200"></a>
                                            <div class="product-action">
                                                <a href="productdetails?itemid={{$list->id}}" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                                                <a href="productdetails?itemid={{$list->id}}" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                                                <a href="productdetails?itemid={{$list->id}}" class="compare-btn"><i class="fal fa-exchange"></i></a>
                                            </div>
                                            <div class="product-action-bottom">
                                                <a href="productdetails?itemid={{$list->id}}" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                                    Cart</a>
                                            </div>
                                            <div class="product-sticker-wrapper">
                                                <span class="product-sticker new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-name"><a href="productdetails?itemid={{$list->id}}">{{$list->plantname}}</a></div>
                                            <div class="product-price">
                                                <span class="price-now">Rs.{{$list->actprice}}</span>
                                            </div>
                                            <ul class="product-color-nav">
                                                @foreach ($prodimg as $prodimglist)
                                                    @if($list->id==$prodimglist->pid)
                                                        <li class="cl-pink active">
                                                            <img src="upload/{{$prodimglist->imgname}}" alt="img">
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="sidebar-widget-wrapper mb-110 d-none d-lg-block">
                            <div class="product-filters mb-50">

                                <div class="filter-widget">
                                    <h4 class="filter-widget-title drop-btn">Category</h4>
                                    <div class="filter-widget-content">
                                        <div class="category-items">
                                            @foreach ($maincatlist as $list)
                                                <a href="products?code={{$list->catcode}}" class="category-item">
                                                    <div class="category-name">{{$list->catcode}}</div> <span class="category-items-number">({{$list->total}})</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop main area end  -->







    </main>

@endsection

