@extends('Common.Frontheader')
@section('content')
    <main>
        <section class="page-title-area" data-background="assets/assets/img/bg/page-title-bg.jpg" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-wrapper text-center">
                            <h1 class="page-title mb-10">Wishlist</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div style="height:50px;"></div>
        <!-- wishlist main wrapper start -->
        <div class="wishlist-main-wrapper section-padding">
            <div class="container">
                <!-- Wishlist Page Content Start -->
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Wishlist Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">ProductName</th>
                                        <th class="pro-title">Color</th>
                                        <th class="pro-title">Size</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Qty</th>
                                        <th class="pro-subtotal">Add to Cart</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($productlist as $list)
                                    <tr>
                                        <td class="pro-thumbnail"><img class="img-fluid"  width="100" height="100" src="{{$list->prdimg}}" alt="Product" /></td>
                                        <td class="pro-title">{{$list->productname}}</td>
                                        <td class="pro-title">{{$list->color}}</td>
                                        <td class="pro-title">{{$list->size}}</td>
                                        <td class="pro-price"><span>₹. {{$list->price}}</span></td>
                                        <td class="pro-price"><span>{{$list->qty}}</span></td>
                                        <td class="pro-subtotal"><a href="addtocart?pid={{$list->pid}}" class="btn btn-sqr"><button type="button" class="btn btn-info">Add to
                                                Cart</button></a></td>
                                        <td class="pro-remove"><i class="fa fa-trash" aria-hidden="true" style="color: red;" id="{{$list->pid}}" onclick="greeting(this.id)"></i></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wishlist Page Content End -->
            </div>
        </div>
        <!-- wishlist main wrapper end -->
    </main>
    <div class="modal fade" tabindex="-1" id="vaModal"
         data-keyboard="false" data-backdrop="static" >
        <div class="modal-dialog modal-lg" style="width: 400px;">
            <div class="modal-content" >
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
                                <label class="login2 pull-left pull-left-pro">Are you sure to delete?</label>
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
                                    <button type="button" class="btn btn-warning"   onclick="delet();">Yes</button>
                                    <a href="{{url('/wishlist')}}"> <input type="button" value="No"  style="background-color:blue;width:50px; " class="btn btn-sm btn-primary login-submit-cs"  /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden"  id="userids" value="{{$userid}}"  style="display: none;">
    <input type="hidden" id="productcode" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script>
        function greeting(productcode)
        {
            document.getElementById("productcode").value=productcode;
            $("#vaModal").modal('show');
        }
        function addthis(itemid)
        {
            var itemid=itemid;
            var qty=  document.getElementById("qty").value;
            $.ajax({
                type: 'post',
                url: '{{url('/addcart')}}',
                data: {
                    itemid     : itemid,
                    qty     : qty,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);

                    document.getElementById("qty").value="1";
                    window.location.href = "{{url('/cartdetails')}}";

                }
            });
        }
        function delet()
        {

            var pid=document.getElementById("productcode").value;//alert(pid);
            $("#vaModal").modal('hide');
            $.ajax({
                type: 'post',
                url: '{{url('/deleteorder')}}',
                data: {

                    pid     : pid,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {//alert(data);

                    window.location.href = "{{url('/wishlist')}}"

                }
            });
        }
    </script>
    <div style="height:50px;"></div>
@endsection

