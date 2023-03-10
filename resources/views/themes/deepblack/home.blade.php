{{-- @extends($theme.'layouts.app')
@section('title', trans('Home'))

@section('content')
    @include($theme.'partials.heroBanner')
    @include($theme.'sections.feature')
    @include($theme.'sections.about-us')
    @include($theme.'sections.why-chose-us')
    @include($theme.'sections.investment')
    @include($theme.'sections.faq')
    @include($theme.'sections.referral')
    @include($theme.'sections.testimonial')
    @include($theme.'sections.how-it-work')
    @include($theme.'sections.know-more-us')
    @include($theme.'sections.investor')
    @include($theme.'sections.deposit-withdraw')
    @include($theme.'sections.news-letter')
    @include($theme.'sections.blog')
    @include($theme.'sections.we-accept')
@endsection --}}



{{-- CODED BY JK --}}
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
    <title>Infinity | Homepage</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset($themeTrue . 'assets/plugins/owlcarousel/animate.css') }}"> --}}
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
    {{-- <link rel="preload" href="public/assets/home/js/vendors/uikit.min.js" as="script"> --}}
    {{-- <link rel="preload" href="/public/assets/home/css/vendors/uikit.min.css" as="style"> --}}
    {{-- <link rel="preload" href="/public/assets/home/css/style.css" as="style"> --}}
    <!-- Icon preload -->
    {{-- <link rel="preload" href="/public/assets/home/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin> --}}
    {{-- <link rel="preload" href="/public/assets/home/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin> --}}
    <!-- Font preload -->
    {{-- <link rel="preload" href="/public/assets/home/fonts/lato-v16-latin-700.woff2" as="font" type="font/woff2" crossorigin> --}}
    {{-- <link rel="preload" href="/public/assets/home/fonts/lato-v16-latin-regular.woff2" as="font" type="font/woff2" crossorigin> --}}
    {{-- <link rel="preload" href="/public/assets/home/fonts/montserrat-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin> --}}
    <!-- Favicon and apple icon -->
    {{-- <link rel="shortcut icon" href="/public/assets/home/favicon.png" type="image/x-icon">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/public/assets/home/css/vendors/uikit.min.css">
    <link rel="stylesheet" href="/public/assets/home/css/style.css"> --}}
</head>

<body>
    {{-- HEADER --}}
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-small in-profit-ticker">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                            <ul class="uk-grid-large uk-slider-items uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center"
                                data-uk-grid>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> XAUUSD <span
                                        class="uk-text-success">1478.81</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-down in-icon-wrap small circle down"></i> GBPUSD <span
                                        class="uk-text-danger">1.3191</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-down in-icon-wrap small circle down"></i> EURUSD <span
                                        class="uk-text-danger">1.1159</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDJPY <span
                                        class="uk-text-success">109.59</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDCAD <span
                                        class="uk-text-success">1.3172</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> USDCHF <span
                                        class="uk-text-success">0.9776</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-down in-icon-wrap small circle down"></i> AUDUSD <span
                                        class="uk-text-danger">0.67064</span>
                                </li>
                                <li>
                                    <i class="fas fa-angle-up in-icon-wrap small circle up"></i> GBPJPY <span
                                        class="uk-text-success">141.91</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-padding-remove-vertical">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent"
                data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <a class="uk-logo" href="index.php">
                                <img class="in-offset-top-10 logo"
                                    src="{{ asset($themeTrue . 'public/home/assets/img/logo.png') }}"
                                    data-src="{{ asset($themeTrue . 'public/home/assets/img/logo.png') }}"
                                    alt="logo" width="220" height="" data-uk-img>
                            </a>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <!-- <li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="homepage2.html">Homepage 2</a></li>
                                            <li><a href="homepage3.html">Homepage 3</a></li>
                                            <li><a href="homepage4.html">Homepage 4</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                            <li><a href="index.php">Home</a></li>
                            <li><a href="markets.php">Markets</a></li>
                            <li><a href="about.php">About</a></li>
                            <!-- <li><a href="javascript:void(0);">Company<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="blog-list.html">Blog</a></li>
                                            <li><a href="careers.html">Careers</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                            <li><a href="#">Education</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <!-- <li><a href="javascript:void(0);">Resources<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="javascript:void(0);">Documentation<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                    <li><a href="help-center.html">Help Center</a></li>
                                                    <li><a href="customers.html">Customers</a></li>
                                                    <li><a href="roadmap.html">Roadmap</a></li>
                                                    <li><a href="legal-docs.html">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a class="uk-disabled" href="javascript:void(0);">Adipiscing elit sed do eiusmod incididunt ut labore dolore magna lorem ipsum sit dolor amet consectetur</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                        </ul>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <div>
                                <a href="{{route('login')}} " class="uk-button uk-button-text">Login</a>
                                <a href="javascript:void(0);" class="uk-button uk-button-text">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    {{-- HEADER --}}


    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="uk-overlay">
                                        <h1>Get more <span class="in-highlight">freedom</span> in the markets.</h1>
                                        <p class="uk-text-lead uk-visible@m">Trade Cryptocurrencies, Stock Indices,
                                            Commodities and <span class="ht">Forex</span> from a single account</p>
                                        <div class="in-slideshow-button">
                                            <a href="javascript:void(0);"
                                                class="uk-button uk-button-primary uk-border-rounded">Open account</a>
                                            <a href="javascript:void(0);"
                                                class="uk-button uk-button-default uk-border-rounded uk-margin-small-left uk-visible@m">Discover
                                                account</a>
                                        </div>
                                        <p class="uk-text-small"><span class="uk-text-primary">*</span>Trading in
                                            Forex/
                                            CFDs is highly speculative and carries a high level of risk.</p>
                                    </div>
                                </div>
                                <div class="uk-position-center">
                                    <img class="uk-animation-slide-top-small"
                                        src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                        data-src="{{ asset($themeTrue . 'public/home/assets/img/in-slideshow-image-1.png') }}"
                                        alt="slideshow-image" width="862" height="540" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="uk-overlay">
                                        <h1>Let top <span class="in-highlight">traders</span> do the job for you!</h1>
                                        <p class="uk-text-lead uk-visible@m">Covesting allows you to automatically copy
                                            top performing traders and achieve the returns</p>
                                        <div class="in-slideshow-button">
                                            <a href="javascript:void(0);"
                                                class="uk-button uk-button-primary uk-border-rounded">Open account</a>
                                            <a href="javascript:void(0);"
                                                class="uk-button uk-button-default uk-border-rounded uk-margin-small-left uk-visible@m">Discover
                                                covesting</a>
                                        </div>
                                        <p class="uk-text-small"><span class="uk-text-primary">*</span>Trading in
                                            Forex/
                                            CFDs is highly speculative and carries a high level of risk.</p>
                                    </div>
                                </div>
                                <div class="uk-position-center">
                                    <img class="uk-animation-slide-top-small"
                                        src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                        data-src="{{ asset($themeTrue . 'public/home/assets/img/in-slideshow-image-2.png') }}"
                                        alt="slideshow-image" width="862" height="540" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="javascript:void(0);"
                    data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="javascript:void(0);"
                    data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                <div class="uk-container in-slideshow-feature uk-visible@m">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m">
                            <div class="uk-child-width-1-4" data-uk-grid>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i
                                            class="fas fa-drafting-compass in-icon-wrap small circle uk-box-shadow-small"></i>
                                    </div>
                                    <div>
                                        <p class="uk-text-bold uk-margin-remove">Enhanced Tools</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-book in-icon-wrap small circle uk-box-shadow-small"></i>
                                    </div>
                                    <div>
                                        <p class="uk-text-bold uk-margin-remove">Trading Guides</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-bolt in-icon-wrap small circle uk-box-shadow-small"></i>
                                    </div>
                                    <div>
                                        <p class="uk-text-bold uk-margin-remove">Fast execution</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-percentage in-icon-wrap small circle uk-box-shadow-small"></i>
                                    </div>
                                    <div>
                                        <p class="uk-text-bold uk-margin-remove">0% Commission</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-1">
            <div class="uk-container">
                <div class="uk-grid-divider" data-uk-grid>
                    <div class="uk-width-expand@m in-margin-top-20@s">
                        <h2>Why Infinity Fx is a trusted FX broker</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur sunt in anim culpa qui officia.</p>
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                        data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-icon-1.svg') }}"
                                        alt="profit-icon" width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Wide Range of Trading Instruments</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                        data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-icon-2.svg') }}"
                                        alt="profit-icon" width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Unparalleled Trading Conditions</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                        data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-icon-3.svg') }}"
                                        alt="profit-icon" width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Globally Licensed &amp; Regulated</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                        data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-icon-4.svg') }}"
                                        alt="profit-icon" width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Committed to Forex Education</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- MT5 section start -->
        <div class="uk-section uk-padding-large in-padding-large-vertical@s">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                        <div class="" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <div class="in-pricing-1">
                                <div class="contentBlk">
                                    <h2 class="uk-margin-small-bottom">WHY MT5?</h2>
                                    <p class="uk-text-lead uk-text-muted uk-margin-remove-top">All Trades Are Executed
                                        On Advanced Meta Trader 5 Platform</p>
                                    <div>
                                        MetaTrader 5 is an advanced, user-friendly platform that traders can use to
                                        manage all aspects of their financial portfolio. It includes analytics tools and
                                        indicators as well as market depth information for trading stocks, indices or
                                        forex currency pairs on various different markets around the world including US
                                        Stocks Portfolio Monitor which provides real time updates about your investments
                                        24/5!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="in-profit-2" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <div class="in-pricing-1">
                                <div class="uk-card uk-card-default uk-box-shadow-medium">
                                    <div class="uk-card-media-top uk-overflow-hidden">
                                        <img class="uk-height-medium uk-width-1-1 uk-align-center uk-animation-reverse uk-transform-origin-top-right"
                                            src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-content-2.jpg') }}"
                                            uk-scrollspy="cls: uk-animation-kenburns; repeat: true" data-width
                                            data-height alt="sample-image" data-uk-img>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section">
            <div class="uk-container">
                <div uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true"
                    class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10 uk-grid uk-grid-stack"
                    data-uk-grid="">
                    <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                        <div class="uk-width-3-5@m uk-text-center">
                            <h1 class="uk-margin-remove">Innovative <span class="in-highlight">Trading</span> Platform
                            </h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove">How MT5 is the best?</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                            <div class="uk-flex">
                                <i class="fas fa-seedling fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                                <h4 class="uk-list-square uk-margin-top">MT5</h4>
                            </div>
                            <hr>
                            <p>Fast Trade Execution</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                            <div class="uk-flex">
                                <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                                <h4 class="uk-list-square uk-margin-top">FEATURES</h4>
                            </div>
                            <hr>
                            <p>Advanced Trading Features</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                            <div class="uk-flex">
                                <i class="fas fa-chart-pie fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                                <h4 class="uk-list-square uk-margin-top">RELIABLE</h4>
                            </div>
                            <hr>
                            <p>Safe and Secure</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-navy">
                            <div class="uk-flex">
                                <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                                <h4 class="uk-list-square uk-margin-top">TRUST</h4>
                            </div>
                            <hr>
                            <p>Worlds Most Trusted and Secured Trading Platform </p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-grey">
                            <div class="uk-flex">
                                <i class="fas fa-funnel-dollar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                                <h4 class="uk-list-square uk-margin-top">BEST</h4>
                            </div>
                            <hr>
                            <p>Worlds Best innovative Terminal for Forex Trading</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                            <div class="uk-flex">
                                <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                                <h4 class="uk-list-square uk-margin-top">MULTI TASK</h4>
                            </div>
                            <hr>
                            <p>Provides Multiple Forex Trading Instruments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MT5 section end -->

        <div class="uk-section uk-section-muted uk-padding-small in-padding-large-vertical@s in-profit-6">
            <div class="uk-container uk-margin-small-bottom">
                <div class="uk-grid uk-flex uk-flex-center uk-grid-stack" data-uk-grid="">
                    <div class="uk-width-1-1 uk-text-center uk-first-column">
                        <h2>Providing India with trading services</h2>
                    </div>
                    <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-3@m uk-grid uk-grid-margin uk-first-column"
                        data-uk-grid="">
                        <div class="uk-first-column">
                            <div class="uk-flex uk-flex-left uk-flex-middle">
                                <div class="uk-margin-medium-right">
                                    <h1 class="uk-margin-remove-bottom uk-text-primary">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/secure.png') }}" alt=""
                                            width="60">
                                    </h1>
                                </div>
                                <div>
                                    <h3 class="uk-margin-small-bottom"> Secured transfers</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex uk-flex-left uk-flex-middle">
                                <div class="uk-margin-medium-right">
                                    <h1 class="uk-margin-remove-bottom uk-text-primary">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/trad.png') }}" alt=""
                                            width="60">
                                    </h1>
                                </div>
                                <div>
                                    <h3 class="uk-margin-small-bottom">$5,000 demo account </h3>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <div class="uk-flex uk-flex-left uk-flex-middle">
                                <div class="uk-margin-medium-right">
                                    <h1 class="uk-margin-remove-bottom uk-text-primary">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/fee.png') }}" alt=""
                                            width="60">
                                    </h1>
                                </div>
                                <div>
                                    <h3 class="uk-margin-small-bottom">No hidden fees </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pricing section start -->
        <div class="uk-section pricing">
            <div class="uk-container">
                <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                    <div class="uk-width-3-5@m uk-text-center">
                        <h1 class="uk-margin-remove">Pricing <span class="in-highlight">Plans</span> </h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">The Best Solutions for Our Clients</p>
                    </div>
                </div>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top uk-margin-bottom uk-grid"
                    uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                    <div class="uk-first-column">
                        <div class="in-pricing-1">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header ">
                                    <h3 class="uk-margin-remove-bottom">STANDARD ACCOUNT</h3>
                                    <p class="uk-text-muted uk-text-uppercase uk-margin-remove-top">INVESTMENT</p>
                                    <h2 class="uk-txet-center doller"> <span>$</span> 330</h2>
                                </div>
                                <div class="uk-card-body uk-padding-remove-top">
                                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                        <li>Profit: Upto 15% /mo</li>
                                        <li>24X5 Support</li>
                                        <li>Live Trading on MT5</li>
                                        <li>Instant Deposit & Withdrawal</li>
                                        <li>Multiple Income types</li>
                                    </ul>
                                    <a href="#"
                                        class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top">Open
                                        Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-pricing-1">
                            <div class="uk-card uk-card-default" uk-scrollspy-class="uk-animation-slide-top">
                                <div class="uk-card-header ">
                                    <h3 class="uk-margin-remove-bottom">CLASSIC ACCOUNT</h3>
                                    <p class="uk-text-muted uk-text-uppercase uk-margin-remove-top">INVESTMENT</p>
                                    <h2 class="uk-txet-center doller"> <span>$</span> 330</h2>
                                </div>
                                <div class="uk-card-body uk-padding-remove-top">
                                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                        <li>Profit: Upto 15% /mo</li>
                                        <li>24X5 Support</li>
                                        <li>Live Trading on MT5</li>
                                        <li>Instant Deposit & Withdrawal</li>
                                        <li>Multiple Income types</li>
                                    </ul>
                                    <a href="#"
                                        class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top">Open
                                        Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-pricing-1 uk-visible@m">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header ">
                                    <h3 class="uk-margin-remove-bottom">PREMIUM ACCOUNT</h3>
                                    <p class="uk-text-muted uk-text-uppercase uk-margin-remove-top">INVESTMENT</p>
                                    <h2 class="uk-txet-center doller"> <span>$</span> 330</h2>
                                </div>
                                <div class="uk-card-body uk-padding-remove-top">
                                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                        <li>Profit: Upto 15% /mo</li>
                                        <li>24X5 Support</li>
                                        <li>Live Trading on MT5</li>
                                        <li>Instant Deposit & Withdrawal</li>
                                        <li>Multiple Income types</li>
                                    </ul>
                                    <a href="#"
                                        class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top">Open
                                        Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing section end -->

        <!-- A/c Open section start -->
        <div class="uk-section uk-section-muted uk-padding-large in-padding-large-vertical@s in-profit-15">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center uk-grid-stack" data-uk-grid="">
                    <div class="uk-width-1-1 uk-width-5-6@m uk-first-column">
                        <p class="uk-text-lead uk-margin-remove-bottom uk-text-center in-offset-top-10">How we work
                            with Infinity Fx ?</p>
                        <h2 class="uk-margin-small-top uk-text-center">Follow these simple steps and make profit! </h2>
                        <div class="uk-grid-large uk-child-width-1-3@m uk-text-center uk-margin-medium-top uk-grid"
                            data-uk-grid="">
                            <div class="uk-first-column">
                                <span class="in-icon-wrap circle large">1</span>
                                <h4 class="uk-margin-top">Instant registration</h4>
                                <p> Click <a href="/register">Sign Up</a> to fill the
                                    blank, our 256 SSL will Protect your privacy. </p>
                            </div>
                            <div>
                                <span class="in-icon-wrap circle large">2</span>
                                <h4 class="uk-margin-top">Make An Invest</h4>
                                <p> <a href="{{route('login')}}"> Login</a> your account to click
                                    invest to start to earn the profit. </p>
                            </div>
                            <div>
                                <span class="in-icon-wrap circle large">3</span>
                                <h4 class="uk-margin-top">Get profit</h4>
                                <p>You will get your profit on your profile, also you will get Instant Payment </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- A/c Open section end -->

        <!-- section content begin
        <div class="uk-section uk-padding-large in-padding-large-vertical@s uk-background-contain in-profit-2" data-src="img/in-profit-decor-3.svg" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h2>Experience more than Trading.</h2>
                        <p class="uk-text-lead">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae consequatu vel illum qui dolorem.</p>
                        <i class="fas fa-chevron-down uk-text-primary"></i>
                    </div>
                    <div class="uk-width-5-6@m">
                        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                            <div>
                                <div class="in-pricing-1">
                                    <div class="uk-card uk-card-default uk-box-shadow-medium">
                                        <div class="uk-card-media-top">
                                            <img class="uk-width-1-1 uk-align-center" src="img/in-lazy.svg" data-src="img/in-profit-content-1.jpg" data-width data-height alt="sample-image" data-uk-img>
                                            <span></span>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="in-heading-extra in-card-decor-1">
                                                <h2 class="uk-margin-remove-bottom">Economic</h2>
                                                <p class="uk-text-lead">Analysis</p>
                                            </div>
                                            <p class="uk-margin-small-top">Stay ahead of the markets with world-leading market analysis through daily webinars by industry experts.</p>
                                            <div class="uk-margin-medium-top">
                                                <a class="uk-button uk-button-link uk-text-uppercase uk-text-small" href="javascript:void(0);">Read analysis<i class="fas fa-caret-square-right uk-margin-small-left"></i></a>
                                                <span class="uk-label uk-border-pill uk-align-right">Weekly Update</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-pricing-1">
                                    <div class="uk-card uk-card-default uk-box-shadow-medium">
                                        <div class="uk-card-media-top">
                                            <img class="uk-width-1-1 uk-align-center" src="img/in-lazy.svg" data-src="img/in-profit-content-2.jpg" data-width data-height alt="sample-image" data-uk-img>
                                            <span></span>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="in-heading-extra in-card-decor-2">
                                                <h2 class="uk-margin-remove-bottom">Technical</h2>
                                                <p class="uk-text-lead">Analysis</p>
                                            </div>
                                            <p class="uk-margin-small-top">Access the financial markets with an account catered to your needs and benefit from good conditions.</p>
                                            <div class="uk-margin-medium-top">
                                                <a class="uk-button uk-button-link uk-text-uppercase uk-text-small" href="javascript:void(0);">Read analysis<i class="fas fa-caret-square-right uk-margin-small-left"></i></a>
                                                <span class="uk-label uk-border-pill uk-align-right">Daily Update</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="uk-card uk-card-default uk-card-body in-profit-appcard">
                                    <div class="uk-child-width-1-2@m" data-uk-grid>
                                        <div>
                                            <div data-uk-margin>
                                                <a href="javascript:void(0);" class="uk-button in-button-app uk-margin-small-right">
                                                    <i class="fab fa-google-play fa-2x"></i>
                                                    <span class="wrapper">Download from<span>Play Store</span></span>
                                                </a>
                                                <a href="javascript:void(0);" class="uk-button in-button-app">
                                                    <i class="fab fa-apple fa-2x"></i>
                                                    <span class="wrapper">Download from<span>App Store</span></span>
                                                </a>
                                            </div>
                                            <hr>
                                            <p>Trade on <span class="uk-text-bold uk-text-primary">world class platform</span> without a doubt.</p>
                                        </div>
                                        <div class="uk-visible@m">
                                            <img src="img/in-lazy.svg" data-src="img/in-profit-mockup-1.png" width="450" height="203" alt="profit-mockup" data-uk-img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="uk-grid uk-grid-divider uk-grid-match in-profit-tradestatus" data-uk-grid>
                                    <div class="uk-width-1-1 uk-width-auto@m">
                                        <div class="uk-flex uk-flex-left uk-flex-center@m">
                                            <div class="uk-grid uk-grid-small uk-flex-middle">
                                                <div class="uk-width-auto">
                                                    <i class="fas fa-chart-line fa-2x in-icon-wrap circle primary-color"></i>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h1 class="uk-margin-remove-bottom">324,978,126</h1>
                                                    <p class="uk-text-uppercase uk-text-primary uk-text-small uk-margin-remove-top">Trades Opened at Profit</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-expand@m uk-flex-middle">
                                        <p class="uk-text-lead">Trade & Invest in Stocks, Currencies, Indices, and Commodities (CFDs).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3"
            data-src="img/in-section-profit-3.png" data-uk-img>
            <div class="uk-container uk-margin-small-bottom">
                <div class="uk-grid-large" data-uk-grid>
                    <div class="uk-width-1-2@m">
                        <h2>We are committed to meeting your CFD and FX trading needs</h2>
                        <p class="uk-text-lead">Excepteur occaeca cupidata non proident fugiat nulla pariatur quasi
                            architecto beatae, sunt in culpa quila officia deserunt mollit anim id est aute laborum.</p>
                    </div>
                    <div class="uk-width-1-2@m">
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-small-top" data-uk-grid>
                            <div>
                                <h1 class="uk-heading-bullet">
                                    <span class="count" data-counter-end="32">0</span>+
                                </h1>
                                <h4 class="uk-margin-remove">Countries</h4>
                                <p>BotBro is providing its worldclass services in more than 28+ countries.</p>
                            </div>
                            <div>
                                <h1 class="uk-heading-bullet">
                                    <span class="count" data-counter-end="200,000">0</span>+
                                </h1>
                                <h4 class="uk-margin-remove">Users</h4>
                                <p>BotBro has been trading for more than 200000 + happy clients.</p>
                            </div>
                            <div>
                                <h1 class="uk-heading-bullet">
                                    <span class="count" data-counter-end="1000">0</span>+
                                </h1>
                                <h4 class="uk-margin-remove">Leaders</h4>
                                <p>Making us one of the leading Forex Prime Broker.</p>
                            </div>
                            {{-- <div>
                                <h1 class="uk-heading-bullet">
                                    <!-- <span class="count" data-counter-end="35">0</span>M+ -->

                                </h1>
                                <p>MT5 Platform</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section content begin -->
        <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-4">
            <div class="uk-container uk-margin-small-top uk-margin-medium-bottom">
                <div class="uk-grid uk-flex uk-flex-center " data-uk-grid>
                    <div class="uk-width-5-6@m">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand@m">
                                <h2>Connect to global capital markets</h2>
                            </div>
                            <div class="uk-width-3-5@m">
                                <p class="uk-text-lead">Access 40,000+ trading instruments and professional asset
                                    management on award-winning platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-child-width-1-2@s uk-child-width-1-5@m in-profit-stockprice" data-uk-grid>
                            <div>
                                <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                    <span class="uk-float-left">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-ticker-1.svg') }}"
                                            alt="profit-ticker" width="77" height="20" data-uk-img>
                                    </span>
                                    <span class="uk-float-right down">
                                        <i class="fas fa-arrow-down"></i>1,526.05
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                    <span class="uk-float-left">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-ticker-2.svg') }}"
                                            alt="profit-ticker" width="77" height="20" data-uk-img>
                                    </span>
                                    <span class="uk-float-right down">
                                        <i class="fas fa-arrow-down"></i>205.37
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                    <span class="uk-float-left">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-ticker-3.svg') }}"
                                            alt="profit-ticker" width="77" height="20" data-uk-img>
                                    </span>
                                    <span class="uk-float-right down">
                                        <i class="fas fa-arrow-down"></i>267.97
                                    </span>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                    <span class="uk-float-left">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-ticker-4.svg') }}"
                                            alt="profit-ticker" width="77" height="20" data-uk-img>
                                    </span>
                                    <span class="uk-float-right up">
                                        <i class="fas fa-arrow-up"></i>59,230
                                    </span>
                                </div>
                            </div>
                            <div class="uk-visible@m">
                                <div class="uk-card uk-card-body uk-card-small uk-card-default uk-border-pill">
                                    <span class="uk-float-left">
                                        <img src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                            data-src="{{ asset($themeTrue . 'public/home/assets/img/in-profit-ticker-5.svg') }}"
                                            alt="profit-ticker" width="77" height="20" data-uk-img>
                                    </span>
                                    <span class="uk-float-right up">
                                        <i class="fas fa-arrow-up"></i>78.98
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-5-6@m">
                        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                            <div class="uk-width-auto@m">
                                <h4 class="uk-margin-remove-bottom uk-text-primary">Ready to trade?</h4>
                                <p class="uk-margin-remove-top">Get started with your trading account today.</p>
                            </div>
                            <div class="uk-width-expand@m">
                                <form class="uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-1 uk-width-expand@m">
                                        <input class="uk-input uk-border-rounded" type="text"
                                            placeholder="Email address...">
                                    </div>
                                    <div class="uk-width-1-1 uk-width-expand@m">
                                        <input class="uk-input uk-border-rounded" type="text"
                                            placeholder="Phone number...">
                                    </div>
                                    <div class="uk-width-1-1 uk-width-auto@m">
                                        <button
                                            class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Open
                                            Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end
        <div class="uk-section in-offset-bottom-40 in-profit-trustpilot">
            <div class="uk-container">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-1-1">
                        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5406e65db0d04a09e042d5fc" data-businessunit-id="561d886b0000ff0005844fd6" data-style-height="28px" data-style-width="100%" data-theme="light">
                            <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer">Trustpilot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </main>

    {{-- FOOTER --}}
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-primary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex" data-uk-grid>
                    <div>
                        <h4 class="uk-heading-bullet">Overview</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="javascript:void(0);">Stock indices</a></li>
                            <li><a href="javascript:void(0);">Commodities</a></li>
                            <li><a href="javascript:void(0);">Forex</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="uk-heading-bullet">Company</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="javascript:void(0);">About</a></li>
                            <li><a href="javascript:void(0);">Blog</a></li>
                            <li><a href="javascript:void(0);">Careers</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="uk-heading-bullet">Legal</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                            <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                            <li><a href="javascript:void(0);">Contact</a></li>
                        </ul>
                    </div>
                    <div class="uk-visible@m">
                        <h4 class="uk-heading-bullet">Support</h4>
                        <ul class="uk-list uk-link-text">
                            <li><a href="javascript:void(0);">Documentation</a></li>
                        </ul>
                    </div>
                    <div class="uk-flex-first uk-flex-last@m">
                        <ul class="uk-list uk-link-text">
                            <li><img class="uk-margin-small-bottom"
                                    src="{{ asset($themeTrue . 'public/home/assets/img/in-lazy.svg') }}"
                                    data-src="{{ asset($themeTrue . 'public/home/assets/img/logo-white.png') }}" alt="logo"
                                    width="130" height="36" data-uk-img></li>
                            <li><a href="javascript:void(0);"><i
                                        class="fas fa-envelope uk-margin-small-right"></i>support@infinityfx.info</a>
                            </li>
                            <li><a href="javascript:void(0);"><i
                                        class="fas fa-map-marker-alt uk-margin-small-right"></i>UK</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" data-uk-grid>
                    <div class="uk-width-5-6@m uk-margin-bottom">
                        <div class="in-footer-warning in-margin-top-20@s">
                            <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                            <p class="uk-text-small">Trading derivatives and leveraged products carries a high level of
                                risk, including the risk of losing substantially more than your initial investment. It
                                is not suitable for everyone. Before you make any decision in relation to a financial
                                product you should obtain and consider our Product Disclosure Statement (PDS) and
                                Financial Services Guide (FSG) available on our website and seek independent advice if
                                necessary </p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m in-copyright-text">
                        <p>?? Infinity Fx 2022. All rights reserved.</p>
                    </div>
                    <div class="uk-width-1-2@m uk-text-right@m in-footer-socials">
                        <a href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-facebook-square"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- module totop begin -->
        <div class="uk-visible@m">
            <a href="javascript:void(0);" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- module totop begin -->
    </footer>
    {{-- FOOTER --}}

    <!-- Javascript -->
    <script src="{{ asset($themeTrue . 'public/home/assets/js/vendors/uikit.min.js') }} "></script>
    <script src="{{ asset($themeTrue . 'public/home/assets/js/vendors/indonez.min.js') }} "></script>
    <!-- <script src="js/tp.widget.bootstrap.min.js" defer></script> -->
    <script src="{{ asset($themeTrue . 'public/home/assets/js/config-theme.js') }}"></script>
</body>

</html>
{{-- CODED BY JK --}}
