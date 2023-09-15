<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Admin</title>
    <!-- loader-->

    <!--favicon-->
    <link rel="icon" href="assets/admin/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/admin/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/admin/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="assets/admin/css/app-style.css" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
    <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="assets/admin/logo.jpg" alt="logo icon" width="300px;">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                @if(session()->has('Failure'))
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div style="background-color: red;">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Invalid Credential</h4>
                        </div>
                    </div>
                @endif
                <form action="checkuser" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputUsername" class="sr-only">Username</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Username" autofocus name="username"  value="{{ old('username') }}" >
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div style="height:15px;"></div>
                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" class="form-control" placeholder="Password"  name="pwd"  value="{{ old('pwd') }}">
                            <span class="text-danger">{{ $errors->first('pwd') }}</span>
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div><div style="height:15px;"></div>

                    <div style="height:15px;"></div>
                    <button type="submit" class="btn btn-light btn-block">Sign In</button>


                </form>
            </div>
        </div>
        <div style="height:15px;"></div>

    </div>

    <!--Start Back To Top Button-->

    <!--End Back To Top Button-->

    <!--start color switcher-->

    <!--end color switcher-->

</div><!--wrapper-->

<!-- Bootstrap core JavaScript-->


</body>
</html>
