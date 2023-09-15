@extends('Common.Frontheader')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shippin Address</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        @if(session()->has('success'))
            <script>
                alert('Shipping Address Saved successfully!....');
            </script>
        @endif
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Shipping Details</th>

                                    </tr>
                                    </thead>

                                </table>
                            </div>
                            <!-- Cart Update Option -->


                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">
                                    <div class="cart-update">
                                        <a class="btn btn-sqr">Shipping Address : </a>
                                    </div>
                                    <div style="height: 10px;"></div>
                                    <form id="selectdate" name="selectdate" method="post"  enctype="multipart/form-data" action="{{url('/addshipping')}}">
                                        {{ csrf_field() }}                                <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input name="name" placeholder="Name *" type="text" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input name="phone" placeholder="Phone *" type="text" required>
                                            </div>
                                            <div style="height: 10px;"></div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input name="email" placeholder="Email *" type="email" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <select name="state" id="state" required>
                                                    <option value="">--SELECT STATE---</option>
                                                    <option value="TAMILNADU">TAMILNADU</option>
                                                    <option value="BENGALURU">BENGALURU</option>
                                                    <option value="KERALA">KERALA</option>
                                                </select>
                                            </div>
                                            <div style="height: 10px;"></div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <input name="zipcode" required placeholder="Zipcode *" type="text">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <textarea name="address" class="form-control" id="exampleFormControlTextarea4" required rows="3" placeholder="Shipping Address *"></textarea>
                                            </div>

                                            <div style="height: 10px;"></div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <input type="submit"  class="btn btn-sqr" value="Save">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            </div>


                                        </div>
                                    </form>
                                </div>



                                <div class="cart-update">

                                </div>
                            </div>



                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>

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
    <!-- SHOPING CART AREA END -->

    <input type="text"  id="userids" value="{{$userid}}"  style="display: none;">
    <input type="text"  id="userid"  style="display: none;">
    <input type="text"  id="useridd" value="{{$userid}}"  style="display: none;">
    <input type="text" id="productcode"  style="display: none;">

    <input type="text" id="productid"  style="display: none;">
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $("#myInput").on("input", function(){--}}
{{--            // Print entered value in a div box--}}
{{--            $("#result").text($(this).val());--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script>

    function greeting(productcode)
    {
        document.getElementById("productcode").value=productcode;
        $("#vaModal").modal('show');
    }
    function chgval(qty,code)
    {

        var qty=qty;//alert(qty);
        var userid=document.getElementById("userids").value;//alert(userid);
        var prcode=code;//alert(prcode);
        $.ajax({
            type: 'post',
            url: '{{url('/addall')}}',
            data: {
                userid     : userid,
                qty     : qty,
                prcode     : prcode,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {//alert(data);

                window.location.href = "{{url('/cartdetails')}}"

            }
        });
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
    function delet()
    {

        var productcode=document.getElementById("productcode").value;//alert(productcode);
        $("#vaModal").modal('hide');
        $.ajax({
            type: 'post',
            url: '{{url('/delet')}}',
            data: {

                productcode     : productcode,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {//alert(data);

                window.location.href = "{{url('/cartdetails')}}"

            }
        });
    }
    function addthis(itemid)
    {
        var itemid=itemid;
        var qty=  "1";
        $.ajax({
            type: 'post',
            url: '{{url('/addcart')}}',
            data: {
                itemid     : itemid,
                qty     : qty,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {//alert(data);

                window.location.href = "{{url('/cartdetails')}}"

            }
        });
    }
</script>

