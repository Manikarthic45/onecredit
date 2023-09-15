<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Fonts and icons -->
    <script src="{{asset('assets/css/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Tahoma:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ["{{asset('assets/css/fonts.min.css')}}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/atlantis.min.css')}}">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/css/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/css/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/css/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/css/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/css/datatables.min.js')}}"></script>
    <script src="{{asset('assets/css/atlantis.min.js')}}"></script>
</head>
<?php
$adminid = session()->get('adminid');
$select = DB::select('select * from admin where id = ?', [$adminid]);
foreach ($select as $data) {
    $username = $data->username;
    $password = $data->password;
}
if ($adminid == "") {
    return redirect('/admin');
} else {
}
?>



<div class="wrapper">
    <div class="main-header" style="min-height:70px;margin-left: 0;">
        <div class="logo-header" data-background-color="white">
            <a href="" class="logo">
                <img src="assets/assets/img/logo/kamali-logo.png" style="padding-left: 20px;" width="180" height="70" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        </div>
        <nav class="navbar navbar-header navbar-expand-lg" style="background-color: green;">
            <div class="container-fluid" style="background-color: green;">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-building"></i> &nbsp;&nbsp;Logout
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" onclick="changepw();">Change Password</a>
                                <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="sidebar sidebar-style-2" style="background-color: green;">
        <div class="sidebar-background"></div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-info">

                    <li class="nav-item">
                        <a href="" class="link">
                            <p></p>
                        </a>
                    </li>
                    <li class="nav-item  @if(\Route::getFacadeRoot()->current()->uri() == 'Dashboard') @endif">
                        <a href="{{url('Dashboard')}}" class="link">
                            <p><strong>
                                    <font color="#000">Dashboard</font>
                                </strong></p>
                        </a>
                    </li>


                    <!-- <li class="nav-item  @if(\request()->segment(1) == 'about'
                    ||\request()->segment(1)== 'newabout'
                    ||\request()->segment(1)=='viewabout'
                    ||\request()->segment(1)=='editabout')active @endif">
                    <a href="{{url('about')}}" class="link">
                        <p><strong><font color="#000">About Us</font></strong></p>
                    </a>
                </li>
                <li class="nav-item  @if(\request()->segment(1) == 'banner'
                    ||\request()->segment(1)== 'newbanner'
                    ||\request()->segment(1)=='viewbanner'
                    ||\request()->segment(1)=='editbanner')active @endif">
                    <a href="{{url('banner')}}" class="link">
                        <p><strong><font color="#000">Banner</font></strong></p>
                    </a>
                </li>
                
                <li class="nav-item  @if(\request()->segment(1) == 'banner'
                    ||\request()->segment(1)== 'newbanner'
                    ||\request()->segment(1)=='viewbanner'
                    ||\request()->segment(1)=='editbanner')active @endif">
                    <a href="{{url('image')}}" class="link">
                        <p><strong><font color="#000">Index Images</font></strong></p>
                    </a>
                </li>

                <li class="nav-item  @if(\request()->segment(1) == 'coupon'
                    ||\request()->segment(1)== 'newcoupon'
                    ||\request()->segment(1)=='viewcoupon'
                    ||\request()->segment(1)=='editcoupon')active @endif">
                    <a href="{{url('coupon')}}" class="link">
                        <p><strong><font color="#000">Coupon</font></strong></p>
                    </a>
                </li>
                <li class="nav-item  @if(\request()->segment(1) == 'contacts'
                    ||\request()->segment(1)== 'newcat'
                    ||\request()->segment(1)== 'addnew'
                    ||\request()->segment(1)== 'subcatindex'
                    ||\request()->segment(1)== 'newproduct'
                    ||\request()->segment(1)=='viewproduct'
                    ||\request()->segment(1)=='editproduct')active @endif">
                    <a href="{{url('contacts')}}" class="link">
                        <p><strong><font color="#000">Contact</font></strong> </p>
                    </a>
                </li>
                <li class="nav-item  @if(\request()->segment(1) == 'customer'
                    ||\request()->segment(1)== 'newcustomer'
                    ||\request()->segment(1)=='viewcustomer'
                    ||\request()->segment(1)=='editcustomer')active @endif">
                    <a href="customer" class="link">
                        <p><strong><font color="#000">Customer</font></strong></p>
                    </a>
                </li>
                <li class="nav-item  @if(\request()->segment(1) == 'newsletter')active @endif">
                    <a href="{{url('newsletter')}}" class="link">
                        <p><strong><font color="#000">Newsletter</font></strong> </p>
                    </a>
                </li>
                <li class="nav-item  @if(\request()->segment(1) == 'notifyme')active @endif">
                    <a href="{{url('notifyme')}}" class="link">
                        <p><strong><font color="#000">Notify Me</font></strong> </p>
                    </a>
                </li> -->


                    <li class="nav-section">
                        <h4 class="text-section"><strong>
                                <font color="#000">PRODUCT MASTER</font>
                            </strong></h4>
                    </li>
                    <li class="nav-item  @if(\request()->segment(1) == 'maincat'
                    ||\request()->segment(1)== 'newmaincat'
                    ||\request()->segment(1)=='viewmaincat'
                    ||\request()->segment(1)=='editmaincat')active @endif">
                        <a href="{{url('maincat')}}" class="link">
                            <p><strong>
                                    <font color="#000">Category</font>
                                </strong></p>
                        </a>
                    </li>
                    <li class="nav-item  @if(\request()->segment(1) == 'category'
                    ||\request()->segment(1)== 'newcategory'
                    ||\request()->segment(1)=='viewcategory'
                    ||\request()->segment(1)=='editcategory')active @endif">
                        <a href="{{url('category')}}" class="link">
                            <p><strong>
                                    <font color="#000">SubCategory</font>
                                </strong></p>
                        </a>
                    </li>
                    <!-- <li class="nav-item  @if(\request()->segment(1) == 'fabric'
                    ||\request()->segment(1)== 'newfabric'
                    ||\request()->segment(1)=='viewfabric'
                    ||\request()->segment(1)=='editfabric')active @endif">
                        <a href="{{url('fabric')}}" class="link">
                            <p><strong>
                                    <font color="#000">Fabric</font>
                                </strong></p>
                        </a>
                    </li> -->
                    <li class="nav-item  @if(\request()->segment(1) == 'plant'
                    ||\request()->segment(1)== 'newplant'
                    ||\request()->segment(1)=='viewplant'
                    ||\request()->segment(1)=='editplant')active @endif">
                        <a href="{{url('plant')}}" class="link">
                            <p><strong>
                                    <font color="#000">Products</font>
                                </strong></p>
                        </a>
                    </li>
                    <li class="nav-item  @if(\request()->segment(1) == 'events'
                    ||\request()->segment(1)== 'newevents'
                    ||\request()->segment(1)=='viewtype'
                    ||\request()->segment(1)=='editevents')active @endif">
                        <a href="{{url('events')}}" class="link">
                            <p><strong>
                                    <font color="#000">Blog</font>
                                </strong></p>
                        </a>
                    </li>

                    <li class="nav-item  @if(\request()->segment(1) == 'order'
                    ||\request()->segment(1)== 'neworder'
                    ||\request()->segment(1)=='vieworder'
                    ||\request()->segment(1)=='editorder')active @endif">
                        <a href="{{url('order')}}" class="link">
                            <p><strong>
                                    <font color="#000">Order</font>
                                </strong></p>
                        </a>
                    </li>
                    <li class="nav-item  @if(\request()->segment(1) == 'invoice'
                    ||\request()->segment(1)== 'newsubzone'
                    ||\request()->segment(1)=='viewsubzone'
                    ||\request()->segment(1)=='editsubzone')active @endif">
                        <a href="{{url('invoice')}}" class="link">
                            <p><strong>
                                    <font color="#000">Invoice</font>
                                </strong></p>
                        </a>
                    </li>
                    <!-- <li class="nav-item  @if(\request()->segment(1) == 'payment'
                    ||\request()->segment(1)== 'newsubzone'
                    ||\request()->segment(1)=='viewsubzone'
                    ||\request()->segment(1)=='editsubzone')active @endif">
                    <a href="{{url('payment')}}" class="link">
                        <p><strong><font color="#000">Payment Details</font></strong></p>
                    </a>
                </li> -->
                    <li class="nav-item  @if(\request()->segment(1) == 'upipayment'
                    )active @endif">
                        <a href="{{url('upipayment')}}" class="link">
                            <p><strong>
                                    <font color="#000">Upi Transaction</font>
                                </strong></p>
                        </a>
                    </li>

                    <!--<li class="nav-item  @if(\request()->segment(1) == 'employee'
||\request()->segment(1)== 'newemployee'
||\request()->segment(1)=='viewemployee'
||\request()->segment(1)=='editemployee')active @endif">
<a href="{{url('employee')}}" class="link">
<p><strong>EMPLOYEE</strong> </p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'actor'
||\request()->segment(1)== 'newactor'
||\request()->segment(1)=='viewactor'
||\request()->segment(1)=='editactor')active @endif">
<a href="{{url('actor')}}" class="link">
<p><strong>ACTORS</strong> </p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'users'
||\request()->segment(1)== 'newusers'
||\request()->segment(1)=='viewusers'
||\request()->segment(1)=='editusers')active @endif">
<a href="{{url('users')}}" class="link">
<p><strong>USERS</strong> </p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'offlinelog'
||\request()->segment(1)== 'newofflinelog'
||\request()->segment(1)=='viewofflinelog'
||\request()->segment(1)=='editofflinelog')active @endif">
<a href="{{url('offlinelog')}}" class="link">
<p><strong>OFFLINELOG</strong> </p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'category'
||\request()->segment(1)== 'newcategory'
||\request()->segment(1)=='viewcategory'
||\request()->segment(1)=='editcategory')active @endif">
<a href="{{url('category')}}" class="link">
<p><strong>CATEGORY</strong> </p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'subcategory'
||\request()->segment(1)== 'newsubcategory'
||\request()->segment(1)=='viewsubcategory'
||\request()->segment(1)=='editsubcategory')active @endif">
<a href="{{url('subcategory')}}" class="link">
<p><strong>SUBCATEGORY </strong></p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'observer'
||\request()->segment(1)== 'newobserver'
||\request()->segment(1)=='viewobserver'
||\request()->segment(1)=='editobserver')active @endif">
<a href="{{url('observer')}}" class="link">
<p><strong>OBSERVER</strong> </p>
</a>
</li>
<li class="nav-item  @if(\Route::getFacadeRoot()->current()->uri() == 'plant')schedule @endif">
<a href="{{url('schedule')}}" class="link">
<p><strong>SCHEDULE</strong></p>
</a>
</li>
<li class="nav-item  @if(\request()->segment(1) == 'authority'
||\request()->segment(1)== 'newauthority'
||\request()->segment(1)=='viewauthority'
||\request()->segment(1)=='editauthority')active @endif">
<a href="{{url('authority')}}" class="link">
<p><strong>AUTHORIZATION</strong> </p>
</a>
</li>
<li class="nav-item  @if(\Route::getFacadeRoot()->current()->uri() == 'calendar')active @endif">
<a href="{{url('calendar')}}" class="link">
<p><strong>WIL CALENDAR</strong> </p>
</a>
</li>-->
                </ul>
            </div>
        </div>
    </div>
    @yield('content')

</div>
</div>

<div class="modal fade schedule-details design-modal" id="confirmpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:500px;">
        <div class="modal-content"><input type="hidden" id="plantid">
            <div class="modal-header bdrnone">
                <img src="{{asset('assets/des/images/graphic-calendar-icon.svg')}}" width="80" alt="" class="m-auto" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    CHANGE PASSWORD &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Code</label>
                        <input type="text" class="form-control" required placeholder="Enter Employee Code" name="admincode" id="admincode" value="{{$username}}" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" required placeholder="Enter Password" name="pw" id="pw" value="{{$password}}" autocomplete="off">
                    </div>
                    <div class="col-md-12" align="center">
                        <button type="" id="updatebtn" class="btn btn-success">Update</button>
                    </div>
                    <div class="col-md-12" align="center">
                        <input type="hidden" class="form-control" required placeholder="Enter Employee Code" name="adminid" id="adminid" value="{{$adminid}}" autocomplete="off">
                        <button type=""></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade schedule-details design-modal" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:500px; height: 150px;">
        <div class="modal-content">
            <div class="modal-header bdrnone">
                <img src="{{asset('assets/des/images/graphic-calendar-icon.svg')}}" width="80" alt="" class="m-auto" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-2">
                Saved Successfully.
            </div>
        </div>
    </div>
</div>
</body>

</html>
<script type="text/javascript">
    function changepw() {
        $('#confirmpopup').modal('show');
    }

    $('#updatebtn').click(function() {
        var admincode = document.getElementById("admincode").value;
        var pw = document.getElementById("pw").value;
        var adminid = document.getElementById("adminid").value;
        $.ajax({
            type: 'post',
            url: '{{url(' / changepw ')}}',
            data: {
                admincode: admincode,
                pw: pw,
                adminid: adminid,
                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);
                $("#confirmpopup").hide();
                window.location.href = "{{url('/dashboard')}}";
                $('#success').modal('show');
                setTimeout(function() {
                    $('#success').fadeOut();
                }, 200000);

            }
        });
    });
</script>