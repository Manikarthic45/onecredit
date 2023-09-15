@extends('Common.Frontheader')
@section('content')
<br>
<main>
    <section class="page-title-area" data-background="assets/assets/img/bg/page-title-bg.jpg" style="height: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper text-center">
                        <h1 class="page-title mb-10">Cart</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(session()->has('success'))
    <script>
        alert('Shipping Address Saved successfully!....');
    </script>
    @endif
    <div style="height:50px;"></div>
    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-4"></div>

                            <div class="col-sm-4">
                                @if($shipcnt>0)
                                <button type="button" onclick="btnship();" class="btn btn-primary">UPDATE SHIPPING
                                    ADDRESS</button>
                                @else
                                <button type="button" onclick="btnship();" class="btn btn-primary">ADD SHIPPING
                                    ADDRESS</button>
                                @endif
                            </div>

                            <div class="col-sm-4"><button type="button" onclick="shipchk();" class="btn btn-success">Checkout</button>
                                <a href="shop?cat=all&type=all&fabric="><button type="button" class="btn btn-success">Back Sale</button></a>
                            </div>
                        </div>


                        <div class="row" style="height: 10px;">

                        </div>
                        <div class="cart-table table-responsive">
                            <div class="row">

                                <div class="col-sm-4">
                                    <h3>SHIPPING ADDRESS</h3>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                            </div>

                            <table class="table table-striped table-dark">

                                <tr style="background-color: lightskyblue;">
                                    <th class="pro-thumbnail" style="width: 150px;">ORDER NO</th>
                                    <th class="pro-title">NAME</th>
                                    <th class="pro-price">PHONE</th>
                                    <th class="pro-price">EMAIL</th>
                                    <th class="pro-quantity" style="width: 3%;">ZIPCODE</th>
                                    <th class="pro-subtotal">STATE</th>
                                    <th class="pro-remove" style="width: 3%;">ADDRESS</th>
                                </tr>
                                <tbody>
                                    <tr>

                                        <td class="pro-thumbnail">{{$orderid}}</td>
                                        <td class="pro-title">{{$name}}</td>
                                        <td class="pro-price"><span>{{$phone}}</span></td>
                                        <td class="pro-price"><span>{{$email}}</span></td>
                                        <td class="pro-quantity">
                                            {{$zipcode}}
                                        </td>
                                        <td style="background-color: #0a53be;"><span>{{$state}}</span></td>
                                        <td class="pro-remove"><span>{{$address}}</span></td>
                                    </tr>

                                </tbody>
                            </table>



                        </div>
                        <div style="height: 20px;"></div>
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <div class="row">

                                <div class="col-sm-4">
                                    <h3>CART DETAILS</h3>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                            </div>

                            <table class="table table-bordered">

                                <tr>
                                    <th class="pro-thumbnail">Product Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-title">Color</th>
                                    <th class="pro-title">Size</th>
                                    <th class="pro-title">Gst(%)</th>
                                    <th class="pro-title">Gst Amt(%)</th>
                                    <th class="pro-price">Price(Rs).</th>
                                    <th class="pro-quantity" style="width: 3%;">Quantity</th>
                                    <th class="pro-subtotal">SubTotal(Rs).</th>
                                    <th class="pro-remove" style="width: 3%;">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productlist as $cat)
                                    <tr>

                                        <td class="pro-thumbnail"><img class="img-fluid" width="100" height="100" src="{{$cat->prdimg}}" alt="Product" /></td>
                                        <td class="pro-title">{{$cat->productname}}</td>
                                        <td class="pro-title">{{$cat->color}}</td>
                                        <td class="pro-title">{{$cat->size}}</td>
                                        <td class="pro-title">{{$cat->gstperc}}</td>
                                        <td class="pro-title">{{$cat->gstamt}}</td>
                                        <td class="pro-price"><span>{{$cat->price}}</span></td>
                                        <td class="pro-quantity"><span>{{$cat->qty}}</span>
                                            {{--<input type="text" style="width: 80px;height: 50px;" name="" id="{{$cat->productcode}}"
                                            value="{{$cat->qty}}" onchange="chgval(this.value,this.id);"
                                            onclick="getid(this.id);"/>--}}
                                        </td>
                                        <td class="pro-subtotal"><span>{{$cat->totprice}}</span></td>
                                        <td class="pro-remove"><i class="fa fa-trash" aria-hidden="true" style="color: red;" id="{{$cat->pid}}" onclick="greeting(this.id)"></i>
                                        </td>
                                    </tr>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
                    </div>
                </div>
                <div style="height:50px;"></div>

            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
</main>

<div class="modal fade" tabindex="-1" id="vaModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" style="width:500px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirmation For Delete</h4>
                <button type="button" class="close" data-bs-dismiss="modal">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-inner input-with-success">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">
                                <font color="black">Are you sure want to delete?</font>
                            </label>
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
                                <button type="button" style="width: 150px; height: 50px;" class="btn btn-success" onclick="delet();">Yes</button>
                                <a href="{{url('/logoutcartdetails')}}"> <input type="button" style="width: 150px; height: 50px;" class="btn btn-warning" value="No" style="background-color:blue;" class="btn btn-sm btn-primary login-submit-cs" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->

<div id="myModalwishd" class="modal fade" tabindex="-2">
    <form id="selectdate" name="selectdate" method="post" enctype="multipart/form-data" action="{{url('/addlogoutshipping')}}">
        {{ csrf_field() }}

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Shipping Address :</h5>
                    <button type="button" class="btn btn-secondary" onclick="close10();" data-dismiss="modal" id="btn2">Close</button>

                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Name :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" required style="border-color: #0a58ca;" class="form-control" placeholder="Enter  Name" name="name" id="name" value="{{$name }}" autocomplete="off">

                        </div>
                    </div>
                    <div style="height:3px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Phone :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" required style="border-color: #0a58ca;" class="form-control" placeholder="Enter phone" name="phone" id="phone" value="{{$phone }}" autocomplete="off">

                        </div>
                    </div>
                    <div style="height:3px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Email :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="email" required style="border-color: #0a58ca;" class="form-control" placeholder="Enter Email" name="email" id="email" value="{{$email }}" autocomplete="off">

                        </div>
                    </div>
                    <div style="height:3px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Zipcode :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" required style="border-color: #0a58ca;" class="form-control" placeholder="Enter Zipcode" name="zipcode" id="zipcode" value="{{$zipcode }}" autocomplete="off">

                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Country :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" style="border-color: #0a58ca" required name="country" id="country" onchange="SearchUniversity()">
                                <option value="">--------Select Country------</option>
                                @foreach ($country as $country_list)
                                <option value="{{$country_list}}">{{$country_list}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">State :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div id="state_list"></div>
                        </div>
                    </div>

                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">City :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div id="city_list"></div>
                        </div>
                    </div>


                    <!-- Scripts for country based states -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

                    <script>
                        function SearchUniversity() {
                            var universityname = document.getElementById("country").value;
                            $("#ageselect").html('');
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'post',
                                url: 'get_states',
                                data: {
                                    country: universityname
                                },

                                success: function(data) {
                                    $("#state_list").html(data);

                                },
                            });
                        }
                    </script>
                    <script>
                        function selectcity(state) {
                            $.ajax({
                                type: 'post',
                                url: 'get_city',
                                data: {
                                    state: state,
                                    '_token': '{{csrf_token()}}'
                                },
                                success: function(data) {
                                    $("#city_list").html(data);

                                }
                            });

                        }
                    </script>

                    
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Address :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <textarea style="border-color: #0a58ca;" required class="form-control rounded-0" name="address" id="exampleFormControlTextarea2" rows="3">{{$address }}</textarea>

                        </div>
                    </div>

                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">Coupon Code :</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" style="border-color: #0a58ca; width: 300px;" name="coupon" id="coupon">
                                <option value="">---Select Coupon Code----</option>
                                @foreach ($couponlist as $coupon)
                                <option value="{{$coupon->coupon_percentage}}">{{$coupon->coupon_code}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <div style="height:3px;"></div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>


            </div>
        </div>
    </form>
</div>

<div class="modal fade" tabindex="-1" id="notokModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" style="width:500px;">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Shipping Address</h4>
                <button type="button" class="close" data-bs-dismiss="modal">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group-inner input-with-success">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
                            <label class="login2 pull-left pull-left-pro">
                                <font color="black">Dear user, Please fill shipping details....</font>
                            </label>
                        </div>

                    </div>
                </div>

                <div style="height:15px;"></div>
                <div class="form-group-inner input-with-success">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-left pull-left-pro"></label>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-select-list">

                                <a href="{{url('/cart')}}"> <input type="button" style="width: 150px; height: 50px;" class="btn btn-warning" value="Close" style="background-color:blue;" class="btn btn-sm btn-primary login-submit-cs" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="text" id="userids" value="{{$userid}}" style="display: none;">
<input type="text" id="userid" style="display: none;">
<input type="text" id="useridd" value="{{$userid}}" style="display: none;">
<input type="text" id="productcode" style="display: none;">

<input type="text" id="productid" style="display: none;">
<div class="form-group-inner input-with-success" style="height: 10px;">

</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{--<script>--}}
{{-- $(document).ready(function(){--}}
{{-- $("#myInput").on("input", function(){--}}
{{-- // Print entered value in a div box--}}
{{-- $("#result").text($(this).val());--}}
{{-- });--}}
{{-- });--}}
{{--</script>--}}
<script>
    function greeting(productcode) {
        document.getElementById("productcode").value = productcode;
        $("#vaModal").modal('show');
    }

    function chgval(qty, code) {

        var qty = qty; //alert(qty);
        var userid = document.getElementById("userids").value; //alert(userid);
        var prcode = code; //alert(prcode);
        $.ajax({
            type: 'post',
            url: '{{url(' / addall ')}}',
            data: {
                userid: userid,
                qty: qty,
                prcode: prcode,
                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);

                window.location.href = "{{url('/logoutcartdetails')}}"

            }
        });
    }

    function delall() {
        $("#va1Modal").modal('show');
    }

    function deletthis(userid, productcode) {
        document.getElementById("userid").value = userid;
        document.getElementById("productcode").value = productcode;
        $("#vaModal").modal('show');

    }

    function deletall() {
        var userid = document.getElementById("useridd").value;
        $("#va1Modal").modal('hide');
        $.ajax({
            type: 'post',
            url: '{{url(' / deletall ')}}',
            data: {
                userid: userid,
                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);

                window.location.href = "{{url('/logoutcartdetails')}}"

            }
        });
    }

    function shipchk() {
        var userid = document.getElementById("userids").value; //alert(userid);

        $.ajax({
            type: 'post',
            url: '{{url(' / logoutshipcheck ')}}',
            data: {
                userid: userid,

                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);
                if (data == 'notok') {
                    $("#notokModal").modal('show');
                }
                if (data == 'ok') {
                    window.location.href = "{{url('/logoutcheckout')}}"
                }

            }
        });
    }

    function delet() {

        var pid = document.getElementById("productcode").value; //alert(pid);
        $("#vaModal").modal('hide');
        $.ajax({
            type: 'post',
            url: '{{url(' / logoutdeleteorder ')}}',
            data: {

                pid: pid,
                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);

                window.location.href = "{{url('/cart')}}"

            }
        });
    }

    function addthis(itemid) {
        var itemid = itemid;
        var qty = "1";
        $.ajax({
            type: 'post',
            url: '{{url(' / addcart ')}}',
            data: {
                itemid: itemid,
                qty: qty,
                '_token': '{{csrf_token()}}'
            },
            success: function(data) { //alert(data);

                window.location.href = "{{url('/logoutcartdetails')}}"

            }
        });
    }

    function btnship() {
        //alert('sfd');
        $('#myModalwishd').modal('show');
    }

    function close10() {
        $('#myModalwishd').modal('hide');
    }
</script>