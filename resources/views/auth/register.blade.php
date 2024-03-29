<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 19:14:44 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register | Uplon - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">

                                    <div class="text-center">
                                        <div class="my-3">
                                            <a href="index.html">
                                                <span><img src="{{asset('assets/images/logo.png')}}" alt="" height="28"></span>
                                            </a>
                                        </div>
                                        <h5 class="text-muted text-uppercase py-3 font-16">Sign up</h5>
                                    </div>

                                    <form action="{{ route('register') }}" method="POST" class="mt-2">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" name="f_name" placeholder="Enter Your First Name" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" name="l_name" placeholder="Enter Your Last Name" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" name="phone" placeholder="Enter Your Phone" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password" required>
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            <input type="password" class="form-control input-lg" name="password_confirmation" placeholder="Confirm Password">
                                          </div>

                                        {{-- <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signup" checked>
                                                <label class="custom-control-label" for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                            </div>
                                        </div> --}}

                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Sign Up </button>
                                        </div>

                                    </form>

                                    <div class="text-center mt-4">
                                        <h5 class="text-muted py-2"><b>Sign up with</b></h5>

                                        <div class="row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-facebook waves-effect font-14 waves-light mt-3">
                                                    <i class="fab fa-facebook-f mr-1"></i> Facebook
                                                </button>

                                                <button type="button" class="btn btn-twitter waves-effect font-14 waves-light mt-3">
                                                    <i class="fab fa-twitter mr-1"></i> Twitter
                                                </button>

                                                <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light mt-3">
                                                    <i class="fab fa-google-plus-g mr-1"></i> Google+
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Already have account? <a href="{{ route('login') }}" class="text-white ml-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 19:14:44 GMT -->
</html>
