
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Federasi Supra Indonesia APP </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon2.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <script>
        .login-bg-overlay {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://unsplash.imgix.net/photo-1416339442236-8ceb164046f8?q=75&fm=jpg&s=8eb83df8a744544977722717b1ea4d09");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 450px;
    padding-top: 50px;
}

.login-bg-no-overlay {
    background: url("https://unsplash.imgix.net/photo-1416339442236-8ceb164046f8?q=75&fm=jpg&s=8eb83df8a744544977722717b1ea4d09");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 450px;
    padding-top: 50px;
}
    </script>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="../assets/images/fsi-logo-all.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="../assets/images/fsi-logo-all.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
                        <div class="p-3">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>  
                            @endif

                            @if (session()->has('LoginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('LoginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>  
                            @endif

                            <form class="form-horizontal mt-3" action="/login" method="POST">
                                @csrf
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" required="" placeholder="Email" autofocus>
                                        @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" required="" placeholder="Password">
                                        @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">                               
                                    <div class="col-md-6 captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-light" class="reload" id="reload">
                                        &#x21bb;
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('captcha') is-invalid @enderror" type="text" name="captcha" id="captcha" required="" placeholder="Ketikan Captcha">
                                        @error('captcha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                    </div>                                    
                                </div> 
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Lupa Password?</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="/register" class="text-muted"><i class="mdi mdi-account-circle"></i> Buat Akun Baru</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>

        <script type="text/javascript">
            $('#reload').click(function () {
                $.ajax({
                    type: 'GET',
                    url: 'reload-captcha',
                    success: function (data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });
        </script>

    </body>
</html>
