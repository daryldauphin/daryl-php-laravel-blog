<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hustle And Code</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hustle and Code is the premier lifestyle blog for the ambitious programmer in the hustle.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.png') }}">
    
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body>
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Start Header -->
        <header class="header axil-header  header-light header-sticky ">
            <div class="header-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                        <div class="logo">
                            <a href="/">
                                <img lazy="loading" class="dark-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Hustle and Code Logo">
                                <img lazy="loading" class="light-logo" src="{{ asset('/images/logo/logo-dark.png') }}" alt="Hustle and Code Logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="mainmenu-wrapper">
                            <nav class="mainmenu-nav">
                                <!-- Start Mainmanu Nav -->
                                <ul class="mainmenu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/all-posts">Posts</a></li>
                                    <li><a data-formkit-toggle="ebc1e334ce" href="#0">Newsletter</a></li>
                                    
                                    <li><a href="/store">Store</a></li>
                                    <li><a href="/resources">Resources</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                                <!-- End Mainmanu Nav -->
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                        <div class="header-search text-end d-flex align-items-center">
                            <form method="GET" action="#" class="header-search-form d-sm-block d-none">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" name="search" class="form-control" placeholder="Search" value="{{request('search')}}">
                                </div>
                            </form>
                            <div class="mobile-search-wrapper d-sm-none d-block">
                                <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                                <form method="GET" action="#" class="header-search-form">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{request('search')}}">
                                    </div>
                                </form>
                            </div>
                            <ul class="metabar-block">
                                {{-- <li class="icon"><a href="javascript:CreateBookmarkLink();"><i class="fas fa-bookmark"></i></a></li> --}}
                                {{-- <li class="icon"><a href="#"><i class="fas fa-rss"></i></a></li> --}}

                                {{-- <li><a href="#"><img src="{{ asset('/images/logo/profile.jpg') }}" alt="Author Images"></a></li> --}}
                            </ul>
                            <!-- Start Hamburger Menu  -->
                            <div class="hamburger-menu d-block d-xl-none">
                                <div class="hamburger-inner">
                                    <div class="icon"><i class="fal fa-bars"></i></div>
                                </div>
                            </div>
                            <!-- End Hamburger Menu  -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->

        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area">
            <div class="inner">
                <div class="mobile-menu-top">
                    <div class="logo">
                        <a href="/">
                            <img lazy="loading" class="dark-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                            <img  lazy="loading" class="light-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                        </a>
                    </div>
                    <div class="mobile-close">
                        <div class="icon">
                            <i class="fal fa-times"></i>
                        </div>
                    </div>
                </div>
                <ul class="mainmenu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/all-videos">Videos</a></li>
                                    <li>
                                        <div class="buy-now-btn">
                                        <a href="/store">Store <span class="badge">Coming soon!</span></a>
                                    </div>
                                    </li>
                                    <li><a href="/resources">Resources</a></li>
                                    <li><a href="/contact">Contact</a></li>
                </ul> 
            </div>
        </div>
        <!-- End Mobile Menu Area  -->


        {{ $slot }}
        

        <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-footer-style-1 footer-variation-2">
            <!-- Start Footer Top Area  -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="logo">
                                <a href="/">
                                    <img lazy="loading" class="dark-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                                    <img lazy="loading" class="white-logo" src="{{ asset('/images/logo/logo-dark.png') }}" alt="Daryl Dauphin Logo">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <!-- Start Post List  -->
                            <div class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="https://twitter.com/hustleandcode_" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/hustleandcode_" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCUIr5dSV7bNLbjL7IctsHtw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://discord.gg/9mCJSXSWc9" target="_blank"><i class="fab fa-discord"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Post List  -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Footer Top Area  -->

            <!-- Start Copyright Area  -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-8">
                            <div class="copyright-left">
                                <ul class="mainmenu justify-content-start">
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="/contact">
                                            <span class="hover-flip-item">
                                        <span data-text="Contact">Contact</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="/store">
                                            <span class="hover-flip-item">
                                        <span data-text="Store">Store</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="/privacy">
                                            <span class="hover-flip-item">
                                        <span data-text="Privacy Policy">Privacy Policy</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="/admin">
                                            <span class="hover-flip-item">
                                        <span data-text="Login">Login</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="copyright-right text-start text-md-end mt_sm--20">
                                <p class="b3">What good is it for someone to gain the whole world, yet forfeit their soul? - Mark 8:36
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </div>
        <!-- End Footer Area  -->

        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('/js/vendor/tweenmax.min.js')}}"></script>
    <script src="{{ asset('/js/vendor/js.cookie.js')}}"></script>
    <script src="{{ asset('/js/vendor/jquery.style.switcher.js')}}"></script>
    
    <!-- Main JS -->
    <script src="{{ asset('/js/main.js')}}"></script>
    <script async data-uid="ebc1e334ce" src="https://expert-trader-4323.ck.page/ebc1e334ce/index.js"></script>

</body>

</html>