@extends('Common.Frontheader')
@section('content')

<?php 

    $productlist = \App\Tucas_order::where('customerid', session()->get('userid'))->where('types', 'cart')->where('status', '0')->get();
?>
    <!-- Page Banner Start -->
    <div class="page-banner section" style="height:100px;">
        <div class="container" style="height:100px;">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">My Account</h2>
               
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- My Account Start -->
    <div class="section section-padding-02 mt-n6">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <!-- My Account Menu Start -->
                    <div class="my-account-menu mt-6">
                        <ul class="nav account-menu-list flex-column">
                            <li>
                                <a class="active" data-bs-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i> MyOrder</a>
                            </li>
                          
                            <!--<li>-->
                            <!--    <a data-bs-toggle="pill" href="#pills-payment"><i class="fa fa-credit-card"></i> Payment Method</a>-->
                            <!--</li>-->
                            <li>
                                <a data-bs-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i> Change Password</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account Details</a>
                            </li>
                            <li>
                                <a href="logoutt"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- My Account Menu End -->
                </div>

                
             
                <div class="col-lg-9 col-md-8">
                    <!-- Tab content start -->
                    <div class="tab-content my-account-tab" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard">
                            <div class="my-account-dashboard account-wrapper mt-5">
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" id="success" role="alert">
                              <strong>Password Changed Successfully,Please Check Login Again!!!</strong>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" fdprocessedid="a756uk"></button>
                            </div>
                        @endif
                                <h4 class="account-title">Dashboard</h4>
                                <div class="welcome-dashboard">
                                    <p>Hello, <strong><?php echo session()->get('username');?>,</strong> </p>
                                </div>
                                <p>From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-order">
                            <div class="my-account-order account-wrapper mt-6">
                                <h4 class="account-title">Orders</h4>
                                <div class="account-table text-center table-responsive">
                                    <table class="table">
                                        <thead>
                                       
                            <tr>
                                <th class="pro-thumbnail">ORDERID</th>
                                <th class="pro-title">NAME</th>
                                <th class="pro-title">PHONE</th>
                                <th class="pro-title">EMAIL</th>
                                <th class="pro-title">ZIPCODE</th>
                                <th class="pro-title">ADDRESS</th>
                                <th class="pro-price">TOTAL AMOUNT</th>
                                <th class="pro-quantity" style="width: 3%;">UPI REFNO</th>
                                <th class="pro-subtotal">ORDER STATUS</th>
                                <th class="pro-subtotal">CREATED AT</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($check_data as $cat)
                                <tr>
                                    <td class="pro-title">{{$cat->orderid}}</td>
                                    <td class="pro-title">{{$cat->name}}</td>
                                    <td class="pro-title">{{$cat->phone}}</td>
                                    <td class="pro-title">{{$cat->email}}</td>
                                    <td class="pro-title">{{$cat->zipcode}}</td>
                                    <td class="pro-title">{{$cat->address}}</td>
                                    <td class="pro-title">{{$cat->totalamt}}</td>
                                    <td class="pro-title">{{$cat->upirefno}}</td>
                                    <td>@if($cat->track_status=="Initiate") <font color="red"> Initiate
                                        </font> @elseif($cat->track_status=="Inprogress") <font color="blue"> Inprogress
                                        </font> @elseif($cat->track_status=="Delivered") <font color="green"> Delivered
                                        </font>@else <font color="red"> Initiate
                                        </font> @endif</td>
                                    <td class="pro-title">
                                        @if($cat->track_status=="Initiate"){{date("d-m-Y H-i-s",strtotime($cat->created_at))}}
                                        @else{{date("d-m-Y H-i-s",strtotime($cat->updated_at))}}@endif
                                    </td>
                                </tr>
                                </tr>
                                @endforeach
                            </tbody>
                                       
                    
                                    </table>
                                </div>
                            </div>
                        </div>

                       

                        <!--<div class="tab-pane fade" id="pills-payment">-->
                        <!--    <div class="my-account-payment account-wrapper mt-6">-->
                        <!--        <h4 class="account-title">Payment Method</h4>-->
                        <!--        <p><img src="razor.jpg" style="width:600px; height:300px;"></p>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="tab-pane fade" id="pills-address">
                        <div class="my-account-details account-wrapper mt-6">
                                <h4 class="account-title">Change Password</h4>

                                <div class="account-details">
                                <form action="pwpost" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                                <?php echo csrf_field(); ?>
                                    <div class="row">
                                       
                                     
                                     
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label class="form-label">New Password</label>
                                                <input type="password" name="newpw" placeholder="New Password" required >
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="single-form">
                                           
                                                <button type="submit"
                                                 class="btn btn-primary btn-hover-dark rounded-pill">Change Password</button>
                                            </div>
                                        </div>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-account">
                            <div class="my-account-details account-wrapper mt-6">
                                <h4 class="account-title">Account Details</h4>
                                <form action="myaccountpost" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                                <?php echo csrf_field(); ?>
                                <div class="account-details">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label class="form-label"> Name</label>
                                                <?php echo $customername;?>   <input type="text" name="name" placeholder="Name" value="<?php echo $customername;?>" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label class="form-label">Phone</label>
                                                 <input type="text" name="phone" placeholder="Phone"  value="<?php echo $phone;?>" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label class="form-label"> Email</label>
                                                   <input type="email" name="email" placeholder="Email"  value="<?php echo $email;?>" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" placeholder="Address"   value="<?php echo $address;?>" required >
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="single-form">
                                            <button type="submit"
                                                 class="btn btn-primary btn-hover-dark rounded-pill">Save Change</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        </form>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- My Account End -->
    <div class="modal fade" tabindex="-1" id="vaModal"
         data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" style="width:500px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">Confirmation For Delete</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group-inner input-with-success">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
                                <label class="login2 pull-left pull-left-pro"><font color="black" >Are you sure to delete?</font></label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group-inner input-with-success" style="height: 10px;">

                    </div>
                    <div class="form-group-inner input-with-success">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="login2 pull-left pull-left-pro"></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-select-list">
                                    <button type="button" style="width: 150px; height: 50px;" class="btn btn-success"   onclick="delet();">Yes</button>
                                    <a href="{{url('/cartdetails')}}"> <input type="button" style="width: 150px; height: 50px;" class="btn btn-warning" value="No" style="background-color:blue;" class="btn btn-sm btn-primary login-submit-cs"  /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
  
     function greeting(productcode)
    {
        document.getElementById("productcode").value=productcode;
        $("#vaModal").modal('show');
    }
     function delall()
    {
        $("#va1Modal").modal('show');
    }
    function deletthis(userid,productcode)
    {
        document.getElementById("userid").value=userid;
        document.getElementById("productcode").value=productcode;
        $("#vaModal").modal('show');

    }
    function deletall()
    {
        var userid=document.getElementById("useridd").value;
        $("#va1Modal").modal('hide');
        $.ajax({
            type: 'post',
            url: '{{url('/deletall')}}',
            data: {
                userid     : userid,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {//alert(data);

                window.location.href = "{{url('/cartdetails')}}"

            }
        });
    }
</script>
@endsection