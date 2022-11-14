
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="">

        <!-- App css -->
        <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html">
                                <span><img src="" alt="" height="22"></span>
                            </a>
                            <p class="text-muted mt-2 mb-4">Blumen IT</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center">
                                    <h1 class="text-error">500</h1>
                                    <h3 class="mt-3 mb-2">Internal Server Error</h3>
                                    <p class="text-muted mb-3">Why not try refreshing your page? or you can contact <a href="" class="text-dark"><b>Support</b></a></p>

                                    <a href="{{ URL::previous() }}" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home mr-1"></i> Back </a>
                                </div>
    

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{asset('asset/js/vendor.min.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('asset/js/app.min.js')}}"></script>
        
    </body>
</html>