<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="light"
    data-color-theme="Blue_Theme" data-layout="vertical" data-boxed-layout="boxed" data-card="shadow">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/logos/favicon.png') }}">

    <!-- Core Css -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <title>@yield('title', config('app.name', 'Trang chủ')) - {{ COMPANY_NAME }}</title>
</head>

<body data-sidebartype="full">
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid">
    </div>

    <div id="main-wrapper">
        <!-- Sidebar Start -->
        @include('partial.aside-vertical')
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            @include('partial.header')
            <!--  Header End -->

            @include('partial.aside-horizontal')

            <div class="body-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!----Footer--->
                @include('partial.footer')
                <!----Footer End--->
            </div>
            @include('partial.setting')
        </div>
    </div>

    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    @include('partial.script')

    <!-- Import Js Files By Page -->
    @yield('script')
</body>

</html>
