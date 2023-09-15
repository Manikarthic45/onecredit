@extends('Common.Frontheader')
@section('content')

<div class="page-banner section"  style="height:100px;">
        <div class="container"  style="height:100px;">
            <div class="page-banner-wrapper text-center">
            @if($_REQUEST['cat'] == 'Women')         
               <h2 class="title">Shop Women</h2>
            @elseif($_REQUEST['cat'] == 'Men')         
               <h2 class="title">Shop Men</h2>
            @elseif($_REQUEST['cat'] == 'Kids')         
               <h2 class="title">Shop Kids</h2>
            @else
                <h2 class="title">Sale</h2>
            @endif
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Shop Start -->
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <!-- Shop Top Bar Start -->
                    <div class="shop-to-bar">
                        <!-- <div class="shop-top-left">
                            <ul class="nav">
                                <li><a class="active" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                <li><a data-bs-toggle="tab" href="#list"><i class="fa fa-list"></i></a></li>
                            </ul>
                        </div> -->
                       
                    </div>
                    <!-- Shop Top Bar End -->

                    <!-- Tab Content Start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid">
                            <div class="row">
                            @foreach ($prodlist as $prdlist)
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single-Product Start -->
                                    <div class="single-product">
                                        <div class="product-image">
                                            <a href="productdetails?itemid={{$prdlist->id}}">
                                                <img class="prosize" src="{{$prdlist->itemname}}" alt="product">
                                            </a>
                                           
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category-action">
                                                <div class="product-category">
                                                    <a href="productdetails?itemid={{$prdlist->id}}">{{$prdlist->plantname}}</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="productdetails?itemid={{$prdlist->id}}" class="action" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="productdetails?itemid={{$prdlist->id}}" class="action" data-tooltip="tooltip" data-placement="top" title="Wish"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="product-title"><a href="productdetails?itemid={{$prdlist->id}}">{{$prdlist->shortdesc}}</a></h4>
                                            <div class="product-price">
                                                <span class="old-price">Rs.{{$prdlist->actprice}}</span>
                                                <span class="sale-price">Rs.{{$prdlist->offerprice}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-Product End -->
                                </div>
                               
                                @endforeach
                             
                               
                                
                               
                               
                               
                              
                            </div>
                        </div>
                       
                        
                    </div>
                    <!-- Tab Content End -->

                    <!-- Page pagination End -->
                  <!--   <div class="page-pagination">
                        <ul class="pagination justify-content-center">
                        {{  $prodlist->links('pagination::bootstrap-4') }}
                        </ul>
                    </div> -->
                    <!-- Page pagination End -->
                </div>
                <!-- <div class="col-lg-3"> -->
                    <!-- Sidebar Widget Start -->
                    <!-- <div class="sidebar-widget"> -->
                        <!-- Widget Item Start -->
                       <!--  <div class="widget-item">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-link">
                                <ul>
                                @foreach ($catlist as $cat)
                                    <li>
                                        <a href="shop?cat={{$cat->catname}}&type=all&fabric=">{{$cat->catname}}</a>
                                        <div class="category-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#category01">
                                            <span class="add">+</span>
                                            <span class="remove">-</span>
                                        </div>
                                        <div class="collapse" id="category01">
                                            <ul class="category-sub-menu">
                                             @foreach ($subcatlist as $subcat)
                                                @if($cat->catname==$subcat->catname)
                                                  <li><a href="shop?cat={{$subcat->catname}}&type={{$subcat->subcatname}}&fabric=">{{$subcat->subcatname}}</a></li>
                                                @endif
                                             @endforeach  
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> -->
                        

                        
                        <!-- Widget Item End -->

                        <!-- Widget Item Start -->
                        <!-- <div class="widget-item">
                            <a class="widget-banner" href="#">
                                <img src="assets/assets/images/sidebar-banner.jpg" alt="">
                            </a>
                        </div> -->
                        <!-- Widget Item End -->

                    <!-- </div> -->
                    <!-- Sidebar Widget End -->
                <!-- </div> -->
            </div>
        </div>
    </div>

@endsection

