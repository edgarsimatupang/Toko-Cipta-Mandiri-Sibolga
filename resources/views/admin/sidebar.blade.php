<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Depkominfo</title>
    <!-- This page plugin CSS -->
    <link href="{{asset('assets')}}/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('dist')}}/css/style.min.css" rel="stylesheet">

    <script src="{{asset('assets')}}/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets')}}/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets')}}/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{asset('dist')}}/js/app-style-switcher.js"></script>
    <script src="{{asset('dist')}}/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets')}}/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{asset('assets')}}/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="{{asset('dist')}}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist')}}/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="{{asset('assets')}}/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('dist')}}/js/pages/datatable/datatable-basic.init.js"></script>
    </head>
    <body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="#">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{asset('assets')}}/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{asset('assets')}}/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{asset('assets')}}/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{asset('assets')}}/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
         
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="admin.indexadmin"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Beranda</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="admin.eventadmin"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Event</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="admin.bagianadmin"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Produk</span></a></li>
                        <li class="list-divider"></li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>