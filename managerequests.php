

<?php

include_once "connection.php";
$login_user = "Onyinye Ijeoma";

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
   <!-- Page JS Plugins CSS -->
   <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="assets/js/plugins/dropzonejs/dist/dropzone.css">
        <link rel="stylesheet" href="assets/js/plugins/flatpickr/flatpickr.min.css">





        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

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
                            <a class="align-middle link-effect text-body-color-dark font-w600" href="javascript:void(0)"><?=$login_user;?></a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Emergency Notification -->
                <div class="content-side content-side-full bg-danger-light text-center">
                    <i class="fa fa-motorcycle fa-2x text-danger animated swing infinite"></i>
                    <p class="font-size-h5 font-w700 text-danger mt-10 mb-0">
                       1 new dispatch request.
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
                                    <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">5</a>
                                </div>
                                <div class="col-6">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Delivered</div>
                                    <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">6</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Notifications -->
<!--
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">Recent Notifications</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="fa fa-exclamation-triangle text-danger"></i>
                                    <div class="font-w600">There is an emergency!</div>
                                    <div>
                                        <a class="font-w600 text-danger" href="javascript:void(0)">Event Details</a>
                                    </div>
                                    <div class="font-size-xs text-muted">just now</div>
                                </li>
                                <li>
                                    <i class="fa fa-check text-success"></i>
                                    <div class="font-w600">New patient was added successfully</div>
                                    <div>
                                        <a class="font-w600 text-success" href="javascript:void(0)">Andrea Gardner</a>
                                    </div>
                                    <div class="font-size-xs text-muted">15 min ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-pencil text-info"></i>
                                    <div class="font-w600">You edited a file</div>
                                    <div>
                                        <a class="font-w600 text-info" href="javascript:void(0)">
                                            <i class="fa fa-file-text-o"></i> Prescription#2.doc
                                        </a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-paypal text-primary"></i>
                                    <div class="font-w600">New payment received!</div>
                                    <div>
                                        From <a class="font-w600" href="javascript:void(0)">Lisa Jenkins</a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-check text-success"></i>
                                    <div class="font-w600">New appointment was scheduled successfully</div>
                                    <div>
                                        Tomorrow with <a class="font-w600 text-success" href="javascript:void(0)">Brian Cruz</a>
                                    </div>
                                    <div class="font-size-xs text-muted">2 days ago</div>
                                </li>
                            </ul>
                            <a class="btn btn-block btn-alt-secondary" href="javascript:void(0)">
                                Load more..
                            </a>
                            <a class="btn btn-block btn-hero btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-flag mr-5"></i>
                                View All Notifications
                            </a>
                        </div>
                    </div>
-->
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
                                <a class="link-effect font-w700" href="index.html">
                                    <!-- <i class="si si-social-dropbox text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">Cube</span><span class="font-size-xl text-primary">stix</span> -->
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
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
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="javascript:void(0)"><?=$login_user;?></a>
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
                                <a class="active" href="db_medical.html"><i class="fa fa-truck"></i><span class="sidebar-mini-hide">Overview</span></a>
                            </li>

                             <li class="nav-main-heading">
                            	<span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">NEW</span>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus"></i><span class="sidebar-mini-hide">Send</span></a>
                                <ul>
                                    <li>
                                        <a href="">Single Item</a>
                                    </li>


                                </ul>
                            </li>







                            <li class="nav-main-heading">
                            	<span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span>
                            </li>

                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-motorcycle"></i><span class="sidebar-mini-hide">Deliveries</span></a>
                                <ul>
                                    <li>
                                        <a href="index.php">View All Requests</a>
                                    </li>
                                    <li>
                                        <a href="">Manange Requests</a>
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
                            <form action="db_medical.html" method="post" onsubmit="return false;">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
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
                                <span class="d-none d-sm-inline-block"><?=$login_user;?></span>
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
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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


                    <!-- Patients -->

                    <!-- END Patients -->
 <!-- Dynamic Table Full -->
                         <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-building fa-fw mr-5 text-muted"></i>Manage Delivery
                            </h3>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-lg-3">
                                    <p class="text-muted">
                                        Details of Delivery Request
                                    </p>
                                </div>
                                <div class="col-lg-7 offset-lg-1">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="hosting-settings-address-firstname">Sender ID</label>
                                                <input type="text" class="form-control form-control-lg" id="senderid" name="senderid" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="hosting-settings-address-lastname">Tracking Number</label>
                                                <input type="text" class="form-control form-control-lg" id="trackingnumber" name="trackingnumber" value="" readonly>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="hosting-settings-address-firstname">CustomerName</label>
                                                <input type="text" class="form-control form-control-lg" id="customername" name="customername" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="hosting-settings-address-lastname">Phone</label>
                                                <input type="text" class="form-control form-control-lg" id="phone" name="phone" value="" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="hosting-settings-address-firstname">Email</label>
                                                <input type="text" class="form-control form-control-lg" id="email" name="email" value="" readonly>
                                            </div>
                                        </div>

                                        <!-- <div class="col-6">
                                             <label class="col-12" for="example-datepicker1">Delivery Date</label>
                                            <div class="col-lg-12">
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <input type="date" class="form-control" id="deliverydatepicker" name="deliverydatepicker" placeholder="MM/DD/YYYY"
                                                    data-week-start="1" data-autoclose="true"
                                                    data-today-highlight="true">

                                                </div>
                                            </div>

                                        </div> -->


                                        <div class="col-6">
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="deliverydate">Delivery Date</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="deliverydate" name="deliverydate" placeholder="Y-m-d">
                                            </div>
                                        </div>

                                        </div>




                                    </div>
                                    <div class="form-group">
                                        <label for="address">Street Address </label>
                                        <input type="text" class="form-control form-control-lg" id="address" name="address">
                                    </div>

                                    <div class="form-group row">
                                         <div class="col-6">
                                        <label for="city">City/Town</label>
                                        <input type="text" class="form-control form-control-lg" id="city" name="city">
									 </div>
                                     <div class="col-6">
                                            <label for="hosting-settings-address-postal">Local Govt</label>
                                            <input type="text" class="form-control form-control-lg" id="lga" name="lga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="hosting-settings-address-postal">State</label>
                                            <input type="text" class="form-control form-control-lg" id="state" name="state">
                                        </div>
                                    </div>
                                    <div class="form-group row">


                                        <div class="col-6">
                                           <div class="form-material floating">
                                                    <select class="form-control" id="description" name="material-select2">
                                                        <option value="">SELECT DESCRIPTION</option>
                                                        <option value="DELIVERY">DELIVERY</option>
                                                        <option value="RETRY DELIVERY">RETRY DELIVERY</option>
                                                        <option value="RETURNED">RETURNED</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                                <div class="form-material floating">
                                                    <select class="form-control" id="status" name="material-select2">
                                                        <option value="">SELECT STATUS</option>
                                                        <option value="PENDING">PENDING</option>
                                                        <option value="PROCESSING">PROCESSING</option>
                                                        <option value="COMPLETE">COMPLETE</option>

                                                    </select>

                                                </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-12">
                                        <h4 class="content-heading">Status Notes</h4>
										<div class="block block-rounded">
											<div class="block-content">


													<div class="form-group row mb-10">
														<div class="col-12">
															<textarea class="form-control" id="statusnotes" name="ecom-customer-note" placeholder="Add a Delivery status description note here ..." rows="6"></textarea>
														</div>
													</div>


											</div>
                    					</div>
                                        </div>
                                    </div>
                    <!-- END Private Notes -->
                                    <div class="form-group">

                                        <button type="submit" id="gotohome" onClick="window.location.href='home.php'" class="btn btn-alt-secondary">Back</button>

                                        <button type="submit" id="updatedelivery" class="btn btn-alt-success">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Settings -->
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
                       <a class="font-w600" href="" target="_blank"></a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://nubeero.com" target="_blank">CubeStix</a> &copy; <span class="js-year-copy"></span>
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

                <!-- Page JS Plugins -->
                <script src="assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
                <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                <script src="assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
                <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
                <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
                <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
                <script src="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
                <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
                <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
                <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
                <script src="assets/js/plugins/flatpickr/flatpickr.min.js"></script>

                <!-- Page JS Code -->
                <script src="assets/js/pages/be_forms_plugins.min.js"></script>
        <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->

        <script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
        <script src="assets/js/api.js"></script>
        <script>
                jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });
        </script>
        <script>
			$(document).ready(function(){
                let statustypes= [{status:'processing'}, {status:'complete'}, {status:'pending'}];
                let desctypes= [{name:'delivery',value:'Delivery'}, {name:'retrydelivery',value:'Retry Delivery'}, {name:'returned',value:'Returned'}];

				let trackid = localStorage.getItem("trackingid")
				console.log(trackid);

                let senderid = localStorage.getItem("senderid")
				$('#trackingnumber').val(trackid);
                let calendar = flatpickr("#deliverydate", {});
                //get delivery details

                Swal.showLoading();
                //trackingid
                let obj = {source:"web",senderid:senderid,trackingid:trackid};


                            postData(baseUrl+'api/getdeliverybyid.php', obj)
                            .then(data => {
                                console.log(data); // JSON data parsed by `data.json()` call
                                if(data.responsecode="00"){
                                    Swal.fire({
                                    title: 'Get Delivery.',
                                    text: data.responsemessage,
                                    icon: 'success',
                                    confirmButtonText: 'Ok'
                                    })
                                }
                                $('#senderid').val(data.senderid);
                                $('#customername').val(data.recipientname);
                                $('#phone').val(data.recipientphone);
                                $('#email').val(data.recipientemail);

                                var now = new Date();

                                var day = ("0" + now.getDate()).slice(-2);
                                var month = ("0" + (now.getMonth() + 1)).slice(-2);

                                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;



                                calendar.setDate(data.deliverydate,true,"Y-m-d");
                                $('#address').val(data.recipientaddress);
                                $('#city').val(data.recipientcity);
                                $('#town').val(data.recipienttown);
                                $('#lga').val(data.recipientlga);
                                $('#state').val(data.recipientstate);
                                $('#description').val(data.description);
                                $('#statusnotes').val(data.notes);
                            });



                $('#updatedelivery').on('click',function(){
                        Swal.showLoading();

                        let notes = $('#statusnotes').val();

                        let status = $('#status').val();

                        let description = $('#description').val();

                        let senderid=$('#senderid').val();

                        let username= localStorage.getItem("username")
                        let trackingid = $('#trackingnumber').val();
                        let city = $('#city').val();
                        let state = $('#state').val();
                        let lga=$('#lga').val();
                        /*
                        $username = $data->userid;
                            $deliveryid = $data->trackingid;
                            $notes = $data->notes;
                            $status = $data->status;
                            $description = $data->description;
                            */
                           let newDate = calendar.selectedDates[0]

                                year = newDate.getFullYear();
                                month = newDate.getMonth()+1;
                                dt = newDate.getDate();

                                if (dt < 10) {
                                dt = '0' + dt;
                                }
                                if (month < 10) {
                                month = '0' + month;
                                }

                                console.log(year+'-' + month + '-'+dt);
                                let newdeliverydatestr = year+'-' + month + '-'+dt;
                        let obj = {userid:username,trackingid,trackingid,notes:notes,description:description,status:status,city:city,lga:lga,state:state,deliverydate:newdeliverydatestr};
                        console.log(obj)

                        postData(baseUrl+'api/updatedeliverybyid.php', obj)
                            .then(data => {
                                console.log(data); // JSON data parsed by `data.json()` call
                                if(data.responsecode="00"){
                                    Swal.fire({
                                    title: 'Update Delivery.',
                                    text: data.responsemessage,
                                    icon: 'success',
                                    confirmButtonText: 'Ok'
                                    }).then((resultok)=>{
                                            console.log(resultok)
                                            if(resultok.isConfirmed){
                                                window.location.href="home.php";
                                            }
                                    })
                                }
                            })


                })
			})


		</script>
    </body>
</html>