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
                        <h4 class="mb-sm-0">ADMIN CREATION</h4>
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
                                    <form action="admin_creation" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box">
                                        {{ csrf_field() }}
                                        <div class="card-body">
                                            <div class="live-preview">
                                                <div class="row gy-4">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Admin Name</label>
                                                            <input type="text" class="form-control" name="admin_name" value="" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-6 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Email</label>
                                                            <input type="text" class="form-control" name="email" value="" required>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone_number" value="" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Password</label>
                                                            <input type="text" class="form-control" name="password" value="" required>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <br><br><br><br><br><br>
                                                    <h4 style="color:#9647e6"><b>ADMIN ACCESS</b></h4>
                                                    <br><br><br><br>

                                                    <div class="row">
                                                        <div class="col-xxl-4 col-md-4">
                                                            <input type="checkbox" name="accounts" value="1"><label for="#" style="padding:20px; font-size:20px;">Accounts</label>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-4">
                                                            <input type="checkbox" name="emi_process" value="1"><label for="#" style="padding:20px; font-size:20px;">EMI Process</label>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-4">
                                                            <input type="checkbox" name="customers" value="1"><label for="#" style="padding:20px; font-size:20px;">Customers</label>
                                                        </div><br><br><br>
                                                        <div class="col-xxl-4 col-md-4">
                                                            <input type="checkbox" name="retail" value="1"><label for="#" style="padding:20px; font-size:20px;">Retail</label>
                                                        </div> <br><br><br>
                                                        <div class="col-xxl-4 col-md-4">
                                                            <input type="checkbox" name="admin_creation" value="1"><label for="#" style="padding:20px; font-size:20px;">Admin Creation</label>
                                                        </div>

                                                        <!--end row-->
                                                    </div>
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary" style="float:right">SUBMIT</button>
                                                        </div>
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