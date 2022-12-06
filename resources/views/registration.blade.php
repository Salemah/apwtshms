<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nirapotta</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0" style="background-color: #48B047;">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light py-5 px-4 px-sm-5">
                            <div class="text-center">
                                <img src="images/logo.png" class="img-responsive" alt="logo">
                            </div>
                            <form class="pt-3" action="{{route('registrationSubmit')}}" method="post">
                            @if(Session::get('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        @if(Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif    
                                 @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter your name">
                                    <span class="text-danger">@error('name'){{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter your mail">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter your phone number">
                                    <span class="text-danger">@error('phone'){{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    
                                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter your Password">
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    
                                    <input type="password" name="confirmpassword" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm your Password">
                                    <span class="text-danger">@error('confirmpassword'){{$message}} @enderror</span>
                                </div>
                                
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                                    <a href="{{route('login')}}" >Already have account? </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
</body>

</html>
