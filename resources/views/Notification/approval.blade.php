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
                        <h4 class="mb-sm-0">Approval Page</h4>
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
                                    <form action="saveproduct" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box">
                                        {{ csrf_field() }}
                                        <div class="card-body">
                                            <div class="live-preview">
                                                <div class="row gy-4">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">User name</label>
                                                            <input type="text" readonly class="form-control" name="prcode" value="{{$get_retail_details->user_name}}" readonly>
                                                        </div>
                                                    </div>
                                                    <!--end col-->


                                                    <div class="col-xxl-6 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Shop name</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="productname" value="{{$get_retail_details->shop_name}}" readonly>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">shop address</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="stock" value="{{ $get_retail_details->shop_address}}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">No of branches</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="size" value="{{$get_retail_details->no_of_branches }}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Mobile number</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="unit" value="{{ $get_retail_details->mobile_number }}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label"> Alternate Mobile number</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="unit" value="{{ $get_retail_details->alternate_mobile_number }}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Aadhar card</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="aadhar" value="{{ $get_retail_details->aadhar }}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Shop ownership</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="unit" value="{{ $get_retail_details->shop_ownership }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Pan Card Photo</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="pan_card" value="{{ $get_retail_details->pan_card }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Shop Card photo</label>
                                                            <img src="public/{{$get_retail_details->shop_photo}}" style="width:200px; height:100px;" />

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Visiting card</label>
                                                            <img src="public/{{$get_retail_details->visting_card}}" style="width:200px; height:100px;" />

                                                        </div>
                                                    </div>

                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">GST/MSME</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="unit" value="{{ $get_retail_details->gst }}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Profile photo</label>
                                                            <img src="public/{{$get_retail_details->profile_photo}}" style="width:200px; height:100px;" />

                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    {{--<div class="col-xxl-3 col-md-4">--}}
                                                    {{--<div>--}}
                                                    {{--<label for="placeholderInput" class="form-label">Purchased Price</label>--}}
                                                    {{--<input type="text" class="form-control" name="purchaseprice" value="{{ old('purchaseprice') }}" placeholder="Purchased Price">--}}
                                                    {{--<span class="text-danger">{{ $errors->first('purchaseprice') }}</span>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-4">

                                                    </div>

                                                    <div class="col-xxl-3 col-md-4">

                                                    </div>

                                                    <div class="col-xxl-3 col-md-4">

                                                    </div>


                                                    <div class="col-xxl-3 col-md-4" style="margin-top:50px">
                                                        <div>
                                                            <a href="rejected_retail{{$get_retail_details->id}}" style="padding:15px 20px;background-color:red;border-radius:10px;color:white">Rejected</a>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a href="approved_retail{{$get_retail_details->id}}" style="padding:15px 20px;background-color:green;border-radius:10px;color:white">Approval</a>
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