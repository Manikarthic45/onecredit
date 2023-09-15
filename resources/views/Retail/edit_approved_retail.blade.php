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
                        <h4 class="mb-sm-0">EDIT RETAIL</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Popup Start -->
            @if(session()->has('updated'))
            <div class="alert alert-success alert-dismissible fade show" id="success" role="alert" style="width:50%">
                <strong>Retail Updated Successfully</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!-- Popup End -->

            <div class="row">
                <div class="col">

                    <div class="h-100">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <form action="retail_update" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box">
                                        {{ csrf_field() }}
                                        <input type="hidden" class="form-control" name="id" value="{{$get_retail_details->id}}">
                                        <div class="card-body">
                                            <div class="live-preview">
                                                <div class="row gy-4">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">User name</label>
                                                            <input type="text" class="form-control" name="user_name" value="{{$get_retail_details->user_name}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->


                                                    <div class="col-xxl-6 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Shop name</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="shop_name" value="{{$get_retail_details->shop_name}}">

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">shop address</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="shop_address" value="{{ $get_retail_details->shop_address}}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">No of branches</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="no_of_branches" value="{{$get_retail_details->no_of_branches }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Mobile number</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="mobile_number" value="{{ $get_retail_details->mobile_number }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label"> Alternate Mobile number</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="alternate_mobile_number" value="{{ $get_retail_details->alternate_mobile_number }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Aadhar card</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="aadhar" value="{{ $get_retail_details->aadhar }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Shop ownership</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="shop_ownership" value="{{ $get_retail_details->shop_ownership }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Pan Card Photo</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="pan_card" value="{{ $get_retail_details->pan_card }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Shop Card photo</label>
                                                            <input type="file" class="form-control" autocomplete="off" name="shop_photo" value="{{ $get_retail_details->shop_photo }}">
                                                            <img src="public/{{$get_retail_details->shop_photo}}" style="width:200px; height:100px;" />

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Visiting card</label>
                                                            <input type="file" class="form-control" autocomplete="off" name="visting_card" value="{{ $get_retail_details->visting_card }}">
                                                            <img src="public/{{$get_retail_details->visting_card}}" style="width:200px; height:100px;" />

                                                        </div>
                                                    </div>

                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">GST/MSME</label>
                                                            <input type="text" class="form-control" autocomplete="off" name="gst" value="{{ $get_retail_details->gst }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Profile photo</label>
                                                            <input type="file" class="form-control" autocomplete="off" name="profile_photo" value="{{ $get_retail_details->profile_photo }}">
                                                            <img src="public/{{$get_retail_details->profile_photo}}" style="width:200px; height:100px;" />

                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary" style="float:right;margin-top:70px">UPDATE</button>
                                                        </div>
                                                    </div>

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


                                                    <!-- <div class="col-xxl-3 col-md-4" style="margin-top:50px">
                                                        <div>
                                                            <button style="padding:15px 40px;background-color:green;border-radius:10px;color:white" type="submit">UPDATE</a>
                                                            
                                                        </div>
                                                    </div> -->
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