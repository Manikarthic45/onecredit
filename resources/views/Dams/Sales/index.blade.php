@extends('Common.salesheader')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col">

                        <div class="h-100">
                           <!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Sales</h5>
                                        </div>
                                        <div class="card-body" style="padding-bottom: 0; ">
                                            <div class="live-preview sale-card" >
                                                <div class="row gy-4">

                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Invoice No</label>
                                                            <input type="text" class="form-control" id="placeholderInput" placeholder="Invoince Number">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Farmer Name</label>
                                                            <input type="text" class="form-control" id="placeholderInput"
                                                                   placeholder="Farmer Name">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-2">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Invoice Date</label>
                                                            <input type="date" class="form-control" id="placeholderInput"
                                                                   placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-2">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Bill No</label>
                                                            <input type="text" class="form-control" id="placeholderInput"
                                                                   placeholder="1">
                                                        </div>
                                                    </div>


                                                    </div>



                                                </div>
                                                <!--end row-->
                                            </div>

                                        </div>


                                    <div class="card-body" style="padding-bottom: 0; padding-top: 0; ">
                                        <table id="scroll-vertical" class="table sale-chart1 table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th colspan="2" style="width: 300px;">Product Name</th>
                                                    <th>Qty</th>
                                                    <th>Size</th>
                                                    <th>Unit</th>
                                                    <th>Price</th>

                                                    <th>Total</th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td colspan="2"><input tabindex="1" type="text" class="form-control" name="location1" id="location1" style="width: 400px;"/>
                                                        <div class="list-group" id="show-list"> </div></td>
                                                    <td><input tabindex="2" type="text"  id="qty" class="form-control" style="width: 70px;"/></td>
                                                    <td><input  type="text" id="size" class="form-control" style="width: 70px;"/></td>
                                                    <td><input  type="text" id="unit" class="form-control" style="width: 70px;"/></td>
                                                    <td><input  type="text" id="price" class="form-control" style="width: 100px;"/></td>
                                                    <td><input  type="text" id="output" class="form-control" style="width: 150px;"/></td>
                                                </tr>
                                                @foreach ($list as $listt)
                                                    <tr>
                                                        <td colspan="2">{{$listt->productname}}</td>
                                                        <td>{{$listt->qty}}</td>
                                                        <td>{{$listt->size}}</td>
                                                        <td>{{$listt->unit}}</td>
                                                        <td>{{$listt->salesprice}}</td>
                                                        <td>{{$listt->total}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="card-body" style="padding-top: 0; ">
                                            <div class="live-preview sale-card" >
                                                <div class="row gy-4">

                                                    <!--end col-->

                                                    <div class="row align-items-center g-3">

                                                        <div class="col-xxl-2 col-md-2"> <button type="button" class="btn btn-secondary btn-label right">
                                                                <i class="ri-edit-2-fill label-icon align-middle fs-16 ms-2"></i>
                                                                Save & Print</button></div>
                                                        <div class="col-xxl-2 col-md-2"> <button type="button" class="btn btn-primary btn-label right rounded-pill">
                                                                <i class="ri-eye-line label-icon align-middle rounded-pill fs-16 ms-2">

                                                                </i> Preview</button></div>
                                                        <div class="col-xxl-1 col-md-4"> <h5>TotalQty:</h5></div>
                                                        <div class="col-xxl-1 col-md-2">

                                                          <input type="text" class="form-control" id="readonlyInput" value="{{$count}}" readonly="" >





                                                        </div>
                                                        <div class="col-xxl-3 col-md-4"> </div>
                                                        <div class="col-xxl-1 col-md-4"> <h5>SubTotal(₹):</h5></div>

                                                        <div class="col-xxl-2 col-md-4"> <input type="text" class="form-control" id="readonlyInput" value="{{$total}}" readonly="" ></div>






                                                    </div>



                                                </div>
                                                <!--end row-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->


                </div>

            </div>
            <!-- container-fluid -->
        </div>

    </div>
    <input type="hidden" id="xx">
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () { location1.style.backgroundColor = "yellow"
        $('#location1').keyup(function () {
            var location1=$("#location1").val();
            if(location1.length>2) {
                $.ajax({
                    type: 'post',
                    url: '{{url('/getlocation1')}}',
                    data: {
                        location1: location1,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        document.getElementById("location1").style.display="none";
                        $("#show-list").html(data);

                    }
                });
            }else{ $("#show-list").html("");}

        });
        $(document).on("click", "a1", function () {
            $("#xx").val($(this).text());
            $("#show-list").html("");
            document.getElementById("location1").style.display="block";
            var productname=document.getElementById("xx").value;
            document.getElementById("location1").value=productname;
            $.ajax({
                type: 'post',
                url: '{{url('/getunitsize')}}',
                data: {
                    productname: productname,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {
                    var array = data.split(',');var first=array[0];var second=array[1];var third=array[2];
                    document.getElementById("size").value=first;
                    document.getElementById("unit").value=second;
                    document.getElementById("price").value=third;
                }
            });
        });
    });
    $(document).ready(function() {
        $(document).on('keypress', '#qty', function(e) {
            if ( e.keyCode == 13 ) {  // detect the enter key
                var productname=document.getElementById("location1").value;
                var qty=document.getElementById("qty").value;
                var size=document.getElementById("size").value;
                var unit=document.getElementById("unit").value;
                var price=document.getElementById("price").value;
                var output=document.getElementById("output").value;
                $.ajax({
                    type: 'post',
                    url: '{{url('/postdata')}}',
                    data: {
                        productname: productname,qty: qty,size: size,
                        unit: unit,price: price,output: output,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {//alert(data);
                        // $("#show-datalist").html(data);
                        // document.getElementById("location1").value="";
                        // document.getElementById("qty").value="";
                        // document.getElementById("size").value="";
                        // document.getElementById("unit").value="";
                        // document.getElementById("price").value="";
                        // document.getElementById("output").value="";
                        // document.getElementById("xx").value="";
                        // document.getElementById("location1").focus();
                        window.location.href="sales";
                        location1.style.backgroundColor = "blue"
                    }
                });
            }
        });
    });

    $(document).ready(function(){
        $("#qty").on("input", function(){
          // alert(document.getElementById("qty").value);
            var textValue1 =$('#qty').val();
            var textValue2 = $('#price').val();

            $('#output').val(textValue1 * textValue2);
        });
    });
</script>