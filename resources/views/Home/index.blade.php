@extends('Common.header')
@section('content')
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<br>
<br>
<br>
<br>


<div class="main-panel">
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="well bg bg-danger">

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <h1><b>DASHBOARD</b></h1>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well bg bg-secondary">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="maincat">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Category</span>
                                <span class="info-box-number">
                                    {{$cat}}

                                </span>
                            </div>

                        </div>
                    </a>

                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="category">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Subcategory</span>
                                <span class="info-box-number">{{$subcat}}</span>
                            </div>

                        </div>
                    </a>

                </div>


                <!-- fix for small devices only -->
                <!-- <div class="clearfix hidden-md-up"></div> -->

                <div class="col-12 col-sm-6 col-md-3">
                    <a href="plant">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Products</span>
                                <span class="info-box-number">{{$prdcount}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="contacts">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Contacts</span>
                                <span class="info-box-number">{{$contactcount}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="customer">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Customers</span>
                                <span class="info-box-number">{{$customer}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="events">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Blog</span>
                                <span class="info-box-number">
                                    {{$event}}
                                    <small>%</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="order">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Order</span>
                                <span class="info-box-number">{{$order}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <!-- <div class="clearfix hidden-md-up"></div> -->

                <div class="col-12 col-sm-6 col-md-3">
                    <a href="invoice">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Invoice</span>
                                <span class="info-box-number">{{$invoice}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>

        </div>

    </section>
</div>

@endsection