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
                            <h4 class="mb-sm-0">Edit Farmer</h4>
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
                                        <form action="updatecustomer" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                                            {{ csrf_field() }}
                                            <div class="card-body">
                                                <div class="live-preview">
                                                    <div class="row gy-4">

                                                        @foreach($plist as $list)
                                                        <div class="col-xxl-6 col-md-4">
                                                            <div>
                                                                <input type="hidden" class="form-control" name="productid"  value="{{$list->pid }}">
                                                                <label for="placeholderInput" class="form-label">Farmer Name</label>
                                                                <input type="text" class="form-control" name="customername" placeholder="Farmer Name"  value="{{$list->customername }}">
                                                                <span class="text-danger">{{ $errors->first('customername') }}</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div>
                                                                <label for="placeholderInput" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$list->phone }}">
                                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-4">
                                                            <div>
                                                                <label for="placeholderInput" class="form-label">Email</label>
                                                                <input type="text" class="form-control" name="email" placeholder="Email"  value="{{$list->email }}">
                                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div>
                                                                <label for="placeholderInput" class="form-label">Address</label>
                                                                <input type="text" class="form-control" name="address" placeholder="Address"  value="{{$list->address }}">
                                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                                            </div>
                                                        </div>





                                                        <div class="col-xxl-3 col-md-4">
                                                            <div>
                                                                <label for="placeholderInput" class="form-label">Status</label>
                                                                <select class="form-select" id="inputGroupSelect04" name="status">
                                                                    <option value="">-------Select Status------</option>
                                                                    <option value="1" @if($list->status==1)selected @endif>Active</option>
                                                                    <option value="0" @if($list->status==0)selected @endif>InActive</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="col-xxl-3 col-md-4">
                                                            <div>
                                                                <button type="submit" class="btn btn-success btn-lg">Update Details</button>
                                                            </div>
                                                        </div>
                                                        @endforeach
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