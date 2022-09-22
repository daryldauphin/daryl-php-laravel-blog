<x-layout>
    <!-- Start Banner Area -->
    <x-post-card-header :post="$posts[0]"/>
    <x-banner-slide2 :post="$posts[1]"/>
    <x-banner-slide3 :post="$posts[2]"/>
    <!-- End Banner Area -->

    <!-- Start Featured Area  -->
    <div class="axil-featured-post axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="title">More Featured Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts->skip(3) as $post)
                    <x-featured-area :post="$post"/>
                    @if ($loop->iteration == 2)
                        @break
                        @endif
                @endforeach
        </div>
    </div>
</div>
    <!-- End Featured Area  -->

    <!-- Start Tab Area  -->
    {{-- <x-first-banner /> --}}
    <!-- End Tab Area  -->

    <!-- Start Categories List  -->
    {{-- <x-categories /> --}}
    <!-- Start Categories List  -->

    <!-- Start Trending Post Area  -->
    {{-- <x-popular /> --}}
    <!-- End Trending Post Area  -->

    <!-- Start Post Grid Area  -->


    <!-- End Post Grid Area  -->

    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="axil-banner">
                        <div class="thumbnail">
                            <a href="#">
                                <img class="w-100" src="assets/images/add-banner/banner-01.png" alt="Banner Images">
                            </a>
                        </div>
                    </div>

                    @foreach ($posts->skip(5) as $post)
                    <x-post-list :post="$post"/>
                    @if ($loop->iteration == 5)
                        @break
                        @endif
                @endforeach
                <div class="tagcloud middle-gap">
                    <a href="/all-posts">See More Posts</a>
                </div>
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
                <li><a href="https://www.linkedin.com/in/daryldauphin/"><i class="fab fa-discord"></i></a></li>
            </ul>
            <!-- End Post List  -->
        </div>
        <!-- End Single Widget  -->

        {{-- <!-- Start Single Widget  -->
        <div class="axil-single-widget widget widget_instagram mb--30">
            <h5 class="widget-title">Instagram</h5>
            <!-- Start Post List  -->
            <ul class="instagram-post-list-wrapper">
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="assets/images/small-images/instagram-01.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="assets/images/small-images/instagram-02.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="assets/images/small-images/instagram-03.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="assets/images/small-images/instagram-04.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="assets/images/small-images/instagram-05.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="assets/images/small-images/instagram-06.jpg" alt="Instagram Images">
                    </a>
                </li>
            </ul>
            <!-- End Post List  -->
        </div>
        <!-- End Single Widget  --> --}}
    </div>
    <!-- End Sidebar Area  -->



</div>
</div>
</div>
</div>
    <!-- End Post List Wrapper  -->
    
    <x-social-banner />

    <!-- Start Video Area  -->
    <x-video-area />
    <!-- End Video Area  -->

    <!-- Start Instagram Area  -->
    {{-- <x-instagram /> --}}
    <!-- End Instagram Area  -->
</x-layout>
