<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="light"
    data-color-theme="Blue_Theme" data-layout="vertical" data-boxed-layout="boxed" data-card="shadow">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'Trang chủ')) - {{ COMPANY_NAME }}</title>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}">
 
    <!-- Core Css -->
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    @yield('style')
</head>

<body data-sidebartype="full">
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid">
    </div>

    <div id="main-wrapper">
        @include('partial.aside-vertical')
        <div class="page-wrapper">
            @include('partial.header')

            @include('partial.aside-horizontal')

            <div class="body-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
                @include('partial.footer')
            </div>
            @include('partial.setting')
        </div>
    </div>

    @yield('modal')

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
    <script src="/assets/js/sweetalert2.js"></script>
    <script src="/js/library.js"></script>
    {{-- <script src="/assets/js/breadcrumb/breadcrumbChart.js"></script> --}}
    {{-- <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script> --}}

    <!-- Notification -->
    @include('partial.notification')

    <!-- Import Js Files By Page -->
    @yield('script')
</body>

</html>
