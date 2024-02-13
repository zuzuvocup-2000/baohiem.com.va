<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>{{ __('login.login_title') }}</title>
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/logo-icon.svg') }}" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div class="limiter">
        <div class="container-login100 container-login-admin">
            <div id="particles-line"></div>
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" action="{{ route('login.post') }}"
                    method="post">
                    @csrf
                    <span class="login100-form-title ">
                        {{ __('login.system_name') }}
                    </span>
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            {{ __('login.username') }}
                        </span>
                        <span class="form-bar text-danger ">*</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input type="text" name="username"
                            class="input100  username-user {{ $errors->has('username') ? 'input-danger' : '' }}"
                            value="{{ old('username') }}" placeholder="{{ __('login.username') }}" />
                        <span class="focus-input100"></span>
                    </div>
                    @error('username')
                        <div class="text-danger w-100">{{ $message }}</div>
                    @enderror
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            {{ __('login.password') }}
                        </span>
                        <span class="form-bar text-danger ">*</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input type="password" name="password" autocomplete="off"
                            class="input100 {{ $errors->has('password') ? 'input-danger' : '' }} password-user"
                            placeholder="{{ __('login.password') }}" />
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                        <div class="text-danger w-100">{{ $message }}</div>
                    @enderror
                    <div class="container-login100-form-btn my-4 d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input primary" type="checkbox" value="" name="remember"
                                id="flexCheckChecked" checked="">
                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                {{ __('login.remember_password') }}
                            </label>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('password.request') }}"
                                title="">{{ __('login.forgot_password') }}</a>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn mb-sm-2" type="submit">
                            {{ __('login.login_button') }}
                        </button>
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
