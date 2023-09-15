@extends('Common.Frontheader')
@section('content')
<div class="main-content">
    <!-- End Page-content -->

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Stock</h4>
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
                                        <h4 class="fs-16 mb-1">Good Morning, Anna!</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store
                                            today.</p>
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




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">S.No</label>
                                                        <input type="text" class="form-control" id="placeholderInput" placeholder="S.no">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Product</label>
                                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Product">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <label for="placeholderInput" class="form-label">Stock</label>
                                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Stock">
                                                    </div>
                                                </div>
                                                <!--end col-->


                                                <!--end col-->

                                                <div class="row align-items-center g-3">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div>
                                                            <label for="placeholderInput" class="form-label">Amount</label>
                                                            <input type="text" class="form-control" id="placeholderInput" placeholder="Former Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="formFile" class="form-label">Default File Input Example</label>
                                                            <input class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="formFileMultiple" class="form-label">Multiple Files Input Example</label>
                                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                </div>

                                                <div class="col-xxl-3 col-md-4">

                                                </div>

                                                <div class="col-xxl-3 col-md-4">
                                                    <div>
                                                        <button type="button" class="btn btn-success btn-lg">Save Details</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
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