
            <!-- Start Single Post  -->
            <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
                    <div class="post-content">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper" href="/categories/{{$post->topic[0]->slug}}">
                                    <span class="hover-flip-item">
                                        <span data-text="{{$post->topic[0]->name}}">{{$post->topic[0]->name}}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h4 class="title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
                        <div class="post-meta">
                            <div class="post-author-avatar border-rounded">
                                <img src="{{ asset('/images/logo/profile.jpg') }}" alt="Author Images">
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
                                    <li>Published <time>{{ $post->created_at->diffForHumans() }}</time></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail">
                        <a href="/posts/{{ $post->slug }}">
                            <img src="{{ $post->featured_image }}" alt="Post Images">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Single Post  -->

