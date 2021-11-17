

<?php

include_once "connection.php";

?>


<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>CubeStix</title>

        <meta name="description" content="CubeStix">
        <meta name="author" content="cubestix">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="CubeStix">
        <meta property="og:site_name" content="CubeStix">
        <meta property="og:description" content="CubeStix">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <link href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">

            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="javascript:void(0)">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar11.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-body-color-dark font-w600 loginuser" href="javascript:void(0)"> </a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Emergency Notification -->
                <div class="content-side content-side-full bg-danger-light text-center">
                    <i class="fa fa-motorcycle fa-2x text-danger animated swing infinite"></i>
                    <p class="font-size-h5 font-w700 text-danger mt-10 mb-0">
                       <span style="display:none">1 new dispatch request.</span>
                    </p>
                </div>
                <!-- END Emergency Notification -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Mini Stats -->
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Dispatch</div>
                                    <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">0</a>
                                </div>
                                <div class="col-6">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Delivered</div>
                                    <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">0</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Notifications -->

                    <!-- END Notifications -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">s</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">


                                        <img class="img-fluid" alt="Responsive image" style="height:60px;width:50px" src="assets/media/logo/logo.cubestix.png"/>


                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent" style="margin-top:30px">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar11.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="javascript:void(0)">
                                <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase loginuser" href="javascript:void(0)"></a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="javascript:void(0)">
                                        <i class="fa fa-unlock-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="active" href="home.php"><i class="fa fa-truck"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>

                             <li class="nav-main-heading">
                            	<span class="sidebar-mini-visible">New</span><span class="sidebar-mini-hidden">Deliveries</span>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus"></i><span class="sidebar-mini-hide">Send an Item</span></a>
                                <ul>
                                    <li>
                                        <a href="">Single Item</a>
                                    </li>


                                </ul>
                                <ul>
                                    <li>
                                        <a href="">Bulk Items</a>
                                    </li>


                                </ul>
                            </li>
                             <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus"></i><span class="sidebar-mini-hide">Manage</span></a>

                                <ul>
                                    <li>
                                        <a href="">Recieved Requests</a>
                                    </li>


                                </ul>

                                <ul>
                                    <li>
                                        <a href="">Completed Requests</a>
                                    </li>


                                </ul>
                                 <ul>
                                    <li>
                                        <a href="">All Requests</a>
                                    </li>


                                </ul>


                            </li>






                            <li class="nav-main-heading">
                            	<span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-user"></i><span class="sidebar-mini-hide">Profile</span></a>
                            </li>

                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Full Search -->
                        <div class="content-header-item d-none d-sm-inline-block">
                            <form action="managerequests.php" method="post" onsubmit="return false;">
                                <div class="input-group" style="padding-bottom:0px">
                                    <input type="text" class="form-control" placeholder="Search Tracking ID" id="searchdelivery">

                                </div>
                            </form>
                        </div>
                        <!-- END Full Search -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-md d-sm-none"></i>
                                <span class="d-none d-sm-inline-block loginuser"></span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fa fa-user-circle-o mr-5"></i> Dispatch Request
                                    </span>
                                    <span class="badge badge-primary">5</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fa fa-calendar mr-5"></i> Messages
                                    </span>
                                    <span class="badge badge-info">2</span>
                                </a>
<!--
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fa fa-paypal mr-5"></i> Payments
                                    </span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-pencil mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-cog mr-5"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-unlock-alt mr-5"></i> Sign Out
                                </a>
-->
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-rounded btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <span class="badge badge-danger mr-5 animated swing infinite">
                                <i class="fa fa-motorcycle"></i>
                            </span>
                            <i class="fa fa-flag"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <!-- <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                     Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <!-- <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button> -->
                                    <!-- END Close Search Section -->
                                <!-- </div>
                                <input type="text" class="form-control" placeholder="Search for Delivery" id="searchdelivery" name="searchdelivery">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div> -->
                            <!-- </div>
                        </form> -->
                    <!-- </div>
                </div>  -->
                <!-- END Header Search -->

                <!-- Header Loader -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Quick Navigation -->
<!--
                <div class="bg-body-dark">
                    <div class="content">
                        <div class="row">
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-envelope-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-envelope-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Inbox</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-pencil text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-pencil text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Profile</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-wrench text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-wrench text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Settings</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Add Patient</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Add Event</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Add Payment</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
-->
                <!-- END Quick Navigation -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <div class="row invisible" data-toggle="appear">
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-truck fa-3x text-corporate"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Pending</div>
                                        <div class="text-muted"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-shopping-bag fa-3x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Processing</div>
                                        <div class="text-muted"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-clock-o fa-3x text-primary"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Completed</div>
                                        <div class="text-muted"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Overview -->

                    <!-- Patients -->

                    <!-- END Patients -->
 <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Delivery Requests</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->

                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination" id="deliveryrequests">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tracking ID</th>
                                        <th>Sender Name</th>
                                        <th class="d-none d-sm-table-cell">Recipient Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Street Address</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">City/Town </th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">LG/State</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Phone</th>
                                        <th class="text-center" style="width: 15%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>



                                </tbody>
                            </table>


<!--
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tracking-ID</th>
                                        <th>Sender</th>
                                        <th class="d-none d-sm-table-cell">Recipient</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Phone</th>
                                        <th class="text-center" style="width: 10%;">Email</th>
                                        <th class="text-center" style="width: 10%;">Date</th>
                                        <th class="text-center" style="width: 10%;">Destination</th>
                                        <th class="text-center" style="width: 10%;">City</th>
                                        <th class="text-center" style="width: 10%;">LG</th>
                                        <th class="text-center" style="width: 10%;">State</th>
                                        <th class="text-center" style="width: 10%;">
										STATUS
                                       </th >

                                      <th class="text-center" style="width: 10%;">
										ACTION
                                       </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">23243533198</td>
                                        <td class="font-w300">RUBIESMFB</td>
                                        <td class="font-w400">ADESOPE NIRAN</td>
                                        <td class="d-none d-sm-table-cell">8182120030</td>
                                        <td class="d-none d-sm-table-cell">vofili@gmail.com</td>
                                           <td class="font-w600">2021-08-22 12:00:00</td>
                                        <td class="d-none d-sm-table-cell">4 michael olawale cole drive</td>
                                        <td class="d-none d-sm-table-cell">Lekki Phase 1</td>
                                        <td class="text-center">
                                            Eti-Osa
                                        </td>
                                         <td class="text-center">
                                            Lagos
                                        </td>

                                         <td class="text-center">
												PENDING

                                        </td>
                                           <td class="text-center">
                                            <div class="row col-12">
                                            	 <button type="button" id="gotomanagerequestbtn" onclick="gotomanagerequest(23243533198)" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="" >
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
-->
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    <!-- Payments -->

                    <!-- END Payments -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                     <a class="font-w600" href="" target="_blank">Cubestiix</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://nubeero.com" target="_blank">Cubestix</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
        <script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
        <script src="assets/js/api.js"></script>
        <script>
console.log(gotomanagerequest)
			$(document).ready(function(){
                let searchdeliveryitems = [];



				$('.loginuser').text(localStorage.getItem('fullname'))

                $userid = localStorage.getItem("userid");

                let payload = {userid:$userid};

                Swal.showLoading();

                postData(baseUrl+'api/getdeliverybyuserid.php', payload)
                            .then(data => {
                                Swal.close();
                                console.log(data); // JSON data parsed by `data.json()` call
                                data.result.forEach(function(item,index){
                                    $('#deliveryrequests tr:last').after(`<tr>
                                        <td class="text-center">${item.trackingid}</td>
                                        <td class="font-w600">${item.sendername}</td>
                                        <td class="d-none d-sm-table-cell">${item.recipientname}</td>
                                        <td class="d-none d-sm-table-cell">${item.recipientaddress}</td>
                                        <td class="d-none d-sm-table-cell">${item.recipientcity}</td>
                                        <td class="d-none d-sm-table-cell">${item.recipientlga}</td>
                                        <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-success">${item.status}</span>
                                        </td><td class="d-none d-sm-table-cell">
                                           ${item.recipientphone}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit Request" onclick="gotomanagerequest(${item.trackingid})" >
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>`);
                                    searchdeliveryitems.push(item.trackingid);
                                    localStorage.setItem("searchdeliveryitems",JSON.stringify(searchdeliveryitems));
                                })
                                $( "#searchdelivery" ).autocomplete({source:searchdeliveryitems, position: { my : "left top", at: "left bottom+20", of:"#searchdelivery" }});
                                //$( "#searchdelivery" ).autocomplete("option","source",searchdeliveryitems);
                                $( "#searchdelivery" ).on( "autocompleteselect", function( event, ui ) {
                                   // console.log(event)

                                    console.log(ui.item.value)
                                    gotomanagerequest(ui.item.value)
                                } )


                });

			})
		</script>
    </body>
</html>