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
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" />
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="images/logo.png" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="images/logo.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Jim</span></h1>

                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">Shahriyar Shams</p>
                            </div>
                            <a class="dropdown-item" href="user-profile-view.html"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
                            <a class="dropdown-item" href="{{route('logout')}}" ><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="auth">
                             <i class=" menu-icon fa-solid fa-boxes-stacked"></i>
                            <span class="menu-title">Services</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">SOS Request</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">Cyber Support</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">Health Care</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory-list.html">Sanitari Booth Location</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">Self defence learning</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="auth">
                             <i class=" menu-icon fa-solid fa-boxes-stacked"></i>
                            <span class="menu-title">Requested Services</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">SOS Request</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">Cyber Support Request </a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">Health Care Request</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory-list.html">Sanitari Booth Request</a></li>
                                <li class="nav-item"> <a class="nav-link" href="inventory.html">Self defence Request</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activites.html">
                            <i class="menu-icon mdi mdi-card-text-outline"></i>
                            <span class="menu-title">Activites</span>
                        </a>
                    </li>
                        
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="request.html" >
                            <i class="menu-icon fa-solid fa-code-pull-request"></i>
                            <span class="menu-title">Request</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="menu-icon mdi mdi-account-circle-outline"></i>
                            <span class="menu-title">User</span>
                             <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="user-list.html">List of users</a></li>
                                
                            </ul>
                        </div>
                    </li>
                    
                   
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <h2 class="welcome-text">Over View</h2>
                                <div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-4">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Current User</h4>
                                                    <h2 style="color: #48B047">77</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-users font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Recent Request</h4>
                                                    <h2 style="color: #48B047">13</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-boxes-stacked font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <h2 class="welcome-text">Request History</h2>
                                <div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Total Request </h4>
                                                    <h2 style="color: #48B047">26</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-paste font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Pending Request</h4>
                                                    <h2 style="color: #48B047">13</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-address-card font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Request Accepted</h4>
                                                    <h2 style="color: #48B047">13</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-clipboard-check font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <h2 class="welcome-text">Request Overview(Total)</h2>
                                <div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>SOS Request</h4>
                                                    <h2 style="color: #48B047">140</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-paste font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Healthcare Request</h4>
                                                    <h2 style="color: #48B047">13</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-address-card font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Cyber Support Request</h4>
                                                    <h2 style="color: #48B047">133</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-clipboard-check font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <h2 class="welcome-text">Total Expense</h2>
                                <div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-3">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h4>Total Response</h4>
                                                    <h2 style="color: #48B047">255</h2>
                                                </div>
                                                <div class="col-sm-4">
                                                    <i class="fa-solid fa-chart-pie font-size-dashboard"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>

