@extends('Common.Frontheader')
@section('content')
<div class="page-banner section" style="height:100px;">
        <div class="container"  style="height:100px;">
            <div class="page-banner-wrapper text-center" >
                <h2 class="title">Register</h2>
               
            </div>
        </div>
    </div>

    <div class="section section-padding-02 mt-n1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Register</h4>
                        <p>Already have an account? <a href="login">Log in instead!</a></p>
                        <form action="registerpost" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                            {{ csrf_field() }}
                            <div class="single-form">
                                <div class="signup-wrapper">
                                <label>First Name</label>
                                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                </div>
                                <div style="height:5px;"></div>
                                <div class="signup-wrapper">
                                <label>Password</label>
                                    <input type="password" name="pw" placeholder="Password" value="{{ old('pw') }}">
                                    <span class="text-danger">{{ $errors->first('pw') }}</span>
                                </div>
                                <div style="height:5px;"></div>
                                <div class="signup-wrapper">
                                <label>Phone</label>
                                    <input type="text" maxlength="10" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                </div>
                                <div style="height:5px;"></div>
                                <div class="signup-wrapper">
                                <label>Email</label>
                                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                 <!-- <div style="height:5px;"></div>
                                <div class="signup-wrapper">
                                <label>Address</label>
                                    <textarea class="form-control" name="address" rows="3" placeholder="Address"></textarea>
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                </div> -->
                                <div style="height:5px;"></div>
                                <div class="sing-buttom mb-20">
                                <button class="btn btn-primary btn-hover-dark rounded-pill">Register</button>
                                </div>
                                

                            </div>
                        </form>
                        
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
@endsection

