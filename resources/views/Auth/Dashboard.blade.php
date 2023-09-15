@extends('Common.Frontheader')
@section('content')
<div class="main-content">

    <!-- Start Page-content -->

    <div class="page-content">
        <div class="container-fluid">

            <!--Pop Message Start-->
            @if(session()->has('approved'))
            <div class="alert alert-success alert-dismissible fade show" id="success" role="alert" style="width:50%">
                <strong>Approved Successfully</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!--Pop Message End-->

            <!--Pop Reject Message Start-->
            @if(session()->has('rejected'))
            <div class="alert alert-danger alert-dismissible fade show" id="success" role="alert" style="width:50%">
                <strong>Rejected Successfully</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!--Pop Reject Message End-->

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><b>Dashboard</b></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1"><b>Welcome Admin!</b></h4>
                                        <p class="text-muted mb-0">Admins, the key to unlocking your productivity potential.</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">

                                                <!--end col-->

                                                <!-- <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-primary">
                                                        <i class="ri-add-circle-line align-middle me-1"></i> Add
                                                        Product</button>
                                                </div> -->

                                                <!--end col-->

                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <h3><b>Accounts</b></h3>
                        <div class="row">
                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <div class="card card-animate card-purple-pink">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                    <b>Amount Distrubuted</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                    ₹<span class="counter-value" data-target="100000">100000</span>
                                                </h4>
                                                <!-- <a href="#" class="text-decoration-underline color-white2">Withdraw
                                                    money</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary rounded fs-3">
                                                    <i class="bx bx-wallet color-white2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <div class="card card-animate card-purple-pink">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                    <b>Amount Collected</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                    ₹<span class="counter-value" data-target="50000">50000</span>
                                                </h4>
                                                <!-- <a href="#" class="text-decoration-underline color-white2">See
                                                    details</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary rounded fs-3">
                                                    <i class="bx bx-user-circle color-white2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <div class="card card-animate card-purple-pink">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                    <b>Amount Pending</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                    ₹<span class="counter-value" data-target="50000">50000</span>
                                                </h4>
                                                <!-- <a href="#" class="text-decoration-underline color-white2">See
                                                    details</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary rounded fs-3">
                                                    <i class="bx bx-wallet color-white2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <h3><b>EMI Process</b></h3>
                            <div class="row">
                                <div class="col-xl-2 col-md-4">
                                    <!-- card -->
                                    <div class="card card-animate card-purple-blue ">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Customers(EMI Create)</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="10">10</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2 ">View
                                                    net earnings</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-dollar-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-xl-2 col-md-4">
                                    <!-- card -->
                                    <div class="card card-animate card-purple-blue ">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Customers(EMI closed)</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="2">2</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">View
                                                    all orders</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-2 col-md-4">
                                    <!-- card -->
                                    <div class="card card-animate card-purple-blue ">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Customers(EMI Paid)</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="7">7</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">See
                                                    details</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-2 col-md-4">
                                    <!-- card -->
                                    <div class="card card-animate card-purple-blue ">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Customers(EMI Onhold)</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="1">1</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2 ">View
                                                    net earnings</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-dollar-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->


                            <h3><b>Customer</b></h3>
                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <div class="card card-animate card-salmon-pink">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                    <b>Total Customers</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                    <span class="counter-value" data-target="{{$total_customers}}">{{$total_customers}}</span>
                                                </h4>
                                                <!-- <a href="#" class="text-decoration-underline color-white2 ">View
                                                    net earnings</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary rounded fs-3">
                                                    <i class="bx bx-dollar-circle color-white2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="customer_approved">
                                    <div class="card card-animate card-salmon-pink">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Approved Customers</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$approved_customers}}">{{$approved_customers}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">View
                                                    all orders</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="customer_rejected">
                                    <div class="card card-animate card-salmon-pink">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Rejected Customers</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$rejected_customers}}">{{$rejected_customers}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">See
                                                    details</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="customer_pending">
                                    <div class="card card-animate card-salmon-pink">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Pending Customers</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$pending_customers}}">{{$pending_customers}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">Withdraw
                                                    money</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-wallet color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="customer_rejected">
                                    <div class="card card-animate card-salmon-pink">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Blocked Customers</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$rejected_customers}}">{{$rejected_customers}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">View
                                                    all orders</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <div class="card card-animate card-salmon-pink">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                    <b>Customer List</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                    <span class="counter-value" data-target="{{$rejected_customers}}">{{$rejected_customers}}</span>
                                                </h4>
                                                <!-- <a href="#" class="text-decoration-underline color-white2">See
                                                    details</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary rounded fs-3">
                                                    <i class="bx bx-user-circle color-white2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <h3><b>Retail</b></h3>

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <div class="card card-animate card-blue-green">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                    <b>Total Retails</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                    <span class="counter-value" data-target="{{$total_retails}}">{{$total_retails}}</span>
                                                </h4>
                                                <!-- <a href="#" class="text-decoration-underline color-white2 ">View
                                                    net earnings</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary rounded fs-3">
                                                    <i class="bx bx-dollar-circle color-white2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->


                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="retail_approved">
                                    <div class="card card-animate card-blue-green">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Approved Retails</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$approved_retails}}">{{$approved_retails}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">View
                                                    all orders</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="retail_rejected">
                                    <div class="card card-animate card-blue-green">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Rejected Retails</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$rejected_retails}}">{{$rejected_retails}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">See
                                                    details</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="retail_pending">
                                    <div class="card card-animate card-blue-green">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Pending Retails</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$pending_retails}}">{{$pending_retails}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">Withdraw
                                                    money</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-wallet color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </a><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-2 col-md-4">
                                <!-- card -->
                                <a href="retail_rejected">
                                    <div class="card card-animate card-blue-green">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium color-white2 text-truncate mb-0">
                                                        <b>Blocked Retails</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4 color-white2">
                                                        <span class="counter-value" data-target="{{$rejected_retails}}">{{$rejected_retails}}</span>
                                                    </h4>
                                                    <!-- <a href="#" class="text-decoration-underline color-white2">View
                                                    all orders</a> -->
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                                        <i class="bx bx-user-circle color-white2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                        </a> <!-- end .h-100-->
                    </div> <!-- end col -->


                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#success').delay(2000).fadeOut();
        });
    </script>

    @endsection