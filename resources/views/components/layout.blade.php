<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Default || Blogar - Personal Blog Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

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
                                <img class="dark-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                                <img class="light-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="mainmenu-wrapper">
                            <nav class="mainmenu-nav">
                                <!-- Start Mainmanu Nav -->
                                <ul class="mainmenu">
                                {{--  <li class="menu-item-has-children"><a href="#">Home</a>
                                        <ul class="axil-submenu">
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="index.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Home Default">Home Default</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="home-creative-blog.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Home Creative Blog">Home Creative Blog</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="home-seo-blog.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Home SEO Blog">Home SEO Blog</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="home-tech-blog.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Home Tech Blog">Home Tech Blog</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="home-lifestyle-blog.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Home Lifestyle Blog">Home Lifestyle Blog</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">Posts</a>
                                        <ul class="axil-submenu">
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-format-standard.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Format Standard">Post Format Standard</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-format-video.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Format Video">Post Format Video</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-format-gallery.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Format Gallery">Post Format Gallery</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-format-text.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Format Text Only">Post Format Text Only</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-layout-1.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Layout One">Post Layout One</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-layout-2.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Layout Two">Post Layout Two</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-layout-3.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Layout Three">Post Layout Three</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-layout-4.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Layout Four">Post Layout Four</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-layout-5.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Layout Five">Post Layout Five</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children megamenu-wrapper"><a href="#">Mega Menu</a>
                                        <ul class="megamenu-sub-menu">
                                            <li class="megamenu-item">

                                                <!-- Start Verticle Nav  -->
                                                <div class="axil-vertical-nav">
                                                    <ul class="vertical-nav-menu">
                                                        <li class="vertical-nav-item active">
                                                            <a class="hover-flip-item-wrapper" href="#tab1">
                                                                <span class="hover-flip-item">
                                    <span data-text="Accessibility">Accessibility</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="vertical-nav-item">
                                                            <a class="hover-flip-item-wrapper" href="#tab2">
                                                                <span class="hover-flip-item">
                                    <span data-text="Android Dev">Android Dev</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="vertical-nav-item">
                                                            <a class="hover-flip-item-wrapper" href="#tab3">
                                                                <span class="hover-flip-item">
                                    <span data-text="Blockchain">Blockchain</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="vertical-nav-item">
                                                            <a class="hover-flip-item-wrapper" href="#tab4">
                                                                <span class="hover-flip-item">
                                    <span data-text="Gadgets">Gadgets</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Start Verticle Nav  -->

                                                <!-- Start Verticle Menu  -->
                                                <div class="axil-vertical-nav-content">
                                                    <!-- Start One Item  -->
                                                    <div class="axil-vertical-inner tab-content" id="tab1" style="display: block;">
                                                        <div class="axil-vertical-single">
                                                            <div class="row">

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-01.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">India may require online shops to hand</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-02.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="CREATIVE">CREATIVE</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Lightweight, grippable, and ready to go.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-03.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Bold new experience. Same Mac magic.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="GADGETS">GADGETS</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Creative Game With The New DJI Mavic Air</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End One Item  -->

                                                    <!-- Start One Item  -->
                                                    <div class="axil-vertical-inner tab-content" id="tab2">
                                                        <div class="axil-vertical-single">
                                                            <div class="row">

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">India may require online shops to hand</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-03.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Lightweight, grippable, and ready to go.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-02.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Bold new experience. Same Mac magic.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Creative Game With The New DJI Mavic Air</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End One Item  -->

                                                    <!-- Start One Item  -->
                                                    <div class="axil-vertical-inner tab-content" id="tab3">
                                                        <div class="axil-vertical-single">
                                                            <div class="row">

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Creative Game With The New DJI Mavic Air</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-03.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Bold new experience. Same Mac magic.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-02.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Lightweight, grippable, and ready to go.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">India may require online shops to hand</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End One Item  -->

                                                    <!-- Start One Item  -->
                                                    <div class="axil-vertical-inner tab-content" id="tab4">
                                                        <div class="axil-vertical-single">
                                                            <div class="row">

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-01.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">India may require online shops to hand</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->
                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Lightweight, grippable, and ready to go.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-03.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Bold new experience. Same Mac magic.</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                                <!-- Start Post List  -->
                                                                <div class="col-lg-3">
                                                                    <div class="content-block image-rounded">
                                                                        <div class="post-thumbnail mb--20">
                                                                            <a href="post-details.html">
                                                                                <img class="w-100" src="assets/images/others/mega-post-04.jpg" alt="Post Images">
                                                                            </a>
                                                                        </div>
                                                                        <div class="post-content">
                                                                            <div class="post-cat">
                                                                                <div class="post-cat-list">
                                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                                        <span class="hover-flip-item">
                                                            <span data-text="DESIGN">DESIGN</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="title"><a href="post-details.html">Creative Game With The New DJI Mavic Air</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Post List  -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End One Item  -->

                                                </div>
                                                <!-- End Verticle Menu  -->
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="axil-submenu">
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-list.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post List">Post List</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="archive.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Archive">Post Archive</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Author Page">Author Page</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="about.html">
                                                    <span class="hover-flip-item">
                        <span data-text="About Page">About Page</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="contact.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Contact Us">Contact Us</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="404.html">
                                                    <span class="hover-flip-item">
                        <span data-text="404 Page">404 Page</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="maintenance.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Maintenance">Maintenance</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="privacy-policy.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Privacy Policy">Privacy Policy</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="home-lifestyle-blog.html">Home</a></li>
                                    <li><a href="home-tech-blog.html">About</a></li>
                                    <li><a href="home-lifestyle-blog.html">Newsletter</a></li>
                                    <li><a href="home-lifestyle-blog.html">Store</a></li>
                                    <li><a href="home-lifestyle-blog.html">Resources</a></li>
                                    <li><a href="home-tech-blog.html">Contact</a></li>
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
                                <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>
                                <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                                <li><a href="#"><img src="{{ asset('/images/logo/profile.jpg') }}" alt="Author Images"></a></li>
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
                        <a href="index.html">
                            <img class="dark-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                            <img class="light-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                        </a>
                    </div>
                    <div class="mobile-close">
                        <div class="icon">
                            <i class="fal fa-times"></i>
                        </div>
                    </div>
                </div>
                <ul class="mainmenu">
                    {{-- <li class="menu-item-has-children"><a href="#">Home</a>
                        <ul class="axil-submenu">
                            <li><a href="index.html">Home Default</a></li>
                            <li><a href="home-creative-blog.html">Home Creative Blog</a></li>
                            <li><a href="home-seo-blog.html">Home Seo Blog</a></li>
                            <li><a href="home-tech-blog.html">Home Tech Blog</a></li>
                            <li><a href="home-lifestyle-blog.html">Home Lifestyle Blog</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Categories</a>
                        <ul class="axil-submenu">
                            <li><a href="post-details.html">Accessibility</a></li>
                            <li><a href="post-details.html">Android Dev</a></li>
                            <li><a href="post-details.html">Accessibility</a></li>
                            <li><a href="post-details.html">Android Dev</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Post Format</a>
                        <ul class="axil-submenu">
                            <li><a href="post-format-standard.html">Post Format Standard</a></li>
                            <li><a href="post-format-video.html">Post Format Video</a></li>
                            <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                            <li><a href="post-format-text.html">Post Format Text Only</a></li>
                            <li><a href="post-layout-1.html">Post Layout One</a></li>
                            <li><a href="post-layout-2.html">Post Layout Two</a></li>
                            <li><a href="post-layout-3.html">Post Layout Three</a></li>
                            <li><a href="post-layout-4.html">Post Layout Four</a></li>
                            <li><a href="post-layout-5.html">Post Layout Five</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="axil-submenu">
                            <li><a href="post-list.html">Post List</a></li>
                            <li><a href="archive.html">Post Archive</a></li>
                            <li><a href="author.html">Author Page</a></li>
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="home-lifestyle-blog.html">Home</a></li>
                                    <li><a href="home-tech-blog.html">About</a></li>
                                    <li><a href="home-lifestyle-blog.html">Newsletter</a></li>
                                    <li>
                                        <div class="buy-now-btn">
                                        <a href="#">Store <span class="badge">Coming Soon</span></a>
                                    </div>
                                    </li>
                                    <li><a href="home-lifestyle-blog.html">Resources</a></li>
                                    <li><a href="home-tech-blog.html">Contact</a></li>
                </ul> 
                {{-- <div class="buy-now-btn">
                    <a href="#">Buy Now <span class="badge">$15</span></a>
                </div> --}}
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
                                <a href="index.html">
                                    <img class="dark-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                                    <img class="white-logo" src="{{ asset('/images/logo/logo.png') }}" alt="Daryl Dauphin Logo">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <!-- Start Post List  -->
                            <div class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Me</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="https://www.facebook.com/DarylDauphin/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/daryldauphin/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCjfUJkrcF6xeqD_8E1Wp-Rg"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/daryldauphin/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/daryldauphin/"><i class="fab fa-discord"></i></a></li>
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
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Contact Us">Contact</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Store">Store</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Privacy Policy">Privacy Policy</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="copyright-right text-start text-md-end mt_sm--20">
                                <p class="b3">All Rights Reserved © 2022</p>
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

</body>

</html>