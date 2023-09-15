@extends('Common.Frontheader')
@section('content')
    <div class="page-banner section" style="height: 100px;">
        <div class="container">
            <div class="page-banner-wrapper text-center">
                <h2 class="title">Checkout</h2>

            </div>
        </div>
    </div>
   
    <div class="section section-padding-02 mt-n6">
        <div class="container">

            <!-- Checkout Info End -->

            <!-- Checkout Info Start -->


            <!-- Checkout Start -->
            <div class="checkout-wrapper">

                    <div class="row">
                        <div class="col-lg-7">
                            <!-- Checkout Form Start -->
                            <div class="checkout-form">
                                <div class="checkout-title">
                                    <h3>Payment Action   - <font color='green'>Order Total (Rs): {{$total}}</font></h3>
                                </div>
</br>

            @if(session()->has('success'))
            <script type="text/javascript">
    $(document).ready(function() {
        $('#myModalwishd').modal('show');
    });
</script>
               
            @endif
            @if(session()->has('failure'))
                <div class="alert alert-notification-bx" id="success"
                     style="width:400px; background-color:red ;">

                    <div class="col-6" style="width:400px; background-color: red;">
                        <p class="m-0"><font color='white'>Already Paid</font></p>
                    </div>
                </div>
            @endif             
                                <div class="checkout-title">
                                   
                                </div>
                                <div class="row">

                                   
                                    <div class="col-md-6">
                                      
                                    </div>
                                   
                                    <div class="col-md-6">
                                       
                                        <div class="checkout-form-list"> 
                                        <form id="selectdate" name="selectdate" method="post" enctype="multipart/form-data"
              action="{{url('/gotopayment')}}">
            {{ csrf_field() }}
                                         
                                            <input type="hidden" class="form-control" name='orderno'  value="{{$orderid}}"/>  
                                            <input type="hidden" class="form-control" name='name'  value="{{$name}}"/>
                                            <input type="hidden" class="form-control" name='phone'  value="{{$phone}}"/>
                                            <input type="hidden" class="form-control" name='email'  value="{{$email}}"/>
                                            <input type="hidden" class="form-control" name='zipcode'  value="{{$zipcode}}"/>
                                            <input type="hidden" class="form-control" name='address'  value="{{$address}}"/>
                                            <input type="hidden" class="form-control" name='totalamt'  value="{{$total}}"/>
                                        </br>
                                        <!-- <input type="submit" name="payment" value="Proceed to Pay" class="btn btn-primary btn-hover-dark rounded-pill"> -->
                                        </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="checkout-title">
                                    <h3>Shipping Details</h3>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Order No:</label>
                                            <input type="text" class="form-control" placeholder="" readonly value="{{$orderid}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label> Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" readonly placeholder="" value="{{$name}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" class="form-control" readonly placeholder="" value="{{$phone}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control" readonly placeholder="" value="{{$email}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Zipcode <span class="required">*</span></label>
                                            <input type="text" class="form-control" readonly placeholder="" value="{{$zipcode}}"/>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" class="form-control" readonly placeholder="Street address" value="{{$address}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Checkout Form End -->
                        </div>
                        <div class="col-lg-5">
                            <!-- Checkout Form Start -->
                            <div class="checkout-order">
                                <div class="checkout-title">
                                    <h4 class="title">Your Order</h4>
                                </div>

                                <div class="checkout-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="Product-name">Product</th>
                                            <th class="Product-price">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($productlist as $cat)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{$cat->productname}}<strong class="product-quantity"> × {{$cat->qty}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">{{$cat->totprice}}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">{{$subtotal}}</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Couponcode Discount({{$couponperc}}%)</th>
                                            <td><span class="amount">{{$prec}}.00</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Gst Charges</th>
                                            <td><span class="amount">{{$b}}</span></td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total (Rs.)</th>
                                            <td><strong><span class="amount">{{$total}}</span></strong>
                                            </td>
                                        </tr>

                                        

                                        </tfoot>
                                    </table>
                                </div>
                                <div style="height: 10px;"></div>
                                <!-- <div class="checkout_btn">
                                    {{--<a href="#" class="btn btn-md btn-golden">Proceed to Payment</a>--}}
                                    <div class="order-button-payment">
                                        @if($prdcnt>0)
                                            {{--@if(Session::has('amount'))--}}
                                            <div class="container text-center">
                                                <form id="selectdate" name="selectdate" method="post" enctype="multipart/form-data"
                                                      action="{{url('/payamt')}}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="name" value="{{session()->get('username')}}">
                                                    <input type="hidden" name="amount" value="{{$total*100}}" style="width: 100px;">
                                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                            data-key="rzp_live_EY3CuugrT5lupK"
                                                            data-amount="{{$total*100}}"
                                                            data-currency="INR"
                                                            data-order_id="{{session()->get('orderId')}}"
                                                            data-buttontext="Proceed To Pay"
                                                            data-background-color="yellow"
                                                            data-buttoncolor="btn btn-md btn-golden"
                                                            data-name="Elham "
                                                            data-description="Live transaction"
                                                            data-theme.color="#DFFF00"

                                                    ></script>
                                                    <input type="hidden" name="hidden" custom="Hidden Element">
                                                </form>
                                            </div>
                                        @endif

                                    </div>
                                </div> -->


                            </div>
                            </div>
                            <!-- Checkout Form End -->
                        </div>
                    </div>

            </div>
            <!-- Checkout End -->
        </div>
    </div>

    <div id="myModalwishd" class="modal fade" tabindex="-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success </h5>

                </div>
                <div class="modal-body">
                    <p>Dear customer, your payment action completed, our admin contact soon, Thankyou</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="close10();" data-dismiss="modal" id="btn2">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    $(document).ready(function() {
        $('#success').delay(2000).fadeOut();
    });


    function addupi()
        {
            var upirefno=document.getElementById("upirefno").value;
            var orderno=document.getElementById("orderno").value;
            var name=document.getElementById("name").value;
            var phone=document.getElementById("phone").value;
            var email=document.getElementById("email").value;
            var zipcode=document.getElementById("zipcode").value;
            var address=document.getElementById("address").value;
            var totalamt=document.getElementById("totalamt").value;
            if(upirefno!=""){
            $.ajax({
                type: 'post',
                url: '{{url('/addupis')}}',
                data: {
                    upirefno     : upirefno,orderno     : orderno,name     : name,phone     : phone,
                    email     : email,zipcode     : zipcode,address     : address,totalamt     : totalamt,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);
                 
                    $('#myModalwishd').modal('show');}
               
            });
        }else{alert('Please enter Upi ref no');document.getElementById("upirefno").focus();return false; }
        }

        function close10() {
            $('#myModalwishd').modal('hide'); window.location.href = "{{url('/logoutt')}}"
        }
    </script>
