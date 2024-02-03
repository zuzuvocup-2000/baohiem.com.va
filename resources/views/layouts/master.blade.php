<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical"
    data-boxed-layout="boxed" data-card="shadow">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}">

    <!-- Core Css -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <title>Xtreme Bootstrap Admin</title>
</head>

<body data-sidebartype="full">
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div>
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="index.html" class="text-nowrap logo-img">
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo">
                            <!-- Light Logo icon -->
                            <img src="/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="/assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2">
                            <!-- Light Logo text -->
                            <img src="/assets/images/logos/logo-light-text.svg" class="light-logo ps-2"
                                alt="homepage">
                        </span>
                    </a>
                </div>




                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">

                        <!-- User Profile-->
                        <li class="pt-3">
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown mt-3">
                                <div class="user-pic">
                                    <img src="/assets/images/profile/user-6.jpg" alt="users" class="rounded-circle"
                                        width="40">
                                </div>
                                <div class="user-content hide-menu ms-2">
                                    <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <h5 class="mb-0 user-name fw-medium d-flex ">
                                            Steave Jobs
                                            <iconify-icon icon="solar:alt-arrow-down-outline" class="ms-2">
                                            </iconify-icon>
                                        </h5>
                                        <span class="op-5 text-muted">info@xtreme.com</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item d-flex" href="page-user-profile.html">
                                            <iconify-icon icon="solar:user-linear"
                                                class="text-info iconify-sm me-2 ms-1"></iconify-icon>
                                            My Profile
                                        </a>
                                        <a class="dropdown-item d-flex" href="page-user-profile.html">
                                            <iconify-icon icon="solar:card-outline"
                                                class="text-primary iconify-sm me-2 ms-1"></iconify-icon>
                                            My Balance
                                        </a>
                                        <a class="dropdown-item d-flex" href="app-email.html">
                                            <iconify-icon icon="solar:inbox-linear"
                                                class="text-success iconify-sm me-2 ms-1"></iconify-icon>
                                            Inbox
                                        </a>
                                        <a class="dropdown-item d-flex border-bottom border-top mt-1 py-3"
                                            href="page-account-settings.html">
                                            <iconify-icon icon="solar:settings-outline"
                                                class="text-warning iconify-sm me-2 ms-1"></iconify-icon>
                                            Account Setting
                                        </a>

                                        <a class="dropdown-item d-flex py-3 pb-2" href="authentication-login.html">
                                            <iconify-icon icon="solar:login-2-outline"
                                                class="text-danger iconify-sm me-2 ms-1"></iconify-icon>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <li class="mt-3 pt-3">
                            <a href="authentication-register.html"
                                class="btn btn-block bg-primary text-white no-block d-flex align-items-center py-2 px-2 border-0">
                                <iconify-icon icon="solar:add-square-linear" class="fs-5"></iconify-icon>
                                <span class="hide-menu ms-2">Create New</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Home -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Personal</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:screencast-2-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Classic</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Analytical</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Cryptocurrency</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index4.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Overview</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index5.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">E-Commerce</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index6.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Sales</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index7.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">General</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index8.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Trendy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index9.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Campaign</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index10.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Modern</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- ---------------------------------- -->
                        <!-- Page Layout -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:clipboard-heart-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Page Layouts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="layout-inner-left-sidebar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Inner Left Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-right-sidebar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Inner Right Sidebar </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Apps -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Apps</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-calendar.html" aria-expanded="false">
                                <iconify-icon icon="solar:calendar-minimalistic-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Calendar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-kanban.html" aria-expanded="false">
                                <iconify-icon icon="solar:widget-4-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Kanban</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-chat.html" aria-expanded="false">
                                <iconify-icon icon="solar:chat-round-unread-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Chat Apps</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-email.html" aria-expanded="false">
                                <iconify-icon icon="solar:mailbox-line-duotone" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Email</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-notes.html" aria-expanded="false">
                                <iconify-icon icon="solar:notification-unread-lines-outline" class="fs-5">
                                </iconify-icon>
                                <span class="hide-menu">Notes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-contact.html" aria-expanded="false">
                                <iconify-icon icon="solar:phone-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Contact Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-contact2.html" aria-expanded="false">
                                <iconify-icon icon="solar:clipboard-list-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Contact List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="app-invoice.html" aria-expanded="false">
                                <iconify-icon icon="solar:file-text-line-duotone" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Invoice</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="page-user-profile.html" aria-expanded="false">
                                <iconify-icon icon="solar:user-circle-line-duotone" class="fs-5"></iconify-icon>
                                <span class="hide-menu">User Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:pie-chart-3-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Blog</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="blog-posts.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Posts </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="blog-detail.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Details </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Ecommerce</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="eco-shop.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Shop </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-shop-detail.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Details </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-product-list.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> List </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-checkout.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Checkout </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Pages -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Pages</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="page-pricing.html" aria-expanded="false">
                                <iconify-icon icon="solar:calendar-minimalistic-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Pricing</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="page-faq.html" aria-expanded="false">
                                <iconify-icon icon="solar:question-circle-linear" class="fs-5"></iconify-icon>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="page-account-settings.html"
                                aria-expanded="false">
                                <iconify-icon icon="solar:user-circle-line-duotone" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Account Settings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="../landingpage/index.html" aria-expanded="false">
                                <iconify-icon icon="solar:laptop-minimalistic-outline" class="fs-5"></iconify-icon>
                                <span class="hide-menu">Landing Page</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Widgets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="widgets-cards.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Cards </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-charts.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Charts </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-banners.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Banner </span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="widgets-feeds.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Feed Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-apps.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Apps Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-data.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu"> Data Widgets </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- UI -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">UI</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:text-underline-cross-line-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">UI Elements</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">

                                <li class="sidebar-item">
                                    <a href="ui-accordian.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Accordian</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-badge.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Badge</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-buttons.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-dropdowns.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-modals.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tab.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tooltip-popover.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Tooltip & Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-notification.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Notification</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-progressbar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-pagination.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Pagination</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-typography.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-bootstrap-ui.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap UI</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-breadcrumb.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-offcanvas.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-lists.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Lists</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-grid.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-carousel.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Carousel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-scrollspy.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Scrollspy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-spinner.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Spinner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="ui-link.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Link</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:sim-cards-broken" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Cards</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">

                                <li class="sidebar-item">
                                    <a href="ui-cards.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Basic Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-customs.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Custom Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-weather.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Weather Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-draggable.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Draggable Cards</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:compass-square-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Component</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="component-sweetalert.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-nestable.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Nestable</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-noui-slider.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Noui slider</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-rating.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Rating</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-toastr.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Toastr</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- forms -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">FORMS</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:book-2-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Elements</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-inputs.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Forms Input</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-groups.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Input Groups</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-grid.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Input Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-checkbox-radio.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Checkbox & Radios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-touchspin.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Touchspin</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-switch.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Switch</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-select2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Select2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="form-dual-listbox.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Dual Listbox</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:qr-code-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Addons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-paginator.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Paginator</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-img-cropper.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-dropzone.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Dropzone</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-mask.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Form Mask</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-typeahead.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Form Typehead</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:danger-circle-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Validation</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-validation.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Validation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-custom-validation.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Custom Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:document-add-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Picker</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-picker-colorpicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Colorpicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-datetimepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Datetimepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Rangepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Datepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-material-datepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Material Datepicker</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:document-add-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Editor</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-editor-ckeditor.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Ck Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-quill.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Quill Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-summernote.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Summernote Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-editor-tinymce.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Tinymce Editor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-basic.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:document-text-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Basic Form</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-vertical.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:slider-vertical-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Vertical</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-horizontal.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:align-vertical-spacing-outline" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Form Horizontal</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-actions.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:recive-square-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Actions</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-row-separator.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Row Separator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-bordered.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:bill-list-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Bordered</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-detail.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:documents-minimalistic-linear" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Form Detail</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-striped-row.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:bedside-table-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Striped Rows</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-floating-input.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:flip-horizontal-outline" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Floating Input</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Form Wizard -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-wizard.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:weigher-broken" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Wizard</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Form Repeater -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="form-repeater.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:text-selection-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Form Repeater</span>
                            </a>
                        </li>

                        <!------------------------------------ -->
                        <!-- Tables -->
                        <!------------------------------------ -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">TABLES</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:sidebar-minimalistic-line-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Bootstrap Table</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-basic.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-dark-basic.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Dark Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-sizing.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Sizing Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="table-layout-coloured.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Coloured Table</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:tablet-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Datatables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-datatable-basic.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Basic Initialisation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-api.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">API</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-advanced.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Advanced Initialisation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Charts -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Charts</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Apex Chart -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:pie-chart-3-broken" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Apex Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-apex-line.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Line Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-area.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Area Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-bar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Bar Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-pie.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Pie Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radial.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Radial Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="chart-apex-radar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Radar Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="chart-sparkline.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:chart-square-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Sparkline Chart</span>
                            </a>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Sample pages -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">SAMPLE PAGES</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Apex Chart -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:documents-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Sample Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="pages-animation.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Animation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-search-result.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Search Result</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-gallery.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Gallery</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-treeview.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Treeview</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-block-ui.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Block-Ui</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-timeout.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Session Timeout</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="pages-utility-classes.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Helper Classes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Icons -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Icons</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Tabler Icon -->
                        <!-- ---------------------------------- -->

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="icon-tabler.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:archive-broken" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Tabler Icon</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="icon-solar.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:sticker-smile-circle-2-linear" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Solar Icon</span>
                            </a>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Authentication -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">Auth</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="authentication-error.html" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:bug-broken" class="fs-6"></iconify-icon>
                                </span>

                                <span class="hide-menu">Error</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:login-2-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-login.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Side Login</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-login2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Login</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:user-plus-broken" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Register</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-register.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Side Register</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-register2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:refresh-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Forgot Password</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-forgot-password.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Side Forgot Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-forgot-password2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Forgot Password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:magnifer-zoom-in-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Two Steps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="authentication-two-steps.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Side Two Steps</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="authentication-two-steps2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Two Steps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="authentication-maintenance.html"
                                aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:settings-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Maintenance</span>
                            </a>
                        </li>


                        <!-- ---------------------------------- -->
                        <!-- OTHER -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                            <span class="hide-menu">OTHER</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Menu Level</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Level 1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow sublink" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Level 1.1</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse two-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link sublink">
                                                <div class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="sidebar-icon"></i>
                                                </div>
                                                <span class="hide-menu">Level 2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link has-arrow sublink" href="javascript:void(0)"
                                                aria-expanded="false">
                                                <div class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="sidebar-icon"></i>
                                                </div>
                                                <span class="hide-menu">Level 2.1</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse three-level">
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link sublink">
                                                        <div
                                                            class="round-16 d-flex align-items-center justify-content-center">
                                                            <i class="sidebar-icon"></i>
                                                        </div>
                                                        <span class="hide-menu">Level 3</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link sublink">
                                                        <div
                                                            class="round-16 d-flex align-items-center justify-content-center">
                                                            <i class="sidebar-icon"></i>
                                                        </div>
                                                        <span class="hide-menu">Level 3.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link link-disabled" href="#disabled" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6">
                                    </iconify-icon>
                                </span>
                                <span class="hide-menu">Disabled</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#sub" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <div class="lh-base">
                                    <div class="hide-menu">SubCaption</div>
                                    <div class="hide-menu fs-2">This is the sutitle</div>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6">
                                        </iconify-icon>
                                    </span>
                                    <span class="hide-menu">Chip</span>
                                </div>
                                <div class="hide-menu">
                                    <span
                                        class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2">9</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#outlined" aria-expanded="false">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:smile-circle-outline" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Outlined</span>
                                </div>
                                <span
                                    class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="https://google.com" aria-expanded="false">
                                <span class="d-flex">
                                    <iconify-icon icon="solar:link-square-linear" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">External Link</span>
                            </a>
                        </li>
                    </ul>
                </nav>


                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg px-lg-0 px-0 py-0">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link nav-icon-hover sidebartoggler nav-icon-hover " id="headerCollapse"
                                    href="javascript:void(0)">
                                    <iconify-icon icon="solar:list-bold-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-block search-box">
                                <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark"
                                    href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item dropdown mega-dropdown d-none d-lg-block">
                                <a class="nav-link" id="drop2" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Mega <iconify-icon icon="solar:alt-arrow-down-outline" class=" ps-1 fs-4">
                                    </iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animate-up mt-2" aria-labelledby="drop2">
                                    <div class="mega-dropdown-menu row">
                                        <div class="col-lg-3 col-xl-2 mb-4">
                                            <h4 class="mb-3 fs-5 ">Carousel</h4>
                                            <!-- CAROUSEL -->
                                            <div id="carouselExampleControls" class="carousel slide carousel-dark"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid"
                                                            src="/assets/images/blog/blog-img1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                            src="/assets/images/blog/blog-img2.jpg"
                                                            alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                            src="/assets/images/blog/blog-img3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls"
                                                    role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls"
                                                    role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                            <!-- End CAROUSEL -->
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <h4 class="mb-3 fs-5">Accordion</h4>
                                            <!-- Accordian -->
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                            aria-controls="flush-collapseOne">
                                                            Accordion Item #1
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod
                                                            high life accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                            aria-controls="flush-collapseTwo">
                                                            Accordion Item #2
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingTwo"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod
                                                            high life accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                            aria-controls="flush-collapseThree">
                                                            Accordion Item #3
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingThree"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod
                                                            high life accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <h4 class="mb-3 fs-5">Contact Us</h4>
                                            <!-- Contact -->
                                            <form>
                                                <div class="mb-3 form-floating">
                                                    <input type="text" class="form-control" id="exampleInputname1"
                                                        placeholder="Enter Name">
                                                    <label>Enter Name</label>
                                                </div>
                                                <div class="mb-3 form-floating">
                                                    <input type="email" class="form-control" placeholder="Enter email">
                                                    <label>Enter Email address</label>
                                                </div>
                                                <div class="mb-3 form-floating">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"
                                                        placeholder="Message"></textarea>
                                                    <label>Enter Message</label>
                                                </div>
                                                <button type="submit" class="btn px-4 rounded-pill btn-primary">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 col-xlg-4 mb-4">
                                            <h4 class="mb-3 fs-5">List style</h4>
                                            <ol class="list-group list-group-numbered px-0">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <h6 class="fw-semibold mb-0">Subheading</h6>
                                                        <div class=" d-block text-muted text-truncate text-truncate">
                                                            Content for list item</div>
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">14</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <h6 class="fw-semibold mb-0">Subheading</h6>
                                                        <div class=" d-block text-muted text-truncate text-truncate">
                                                            Content for list item</div>
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">14</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <h6 class="fw-semibold mb-0">Subheading</h6>
                                                        <div class=" d-block text-muted text-truncate text-truncate">
                                                            Content for list item</div>
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">14</span>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" id="drop2" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Apps <iconify-icon icon="solar:alt-arrow-down-outline" class=" ps-1 fs-4">
                                    </iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Chat
                                                                            Application</h6>
                                                                        <span class="fs-3 d-block text-secondary ">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-invoice.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Invoice App
                                                                        </h6>
                                                                        <span class="fs-3 d-block text-secondary">Get
                                                                            latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-mobile.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Contact
                                                                            Application</h6>
                                                                        <span class="fs-3 d-block text-secondary">2
                                                                            Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-email.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-message-box.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                        <span class="fs-3 d-block text-secondary">Get
                                                                            new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="page-user-profile.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-cart.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">User Profile
                                                                        </h6>
                                                                        <span class="fs-3 d-block text-secondary">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-calendar.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-date.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Calendar App
                                                                        </h6>
                                                                        <span class="fs-3 d-block text-secondary">Get
                                                                            dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact2.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Contact List
                                                                            Table</h6>
                                                                        <span class="fs-3 d-block text-secondary">Add
                                                                            new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-notes.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-application.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Notes
                                                                            Application</h6>
                                                                        <span class="fs-3 d-block text-secondary">To-do
                                                                            and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center py-3">
                                                    <div class="col-8">
                                                        <a class="fw-semibold text-dark d-flex align-items-center lh-1"
                                                            href="page-faq.html"><i
                                                                class="ti ti-help fs-6 me-2"></i>Frequently Asked
                                                            Questions</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex justify-content-end pe-4">
                                                            <button class="btn btn-primary">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 ms-n4">
                                            <div class="position-relative p-7 border-start h-100">
                                                <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                                <ul class="">
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-pricing.html">Pricing Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-login.html">Authentication Design</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-register.html">Register Now</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-error.html">404 Error Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="app-notes.html">Notes App</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-user-profile.html">User Application</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-account-settings.html">Account Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="app-chat.html">
                                    Chat
                                </a>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="app-calendar.html">
                                    Calendar
                                </a>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="app-email.html">
                                    Email
                                </a>
                            </li>

                        </ul>


                        <div class="d-block d-lg-none">
                            <div class="brand-logo d-flex align-items-center justify-content-between">
                                <a href="index.html" class="text-nowrap logo-img">
                                    <b class="">
                                        <img src="/assets/images/logos/logo-light-icon.svg" alt="homepage" class="">
                                    </b>
                                    <!--End Logo icon -->
                                    <!-- Logo text -->
                                    <span class="">
                                        <img src="/assets/images/logos/logo-light-text.svg" class=" ps-2"
                                            alt="homepage">
                                    </span>
                                </a>
                            </div>



                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0 text-white" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between  py-2">
                                <ul class="navbar-nav flex-row d-flex d-lg-none">

                                    <li class="nav-item dropdown mega-dropdown">
                                        <a class="nav-link " id="drop2" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="d-lg-flex d-none">Mega</span>
                                            <iconify-icon icon="solar:alt-arrow-down-outline"
                                                class=" ps-1 fs-4 d-lg-flex d-none"></iconify-icon>
                                            <span class="d-lg-none d-flex">
                                                <iconify-icon icon="solar:code-scan-line-duotone"></iconify-icon>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop2">
                                            <div class="mega-dropdown-menu row">
                                                <div class="col-lg-3 col-xl-2 mb-4">
                                                    <h4 class="mb-3 fs-5 ">Carousel</h4>
                                                    <!-- CAROUSEL -->
                                                    <div id="carouselExampleControls"
                                                        class="carousel slide carousel-dark" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block img-fluid"
                                                                    src="/assets/images/blog/blog-img1.jpg"
                                                                    alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block img-fluid"
                                                                    src="/assets/images/blog/blog-img2.jpg"
                                                                    alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block img-fluid"
                                                                    src="/assets/images/blog/blog-img3.jpg"
                                                                    alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls"
                                                            role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls"
                                                            role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </div>
                                                    <!-- End CAROUSEL -->
                                                </div>
                                                <div class="col-lg-3 mb-4">
                                                    <h4 class="mb-3 fs-5">Accordion</h4>
                                                    <!-- Accordian -->
                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseOne"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseOne">
                                                                    Accordion Item #1
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="flush-headingOne"
                                                                data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                                    high life accusamus terry richardson ad squid.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseTwo">
                                                                    Accordion Item #2
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="flush-headingTwo"
                                                                data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                                    high life accusamus terry richardson ad squid.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseThree">
                                                                    Accordion Item #3
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="flush-headingThree"
                                                                data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                                    high life accusamus terry richardson ad squid.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 mb-4">
                                                    <h4 class="mb-3 fs-5">Contact Us</h4>
                                                    <!-- Contact -->
                                                    <form>
                                                        <div class="mb-3 form-floating">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputname1" placeholder="Enter Name">
                                                            <label>Enter Name</label>
                                                        </div>
                                                        <div class="mb-3 form-floating">
                                                            <input type="email" class="form-control"
                                                                placeholder="Enter email">
                                                            <label>Enter Email address</label>
                                                        </div>
                                                        <div class="mb-3 form-floating">
                                                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                                                placeholder="Message"></textarea>
                                                            <label>Enter Message</label>
                                                        </div>
                                                        <button type="submit" class="btn px-4 rounded-pill btn-primary">
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-3 col-xlg-4 mb-4">
                                                    <h4 class="mb-3 fs-5">List style</h4>
                                                    <ol class="list-group list-group-numbered px-0">
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="ms-2 me-auto">
                                                                <h6 class="fw-semibold mb-0">Subheading</h6>
                                                                <div
                                                                    class=" d-block text-muted text-truncate text-truncate">
                                                                    Content for list item</div>
                                                            </div>
                                                            <span class="badge bg-primary rounded-pill">14</span>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="ms-2 me-auto">
                                                                <h6 class="fw-semibold mb-0">Subheading</h6>
                                                                <div
                                                                    class=" d-block text-muted text-truncate text-truncate">
                                                                    Content for list item</div>
                                                            </div>
                                                            <span class="badge bg-primary rounded-pill">14</span>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="ms-2 me-auto">
                                                                <h6 class="fw-semibold mb-0">Subheading</h6>
                                                                <div
                                                                    class=" d-block text-muted text-truncate text-truncate">
                                                                    Content for list item</div>
                                                            </div>
                                                            <span class="badge bg-primary rounded-pill">14</span>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)"
                                            class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                                            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                            aria-controls="offcanvasWithBothOptions">
                                            <iconify-icon icon="solar:menu-dots-circle-linear"></iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                        </a>
                                        <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)"
                                            style="display: none;">
                                            <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                        </a>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/assets/images/svgs/icon-flag-en.svg" alt="" width="22px"
                                                height="22px">
                                        </a>
                                        <div class="dropdown-menu pt-0 dropdown-menu-end dropdown-menu-animate-up mt-n1"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-en.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">English</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-cn.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">Chinese</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-fr.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">French</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-sa.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">Arabic</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="solar:bell-outline"></iconify-icon>
                                            <div class="notify">
                                                <span class="heartbit"></span> <span class="point"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu  pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">

                                            <div
                                                class="d-flex border-bottom align-items-center justify-content-between py-3 px-4">
                                                <div class="mb-0 fs-4 fw-medium h6">Notifications</div>
                                            </div>
                                            <div class="message-body" data-simplebar="">
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                                                        <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Luanch Admin</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-success-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-success">
                                                        <iconify-icon icon="solar:calendar-mark-line-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Event today</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>

                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                                                        <iconify-icon icon="solar:settings-minimalistic-line-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Settings</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                                                        <iconify-icon icon="solar:link-circle-line-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Luanch Admin</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-success-subtle rounded-circle round d-flex align-items-center justify-content-center">
                                                        <i data-feather="calendar"
                                                            class="feather-sm fill-white text-success"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Event today</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center">
                                                        <i data-feather="settings"
                                                            class="feather-sm fill-white text-primary"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Settings</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="d-flex align-items-center pt-3 pb-2 justify-content-center h6 mb-0"
                                                    href="javascript:void(0);">
                                                    <span class="">Check all notifications</span>
                                                    <i data-feather="chevron-right" class="feather-sm"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="solar:chat-line-outline"></iconify-icon>
                                            <div class="notify">
                                                <span class="heartbit"></span> <span class="point"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu message-box pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div
                                                class="d-flex border-bottom align-items-center justify-content-between py-3 px-4">
                                                <h5 class="mb-0 fs-4 fw-medium h6">You have 4 new messages</h5>
                                            </div>
                                            <div class="message-body" data-simplebar="">
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-1.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Mathew Anderson</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-2.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Bianca Anderson</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>

                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-3.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Andrew Johnson</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-4.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Mark Strokes</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-5.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Mark, Stoinus & Rishvi..</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-6.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Settings</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="d-flex align-items-center pt-3 pb-2 justify-content-center h6 mb-0"
                                                    href="javascript:void(0);">
                                                    <span>See all e-Mails</span>
                                                    <i data-feather="chevron-right" class="feather-sm"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->


                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/assets/images/profile/user-6.jpg" alt="user" width="30"
                                                class="profile-pic rounded-circle">
                                        </a>
                                        <div class="dropdown-menu message-box pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="profile-dropdown position-relative" data-simplebar="">
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 ">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="/assets/images/profile/user-6.jpg"
                                                        class="rounded-circle" width="80" height="80" alt="">
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-4 text-secondary">Steve Jobs</h5>
                                                        <span class="mb-1 d-block text-secondary">Designer</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> info@xtreme.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="page-user-profile.html"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center bg-primary-subtle rounded-circle round p-6 fs-6 text-primary">
                                                            <iconify-icon icon="solar:user-circle-line-duotone"
                                                                class="text-primary"></iconify-icon>
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3  lh-base">My Profile</h6>
                                                            <span class="fs-3 d-block text-secondary">Account
                                                                Settings</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-email.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center bg-warning-subtle rounded-circle round p-6 fs-6 text-primary">
                                                            <iconify-icon icon="solar:inbox-line-line-duotone"
                                                                class="text-warning"></iconify-icon>
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3  lh-base">My Inbox</h6>
                                                            <span class="fs-3 d-block text-secondary ">Messages &
                                                                Emails</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-notes.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center bg-success-subtle rounded-circle round p-6 fs-6 text-primary">
                                                            <iconify-icon
                                                                icon="solar:checklist-minimalistic-line-duotone"
                                                                class="text-success "></iconify-icon>
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3  lh-base">My Task</h6>
                                                            <span class="fs-3 d-block text-secondary">To-do and Daily
                                                                Tasks</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <a href="authentication-login.html" class="btn btn-primary">Log
                                                        Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->

                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->
                    <!--  Mobilenavbar -->
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
                        aria-labelledby="offcanvasWithBothOptionsLabel">
                        <nav class="sidebar-nav scroll-sidebar">
                            <div class="offcanvas-header justify-content-between">
                                <div class="brand-logo d-flex align-items-center justify-content-between">
                                    <a href="index.html" class="text-nowrap logo-img">
                                        <b class="logo-icon">
                                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                            <!-- Dark Logo icon -->
                                            <img src="/assets/images/logos/logo-icon.svg" alt="homepage"
                                                class="dark-logo">
                                            <!-- Light Logo icon -->
                                            <img src="/assets/images/logos/logo-light-icon.svg" alt="homepage"
                                                class="light-logo">
                                        </b>
                                        <!--End Logo icon -->
                                        <!-- Logo text -->
                                        <span class="logo-text">
                                            <!-- dark Logo text -->
                                            <img src="/assets/images/logos/logo-text.svg" alt="homepage"
                                                class="dark-logo ps-2">
                                            <!-- Light Logo text -->
                                            <img src="/assets/images/logos/logo-light-text.svg"
                                                class="light-logo ps-2" alt="homepage">
                                        </span>
                                    </a>
                                </div>



                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar="" data-simplebar=""
                                style="height: calc(100vh - 80px)">
                                <ul id="sidebarnav">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)"
                                            aria-expanded="false">
                                            <span>
                                                <iconify-icon icon="solar:shield-plus-outline" class="iconify-sm">
                                                </iconify-icon>
                                            </span>
                                            <span class="hide-menu">Apps</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse first-level my-3">
                                            <li class="sidebar-item py-2">
                                                <a href="app-chat.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-chat.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                        <span class="fs-3 d-block text-secondary ">New messages
                                                            arrived</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-invoice.html" class="d-flex align-items-center ">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-invoice.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                        <span class="fs-3 d-block text-secondary ">Get latest
                                                            invoice</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-contact.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-mobile.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                        <span class="fs-3 d-block text-secondary ">2 Unsaved
                                                            Contacts</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-email.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-message-box.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                        <span class="fs-3 d-block text-secondary ">Get new emails</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="page-user-profile.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-cart.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                        <span class="fs-3 d-block text-secondary ">learn more
                                                            information</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-calendar.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-date.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                        <span class="fs-3 d-block text-secondary ">Get dates</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-contact2.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-lifebuoy.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                        <span class="fs-3 d-block text-secondary ">Add new
                                                            contact</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a href="app-notes.html" class="d-flex align-items-center">
                                                    <div
                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="/assets/images/svgs/icon-dd-application.svg" alt=""
                                                            class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                        <span class="fs-3 d-block text-secondary ">To-do and Daily
                                                            tasks</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <ul class="px-8 mt-7 mb-4">
                                                <li class="sidebar-item mb-3">
                                                    <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary"
                                                        href="page-pricing.html">Pricing Page</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary"
                                                        href="authentication-login.html">Authentication Design</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary"
                                                        href="authentication-register.html">Register Now</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary"
                                                        href="authentication-error.html">404 Error Page</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="app-notes.html">Notes
                                                        App</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary"
                                                        href="page-user-profile.html">User Application</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary"
                                                        href="page-account-settings.html">Account Settings</a>
                                                </li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link  ms-0" href="app-chat.html" aria-expanded="false">
                                            <span>
                                                <iconify-icon icon="solar:chat-unread-outline" class="iconify-sm">
                                                </iconify-icon>
                                            </span>
                                            <span class="hide-menu">Chat</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link  ms-0" href="app-calendar.html" aria-expanded="false">
                                            <span>
                                                <iconify-icon icon="solar:calendar-minimalistic-outline"
                                                    class="iconify-sm"></iconify-icon>
                                            </span>
                                            <span class="hide-menu">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link  ms-0" href="app-email.html" aria-expanded="false">
                                            <span>
                                                <iconify-icon icon="solar:inbox-unread-outline" class="iconify-sm">
                                                </iconify-icon>
                                            </span>
                                            <span class="hide-menu">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block">
                                <div class="brand-logo d-flex align-items-center justify-content-between">
                                    <a href="index.html" class="text-nowrap logo-img">
                                        <b class="">
                                            <img src="/assets/images/logos/logo-light-icon.svg" alt="homepage"
                                                class="">
                                        </b>
                                        <!--End Logo icon -->
                                        <!-- Logo text -->
                                        <span class="">
                                            <img src="/assets/images/logos/logo-light-text.svg" class=" ps-2"
                                                alt="homepage">
                                        </span>
                                    </a>
                                </div>



                            </li>

                            <li class="nav-item d-none d-lg-block search-box">
                                <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark"
                                    href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                                </a>
                            </li>

                            <li class="nav-item dropdown mega-dropdown d-none d-lg-block">
                                <a class="nav-link" id="drop2" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Mega <iconify-icon icon="solar:alt-arrow-down-outline" class=" ps-1 fs-4">
                                    </iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animate-up mt-2" aria-labelledby="drop2">
                                    <div class="mega-dropdown-menu row">
                                        <div class="col-lg-3 col-xl-2 mb-4">
                                            <h4 class="mb-3 fs-5 ">Carousel</h4>
                                            <!-- CAROUSEL -->
                                            <div id="carouselExampleControls" class="carousel slide carousel-dark"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid"
                                                            src="/assets/images/blog/blog-img1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                            src="/assets/images/blog/blog-img2.jpg"
                                                            alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                            src="/assets/images/blog/blog-img3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls"
                                                    role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls"
                                                    role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                            <!-- End CAROUSEL -->
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <h4 class="mb-3 fs-5">Accordion</h4>
                                            <!-- Accordian -->
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                            aria-controls="flush-collapseOne">
                                                            Accordion Item #1
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod
                                                            high life accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                            aria-controls="flush-collapseTwo">
                                                            Accordion Item #2
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingTwo"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod
                                                            high life accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                            aria-controls="flush-collapseThree">
                                                            Accordion Item #3
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingThree"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod
                                                            high life accusamus terry richardson ad squid.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <h4 class="mb-3 fs-5">Contact Us</h4>
                                            <!-- Contact -->
                                            <form>
                                                <div class="mb-3 form-floating">
                                                    <input type="text" class="form-control" id="exampleInputname1"
                                                        placeholder="Enter Name">
                                                    <label>Enter Name</label>
                                                </div>
                                                <div class="mb-3 form-floating">
                                                    <input type="email" class="form-control" placeholder="Enter email">
                                                    <label>Enter Email address</label>
                                                </div>
                                                <div class="mb-3 form-floating">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"
                                                        placeholder="Message"></textarea>
                                                    <label>Enter Message</label>
                                                </div>
                                                <button type="submit" class="btn px-4 rounded-pill btn-primary">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 col-xlg-4 mb-4">
                                            <h4 class="mb-3 fs-5">List style</h4>
                                            <ol class="list-group list-group-numbered px-0">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <h6 class="fw-semibold mb-0">Subheading</h6>
                                                        <div class=" d-block text-muted text-truncate text-truncate">
                                                            Content for list item</div>
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">14</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <h6 class="fw-semibold mb-0">Subheading</h6>
                                                        <div class=" d-block text-muted text-truncate text-truncate">
                                                            Content for list item</div>
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">14</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <h6 class="fw-semibold mb-0">Subheading</h6>
                                                        <div class=" d-block text-muted text-truncate text-truncate">
                                                            Content for list item</div>
                                                    </div>
                                                    <span class="badge bg-primary rounded-pill">14</span>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" id="drop2" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Apps <iconify-icon icon="solar:alt-arrow-down-outline" class=" ps-1 fs-4">
                                    </iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Chat
                                                                            Application</h6>
                                                                        <span class="fs-3 d-block text-secondary ">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-invoice.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Invoice App
                                                                        </h6>
                                                                        <span class="fs-3 d-block text-secondary">Get
                                                                            latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-mobile.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Contact
                                                                            Application</h6>
                                                                        <span class="fs-3 d-block text-secondary">2
                                                                            Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-email.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-message-box.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                        <span class="fs-3 d-block text-secondary">Get
                                                                            new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="page-user-profile.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-cart.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">User Profile
                                                                        </h6>
                                                                        <span class="fs-3 d-block text-secondary">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-calendar.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-date.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Calendar App
                                                                        </h6>
                                                                        <span class="fs-3 d-block text-secondary">Get
                                                                            dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact2.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Contact List
                                                                            Table</h6>
                                                                        <span class="fs-3 d-block text-secondary">Add
                                                                            new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-notes.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="bg-primary-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="/assets/images/svgs/icon-dd-application.svg"
                                                                            alt="" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Notes
                                                                            Application</h6>
                                                                        <span class="fs-3 d-block text-secondary">To-do
                                                                            and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center py-3">
                                                    <div class="col-8">
                                                        <a class="fw-semibold text-dark d-flex align-items-center lh-1"
                                                            href="page-faq.html"><i
                                                                class="ti ti-help fs-6 me-2"></i>Frequently Asked
                                                            Questions</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex justify-content-end pe-4">
                                                            <button class="btn btn-primary">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 ms-n4">
                                            <div class="position-relative p-7 border-start h-100">
                                                <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                                <ul class="">
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-pricing.html">Pricing Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-login.html">Authentication Design</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-register.html">Register Now</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="authentication-error.html">404 Error Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="app-notes.html">Notes App</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-user-profile.html">User Application</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                            href="page-account-settings.html">Account Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="app-chat.html">
                                    Chat
                                </a>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="app-calendar.html">
                                    Calendar
                                </a>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="app-email.html">
                                    Email
                                </a>
                            </li>

                        </ul>


                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <iconify-icon icon="solar:menu-dots-bold" class="fs-7"></iconify-icon>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <a href="javascript:void(0)"
                                    class="nav-link round p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/assets/images/svgs/icon-flag-en.svg" alt="" width="22px"
                                                height="22px">
                                        </a>
                                        <div class="dropdown-menu pt-0 dropdown-menu-end dropdown-menu-animate-up mt-n1"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-en.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">English</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-cn.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">Chinese</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-fr.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">French</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-3 py-2 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="/assets/images/svgs/icon-flag-sa.svg" alt=""
                                                            width="20px" height="20px" class="  round-20">
                                                    </div>
                                                    <p class="mb-0 fs-3">Arabic</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="solar:bell-outline"></iconify-icon>
                                            <div class="notify">
                                                <span class="heartbit"></span> <span class="point"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu  pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">

                                            <div
                                                class="d-flex border-bottom align-items-center justify-content-between py-3 px-4">
                                                <div class="mb-0 fs-4 fw-medium h6">Notifications</div>
                                            </div>
                                            <div class="message-body" data-simplebar="">
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                                                        <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Luanch Admin</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-success-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-success">
                                                        <iconify-icon icon="solar:calendar-mark-line-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Event today</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>

                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                                                        <iconify-icon icon="solar:settings-minimalistic-line-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Settings</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                                                        <iconify-icon icon="solar:link-circle-line-duotone">
                                                        </iconify-icon>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Luanch Admin</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-success-subtle rounded-circle round d-flex align-items-center justify-content-center">
                                                        <i data-feather="calendar"
                                                            class="feather-sm fill-white text-success"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Event today</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span
                                                        class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center">
                                                        <i data-feather="settings"
                                                            class="feather-sm fill-white text-primary"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0 ">Settings</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="d-flex align-items-center pt-3 pb-2 justify-content-center h6 mb-0"
                                                    href="javascript:void(0);">
                                                    <span class="">Check all notifications</span>
                                                    <i data-feather="chevron-right" class="feather-sm"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="solar:chat-line-outline"></iconify-icon>
                                            <div class="notify">
                                                <span class="heartbit"></span> <span class="point"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu message-box pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div
                                                class="d-flex border-bottom align-items-center justify-content-between py-3 px-4">
                                                <h5 class="mb-0 fs-4 fw-medium h6">You have 4 new messages</h5>
                                            </div>
                                            <div class="message-body" data-simplebar="">
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-1.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Mathew Anderson</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-2.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Bianca Anderson</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>

                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-3.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Andrew Johnson</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-4.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Mark Strokes</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:30
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just see
                                                            the my new admin!</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-5.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Mark, Stoinus & Rishvi..</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:10
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">Just a
                                                            reminder that you have event</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="p-3 pe-0 d-flex align-items-center dropdown-item gap-3 border-bottom">
                                                    <span class="user-img position-relative d-inline-block">
                                                        <img src="/assets/images/profile/user-6.jpg" alt="user"
                                                            class="rounded-circle w-100 round">
                                                        <span
                                                            class="profile-status bg-success position-absolute rounded-circle"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Settings</h6>
                                                            <span class="fs-2 text-nowrap d-block text-muted">9:08
                                                                AM</span>
                                                        </div>
                                                        <span class="fs-3 d-block text-truncate text-truncate">You can
                                                            customize this template as you want</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="d-flex align-items-center pt-3 pb-2 justify-content-center h6 mb-0"
                                                    href="javascript:void(0);">
                                                    <span>See all e-Mails</span>
                                                    <i data-feather="chevron-right" class="feather-sm"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->


                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/assets/images/profile/user-6.jpg" alt="user" width="30"
                                                class="profile-pic rounded-circle">
                                        </a>
                                        <div class="dropdown-menu message-box pt-0 content-dd mailbox dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="profile-dropdown position-relative" data-simplebar="">
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 ">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="/assets/images/profile/user-6.jpg"
                                                        class="rounded-circle" width="80" height="80" alt="">
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-4 text-secondary">Steve Jobs</h5>
                                                        <span class="mb-1 d-block text-secondary">Designer</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> info@xtreme.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="page-user-profile.html"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center bg-primary-subtle rounded-circle round p-6 fs-6 text-primary">
                                                            <iconify-icon icon="solar:user-circle-line-duotone"
                                                                class="text-primary"></iconify-icon>
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3  lh-base">My Profile</h6>
                                                            <span class="fs-3 d-block text-secondary">Account
                                                                Settings</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-email.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center bg-warning-subtle rounded-circle round p-6 fs-6 text-primary">
                                                            <iconify-icon icon="solar:inbox-line-line-duotone"
                                                                class="text-warning"></iconify-icon>
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3  lh-base">My Inbox</h6>
                                                            <span class="fs-3 d-block text-secondary ">Messages &
                                                                Emails</span>
                                                        </div>
                                                    </a>
                                                    <a href="app-notes.html"
                                                        class="py-8 px-7 d-flex align-items-center">
                                                        <span
                                                            class="d-flex align-items-center justify-content-center bg-success-subtle rounded-circle round p-6 fs-6 text-primary">
                                                            <iconify-icon
                                                                icon="solar:checklist-minimalistic-line-duotone"
                                                                class="text-success "></iconify-icon>
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3  lh-base">My Task</h6>
                                                            <span class="fs-3 d-block text-secondary">To-do and Daily
                                                                Tasks</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <a href="authentication-login.html" class="btn btn-primary">Log
                                                        Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!--  Header End -->

            <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav scroll-sidebar container-fluid">
                        <ul id="sidebarnav">
                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:screencast-2-outline" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="index.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Classic</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Analytical</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index3.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Cryptocurrency</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index4.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Overview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index5.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">E-Commerce</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index6.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Sales</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index7.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">General</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index8.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Trendy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index9.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Campaign</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index10.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Modern</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <!-- =================== -->
                            <!-- Apps -->
                            <!-- =================== -->
                            <li class="sidebar-item ">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:archive-broken" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-calendar.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-kanban.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-chat.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Chat Apps</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-email.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Email</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-notes.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Notes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-contact.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Contact Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-contact2.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Contact List</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="app-invoice.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="page-user-profile.html"
                                            aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">User Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="blog-posts.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Posts </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="blog-detail.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Details </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-shop.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Shop </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-shop-detail.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Details </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-product-list.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> List </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="eco-checkout.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Checkout </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- =================== -->
                            <!-- Pages -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:programming-outline" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Pages</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="page-pricing.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="page-faq.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sublink" href="page-account-settings.html"
                                            aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Account Settings</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link sidebar-link" href="../landingpage/index.html"
                                            aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Landing Page</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-cards.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Cards </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-charts.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Charts </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-banners.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Banner </span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="widgets-feeds.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Feed Widgets </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-apps.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Apps Widgets </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="widgets-data.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu"> Data Widgets </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <!-- =================== -->
                            <!-- UI -->
                            <!-- =================== -->
                            <li class="sidebar-item mega-dropdown">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:text-underline-cross-line-duotone" class="fs-6">
                                        </iconify-icon>
                                    </span>
                                    <span class="hide-menu">Ui</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="ui-accordian.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Accordian</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-badge.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Badge</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-buttons.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-dropdowns.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-modals.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-tab.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Tab</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-tooltip-popover.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Tooltip & Popover</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-notification.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Notification</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-progressbar.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Progressbar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-pagination.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-typography.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Typography</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-bootstrap-ui.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bootstrap UI</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-breadcrumb.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-offcanvas.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-lists.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Lists</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-grid.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-carousel.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-scrollspy.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-spinner.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Spinner</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="ui-link.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Link</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <!-- =================== -->
                            <!-- Forms -->
                            <!-- =================== -->
                            <li class="sidebar-item mega-dropdown">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:book-2-line-duotone" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Forms</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="form-inputs.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Forms Input</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-input-groups.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Input Groups</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-input-grid.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Input Grid</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-checkbox-radio.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Checkbox & Radios</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-bootstrap-touchspin.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bootstrap Touchspin</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-bootstrap-switch.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bootstrap Switch</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-select2.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Select2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-dual-listbox.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Dual Listbox</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-paginator.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Paginator</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-img-cropper.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Image Cropper</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-dropzone.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Dropzone</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-mask.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Mask</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-typeahead.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Typehead</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-bootstrap-validation.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bootstrap Validation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-custom-validation.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Custom Validation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-picker-colorpicker.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Colorpicker</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-picker-datetimepicker.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Datetimepicker</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bootstrap Rangepicker</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bootstrap Datepicker</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="form-picker-material-datepicker.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Material Datepicker</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-basic.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Basic Form</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-vertical.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Vertical</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-horizontal.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Horizontal</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-actions.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Actions</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-row-separator.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Row Separator</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-bordered.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Bordered</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-detail.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Detail</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-striped-row.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Striped Rows</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-floating-input.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Floating Input</span>
                                        </a>
                                    </li>
                                    <!-- ---------------------------------- -->
                                    <!-- Form Wizard -->
                                    <!-- ---------------------------------- -->
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-wizard.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Wizard</span>
                                        </a>
                                    </li>
                                    <!-- ---------------------------------- -->
                                    <!-- Form Repeater -->
                                    <!-- ---------------------------------- -->
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="form-repeater.html" aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Form Repeater</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- =================== -->
                            <!-- Tables -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:sidebar-minimalistic-line-duotone" class="fs-6">
                                        </iconify-icon>
                                    </span>
                                    <span class="hide-menu">Tables</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="table-basic.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Basic Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-dark-basic.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Dark Basic Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-sizing.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Sizing Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item ">
                                        <a href="table-layout-coloured.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Coloured Table</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-datatable-basic.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Basic Initialisation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-datatable-api.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">API</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="table-datatable-advanced.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Advanced Initialisation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- =================== -->
                            <!-- Charts -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:pie-chart-3-outline" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Charts</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="chart-apex-line.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Line Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-area.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Area Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-bar.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Bar Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-pie.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Pie Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-radial.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Radial Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="chart-apex-radar.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Radar Chart</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item ">
                                        <a class="sidebar-link sublink" href="chart-sparkline.html"
                                            aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Sparkline Chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- =================== -->
                            <!-- Tabler Icon -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:pie-chart-3-outline" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Icon</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="icon-tabler.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Tabler Icon</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="icon-solar.html" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Solar Icon</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- =================== -->
                            <!-- Tabler Icon -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span class="d-flex">
                                        <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6">
                                        </iconify-icon>
                                    </span>
                                    <span class="hide-menu">Multi level dd</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div><span class="hide-menu">
                                                Item 1.1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div><span class="hide-menu">
                                                Item 1.2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                            aria-expanded="false">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div>
                                            <span class="hide-menu">Menu 1.3</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse second-level">
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link sublink">
                                                    <div
                                                        class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="sidebar-icon"></i>
                                                    </div><span class="hide-menu">
                                                        Item 1.3.1</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link sublink">
                                                    <div
                                                        class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="sidebar-icon"></i>
                                                    </div><span class="hide-menu">
                                                        Item 1.3.2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link sublink">
                                                    <div
                                                        class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="sidebar-icon"></i>
                                                    </div><span class="hide-menu">
                                                        Item 1.3.3</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link sublink">
                                                    <div
                                                        class="round-16 d-flex align-items-center justify-content-center">
                                                        <i class="sidebar-icon"></i>
                                                    </div><span class="hide-menu">
                                                        Item 1.3.4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link sublink">
                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                <i class="sidebar-icon"></i>
                                            </div><span class="hide-menu">
                                                Item 1.4</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>

            </aside>

            <div class="body-wrapper">
                <div class="container-fluid">
                    <!-- -------------------------------------------------------------- -->
                    <!-- Breadcrumb -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
                        <div class="card-body px-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="font-weight-medium ">Dashboard 7</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-primary text-decoration-none" href="index.html">Home
                                                </a>
                                            </li>
                                            <li
                                                class="breadcrumb-item d-flex justify-content-center align-items-center ps-0">
                                                <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Dashboard 7</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div>
                                    <div class="d-flex no-block justify-content-end align-items-center">
                                        <div class="me-2">
                                            <div class="breadbar"></div>
                                        </div>
                                        <div class="">
                                            <small>LAST MONTH</small>
                                            <h4 class="text-primary mb-0 font-medium">$58,256</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------------------------------------------- -->
                    <!-- Breadcrumb End -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Overview, Visits, Sales, Order -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-sm-12 col-lg-6">
                            <div class="card w-100 overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <h1 class="fw-bold mb-0">$6,890.68</h1>
                                            <span>Overview of email campaigns</span>
                                        </div>
                                        <div class="ms-auto">
                                            <iconify-icon icon="solar:wallet-linear" class="text-primary display-5">
                                            </iconify-icon>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non pharetra
                                        ligula, sit amet laoreet arcu.Integer.
                                    </p>
                                    <a href="javascript: void(0)" class="fw-bold">Last Month Summary</a>
                                </div>
                                <div class="mt-5">
                                    <div class="overview-campaign "></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-sm-12 col-lg-6">
                            <div class="row">
                                <!-- column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h4 class="card-title">Total Visits</h4>
                                            <h4 class="fw-bold mt-3 mb-2">3,25,346</h4>
                                            <h5 class="card-subtitle mb-0">Total Earnings of the Month</h5>
                                        </div>
                                        <div class="text-center mt-2">
                                            <div class="total-visits mx-auto" style="max-width: 250px"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Sales Ratio</h4>
                                            <h4 class="fw-bold mt-3 mb-2">35,658</h4>
                                            <h5 class="card-subtitle mb-0">Total Earnings of the Month</h5>
                                        </div>
                                        <div class="sales-ratio mt-2"></div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-sm-12">
                                    <div class="card order-widget w-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- column -->
                                                <div class="col-sm-12 col-md-8">
                                                    <h4 class="card-title">Order Status</h4>
                                                    <h5 class="card-subtitle mb-0">Total Earnings of the Month</h5>
                                                    <div class="row mt-5">
                                                        <div class="col-4 border-end">
                                                            <iconify-icon icon="ri-checkbox-blank-circle-fill"
                                                                class="fs-4 text-cyan"></iconify-icon>
                                                            <h3 class="mb-0 font-medium">5489</h3>
                                                            <span>Success</span>
                                                        </div>
                                                        <div class="col-4 border-end">
                                                            <iconify-icon icon="ri-checkbox-blank-circle-fill"
                                                                class="fs-4 text-orange"></iconify-icon>
                                                            <h3 class="mb-0 font-medium">954</h3>
                                                            <span>Pending</span>
                                                        </div>
                                                        <div class="col-4">
                                                            <iconify-icon icon="ri-checkbox-blank-circle-fill"
                                                                class="fs-4 text-info"></iconify-icon>
                                                            <h3 class="mb-0 font-medium">736</h3>
                                                            <span>Failed</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- column -->
                                                <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                                                    <div class="order-status mt-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Ravenue - page-view-bounce rate -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="card overflow-hidden w-100">
                                <div class="card-body bg-info">
                                    <h4 class="card-title text-white">Revenue Statistics</h4>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="revenue"></div>
                                        <div class="ms-auto">
                                            <h2 class="text-white mb-0">
                                                <iconify-icon icon="solar:arrow-up-outline"></iconify-icon>$351
                                            </h2>
                                            <span class="text-white op-5">Jan 10 - Jan 20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="card overflow-hidden w-100">
                                <div class="bg-cyan">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="card-title text-white">Page Views</h4>
                                                <h2 class="text-white mb-0">
                                                    <iconify-icon icon="solar:arrow-up-outline"></iconify-icon> 6548
                                                </h2>
                                            </div>
                                            <div class="ms-auto">
                                                <ul class="list-style-none mb-0">
                                                    <li class="text-white">
                                                        <iconify-icon icon="ri:checkbox-blank-circle-fill" class="
                                                        me-1
                                                        fs-4
                                                        text-white
                                                        opacity-50
                                                        fs-2
                                                        align-middle
                                                      "></iconify-icon>
                                                        Visit
                                                    </li>
                                                    <li class="text-white">
                                                        <iconify-icon icon="ri:checkbox-blank-circle-fill" class="
                                                        me-1
                                                        fs-4
                                                        text-white
                                                        fs-2
                                                        align-middle
                                                      "></iconify-icon>
                                                        Page Views
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 page-views pt-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="card w-100">
                                <div class="card-body">
                                    <h2 class="mb-0">56.33%</h2>
                                    <span class="">Bounce Rate</span>
                                    <div class="d-flex align-items-center mt-4 pt-2">
                                        <div class="dl">
                                            <select class="form-select">
                                                <option value="0" selected="">March</option>
                                                <option value="1">April</option>
                                                <option value="2">May</option>
                                                <option value="3">June</option>
                                            </select>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="bounce-rate"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Projects of the month -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Table -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ---------------------
                                          start Projects of the Month
                                      ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Projects of the Month</h4>
                                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                                        </div>
                                        <div class="ms-auto d-flex no-block align-items-center">
                                            <div class="dl">
                                                <select class="form-select">
                                                    <option value="0" selected="">Monthly</option>
                                                    <option value="1">Daily</option>
                                                    <option value="2">Weekly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table no-wrap v-middle">
                                            <thead>
                                                <!-- start row -->
                                                <tr class="border-0">
                                                    <th class="border-0">Team Lead</th>
                                                    <th class="border-0">Project</th>
                                                    <th class="border-0">Team</th>
                                                    <th class="border-0">Status</th>
                                                    <th class="border-0">Weeks</th>
                                                    <th class="border-0">Budget</th>
                                                </tr>
                                                <!-- end row -->
                                            </thead>
                                            <tbody>
                                                <!-- start row -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3">
                                                                <img src="/assets/images/profile/user-1.jpg"
                                                                    alt="user" class="rounded-circle" width="45">
                                                            </div>
                                                            <div class="">
                                                                <h6 class="mb-0 ">Hanna Gover</h6>
                                                                <span class="text-muted">hgover@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Elite Admin</td>
                                                    <td>
                                                        <div class="popover-icon">
                                                            <a class="btn-circle btn btn-info"
                                                                href="javascript:void(0)">SS</a>
                                                            <a class="btn-circle btn btn-cyan text-white popover-item"
                                                                href="javascript:void(0)">DS</a>
                                                            <a class="btn-circle btn p-0 popover-item"
                                                                href="javascript:void(0)"><img
                                                                    src="/assets/images/profile/user-2.jpg"
                                                                    class="rounded-circle" width="39" alt=""></a>
                                                            <a class="btn-circle btn btn-outline-secondary"
                                                                href="javascript:void(0)">+</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <iconify-icon icon="ri:circle-fill" class="text-orange fs-4"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="In Progress"></iconify-icon>
                                                    </td>
                                                    <td>35</td>
                                                    <td class="">$96K</td>
                                                </tr>
                                                <!-- end row -->
                                                <!-- start row -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3">
                                                                <img src="/assets/images/profile/user-2.jpg"
                                                                    alt="user" class="rounded-circle" width="45">
                                                            </div>
                                                            <div class="">
                                                                <h6 class="mb-0 ">Daniel Kristeen</h6>
                                                                <span class="text-muted">Kristeen@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Real Homes</td>
                                                    <td>
                                                        <div class="popover-icon">
                                                            <a class="btn-circle btn btn-info"
                                                                href="javascript:void(0)">SS</a>
                                                            <a class="btn-circle btn btn-primary text-white popover-item"
                                                                href="javascript:void(0)">DS</a>
                                                            <a class="btn-circle btn btn-outline-secondary"
                                                                href="javascript:void(0)">+</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <iconify-icon icon="ri:circle-fill" class="text-success fs-4"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Active"></iconify-icon>
                                                    </td>
                                                    <td>35</td>
                                                    <td class="">$96K</td>
                                                </tr>
                                                <!-- end row -->
                                                <!-- start row -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3">
                                                                <img src="/assets/images/profile/user-3.jpg"
                                                                    alt="user" class="rounded-circle" width="45">
                                                            </div>
                                                            <div class="">
                                                                <h6 class="mb-0 ">Julian Josephs</h6>
                                                                <span class="text-muted">Josephs@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MedicalPro Theme</td>
                                                    <td>
                                                        <div class="popover-icon">
                                                            <a class="btn-circle btn btn-info"
                                                                href="javascript:void(0)">SS</a>
                                                            <a class="btn-circle btn btn-cyan text-white popover-item"
                                                                href="javascript:void(0)">DS</a>
                                                            <a class="btn-circle btn btn-orange text-white popover-item"
                                                                href="javascript:void(0)">RP</a>
                                                            <a class="btn-circle btn btn-outline-secondary"
                                                                href="javascript:void(0)">+</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <iconify-icon icon="ri:circle-fill" class="text-success fs-4"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Active"></iconify-icon>
                                                    </td>
                                                    <td>35</td>
                                                    <td class="">$96K</td>
                                                </tr>
                                                <!-- end row -->
                                                <!-- start row -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3">
                                                                <img src="/assets/images/profile/user-4.jpg"
                                                                    alt="user" class="rounded-circle" width="45">
                                                            </div>
                                                            <div class="">
                                                                <h6 class="mb-0 ">Jan Petrovic</h6>
                                                                <span class="text-muted">hgover@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">MedicalPro Theme</td>
                                                    <td>
                                                        <div class="popover-icon">
                                                            <a class="btn-circle btn btn-orange text-white"
                                                                href="javascript:void(0)">RP</a>
                                                            <a class="btn-circle btn btn-outline-secondary"
                                                                href="javascript:void(0)">+</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <iconify-icon icon="ri:circle-fill" class="text-orange fs-4"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="In Progress"></iconify-icon>
                                                    </td>
                                                    <td>35</td>
                                                    <td class="">$96K</td>
                                                </tr>
                                                <!-- end row -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------
                                          end Projects of the Month
                                      ---------------- -->
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Table -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Recent comment and chats -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-6">
                            <!-- ---------------------
                                            start Recent Comments
                                        ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Comments</h4>
                                </div>
                                <div class="comment-widgets scrollable" style="height: 530px;" data-simplebar="">
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row mt-0">
                                        <div class="px-2 py-0 ">
                                            <img src="/assets/images/profile/user-5.jpg" alt="user" width="45"
                                                class="rounded-circle">
                                        </div>
                                        <div class="comment-text w-100">
                                            <h6 class="fw-medium mb-1">James Anderson</h6>
                                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                                and type setting
                                                industry.
                                            </span>
                                            <div class="comment-footer d-md-flex align-items-center">
                                                <span class="badge bg-primary rounded-pill">Pending</span>
                                                <span class="action-icons d-flex">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:check-square-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:heart-linear"
                                                            class="iconify-sm text-danger"></iconify-icon>
                                                    </a>
                                                </span>
                                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="px-2 py-0">
                                            <img src="/assets/images/profile/user-6.jpg" alt="user" width="45"
                                                class="rounded-circle">
                                        </div>
                                        <div class="comment-text active w-100">
                                            <h6 class="fw-medium mb-1">Michael Jorden</h6>
                                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                                and type setting
                                                industry.
                                            </span>
                                            <div class="comment-footer d-md-flex align-items-center">
                                                <span class="badge bg-success rounded-pill">Approved</span>
                                                <span class="action-icons d-flex">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:close-square-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:heart-linear"
                                                            class="iconify-sm text-danger"></iconify-icon>
                                                    </a>
                                                </span>
                                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="px-2 py-0">
                                            <img src="/assets/images/profile/user-1.jpg" alt="user" width="45"
                                                class="rounded-circle">
                                        </div>
                                        <div class="comment-text w-100">
                                            <h6 class="fw-medium mb-1">Johnathan Doeting</h6>
                                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                                and type setting
                                                industry.
                                            </span>
                                            <div class="comment-footer d-md-flex align-items-center">
                                                <span class="badge rounded-pill bg-danger">Rejected</span>
                                                <span class="action-icons d-flex">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:check-square-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:heart-linear"
                                                            class="iconify-sm text-danger"></iconify-icon>
                                                    </a>
                                                </span>
                                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="px-2 py-0">
                                            <img src="/assets/images/profile/user-2.jpg" alt="user" width="45"
                                                class="rounded-circle">
                                        </div>
                                        <div class="comment-text w-100">
                                            <h6 class="fw-medium mb-1">James Anderson</h6>
                                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                                and type setting
                                                industry.
                                            </span>
                                            <div class="comment-footer d-md-flex align-items-center">
                                                <span class="badge rounded-pill bg-primary">Pending</span>
                                                <span class="action-icons d-flex">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:check-square-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:heart-linear"
                                                            class="iconify-sm text-danger"></iconify-icon>
                                                    </a>
                                                </span>
                                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row">
                                        <div class="px-2 py-0">
                                            <img src="/assets/images/profile/user-4.jpg" alt="user" width="45"
                                                class="rounded-circle">
                                        </div>
                                        <div class="comment-text active w-100">
                                            <h6 class="fw-medium mb-1">Michael Jorden</h6>
                                            <span class="mb-2 d-block">Lorem Ipsum is simply dummy text of the printing
                                                and type setting
                                                industry.
                                            </span>
                                            <div class="comment-footer d-md-flex align-items-center">
                                                <span class="badge bg-success rounded-pill">Approved</span>
                                                <span class="action-icons d-flex">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:gallery-edit-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:close-square-line-duotone"
                                                            class="iconify-sm"></iconify-icon>
                                                    </a>
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <iconify-icon icon="solar:heart-linear"
                                                            class="iconify-sm text-danger"></iconify-icon>
                                                    </a>
                                                </span>
                                                <div class="text-muted ms-auto mt-2 mt-md-0">April 14, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Row -->
                                </div>
                            </div>
                            <!-- ---------------------
                                            end Recent Comments
                                        ---------------- -->
                        </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <!-- ---------------------
                                          start Recent Chats
                                      ---------------- -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Chats</h4>
                                    <div class="chat-box scrollable position-relative w-100" style="height: 450px;"
                                        data-simplebar="">
                                        <!--chat Row -->
                                        <ul class="chat-list">
                                            <!--chat Row -->
                                            <li class="chat-item">
                                                <div class="chat-img">
                                                    <img src="/assets/images/profile/user-3.jpg" alt="user">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="fw-medium">James Anderson</h6>
                                                    <div class="box bg-secondary-subtle rounded">
                                                        Lorem Ipsum is simply dummy text of the printing &amp; type
                                                        setting
                                                        industry.
                                                    </div>
                                                </div>
                                                <div class="chat-time">10:56 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="chat-item">
                                                <div class="chat-img">
                                                    <img src="/assets/images/profile/user-2.jpg" alt="user">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="fw-medium">Bianca Doe</h6>
                                                    <div class="box bg-secondary-subtle">It’s Great opportunity to work.
                                                    </div>
                                                </div>
                                                <div class="chat-time">10:57 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="odd chat-item">
                                                <div class="chat-content">
                                                    <div class="box bg-info rounded">I would love to join the team.
                                                    </div>
                                                    <br>
                                                </div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="odd chat-item">
                                                <div class="chat-content">
                                                    <div class="box bg-info rounded">Whats budget of the new project.
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="chat-time">10:59 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="chat-item">
                                                <div class="chat-img">
                                                    <img src="/assets/images/profile/user-5.jpg" alt="user">
                                                </div>
                                                <div class="chat-content">
                                                    <h6 class="fw-medium">Angelina Rhodes</h6>
                                                    <div class="box bg-secondary-subtle rounded">Well we have good
                                                        budget for the project</div>
                                                </div>
                                                <div class="chat-time">11:00 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <!-- <div id="someDiv"></div> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="input-field mt-0 mb-0">
                                                <input type="text" id="textarea1" placeholder="Type and enter"
                                                    class="form-control border-0">
                                            </div>
                                        </div>
                                        <div class="col-3 d-flex justify-content-end">
                                            <a class="btn-circle btn-lg btn-primary btn text-white"
                                                href="javascript:void(0)">
                                                <iconify-icon icon="solar:plain-3-line-duotone"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------
                          end Recent Chats
                          ---------------- -->
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Recent comment and chats -->
                    <!-- -------------------------------------------------------------- -->
                </div>
                <!----Footer--->
                <footer class="footer text-center py-3">
                    All Rights Reserved by Xtreme admin. Designed and Developed by
                    <a class="text-primary" href="https://www.wrappixel.com">WrapPixel</a>.
                </footer>
                <!----Footer End--->
            </div>
            <script>
                function handleColorTheme(e) {
                    $("html").attr("data-color-theme", e);
                    $(e).prop("checked", !0);
                }

            </script>
            <button
                class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="icon ti ti-settings fs-7 text-white"></i>
            </button>

            <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                    <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                        Settings
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" data-simplebar="" style="height: calc(100vh - 80px)">
                    <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary " for="light-layout">
                            <iconify-icon icon="solar:sun-2-outline" class="icon fs-7 me-2"></iconify-icon>Light
                        </label>
                        <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="dark-layout">
                            <iconify-icon icon="solar:moon-outline" class="icon fs-7 me-2"></iconify-icon>Dark
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                            <iconify-icon icon="solar:align-left-linear" class="icon fs-7 me-2"></iconify-icon>LTR
                        </label>

                        <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                            <iconify-icon icon="solar:align-right-linear" class="icon fs-7 me-2"></iconify-icon>RTL
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                    <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                        <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="BLUE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="AQUA_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="PURPLE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="GREEN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="CYAN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                                <iconify-icon icon="solar:slider-vertical-minimalistic-linear" class="icon fs-7 me-2">
                                </iconify-icon>Vertical
                            </label>
                        </div>
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                                <iconify-icon icon="solar:slider-minimalistic-horizontal-outline"
                                    class="icon fs-7 me-2"></iconify-icon>
                                Horizontal
                            </label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                            <iconify-icon icon="solar:cardholder-linear" class="icon fs-7 me-2"></iconify-icon>
                            Boxed
                        </label>

                        <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="full-layout">
                            <iconify-icon icon="solar:scanner-linear" class="icon fs-7 me-2"></iconify-icon> Full
                        </label>
                    </div>

                    <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <a href="javascript:void(0)" class="fullsidebar">
                            <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                                <iconify-icon icon="solar:sidebar-minimalistic-outline" class="icon fs-7 me-2">
                                </iconify-icon> Full
                            </label>
                        </a>
                        <div>
                            <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar"
                                autocomplete="off">
                            <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                                <iconify-icon icon="solar:siderbar-outline" class="icon fs-7 me-2"></iconify-icon>
                                Collapse
                            </label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="card-with-border">
                            <iconify-icon icon="solar:library-broken" class="icon fs-7 me-2"></iconify-icon>Border
                        </label>

                        <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                            autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="card-without-border">
                            <iconify-icon icon="solar:box-outline" class="icon fs-7 me-2"></iconify-icon>Shadow
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!--  Search Bar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-1">
                    <div class="modal-header border-bottom">
                        <input type="search" class="form-control fs-3" placeholder="Search here" id="search">
                        <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                            <i class="ti ti-x fs-5 ms-3"></i>
                        </a>
                    </div>
                    <div class="modal-body message-body" data-simplebar="">
                        <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                        <ul class="list mb-0 py-2">
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Modern</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Dashboard</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Contacts</span>
                                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Posts</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Detail</span>
                                    <span
                                        class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Shop</span>
                                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Modern</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Dashboard</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Contacts</span>
                                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Posts</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Detail</span>
                                    <span
                                        class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  fw-normal d-block">Shop</span>
                                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/app.init.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/js/sidebarmenu.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/breadcrumb/breadcrumbChart.js"></script>
    <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>

    <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/js/dashboards/dashboard7.js"></script>
</body>

</html>
