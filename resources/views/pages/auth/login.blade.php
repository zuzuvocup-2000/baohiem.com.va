<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>{{ __('login.login_title') }}</title>
</head>

<body>
    <div class="preloader">
        <img src="/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-3">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <b class="logo-icon">
                                <img src="/assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo">
                                <img src="/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo">
                            </b>
                            <span class="logo-text">
                                <img src="/assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2">
                                <img src="/assets/images/logos/logo-light-text.svg" class="light-logo ps-2"
                                    alt="homepage">
                            </span>
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/assets/images/background/login-security.svg" alt="" class="img-fluid"
                                width="600">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="auth-max-width col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-1 fs-7 fw-bolder">{{ __('login.welcome') }}</h2>
                                <p class=" mb-4">{{ __('login.system_name') }}</p>
                                <form action="/" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">{{ __('login.username') }}</label>
                                        <input type="email" class="form-control" name="username" id="emailInput">
                                    </div>
                                    <div class="mb-4">
                                        <label for="passwordInput" class="form-label">{{ __('login.password') }}</label>
                                        <input type="password" class="form-control" name="password" id="passwordInput">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                name="remember" id="flexCheckChecked" checked="">
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                {{ __('login.remember_password') }}
                                            </label>
                                        </div>
                                        <a class="text-primary fw-medium"
                                            href="{{ route('password.request') }}">{{ __('login.forgot_password') }}</a>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary w-100 py-8 mb-4 rounded-2">{{ __('login.login_button') }}</button>
                                </form>
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
