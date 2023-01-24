{{-- @extends($theme.'layouts.app')
@section('title', __('Reset Password'))

@section('content')
    <!-- login -->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">
                        @if (session('status'))
                          <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                              {{ trans(session('status')) }}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('Enter Your Email Address')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{asset($themeTrue.'img/icon/email2.png')}}" alt="@lang('email img')" />
                                            </div>
                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                value="{{old('email')}}"
                                                placeholder="@lang('Enter Your Email Address')"
                                            />
                                        </div>
                                        @error('email')<span class="text-danger mt-1">{{ trans($message) }}</span>@enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="gold-btn-block" type="submit">@lang('Send Password Reset Link')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

 --}}

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
    <title>Infinity | Reset Password</title>
    <!-- Critical preload -->
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'assets/bootstrap/bootstrap.min.css')}}" />
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
                    <div class="uk-width-1-2@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{ asset($themeTrue . 'public/home/assets/img/in-signin-image.jpg') }});">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-4-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="{{ route('home') }} ">
                                        <img class="in-offset-top-10"
                                            src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/infinityfx.png') }}"
                                            alt="logo" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-text-center uk-margin-top uk-margin-remove-top">Reset
                                        Password</p>
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible fade show w-100"
                                            role="alert">
                                            {{ trans(session('status')) }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <!-- Signup form begin -->
                                    <form action="{{ route('password.email') }}" method="post" class="uk-grid uk-form">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="email" id="email"
                                                type="email" value="{{old('email')}}" placeholder="Email address">

                                        </div>
                                        @error('email')<span class="uk-text-danger">{{ trans($message) }}</span>@enderror
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                type="submit" name="submit">Send Password Reset Link</button>
                                        </div>
                                    </form>
                                    <!-- Signup form end -->
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
    <script src="{{asset($themeTrue.'assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
