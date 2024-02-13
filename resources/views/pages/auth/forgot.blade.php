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
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/styles.css">

    <title>{{ __('forgot_password.title') }}</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid">
    </div>

    <div class="limiter">
        <div class="container-login100 container-login-admin">
            <div id="particles-line"></div>
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" action="" method="post">
                    <span class="login100-form-title mb-3">
                    {{ __('forgot_password.title') }}
                    </span>
                    <p class="mb-0 ">{{ __('forgot_password.instructions') }}</p>
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                        {{ __('login.username') }}
                        </span>
                        <span class="form-bar text-danger "></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input type="text" name="email" class="input100" required="" value="" placeholder="{{ __('login.username') }} " />
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit">
                        {{ __('forgot_password.forgot_password_button') }}
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            {{ __('forgot_password.have_account')}}
                        </span>

                        <a href="{{ route('login') }}" class="txt2 bo1">
                        {{ __('forgot_password.back_to_login_button') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/particles.min.js"></script>
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
