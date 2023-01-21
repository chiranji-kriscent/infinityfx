{{-- @extends($theme . 'layouts.app')
@section('title', __('Register'))


@section('content')
    <!-- register start -->
    <section class="login-section register-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row">
                                @if (session()->get('sponsor') != null)
                                    <div class="col-md-12">
                                        <div class="box sponsorboxwidth">
                                            <h4 class="golden-text">@lang('Sponsor Name')</h4>
                                            <div class="input-group mb-4">
                                                <div class="img">
                                                    <img src="{{ asset($themeTrue . 'img/icon/bonus.png') }}"
                                                        alt="@lang('sponsor img')" />
                                                </div>
                                                <input type="text" name="sponsor" id="sponsor" class="form-control"
                                                    placeholder="{{ trans('Sponsor By') }}"
                                                    value="{{ session()->get('sponsor') }}" readonly />
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-md-6">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('First Name')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{ asset($themeTrue . 'img/icon/edit.png') }}"
                                                    alt="@lang('first name img')" />
                                            </div>
                                            <input type="text" name="firstname" class="form-control"
                                                value="{{ old('firstname') }}" placeholder="@lang('First Name')" />
                                        </div>
                                        @error('firstname')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('Last Name')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{ asset($themeTrue . 'img/icon/edit.png') }}"
                                                    alt="@lang('lastname img')" />
                                            </div>
                                            <input type="text" name="lastname" class="form-control"
                                                value="{{ old('lastname') }}" placeholder="@lang('Last Name')" />
                                        </div>
                                        @error('lastname')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('Username')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{ asset($themeTrue . 'img/icon/edit.png') }}"
                                                    alt="@lang('username img')" />
                                            </div>
                                            <input type="text" name="username" class="form-control"
                                                value="{{ old('username') }}" placeholder="@lang('Username')" />
                                        </div>
                                        @error('username')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('Email Address')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{ asset($themeTrue . 'img/icon/email2.png') }}"
                                                    alt="@lang('email img')" />
                                            </div>
                                            <input type="text" name="email" class="form-control"
                                                value="{{ old('email') }}" placeholder="@lang('Email Address')" />
                                        </div>
                                        @error('email')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 phonenumber">
                                    <div class="form-group mb-30">
                                        @php
                                            $country_code = (string) @getIpInfo()['code'] ?: null;
                                            $myCollection = collect(config('country'))->map(function ($row) {
                                                return collect($row);
                                            });
                                            $countries = $myCollection->sortBy('code');
                                        @endphp

                                        <div class="box mb-4">
                                            <h4 class="golden-text">@lang('Phone Number')</h4>
                                            <div class="input-group">
                                                <div class="input-group-prepend w-50">
                                                    <select name="phone_code"
                                                        class="form-control country_code dialCode-change">
                                                        @foreach (config('country') as $value)
                                                            <option value="{{ $value['phone_code'] }}"
                                                                data-name="{{ $value['name'] }}"
                                                                data-code="{{ $value['code'] }}"
                                                                {{ $country_code == $value['code'] ? 'selected' : '' }}>
                                                                {{ $value['name'] }} ({{ $value['phone_code'] }})
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <input type="text" name="phone" class="form-control dialcode-set"
                                                    value="{{ old('phone') }}" placeholder="@lang('Phone Number')">
                                            </div>
                                            @error('phone')
                                                <span class="uk-text-danger">@lang($message)</span>
                                            @enderror
                                        </div>


                                        <input type="hidden" name="country_code" value="{{ old('country_code') }}"
                                            class="text-dark">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('Password')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{ asset($themeTrue . 'img/icon/padlock.png') }}"
                                                    alt="@lang('password img')" />
                                            </div>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="@lang('Password')" />
                                        </div>
                                        @error('password')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box mb-4">
                                        <h4 class="golden-text">@lang('Confirm Password')</h4>
                                        <div class="input-group">
                                            <div class="img">
                                                <img src="{{ asset($themeTrue . 'img/icon/padlock.png') }}"
                                                    alt="@lang('Confirm Password img')" />
                                            </div>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="@lang('Confirm Password')" />
                                        </div>
                                    </div>
                                </div>

                                @if (basicControl()->reCaptcha_status_registration)
                                    <div class="col-md-6 box mb-4 form-group">
                                        {!! NoCaptcha::renderJs(session()->get('trans')) !!}
                                        {!! NoCaptcha::display($basic->theme == 'deepblack' ? ['data-theme' => 'dark'] : []) !!}
                                        @error('g-recaptcha-response')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                    </div>
                                @endif

                                <div class="mb-4 col-md-12 logindiv">
                                    <p>
                                        @lang('already User?')
                                        <a href="{{ route('login') }}" class="golden-text">@lang('login')</a>
                                    </p>
                                    <button type="submit" class="gold-btn">@lang('Sign Up')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register end -->
@endsection


@push('script')
    <script>
        "use strict";
        $(document).ready(function() {
            setDialCode();
            $(document).on('change', '.dialCode-change', function() {
                setDialCode();
            });

            function setDialCode() {
                let currency = $('.dialCode-change').val();
                $('.dialcode-set').val(currency);
            }
        });
    </script>
@endpush --}}

<?php use App\Models\User; ?>
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
                    <div class="uk-width-1-2@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{ asset($themeTrue . 'public/home/assets/img/in-signin-image.jpg') }});">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-4-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="{{ route('home') }}">
                                        <img class="in-offset-top-10"
                                            src="{{ asset($themeTrue . 'public/home/assets/') }}img/in-lazy.svg"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/infinityfx.png') }}"
                                            alt="logo" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Signup into your
                                        account</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Already have
                                        an account? <a href="{{ route('login') }} ">Login here</a></p>
                                    <!-- Signup form begin -->
                                    <form action="{{ route('register') }}" method="post" class="uk-grid uk-form">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="sponsor" id="sponsor"
                                             type="text" placeholder="Sponsor Id"
                                                value="{{ session()->get('sponsor') }}">
                                        </div>
                                        @error('sponsor')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                        <div class="uk-column-1-2 uk-margin-small">
                                            <div class="uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-edit fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" id="fname"
                                                    name="firstname" value="{{ old('firstname') }}" type="text"
                                                    placeholder="First Name">

                                            </div>
                                            @error('firstname')
                                                <span class="uk-text-danger">@lang($message)</span>
                                            @enderror
                                            <div class="uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-edit fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" id="lname" name="lastname"
                                                    value="{{ old('lastname') }}" type="text"
                                                    placeholder="Last Name">

                                            </div>
                                            @error('lastname')
                                                <span class="uk-text-danger">@lang($message)</span>
                                            @enderror
                                        </div>
                                        <div class="uk-column-1-2 uk-margin-small">
                                            <div class="uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-edit fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" name="username"
                                                    value="{{ old('username') }}" type="text"
                                                    placeholder="Username">
                                            </div>
                                            @error('username')
                                                <span class="uk-text-danger">@lang($message)</span>
                                            @enderror
                                            <div class="uk-width-1-1 uk-inline">
                                                <span
                                                    class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" name="email"
                                                    value="{{ old('email') }}" type="text"
                                                    placeholder="Email Address">

                                            </div>
                                            @error('email')
                                                <span class="uk-text-danger">@lang($message)</span>
                                            @enderror
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-phone fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="phone"
                                                value="{{ old('phone') }}" type="text"
                                                placeholder="Phone Number">

                                        </div>
                                        @error('phone')
                                            <span class="uk-text-danger">@lang($message)</span>
                                        @enderror
                                        <div class="uk-column-1-2 uk-margin-small">
                                            <div class="uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" name="password"
                                                    value="{{ old('password') }}" type="password"
                                                    placeholder="Password">

                                            </div>
                                            @error('password')
                                                <span class="uk-text-danger">@lang($message)</span>
                                            @enderror
                                            <div class="uk-width-1-1 uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" name="password_confirmation"
                                                    type="password" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                type="submit" name="submit">Sign Up</button>
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
</body>
{{ asset($themeTrue . 'public/home/assets/') }}

</html>
