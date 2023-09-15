<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kamali Naturals | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/kamali-favicon.png">

    <!-- All css here -->
    <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/assets/css/ie7.css">
    <link rel="stylesheet" href="assets/assets/css/plugins.css">
    <link rel="stylesheet" href="assets/assets/css/style.css">
    <script src="assets/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

    <!-- Header Area Start -->
    <header class="header-area header-sticky">
        <div class="header-container" style="background: #002800;">
            <div class="row">
                <div class="col-lg-4 display-none-md display-none-xs">
                    <div class="ht-main-menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.html">home</a></li>
                                <li><a href="about">About Us</a></li>

                                <li><a href="#">Our-Product<i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        @foreach($category as $cat)
                                        <li><a href="skin-care.html">{{$cat->catname}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="logo text-center">
                        <a href="index.html"><img class="logo23" src="assets/assets/img/logo/kamali-logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="header-content d-flex justify-content-end">
                        <div class="settings-wrapper">
                            <a href="#"><img src="assets/assets/img/icon/account.png" alt="login"></a>
                            <div class="settings-content">
                                <h4>My Account</h4>
                                <ul>
                                    <li><a href="#" class="modal-view button" data-bs-toggle="modal" data-bs-target="#register_box">Register</a></li>
                                    <li><a href="#" class="modal-view button" data-bs-toggle="modal" data-bs-target="#login_box">login</a></li>
                                    sdfsdf
                                </ul>
                            </div>
                        </div>
                        <div class="search-wrapper">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search for Product..." aria-label="Search">
                                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                                <!-- <a href="#"><span class="icon icon-Search"></span></a> -->
                            </form>
                        </div>
                        @if(session()->get('userid')!="")
                        <div class="cart-wrapper">
                            <a href="#">
                                <img src="assets/assets/img/icon/cart.png" alt="cart">
                                <span style="color: black; background-color: white;">2</span>
                            </a>
                            <div class="cart-item-wrapper">
                                <div class="single-cart-item">
                                    <div class="cart-img">
                                        <a href="cart.html"><img src="assets/assets/img/cart/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-text-btn">
                                        <div class="cart-text">
                                            <h5><a href="cart.html">green Oil</a></h5>
                                            <span class="cart-qty">×1</span>
                                            <span class="cart-price">₹68.00</span>
                                        </div>
                                        <button type="button"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="single-cart-item">
                                    <div class="cart-img">
                                        <a href="cart.html"><img src="assets/assets/img/cart/2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-text-btn">
                                        <div class="cart-text">
                                            <h5><a href="cart.html">Full Body Scrub</a></h5>
                                            <span class="cart-qty">×1</span>
                                            <span class="cart-price">₹98.00</span>
                                        </div>
                                        <button type="button"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-price-total">
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>Sub-Total :</span>
                                        <span>$135.00</span>
                                    </div>
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>Eco Tax (-2.00) :</span>
                                        <span>$4.00</span>
                                    </div>
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>VAT (20%) :</span>
                                        <span>$27.00</span>
                                    </div>
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>Total :</span>
                                        <span>$166.00</span>
                                    </div>
                                </div>
                                <div class="cart-links">
                                    <a href="cart.html">View cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Area End -->
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area">
            <div class="mobile-menu container">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="contact.html">About Us</a></li>
                        <li><a href="#">Our-Product</a>
                            <ul>
                                @foreach($category as $cat)
                                <li><a href="skin-care.html">{{$cat->catname}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
        <!--Start of Login Form-->
        <div class="modal fade" id="login_box" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <h2>Login to your account</h2>
                            <form action="#" method="post">
                                <div class="form-box">
                                    <input type="text" placeholder="User Name" name="username">
                                    <input type="password" placeholder="Password" name="pass">
                                </div>
                                <div class="checkobx-link">
                                    <div class="left-col">
                                        <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
                                    </div>
                                    <div class="right-col"><a href="#">Forget Password?</a></div>
                                </div>
                                <button type="submit">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Login Form-->
        <!--Start of Register Form-->
        <div class="modal fade" id="register_box" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <h2>Sign Up</h2>
                            <form action="#" method="post">
                                <div class="form-box">
                                    <input type="text" placeholder="Full Name" name="fullname">
                                    <input type="text" placeholder="User Name" name="username">
                                    <input type="email" placeholder="Email" name="email">
                                    <input type="password" placeholder="Password" name="pass">
                                    <input type="password" placeholder="Confirm Password" name="re_pass">
                                </div>
                                <div class="checkobx-link">
                                    <div class="left-col">
                                        <input type="checkbox" id="remember_reg"><label for="remember_reg">Remember Me</label>
                                    </div>
                                </div>
                                <button class="text-uppercase" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Register Form-->
    </header>
    <!-- Header Area End -->

    <!-- Hero Area Start -->
    <div class="ht-hero-section fix">
        <div class="ht-hero-slider">
            <!-- Single Slide Start -->
            <div class="ht-single-slide" style="background-image: url(assets/assets/img/banner/kamali-banner1.jpg)">
                <div class="ht-hero-content-one container">
                    <h3 style="font-family: 'FontAwesome';">Kamali-Naturals</h3>
                    <h1 class="cssanimation leDoorCloseLeft sequence">Our Home-Made Product</h1>
                    <p> Unleash nature's secrets with our organic skincare range, revealing your radiant beauty.</p>
                    <a href="#" class="default-btn large circle blue hover-blue uppercase">Shop now</a>
                </div>
            </div>
            <!-- Single Slide End -->
            <!-- Single Slide Start -->
            <div class="ht-single-slide" style="background-image: url(assets/assets/img/banner/kamali-banner2.png)">
                <div class="ht-hero-content-one container">
                    <h3 style="font-family: 'FontAwesome';">Welcome To Kamali-Naturals</h3>
                    <h1 class="cssanimation leDoorCloseLeft sequence">Our Home-Made Product</h1>
                    <p>Skin Care & Hair Care Solution <br> <br> Way To Healthy Life Style</p>
                    <a href="#" class="default-btn">Shop now</a>
                </div>
            </div>
            <!-- Single Slide End -->
        </div>
    </div>
    <!-- Hero Area End -->

    <!-- Offer Area Start-->
    <marquee style="margin-top: 5%;">
        <h1 style="font-family: 'FontAwesome';font-size: 50px;color: #005e00; text-shadow: 4px 1px #A0C702;">
            <img src="assets/assets/img/logo/buy-one.png" alt="">&nbsp; Buy 1 Get 1 Free
        </h1>
    </marquee>
    <!-- Offer Area End-->

    <!-- SHOP BY CATEGORIES Start -->
    <div class="banner-area desktop pt-100 pb-70">
        <div class="container">
            <h1 style="font-family: 'Playfair Display'; padding-bottom: 20px; color: #599404;">SHOP BY CATEGORIES</h1>
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html">
                            <img src="assets/assets/img/logo/skincare.png" alt="banner">
                        </a>
                        <div class="banner-content">
                            <h4 style="font-size: 30px;">Skin Care</h4>
                            <!-- <p>Lorem Ipsum is simply...</p> -->
                            <div class="banner-btn">
                                <!-- <a href="#" >shop now</a> -->
                                <button type="button" class="btn btn-outline-success" style="margin-top: 20%; font-size: 15px;"><a href="skin-care.html" style="text-decoration: none; font-weight: bold; color: #198754;">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html">
                            <img src="assets/assets/img/logo/haircare.png" alt="banner">
                        </a>
                        <div class="banner-content">
                            <h4 style="font-size: 30px;">Hair Care</h4>
                            <!-- <p>Lorem Ipsum is simply...</p> -->
                            <div class="banner-btn">
                                <!-- <a href="#">shop now</a> -->
                                <button type="button" class="btn btn-outline-success" style="margin-top: 20%; font-size: 15px;"><a href="hair-care.html" style="text-decoration: none; font-weight: bold; color: #198754;">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html">
                            <img src="assets/assets/img/logo/kid.png" alt="banner">
                        </a>
                        <div class="banner-content">
                            <h4 style="font-size: 30px;">Kids</h4>
                            <!-- <p>Lorem Ipsum is simply...</p> -->
                            <div class="banner-btn">
                                <!-- <a href="#">shop now</a> -->
                                <button type="button" class="btn btn-outline-success" style="margin-top: 20%; font-size: 15px;"><a href="foods.html" style="text-decoration: none; font-weight: bold; color: #198754;">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-4 col-md-3">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html">
                            <img src="assets/assets/img/logo/food.png" alt="banner">
                        </a>
                        <div class="banner-content">
                            <h4 style="font-size: 30px;">Food</h4>
                            <!-- <p>Lorem Ipsum is simply...</p> -->
                            <div class="banner-btn">
                                <!-- <a href="#">shop now</a> -->
                                <button type="button" class="btn btn-outline-success" style="margin-top: 20%; font-size: 15px;"><a href="foods.html" style="text-decoration: none; font-weight: bold; color: #198754;">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html">
                            <img src="assets/assets/img/logo/combo.png" alt="banner">
                        </a>
                        <div class="banner-content">
                            <h4 style="font-size: 30px;">Combo</h4>
                            <!-- <p>Lorem Ipsum is simply...</p> -->
                            <div class="banner-btn">
                                <!-- <a href="#">shop now</a> -->
                                <button type="button" class="btn btn-outline-success" style="margin-top: 20%; font-size: 15px;"><a href="foods.html" style="text-decoration: none; font-weight: bold; color: #198754;">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- SHOP BY CATEGORIES End -->

    <!-- Mobile View SHOP BY CATEGORIES Start -->
    <div class="mobile" style="margin-bottom: 15%;">
        <div class="container">
            <h1 style="font-family: 'Playfair Display'; padding-bottom: 20px; color: #599404; font-size: 26px;">SHOP BY CATEGORIES</h1>
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 p1">
                    <div class="mobile-wrap">
                        <img src="assets/assets/img/banner/skin-demo.png" alt="banner" style="border-radius: 50%; width: 100%;">
                        <div class="mobile-content">
                            <a href="skin-care.html" style="margin-left: 17%;">Skin-Care</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 p2">
                    <div class="mobile-wrap">
                        <img src="assets/assets/img/banner/hair-demo.png" alt="banner" style="border-radius: 50%; width: 100%;">
                        <div class="mobile-content">
                            <a href="hair-care.html" style="margin-left: 17%;">Hair-Care</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 p3">
                    <div class="mobile-wrap">
                        <img src="assets/assets/img/banner/kid-demo.png" alt="banner" style="border-radius: 50%; width: 100%;">
                        <div class="mobile-content">
                            <a href="#" style="margin-left: 32%;">Kids</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 p4">
                    <div class="mobile-wrap">
                        <img src="assets/assets/img/banner/food-demo.png" alt="banner" style="border-radius: 50%; width: 100%;">
                        <div class="mobile-content">
                            <a href="foods.html" style="margin-left: 28%;">Food</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-3 p5">
                    <div class="mobile-wrap">
                        <img src="assets/assets/img/banner/combo-demo.png" alt="banner" style="border-radius: 50%; width: 100%;">
                        <div class="mobile-content">
                            <a href="foods.html" style="margin-left: 23%;">Combo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            </div>
        </div>
    </div>
    <!-- Mobile View SHOP BY CATEGORIES End -->

    <!-- Product Area Start -->
    <div class="product-area bg-1 pt-110 pb-80">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-img d-flex justify-content-center">
                    <img src="assets/assets/img/logo/product-img.png" alt="product-sample" style="margin-top: -2%;">
                </div>
                <h2 style="font-family: 'FontAwesome';"><span>Our</span> Home-made Product</h2>
                <h2 style="text-align: start; margin-bottom:-32px; margin-top:45px; font-size: 20px;">SKIN CARE</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <!-- <button type="button" class="btn btn-link" style="color: black;"><a href="skin-care.html" style="float: right; font-weight: 500; font-size: 20px;">View All</a></button> -->
                    <a href="#" class="default-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-tab-list nav" role="tablist">
                <!-- <a class="active" href="#tab1"data-bs-toggle="tab" role="tab" aria-selected="true" aria-controls="tab1">vegetables</a> -->
                <!-- <a href="#tab2"data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">fruits</a> -->
                <!-- <a href="#tab3"data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="tab3">juices</a> -->
                <!-- <a href="#tab4"data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="tab4">bread</a> -->
            </div>
            <div class="tab-content text-center">
                <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                    <div class="product-carousel">
                        <div class="col-md-3 col-sm-6 p-2">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="product-details-kamali.html">
                                        <img src="assets/assets/img/pic1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">BathPowder</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-200g</span>
                                        <span class="old-price">$399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 p-2">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="product-details-kamali.html">
                                        <img src="assets/assets/img/pic2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>

                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Skin Colour Booster</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-150g</span>
                                        <span class="old-price">$599/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 p-2">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="product-details-kamali.html">
                                        <img src="assets/assets/img/pic3.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>

                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Facewash(Oily,Normal,Dry)</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-150g</span>
                                        <span class="old-price">$399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 p-2">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="product-details-kamali.html">
                                        <img src="assets/assets/img/pic1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>

                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                    </div>
                                    <h5><a href="shop.html">Seasons Bliss</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-50ml</span>
                                        <span class="old-price">$599/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 p-2">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="product-details-kamali.html">
                                        <img src="assets/assets/img/pic3.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>

                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Girly lips</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-15g</span>
                                        <span class="old-price">$599/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/9.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>  
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/10.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/10.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Grape</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/11.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/11.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm's Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/12.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/13.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/14.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/14.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/15.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/15.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Orange</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/16.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/16.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Kiwi Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/12.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/13.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/17.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/17.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Red Beet</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/18.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/18.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Spring Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/19.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/19.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Tomato</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/20.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/20.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Watermelon</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/7.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/7.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Tangerin Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/8.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/8.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Pine Apple</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/1.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/1.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/2.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/2.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/12.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/13.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/14.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/14.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/15.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/15.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Orange</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/9.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/9.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/12.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/13.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/10.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/10.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Grape</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/11.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/11.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm's Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.html">
                                            <img src="assets/img/product/16.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                
                                                <li><a href="assets/img/product/16.jpg" data-bs-toggle="modal"  data-bs-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Kiwi Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>

        <div class="container">
            <div class="section-title text-center">
                <!-- <div class="section-img d-flex justify-content-center">
                        <img src="assets/img/icon/title.png" alt="">
                    </div> -->
                <h2 style="text-align: start; margin-bottom:-32px; margin-top:30px; font-size: 20px;">HAIR CARE</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="default-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-tab-list nav" role="tablist">
            </div>
            <div class="tab-content text-center">
                <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                    <div class="product-carousel">
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Green Oil</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-200ml</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Red Oil</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-200ml</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic3.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Herbal Hair Color</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-100g</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Hair Conditioner</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-125g</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Hair Mask</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-125g</span>
                                        <span class="old-price">₹499/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section-title text-center">
                <h2 style="text-align: start; margin-bottom:-32px; margin-top:30px; font-size: 20px;">FOOD</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="default-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-tab-list nav" role="tablist">
            </div>
            <div class="tab-content text-center">
                <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                    <div class="product-carousel">
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Green Oil</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-200ml</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Red Oil</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-200ml</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic3.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Herbal Hair Color</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-100g</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Hair Conditioner</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-125g</span>
                                        <span class="old-price">₹399/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/assets/img/banner/pic2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="cart.html"><img src="assets/assets/img/icon/add cart.png" alt="cart" style="padding: 7px;"></a>
                                            </li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Hair Mask</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">-125g</span>
                                        <span class="old-price">₹499/-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

    <!-- Video Area Start -->
    <section class="container">
        <h3 class="text-center" style="font-family: 'FontAwesome';font-size: 26px;color: #005e00; text-shadow: 2px 1px #A0C702;">Watch Our Video</h3>
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8">
                <div class="videok">
                    <iframe src="https://www.youtube.com/embed/cs6xfrEeXZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </section>
    <!-- <div class="container videok">
            <iframe src="https://www.youtube.com/embed/cs6xfrEeXZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div> -->
    <!-- Video Area End -->

    <!-- Testimonial Area Start -->
    <div class="testimonial-area pt-110 pb-95">
        <div class="container">
            <div class="testimonial-slider-wrapper">
                <div class="text-carousel text-center">
                    <div class="slider-text">
                        <span class="testi-quote">
                            <img src="assets/assets/img/icon/quote.png" alt="">
                        </span>
                        <p>Mam ungaloda green oil use panren its amazing enaku dandruff kammiya iruku hair fall reduce achu. Full body brightening oil, collagen powder ellame super mam enaku tan remove ayeduchu 1 shade colour increase ana mathiri iruku.</p>
                    </div>
                    <div class="slider-text">
                        <span class="testi-quote">
                            <img src="assets/assets/img/icon/quote.png" alt="">
                        </span>
                        <p>Hi Sis today than unga videos paakuren ennoda face romba dark aagirukku dark circles romba apram mouth mela nose keela upper lip kita romba dark ah irukku ungaloda products ethachum ennaku help pannuma plss reply me sis...</p>
                    </div>
                    <div class="slider-text">
                        <span class="testi-quote">
                            <img src="assets/assets/img/icon/quote.png" alt="">
                        </span>
                        <p>Hi sis.. used all ur products all r super duper worth buying.. still I'm waiting to get more more products from u.. Thank u</p>
                    </div>
                </div>
                <div class="image-carousel">
                    <div class="testi-img">
                        <img src="assets/assets/img/testimonial/tes-3.png" alt="some-img" width="60%">
                        <h4 class="text-center" style="text-transform: lowercase;">Gayathrigayu</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/assets/img/testimonial/tes1.png" alt="some-img" width="60%">
                        <h4 class="text-center" style="text-transform: lowercase;">JeganPavi</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/assets/img/testimonial/tes-2.png" alt="some-img" width="60%">
                        <h4 class="text-center" style="text-transform: lowercase;">SivaSankari</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/assets/img/testimonial/tes-3.png" alt="some-img" width="60%">
                        <h4 class="text-center" style="text-transform: lowercase;">Gayathrigayu</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/assets/img/testimonial/tes1.png" alt="some-img" width="60%">
                        <h4 class="text-center" style="text-transform: lowercase;">JeganPavi</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/assets/img/testimonial/tes-2.png" alt="some-img" width="60%">
                        <h4 class="text-center" style="text-transform: lowercase;">SivaSankari</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <!-- Footer Top Area Start -->
        <div class="footer-top bg-4 pt-120 pb-120">
            <!-- Footer Widget Area Start -->
            <div class="footer-widget-area" style="margin-top: -5%;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <div class="footer-logo">
                                    <a href="#"><img src="assets/assets/img/logo/kamali-logo.png" alt="logo" width="40%"></a>
                                </div>
                                <!-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p> -->
                                <div class="footer-text">
                                    <span><i class="icon icon-Pointer"></i>Address : Kamali-Naturals Kanuvai to Pannimadai - Coimbatore.</span>
                                    <span><i class="icon icon-Phone"></i>Phone :+91 70102 94745</span>
                                    <span><i class="icon icon-Mail"></i>Email : mrsjoesyogi@gmail.com</span>
                                    <span>
                                        Follow Us On: &nbsp;
                                        <a href="https://www.youtube.com/@kamalismetips"><img src="assets/assets/img/icon/youtube.png" alt="youtube"></a>
                                        <a href="https://instagram.com/kamalinaturals?igshid=MmU2YjMzNjRlOQ=="><img src="assets/assets/img/icon/instagram.png" alt="insta"></a>
                                    </span>
                                </div>
                            </div> @foreach($category as $cat)
                            <ul>
                                <li><a href="skin-care.html">{{$cat->catname}}</a></li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="col-lg-2 col-md-3">
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="single-footer-widget">
                                <h3 style="font-family: 'FontAwesome';font-size: 26px;color: #005e00; text-shadow: 2px 1px #A0C702;">Our-Products</h3>
                                <ul class="footer-widget-list">
                                    <li><a href="skin-care.html">Skin Care</a></li>
                                    <li><a href="hair-care.html">Hair Care</a></li>
                                    <li><a href="foods.html">Food</a></li>
                                    <li><a href="shop.html">Kid</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="single-footer-widget">
                                <h3 style="font-family: 'FontAwesome';font-size: 26px;color: #005e00; text-shadow: 2px 1px #A0C702;">Useful links</h3>
                                <ul class="footer-widget-list">
                                    <li><a href="shop.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">View Cart</a></li>
                                    <li><a href="shop.html">Login</a></li>
                                    <li><a href="shop.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widget Area End -->
        </div>
        <!-- Footer Top Area End -->
        <!-- Footer Bottom Area Start -->
        <div class="footer-bottom-area pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex col-md-6">
                        <div class="footer-text-bottom">
                            <p>Copyright &copy; Kamali-Naturals. Design by <a href="https://aegiiz.com/">Aegiiz tech</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-img d-flex justify-content-end">
                            <img src="assets/assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End -->
    </footer>
    <!-- Footer Area End -->


    <!--Whatsapp Start-->
    <a href="https://api.whatsapp.com/send?phone=+91 70102 94745&amp;text=%0a" class="float" target="_blank">
        <div class="fm-icon fnw">
            <div class=" position-wp1"> <img width="100%" src="assets/assets/img/whatsapp.png"></div>
        </div>
        <div class="fm-label" style="opacity: 0;"></div>
    </a>
    <!--Whatsapp End-->

    <!-- QUICKVIEW PRODUCT -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="quick-view-container">
                    <div class="column-left">
                        <div class="tab-content product-details-large" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                <div class="single-product-img">
                                    <img src="assets/assets/img/product/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                <div class="single-product-img">
                                    <img src="assets/assets/img/product/2.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                <div class="single-product-img">
                                    <img src="assets/assets/img/product/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <div class="single-product-img">
                                    <img src="assets/assets/img/product/4.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-5">
                                <div class="single-product-img">
                                    <img src="assets/assets/img/product/5.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-6">
                                <div class="single-product-img">
                                    <img src="assets/assets/img/product/6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu" role="tablist">
                                <div class="single-tab-menu">
                                    <a class="active" data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="assets/assets/img/product/1.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="assets/assets/img/product/2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="assets/assets/img/product/3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="assets/assets/img/product/4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-bs-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="assets/assets/img/product/5.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-bs-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="assets/assets/img/product/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-right">
                        <div class="quick-view-text">
                            <h2>Curabitur a purus</h2>
                            <h3 class="q-product-price">$34.00<span class="old-price">$37.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                            <div class="input-cart">
                                <input value="1" type="number">
                                <button class="default-btn">Add to cart</button>
                            </div>
                            <div class="share-product">
                                <h4>Share this product</h4>
                                <div class="social-link">
                                    <a href="#" target="_blank" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" target="_blank" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" target="_blank" class="pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a href="#" target="_blank" class="google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#" target="_blank" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICKVIEW PRODUCT -->

    <!-- Video Script Start-->
    <!-- Video Script End-->

    <!-- All js here -->
    <script src="assets/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/assets/js/bootstrap.min.js"></script>
    <script src="assets/assets/js/plugins.js"></script>
    <script src="assets/assets/js/ajax-mail.js"></script>
    <script src="assets/assets/js/main.js"></script>
</body>

</html>