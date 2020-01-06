<?php
    if(!empty(session()->all())){
        $session = session()->all();
        if(empty($session['admin']))
        {
            echo "<script>window.location='".url('/admin?error=true')."'</script>";
        }
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/matrix-admin-bt4') }}/assets/images/favicon.png">
    <title>Admin BMC Travel Service</title>
    <!-- Custom CSS -->
    <link href="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/matrix-admin-bt4') }}/dist/css/style.min.css" rel="stylesheet">
<!--     <link rel="stylesheet" type="text/css" href="{{ asset('/matrix-admin-bt4') }}/assets/libs/quill/dist/quill.snow.css">
 -->    <link href="{{ asset('public/matrix-admin-bt4') }}/dist/css/custom.css" rel="stylesheet">
    <link href="{{ asset('public/matrix-admin-bt4') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{ url('public/select2-develop/dist/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('public/ckeditor') }}/ckeditor.js"></script>
    {{-- step --}}
    <link href="{{ asset('public/matrix-admin-bt4') }}/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="{{ asset('public/matrix-admin-bt4') }}/assets/libs/jquery-steps/steps.css" rel="stylesheet">
    {{-- /step --}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
</head>

<body>
    <div class="disable-mode"></div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('public/matrix-admin-bt4') }}/assets/images/BMC-Logo.png" alt="homepage" class="bmc-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                            BMC TRAVEL SERVICE
                             <!-- dark Logo text -->

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="{{ asset('/matrix-admin-bt4') }}/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            <!-- ============================================================== -->
                            <!-- toggle and nav items -->
                            <!-- ============================================================== -->
                            <ul class="navbar-nav float-left mr-auto">
                                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link page-top-title">@yield('pagetitle')</a>
                                    </li>
                                </ul>
                                <!-- ============================================================== -->
                                <!-- Right side toggle and nav items -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav float-right">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                            <ul class="list-style-none">
                                                <li>
                                                    <div class="">
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Event today</h5>
                                                                    <span class="mail-desc">Just a reminder that event</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Settings</h5>
                                                                    <span class="mail-desc">You can customize this template</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Pavan kumar</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Luanch Admin</h5>
                                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- End Messages -->
                                    <!-- ============================================================== -->

                                    <!-- ============================================================== -->
                                    <!-- User profile and search -->
                                    <!-- ============================================================== -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('public/matrix-admin-bt4') }}/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                            <div class="dropdown-divider"></div>
                                            <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                                        </div>
                                    </li>
                                    <!-- ============================================================== -->
                                    <!-- User profile and search -->
                                    <!-- ============================================================== -->
                                </ul>
                            </div>
                            <div class="col-md-12 mt-3">
                                <ul class="nav top-bottom float-left">
                                @if($__env->yieldContent('view_caption')!='')
                                    <li class="nav-item @yield('view_status')">
                                        <a href="@yield('view_link')" class="nav-link"><i class="mdi mdi-playlist-check"></i> @yield('view_caption')</a>
                                    </li>
                                @endif
                                @if($__env->yieldContent('insert_caption')!='')
                                    <li class="nav-item  @yield('insert_status')">
                                        <a href="@yield('insert_link')" class="nav-link"><i class="mdi mdi-playlist-plus"></i> @yield('insert_caption')</a>
                                    </li>
                                @endif
                                </ul>
                                <ul class="nav top-bottom float-right">
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <small>
                                                <?php $str = str_replace("-"," ",Request::segment(2)) ?>{{ ucwords($str) }} <i class="mdi mdi-menu-right"></i> @yield('pagetitle') <i class="mdi mdi-menu-right"></i>
                                                @if($__env->yieldContent('view_status')=="active")
                                                    @yield('view_caption')
                                                @else
                                                    @yield('insert_caption')
                                                @endif
                                                </a>
                                            </small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-10 mt-4">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-package"></i><span class="hide-menu">Tour Package </span></a>
                    </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-package"></i><span class="hide-menu">Tour Package </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/tour-package/tour-package') }}" class="sidebar-link"><i class="mdi mdi-package"></i><span class="hide-menu"> Tour Package </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/tour-package/categories') }}" class="sidebar-link"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu"> Categories </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/tour-package/tour-type') }}" class="sidebar-link"><i class="mdi mdi-heart-box-outline"></i><span class="hide-menu"> Tour Type </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/tour-package/durations') }}" class="sidebar-link"><i class="mdi mdi-av-timer"></i><span class="hide-menu"> Durations </span></a></li>
                                <!--li class="sidebar-item"><a href="{{ url('admin/tour-package/price-categories') }}" class="sidebar-link"><i class="mdi mdi-cash-usd"></i><span class="hide-menu"> Price Categories </span></a></li-->
                              </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-find-replace"></i><span class="hide-menu">Destinations </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/destinations/destinations/list') }}" class="sidebar-link"><i class="mdi mdi-find-replace"></i><span class="hide-menu"> Destinations </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/destinations/categories') }}" class="sidebar-link"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu"> Categories </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/destinations/activities') }}" class="sidebar-link"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu"> Activities </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Gallery </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/gallery/gallery') }}" class="sidebar-link"><i class="mdi mdi-google-photos"></i><span class="hide-menu"> Gallery </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/gallery/categories') }}" class="sidebar-link"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu"> Categories </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-hotel"></i><span class="hide-menu">Hotel </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/hotel/hotel') }}" class="sidebar-link"><i class="mdi mdi-hotel"></i><span class="hide-menu"> Hotel </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/hotel/room-hotel') }}" class="sidebar-link"><i class="mdi mdi-city"></i><span class="hide-menu"> Room Hotel </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-help"></i><span class="hide-menu">Travel Tips </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/travel-tips/travel-tips/list') }}" class="sidebar-link"><i class="mdi mdi-help"></i><span class="hide-menu"> Travel Tips </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/travel-tips/tags') }}" class="sidebar-link"><i class="mdi mdi-sign-caution"></i><span class="hide-menu"> Tags </span></a></li>
                            </ul>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-coin"></i><span class="hide-menu">Transaction </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/transaction/booking/list-booking') }}" class="sidebar-link"><i class="mdi mdi-calendar-multiple-check"></i><span class="hide-menu"> Booking </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/transaction/payment/list-payment') }}" class="sidebar-link"><i class="mdi mdi-credit-card-multiple"></i><span class="hide-menu"> Payment </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/users/user') }}" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> User </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Data Master </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ url('admin/data-master/province') }}" class="sidebar-link"><i class="mdi mdi-map"></i><span class="hide-menu"> Province </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('admin/data-master/city') }}" class="sidebar-link"><i class="mdi mdi-city"></i><span class="hide-menu"> City </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- content -->
            @yield('admin')
            <!-- /content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
    </div>
    </div>
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('public/matrix-admin-bt4') }}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('public/matrix-admin-bt4') }}/dist/js/sidebarmenu.js"></script>
    <script src="{{ url('public/select2-develop/dist/js/select2.min.js') }}"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('public/matrix-admin-bt4') }}/dist/js/custom.min.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/dist/js/custom-script.js"></script>
    <!--This page JavaScript -->
<!--     <script src="{{ asset('/matrix-admin-bt4') }}/dist/js/pages/dashboards/dashboard1.js"></script>
 -->    <!-- Charts js Files -->
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/excanvas.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/jquery.flot.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/dist/js/pages/chart/chart-page-init.js"></script>
<!--     <script src="{{ asset('/matrix-admin-bt4') }}/assets/libs/quill/dist/quill.min.js"></script>
 -->    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="{{ asset('public/matrix-admin-bt4') }}/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script>
/*         // Editor Quill
        var quill = new Quill('#editor-overview', {
            theme: 'snow'
        });
        var quill = new Quill('#editor-information', {
            theme: 'snow'
        });
 */
        //DataTable
        $('#zero_config').DataTable();

        //CKEditor
        var konten = document.getElementById("konten");
            CKEDITOR.replace(konten,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;

        form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
        });
    </script>
</body>

</html>
