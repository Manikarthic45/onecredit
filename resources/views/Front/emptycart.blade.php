@extends('Common.Frontheader')
@section('content')
<div class="page-banner section">
        <div class="container">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">Empty Cart</h2>
               
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Cart Start -->
    <div class="section section-padding-02 mt-n2">
        <div class="container">
            <!-- empty cart Start -->
            <div class="empty-cart text-center">
                <h2 class="empty-cart-title">There are no more items in your cart</h2>
                <div class="empty-cart-img">
                    <img src="assets/images/cart.png" alt="">
                </div>
                <p>Your cart is currently empty!</p>
                <a href="shop?type=all" class="btn btn-hover-dark btn-primary rounded-pill"><i class="fa fa-angle-left"></i> Continue browsing</a>
            </div>
            <!-- empty cart End -->
        </div>
    </div>

@endsection

