@extends('Common.Frontheader')
@section('content')
<div class="page-banner section" style="height:100px;">
        <div class="container" style="height:100px;">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">Contact</h2>
                
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Contact Start -->
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Wrapper Start -->
                    <div class="contact-wrapper">
                        <h4 class="contact-title">Get in touch</h4>
                        <p>Start with us today to set up an appointment or visit us at our offline store !!</p>

                        <div class="contact-form">
                        @if(session()->has('success'))
                                <div class="alert alert-notification-bx" id="success"
                                     style="width:600px; background-color:lightgreen ;">
                                    
                                    <div class="col-6" style="width:300px; background-color: lightgreen;">
                                        <p class="m-0">Saved Successfully!</p>
                                    </div>
                                </div>
                            @endif
                        <form action="addcontact" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                                    {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" autocomplete="off">
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" autocomplete="off">
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                        <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" autocomplete="off">
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off">
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                        <input type="text" name="mes" placeholder="Message" value="{{ old('mes') }}" autocomplete="off">
                                            <span class="text-danger">{{ $errors->first('mes') }}</span>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-dark rounded-pill">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Wrapper End -->
                </div>
                <div class="col-lg-6">
                    <!-- Contact Wrapper Start -->
                    <div class="contact-information">
                        <div class="single-information">
                            <h5 class="title">Office Address</h5>
                            <p>Shop No 12, Silver Oaks Complex, <br/>Ahmed Nagar, Banjara Hills, <br/>Hyderabad, <br/>Telengana - 500028</p>
                        </div>
                        <div class="single-information">
                            <h5 class="title">Phone Number</h5>
                            <p><a href="#">+91 70327 71809</a></p>
                            <p><a href="#">+91 89190 80613</a></p>
                        </div>
                         <div class="single-information">
                            <h5 class="title">Email</h5>
                            <p><a href="mailto:parveensboutique65@gmail.com">parveensboutique65@gmail.com</a></p>
                           <p><a href="mailto:info@elhambyparveen.com">info@elhambyparveen.com</a></p>
                        </div>
                        <div class="single-information">
                            <h5 class="title">Web Address</h5>
                            <p><a href="https://elhambyparveen.com/">elhambyparveen.com</a></p>
                           
                        </div>
                    </div>
                    <!-- Contact Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
                    $('#success').delay(2000).fadeOut();
                });
    </script>
@endsection
