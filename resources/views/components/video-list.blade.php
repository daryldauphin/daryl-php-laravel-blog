                        <!-- Start Post List  -->
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="{{ $videolist->url }}">
                                    <img src="{{ $videolist->thumbnail_url }}" alt="Post Images">
                                </a>
                                <a class="video-popup size-medium position-top-center icon-color-secondary" href="{{ $videolist->url }}"><span class="play-icon"></span></a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="https://www.youtube.com/channel/UCjfUJkrcF6xeqD_8E1Wp-Rg">
                                            <span class="hover-flip-item">
                                                <span data-text="YOUTUBE">YOUTUBE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{ $videolist->url }}">{{ $videolist->title }}</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Daryl Dauphin">Daryl Dauphin</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                

                                                <li> Published <time>{{ $videolist->published_at->diffForHumans() }}</time></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->