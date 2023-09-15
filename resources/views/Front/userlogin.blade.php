@extends('Common.Frontheader')
@section('content')
<div class="page-banner section" style="height:100px;">
        <div class="container"  style="height:100px;">
            <div class="page-banner-wrapper text-center" >
                <h2 class="title">Login</h2>

            </div>
        </div>
    </div>
    <!-- Page Banner End -->
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            @if(session()->has('success'))
                <div class="alert alert-notification-bx" id="success"
                     style="width:400px; background-color:lightgreen ;">

                    <div class="col-6" style="width:400px; background-color: lightgreen;">
                        <p class="m-0">Registered Successfully</p>
                    </div>
                </div>
            @endif
            @if(session()->has('failure'))
                <div class="alert alert-notification-bx" id="success"
                     style="width:400px; background-color:red ;">

                    <div class="col-6" style="width:400px; background-color: red;">
                        <p class="m-0"><font color="white"> Invalid Credential</font></p>
                    </div>
                </div>
            @endif
        </div>
        <div class="col">

        </div>
    </div>
</div>
    <!-- Login & Register Start -->
    <div class="section section-padding-02 mt-n1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Login to Your Account</h4>
                        <form action="chkuser" name="frm-login" enctype="multipart/form-data" method="post" class="ltn__form-box contact-form-box" >
                            {{ csrf_field() }}
                            <div class="single-form">
                                <label>Username </label>
                                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            </div>
                            <div class="single-form">
                                <label>Password</label>
                                <input type="password" name="pwd" placeholder="Password" value="{{ old('pwd') }}">
                                <span class="text-danger">{{ $errors->first('pwd') }}</span>
                            </div>
                            <!-- <div class="single-form">
                                <input type="checkbox" id="remember">
                                <label for="remember"><span></span> Remember me</label>
                            </div> -->
                            <div class="single-form">
                                <button class="btn btn-primary btn-hover-dark rounded-pill">Login</button>
                            </div>
                        </form>
                       
                        <p>No account? <a href="register">Create one here.</a></p>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    function loginfn() {
        var username = document.getElementById("username").value;
        var pwd = document.getElementById("pwd").value;
        if (username == "") {
            document.getElementById("usernameerror").style.display = "block";
        } else {
            document.getElementById("usernameerror").style.display = "none";
        }
        if (pwd == "") {
            document.getElementById("pwderror").style.display = "block";
        } else {
            document.getElementById("pwderror").style.display = "none";
        }

        if (username != "" && pwd != "") {

            document.getElementById("loaderid").style.display = "block";
            $.ajax({
                type: 'post',
                url: '{{url('/chkuser')}}',
                data: {
                    username: username,
                    pwd: pwd,
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {
                    document.getElementById("loaderid").style.display = "none";
                    if (data == 'ok') {

                        document.getElementById("username").value = "";
                        document.getElementById("pwd").value = "";
                        setTimeout(function()
                        {
                            $("#successModal").modal('show');
                            window.location.href="shop";
                        },2500);


                    } else {
                        document.getElementById("username").value = "";
                        document.getElementById("pwd").value = "";
                        $("#vaModal").modal('hide');
                        alert('Invalid Username and Password');
                    }
                }
            });
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#success').delay(2000).fadeOut();
    });
</script>