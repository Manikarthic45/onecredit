@extends('Common.Frontheader')
@section('content')
<div class="main-content">
    <!-- Start Page-content -->

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Product</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" id="success" role="alert">
                    <strong>Saved Successfully!!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" fdprocessedid="a756uk"></button>
                </div>
            @endif
            <div class="row">
                <div class="col">

                    <div class="h-100">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <form action="saveproduct" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                                        {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Product Code</label>
                                                        <input type="text" readonly class="form-control" name="prcode" value="{{$productid }}" >
                                                    </div>
                                                </div>
                                                <!--end col-->


                                                <div class="col-xxl-6 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="productname" value="{{ old('productname') }}" placeholder="Product Name">
                                                        <span class="text-danger">{{ $errors->first('productname') }}</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Present Stock</label>
                                                        <input type="text" class="form-control"  autocomplete="off" name="stock" value="{{ old('stock') }}"  placeholder="Present Stock">
                                                        <span class="text-danger">{{ $errors->first('stock') }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Size</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="size" value="{{ old('size') }}"  placeholder="Size">
                                                        <span class="text-danger">{{ $errors->first('size') }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Unit</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="unit" value="{{ old('unit') }}"  placeholder="Unit">
                                                        <span class="text-danger">{{ $errors->first('unit') }}</span>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                {{--<div class="col-xxl-3 col-md-4">--}}
                                                    {{--<div>--}}
                                                        {{--<label for="placeholderInput" class="form-label">Purchased Price</label>--}}
                                                        {{--<input type="text" class="form-control" name="purchaseprice" value="{{ old('purchaseprice') }}"  placeholder="Purchased Price">--}}
                                                        {{--<span class="text-danger">{{ $errors->first('purchaseprice') }}</span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Sales Price</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="saleprice" value="{{ old('saleprice') }}"  placeholder="Sales Price">
                                                        <span class="text-danger">{{ $errors->first('saleprice') }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-3 col-md-4">

                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <button type="submit" class="btn btn-success btn-lg">Save Details</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!--end col-->
                        </div>


                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#success').delay(2000).fadeOut();
});
</script>