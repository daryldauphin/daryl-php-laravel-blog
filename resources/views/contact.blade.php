<x-layout> 

        <!-- Start Banner Area  -->
        <div class="axil-banner banner-style-1 bg_image bg_image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <h1 class="title">Contact Us</h1>
                            <p class="description">Wherever &#38; whenever you need us. We are here for you – contact us for all your support needs.<br /> be it technical, general queries or information support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->
        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <!-- Start About Area  -->
                        <div class="axil-about-us">
                            <div class="inner">
                                    <div data-tf-widget="rGCNRph7" data-tf-iframe-props="title=Contact Form" data-tf-medium="snippet" style="width:100%;height:500px;"></div><script src="//embed.typeform.com/next/embed.js"></script>
                            </div>
                            <!-- Start Contact Form  -->
                            <!-- End Contact Form  -->
                        </div>
                        <!-- End About Area  -->
                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        <div class="sidebar-inner">
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_categories mb--30">
                                <ul>
                                    <!-- Start Category List  -->
                                    @foreach ($categories as $category)
                                    <x-category-list :category="$category"/>
                                    @if ($loop->iteration == 4)
                                    @break
                                    @endif
                                    @endforeach
                                    <!-- End Category List  -->
                                </ul>
                            </div>
                            <!-- End Single Widget  -->
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_search mb--30">
                                <h5 class="widget-title">Search</h5>
                                <form method="GET" action="#">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{request('search')}}">
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget  -->
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_social mb--30">
                                <h5 class="widget-title">Follow Me</h5>
                                <!-- Start Post List  -->
                                <ul class="social-icon md-size justify-content-center">
                                    <li><a href="https://www.facebook.com/DarylDauphin/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/daryldauphin/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCjfUJkrcF6xeqD_8E1Wp-Rg"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/daryldauphin/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://discord.gg/9mCJSXSWc9"><i class="fab fa-discord"></i></a></li>
                                </ul>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->
                        </div>
                        <!-- End Sidebar Area  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->
    </x-layout> 
