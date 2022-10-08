<x-layout>
    <h1 class="d-none">Hustle and Code</h1>
    <div class="slider-area bg-color-grey">
        <div class="axil-slide slider-style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-activation axil-slick-arrow">
                            <!-- Start Single Slide  -->
                            <div class="content-block">
                                <!-- Start Post Thumbnail  -->
                                <div class="post-thumbnail">
                                    <a href="/posts/{{ $posts[0]->slug }}">
                                        <img src="{{ $posts[0]->featured_image }}" alt="Post Images">
                                    </a>
                                </div>
                                <!-- End Post Thumbnail  -->
                                <!-- Start Post Content  -->
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">                            
                                            <a class="hover-flip-item-wrapper" href="/categories/{{$posts[0]->topic[0]->slug}}">
                                                <span class="hover-flip-item">
                                                    <span data-text="{{$posts[0]->topic[0]->name}}">{{$posts[0]->topic[0]->name}}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="title"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>
                                    <!-- Post Meta  -->
                                    <div class="post-meta-wrapper with-button">
                                        <div class="post-meta">
                                            <div class="post-author-avatar border-rounded">
                                                <img src="{{ $posts[0]->user->avatar }}" alt="Author Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="post-author-name">
                                                    <a class="hover-flip-item-wrapper" href="/author/{{ $posts[0]->user->name }}">
                                                        <span class="hover-flip-item">
                                                            <span data-text="{{$posts[0]->user->name}}">{{$posts[1]->user->name}}</span>
                                                        </span>
                                                    </a>
                                                </h6>
                                                <ul class="post-meta-list">
                                                    <li>Published <time>{{ $posts[0]->created_at->diffForHumans() }}</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="social-share-transparent justify-content-end">
                                        </ul>
                                        <div class="read-more-button cerchio">
                                            <a class="axil-button button-rounded hover-flip-item-wrapper" href="/posts/{{$posts[0]->slug}}">
                                                <span class="hover-flip-item">
                                                    <span data-text="Read Post">Read Post</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Content  -->
                            </div>
                        <!-- End Single Slide  -->
                        <div class="content-block">
                            <!-- Start Post Thumbnail  -->
                            <div class="post-thumbnail">
                                <a href="/posts/{{ $posts[1]->slug }}">
                                    <img src="{{ $posts[1]->featured_image }}" alt="Post Images">
                                </a>
                            </div>
                            <!-- End Post Thumbnail  -->
                            <!-- Start Post Content  -->
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="/categories/{{$posts[1]->topic[0]->slug}}">
                                            <span class="hover-flip-item">
                                                <span data-text="{{$posts[1]->topic[0]->name}}">{{$posts[1]->topic[0]->name}}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="title"><a href="/posts/{{ $posts[1]->slug }}">{{ $posts[1]->title }}</a></h2>
                                <!-- Post Meta  -->
                                <div class="post-meta-wrapper with-button">
                                    <div class="post-meta">
                                        <div class="post-author-avatar border-rounded">
                                            <img src="{{ $posts[0]->user->avatar }}" alt="Author Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="/author/{{ $posts[1]->user->name }}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="{{$posts[1]->user->name}}">{{$posts[1]->user->name}}</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Published <time>{{ $posts[1]->created_at->diffForHumans() }}</time>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                    </ul>
                                    <div class="read-more-button cerchio">
                                        <a class="axil-button button-rounded hover-flip-item-wrapper" href="/posts/{{$posts[1]->slug}}">
                                            <span class="hover-flip-item">
                                                <span data-text="Read Post">Read Post</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Content  -->
                        </div>
                        <div class="content-block">
                            <!-- Start Post Thumbnail  -->
                            <div class="post-thumbnail">
                                <a href="/posts/{{ $posts[2]->slug }}">
                                    <img src="{{ $posts[2]->featured_image }}" alt="Post Images">
                                </a>
                            </div>
                            <!-- End Post Thumbnail  -->
                            <!-- Start Post Content  -->
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="/categories/{{$posts[2]->topic[0]->slug}}">
                                            <span class="hover-flip-item">
                                                <span data-text="{{$posts[2]->topic[0]->name}}">{{$posts[0]->topic[0]->name}}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="title"><a href="/posts/{{ $posts[2]->slug }}">{{ $posts[2]->title }}</a></h2>
                                <!-- Post Meta  -->
                                <div class="post-meta-wrapper with-button">
                                    <div class="post-meta">
                                        <div class="post-author-avatar border-rounded">
                                            <img src="{{ $posts[0]->user->avatar }}" alt="Author Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="/author/{{ $posts[2]->user->name }}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="{{$posts[2]->user->name}}">{{$posts[2]->user->name}}</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Published <time>{{ $posts[2]->created_at->diffForHumans() }}</time>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                    </ul>
                                    <div class="read-more-button cerchio">
                                        <a class="axil-button button-rounded hover-flip-item-wrapper" href="/posts/{{$posts[2]->slug}}">
                                            <span class="hover-flip-item">
                                                <span data-text="Read Post">Read Post</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Content  -->
                        </div>
                            <!-- End Post Content  -->
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
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
    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="axil-banner">
                        <div class="thumbnail">
                            <a href="#">
                                {{-- <img class="w-100" src="assets/images/add-banner/banner-01.png" alt="Banner Images"> --}}
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
                @if ($loop->iteration == 8)
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
            <h5 class="widget-title">Follow Us</h5>
            <!-- Start Post List  -->
            <ul class="social-icon md-size justify-content-center">
                <li><a href="https://twitter.com/hustleandcode_" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/hustleandcode_" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCUIr5dSV7bNLbjL7IctsHtw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://discord.gg/9mCJSXSWc9" target="_blank"><i class="fab fa-discord"></i></a></li>
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
    <x-social-banner />
    <!-- Start Video Area  -->
    <x-video-area />
    <!-- End Video Area  -->
</x-layout>
