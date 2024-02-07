<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png">

    <!-- Core Css -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <title>{{ __('forgot_password.title') }}</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-3">
                <div class="row">
                    <div class="col-lg-6 col-xl-8">
                        <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
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
                        <div class="d-none d-lg-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/assets/images/background/login-security.svg" alt="" class="img-fluid"
                                width="600">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                            <div class="auth-max-width mx-auto d-flex align-items-center w-100 h-100">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h2 class="fw-bolder fs-7 mb-3">{{ __('forgot_password.title') }}</h2>
                                        <p class="mb-0 ">{{ __('forgot_password.instructions') }}</p>
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label for="emailInput"
                                                class="form-label">{{ __('forgot_password.email') }}</label>
                                            <input type="email" class="form-control" id="emailInput"
                                                aria-describedby="emailHelp" name="email">
                                        </div>
                                        <a href="javascript:void(0)"
                                            class="btn btn-primary w-100 py-8 mb-3">{{ __('forgot_password.forgot_password_button') }}</a>
                                        <a href="{{ route('login') }}"
                                            class="btn bg-primary-subtle text-primary w-100 py-8">{{ __('forgot_password.back_to_login_button') }}</a>
                                    </form>
                                </div>
                            </div>
                        </div>
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

</body>

</html>
