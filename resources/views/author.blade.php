<x-layout> 

        <?php
            use Canvas\Models\Post;
            $posts = Post::latest()->get();
        ?>
        <!-- Start Author Area  -->
        <div class="axil-author-area axil-author-banner bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-author">
                            <div class="media">
                                <div class="thumbnail">
                                    {{-- <a href="/author/{{ $user[0]->name }}">
                                        <img src="{{ $user[0]->avatar }}" style="width:5%" alt="Author Images">
                                    </a> --}}
                                </div>
                                <div class="media-body">
                                    <div class="author-info">
                                        <h1 class="title"><a href="/author/{{ $user[0]->name }}">{{$user[0]->name}}</a></h1>
                                        <span class="b3 subtitle">Software Developer - Digital Entrepreneur - Family Man</span>
                                    </div>
                                    <div class="content">
                                        <p class="b1 description">{{$user[0]->summary}}</p>
                                        <ul class="social-share-transparent size-md">
                                            <li><a href="https://twitter.com/hustleandcode_" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/hustleandcode_" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCUIr5dSV7bNLbjL7IctsHtw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="https://discord.gg/9mCJSXSWc9" target="_blank"><i class="fab fa-discord"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Author Area  -->

        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        @foreach ($posts as $result)
                    <x-category-post-list :result="$result"/>
                    @if ($loop->iteration == 5)
                        @break
                        @endif
                @endforeach
                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        <div class="sidebar-inner">
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_categories mb--30">
                                <ul>
                                    <?php
                                        use Canvas\Models\Topic;
                                        $categories = Topic::all()
                                    ?>
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
                    <?php
                    $posts = Post::latest()->paginate(5)->withQueryString();
                    ?>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->
        <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-footer-style-1 footer-variation-2">
        </x-layout> 
