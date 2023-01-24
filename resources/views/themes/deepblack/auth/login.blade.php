{{-- @extends($theme.'layouts.app')
@section('title', __('Login'))

@section('content')

    <!-- login -->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="box mb-4">
                            <h4 class="golden-text">@lang('your email')</h4>
                            <div class="input-group">
                                <div class="img">
                                    <img src="{{asset($themeTrue.'img/icon/email2.png')}}" alt="@lang('email img')" />
                                </div>
                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    placeholder="@lang('Email')"
                                />
                            </div>
                            @error('username')<span class="text-danger float-left">@lang($message)</span>@enderror
                            @error('email')<span class="text-danger float-left">@lang($message)</span>@enderror
                        </div>

                        <div class="box mb-4">
                            <h4 class="golden-text">
                                @lang('Your password')
                                <a href="{{ route('password.request') }}" class="golden-text"
                                >@lang('Forget password?')</a>
                            </h4>
                            <div class="input-group">
                                <div class="img">
                                    <img src="{{asset($themeTrue.'img/icon/padlock.png')}}" alt="@lang('password img')" />
                                </div>
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="@lang('Password')"
                                />
                            </div>
                            @error('password')
                                <span class="text-danger mt-1">@lang($message)</span>
                            @enderror
                        </div>


                        @if (basicControl()->reCaptcha_status_login)
                            <div class="box mb-4 form-group">
                                {!! NoCaptcha::renderJs(session()->get('trans')) !!}
                                {!! NoCaptcha::display($basic->theme == 'deepblack' ? ['data-theme' => 'dark'] : []) !!}
                                @error('g-recaptcha-response')
                                    <span class="text-danger mt-1">@lang($message)</span>
                                @enderror
                            </div>
                        @endif

                        <div class="mb-4 bottom">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                    id="flexCheckDefault"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexCheckDefault"
                                >
                                    @lang('Remember me')
                                </label>
                            </div>
                            <span class="text-end">
                                <p>
                                @lang('New User?')
                                <a href="{{ route('register') }}" class="golden-text">@lang('Register')</a>
                                </p>
                            </span>
                        </div>
                        <button class="gold-btn-block" type="submit">@lang('Sign in')</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}

<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Properties -->
    <title>Infinity | Signin</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/css/vendors/uikit.min.css') }}" as="script">
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/css/style.css') }}" as="script">
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/fonts/fa-brands-400.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/fonts/fa-solid-900.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/fonts/lato-v16-latin-700.woff2') }}"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/fonts/lato-v16-latin-regular.woff2') }}"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset($themeTrue . 'public/home/assets/fonts/montserrat-v14-latin-600.woff2') }}"
        as="font" type="font/woff2" crossorigin>
    <link rel="shortcut icon" href="{{ asset($themeTrue . 'public/home/assets/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset($themeTrue . 'public/home/assets/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset($themeTrue . 'public/home/assets/css/style.css') }}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{ asset($themeTrue . 'public/home/assets/img/in-signin-image.jpg') }});">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="{{route('home')}}">
                                        <img class="in-offset-top-10"
                                            src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/infinityfx.png') }}"
                                            alt="logo" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account
                                    </p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an
                                        account? <a href="{{ route('register') }} ">Register here</a></p>
                                    <!-- login form begin -->
                                    <form action="{{ route('login') }}" method="post" class="uk-grid uk-form">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="username" value=""
                                                type="text" placeholder="Email or username">
                                        </div>
                                        @error('username')
                                            <span class="uk-text-danger float-left">@lang($message)</span>
                                        @enderror
                                        @error('email')
                                            <span class="uk-text-danger float-left">@lang($message)</span>
                                        @enderror
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="password" value=""
                                                type="password" placeholder="Password">
                                        </div>
                                        @error('password')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label><input class="uk-checkbox uk-border-rounded"
                                                    {{ old('remember') ? 'checked' : '' }} name="remember"
                                                    type="checkbox">

                                                Remember me</label>
                                        </div>
                                        <div class="uk-margin-small uk-width-expand uk-text-small">
                                            <label class="uk-align-right"><a class="uk-link-reset" href="{{route('password.request')}} ">Forgot
                                                    password?</a></label>
                                        </div>


                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                type="submit" name="submit">Sign in</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="{{ asset($themeTrue . 'public/home/assets/js/vendors/uikit.min.js') }} "></script>
    <script src="{{ asset($themeTrue . 'public/home/assets/js/vendors/indonez.min.js') }} "></script>
</body>
{{-- {{ asset($themeTrue . 'public/home/assets/') }} --}}

</html>
