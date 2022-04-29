
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Registrasi | Federasi Supra Indonesia APP </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

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
    
                        <h4 class="text-muted text-center font-size-18"><b>Registrasi Baru</b></h4>                                               
                        
                        <div class="p-3">
                           
                            <form class="form-horizontal mt-3" action="/register" method="POST">                               
                                @csrf
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" required="" placeholder="Email">
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
    
                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Daftar</button>
                                    </div>
                                </div>
    
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="/auth" class="text-muted">Sudah memiliki akun?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
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
