@extends('Common.Frontheader')
@section('content')

      

<div class="page-banner about-banner section" style="height:100px;">
        <div class="container" style="height:100px;">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">Our Story</h2>
                
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- About Start -->
    <div class="section about-section">
        <div class="container">
            <div class="about-content">
                <img src="assets/assets/images/{{$bigimg}}" alt="">
                <h2 class="about-title">{!!$title!!}</h2>
                <h3>{!!$shorttitle!!}</h3>
                {!!$shortdesc!!}
            </div>
            <div class="about-wrapper">
                
                        <div class="about-content about-item-01">
                            <h3 class="title">Our products and services</h3>
                            <p>From casual clothing to festive and wedding collections, from baby frocks to men and women collection, we offer personalization. We provide twining ensembles for mother-daughter duos and couple duos. </p>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="row align-items-center">
                     
                                <div class="col-lg-8">
                                    <p><b>Products we offer:-</b></p>
                            <ul>
                                <li>Fabric</li>
                                <li>Kids collection-Casual Frocks,Party Wear frocks,Indo western outfits,wedding/festive outfits</li>
                                <li>Women Collection-Casual kurtis,Indo-Western wear,Pakistani dresses,Sarees,kaftans,wedding/festive outfits ,western wear</li>
                                <li>Men collection-wedding/festive outfits</li>
                                <li>Twinning outfits</li>
                               
                            </ul>
                                </div>
                               
                                <div class="col-lg-4">
                            <p><b>Services we offer:-</b></p>
                                    <ul>
                                        <li>Customization</li>
                                        <li>Stitching</li>
                                        <li>Maggum Work</li>
                                        <li>Hand embroidery</li>
                                        <li>Machine embroidery</li>
                                        <li>Hand Painting</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>                
                            
                </div>
                </div>
            </div>
            <div class="about-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-lg-12">
                        <div class="about-content about-item-02 text-center ">
                            <h3 class="title">Mission and Vision</h3>
                            
                            <p>As we move ahead in business our mission/ vision is to leave an impact on women empowerment by offering girl education and employment opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-image-02">
                            <img src="assets/assets/images/master.png" alt="" width="500">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-01">
                            <img src="assets/assets/images/embroider.png" alt="" width="500">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-lg-12">
                        <div class="about-content about-item-02">
                            <h3 class="title text-center mt-10">Why you must choose our company’s products or services</h3>
                            <p><b>We give you the best quality:</b> We offer only the finest quality at various price points. We do not sell throw away items! There is no one else in town that carries the brands we do or is as committed to service as we are.</p>
                            <p><b>We save you time:</b> Are you limited on time? We will keep your sizes and tailoring instructions on file, allowing you to rapidly come in and make selections or order items over the phone, text or email.</p>
                            <p><b>We save you money:</b> We will always make sure you are aware of sales on the Clothes you love! We also have many different clothing options to choose from ensuring that you are paying the price that makes sense for you.</p>
                            <p><b>We make sure you look your best:</b> We will be meticulous in ensuring you have the best fit possible, whether it be off the rack or custom. Tailoring is included with everything purchased here, so whether it is an outfit that needs hemming, or a coat waist taken in, we will make sure it is done right.</p>
                            <p><b>We give you the best service:</b> Not your normal department store, we are. We take a lot of pleasure in what we do and are here to support you at every turn. We have numerous enduring connections with clients as a result of our dedication to taking care of our consumers. We will truly tailor your shopping experience with us once we get to know you.</p>
                            <p><b>We troubleshoot outfit problems for you:</b> Complete outfits, wardrobes, seasonal collections, etc., will be created by us. You can take part in this process however much or how little you'd like. Our genuine pleasure is in making sure you feel and look fantastic.</p>
                            <p><b>We will not pressure you:</b> Since we don't receive commissions, we won't try to convince you to buy something you don't actually need or want. Whether it's a custom piece or a tailored suit, we're here to help you find what works best for you. Each client we have is someone we sincerely want to work with. From your very first suit to your dinner attire for your retirement party, we will be here to assist you.</p>
                            <p><b>We will make sure you are effective:</b> If your line of work necessitates business attire, we'll make sure you have access to the outfits you need to perform at your best. We think that one's appearance has an impact on their effectiveness. We are your shop if you take your business seriously.</p>
                        </div>
                    </div>
                    
                       
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="testimonial-section">
                <div class="shape shape-01">
                    <img src="assets/assets/images/testimonial/shape-1.svg" alt="">
                </div>
                <div class="shape shape-02">
                    <img src="assets/assets/images/testimonial/shape-2.svg" alt="">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Testimonial Wrapper Start -->
                        <div class="testimonial-wrapper testimonial-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    
                                   
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial swiper-slide text-center">
                                        <img src="assets/assets/images/testimonial/quote.svg" alt="Quote">
                                        <p>{!!$scroll_title1!!}</p>
                                        <h4 class="author-name">{!!$author_name1!!}</h4>
                                        <span class="designation">{!!$message1!!}</span>
                                    </div>
                                    <!-- Single Testimonial End -->
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial swiper-slide text-center">
                                        <img src="assets/assets/images/testimonial/quote.svg" alt="Quote">
                                        <p>{!!$scroll_title2!!}</p>
                                        <h4 class="author-name">{!!$author_name2!!}</h4>
                                        <span class="designation">{!!$message2!!}</span>
                                    </div>
                                    <!-- Single Testimonial End -->
                                     <!-- Single Testimonial Start -->
                                     <div class="single-testimonial swiper-slide text-center">
                                        <img src="assets/assets/images/testimonial/quote.svg" alt="Quote">
                                        <p>{!!$scroll_title3!!}</p>
                                        <h4 class="author-name">{!!$author_name3!!}</h4>
                                        <span class="designation">{!!$message3!!}</span>
                                    </div>
                                    <!-- Single Testimonial End -->
                                </div>
                                <div class="testimonial-arrow">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev"><span class="material-icons">trending_flat</span></div>
                                    <div class="swiper-button-next"><span class="material-icons">trending_flat</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Wrapper End -->
                    </div>
                </div>
                <div class="shape shape-03">
                    <img src="assets/assets/images/testimonial/shape-2.svg" alt="">
                </div>
                <div class="shape shape-04">
                    <img src="assets/assets/images/testimonial/shape-1.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    

    <!-- Newsletter Start -->
    <div class="section section-padding-02">
        <div class="container">
            <div class="newsletter-wrapper" style="background-image: url(assets/assets/images/newsletter.jpg);">
                <div class="newsletter-title">
                    <h2 class="title">Start with us today to set up an appointment or visit us at our offline store</h2>
                    <a class="newsletter-btn" href="contact"><br/>Shop Now <span class="material-icons">arrow_right_alt</span></a> 
                </div>
               
                
                
                    
                   
            </div>
        </div>
    </div>

@endsection

