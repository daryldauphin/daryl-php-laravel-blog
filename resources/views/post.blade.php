<x-layout> 
        <!-- Start Post Single Wrapper  -->
        <div class="post-single-wrapper axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Start Banner Area -->
                        <div class="banner banner-single-post post-formate post-layout pb--40">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Single Slide  -->
                                        <div class="content-block">
                                            <!-- Start Post Content  -->
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="/categories/{{$post->topic[0]->name}}">
                                                            <span class="hover-flip-item">
                                                                <span data-text="{{$post->topic[0]->name}}">{{$post->topic[0]->name}}</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h1 class="title">{{ $post->title }}</h1>
                                                <!-- Post Meta  -->
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="post-author-avatar border-rounded">
                                                            <img src="{{ $post->user->avatar }}" alt="Author Images">
                                                        </div>
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="/author/{{ $post->user->name }}">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="{{$post->user->name}}">{{$post->user->name}}</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Post Content  -->
                                        </div>
                                        <!-- End Single Slide  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Banner Area -->
                        <!-- Start Blog Details  -->
                        <div class="axil-post-details">
                            <p>{!! $post->body !!}</p>
                            <div class="tagcloud">
                                @foreach ($post->tags as $post_tags)
                                    <a href="/categories/{{ $post_tags->name }}">{{  $post_tags->name }}</a>
                                @endforeach
                            </div>
                            <div class="social-share-block">
                                {{-- <div class="post-like">
                                    <a href="#"><i class="fal fa-thumbs-up"></i><span>2.2k Like</span></a>
                                </div>
                                <ul class="social-icon icon-rounded-transparent md-size">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul> --}}
                            </div>
                            <!-- Start Author  -->
                            <div class="about-author">
                                <div class="media">
                                    <div class="thumbnail" style="width: 70px; margin-right: 20px;">
                                        <a href="/author/{{ $post->user->name }}">
                                            <img src="{{ $post->user->avatar }}" alt="Author Images">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="/author/{{ $post->user->name }}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="{{$post->user->name}}">{{$post->user->name}}</span>
                                                    </span>
                                                </a>
                                            </h5>
                                            <span class="b3 subtitle">Software Developer - Digital Entrepreneur - Family Man</span>
                                        </div>
                                        <div class="content">
                                            <p class="b1 description">{{$post->user->summary}}</p>
                                            <ul class="social-share-transparent size-md">
                                                <li><a href="https://www.facebook.com/DarylDauphin/"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.instagram.com/daryldauphin/"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://www.youtube.com/channel/UCjfUJkrcF6xeqD_8E1Wp-Rg"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="https://www.linkedin.com/in/daryldauphin/"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://discord.gg/9mCJSXSWc9"><i class="fab fa-discord"></i></a></li>
                                                <li><a href="/contact"><i class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Author  -->

                            <!-- Start Comment Form Area  -->
                            @include('partials.disqus-comment')
                            <!-- End Comment Form Area  -->


                        </div>
                        <!-- End Blog Details  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post Single Wrapper  -->
        {{-- <!-- Start More Stories Area  -->
        <div class="axil-more-stories-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">More Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Stories Post  -->

                        <!-- Start Post List  -->
                        @foreach ($posts as $post)
                    <x-more-stories :pos="$post"/>
                    @if ($loop->iteration == 4)
                        @break
                        @endif
                    @endforeach
                        <!-- End Post List  -->
                </div>
            </div>
        </div> --}}
        <!-- End More Stories Area  -->
</x-layout>
