
<div class="content-block">
    <!-- Start Post Thumbnail  -->
    <div class="post-thumbnail">
        <a href="post-details.html">
            <img src="{{ asset('/images/post-images/gallery-post-01.jpg') }}" alt="Post Images">
        </a>
    </div>
    <!-- End Post Thumbnail  -->
    <!-- Start Post Content  -->
    <div class="post-content">
        <div class="post-cat">
            <div class="post-cat-list">
                <a class="hover-flip-item-wrapper" href="/categories/{{$post->category->slug}}">
                    <span class="hover-flip-item">
                        <span data-text="{{$post->category->name}}">{{$post->category->name}}</span>
                    </span>
                </a>
            </div>
        </div>
        <h2 class="title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>

        <!-- Post Meta  -->
        <div class="post-meta-wrapper with-button">
            <div class="post-meta">
                <div class="post-author-avatar border-rounded">
                    <img src="{{ asset('/images/logo/profile.jpg') }}" alt="Author Images">
                </div>
                <div class="content">
                    <h6 class="post-author-name">
                        <a class="hover-flip-item-wrapper" href="/?author={{ $post->author->username }}">
                            <span class="hover-flip-item">
                                <span data-text="{{$post->author->name}}">{{$post->author->name}}</span>
                            </span>
                        </a>
                    </h6>
                    <ul class="post-meta-list">
                        <li> Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="social-share-transparent justify-content-end">
                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fas fa-link"></i></a></li> --}}
            </ul>
            <div class="read-more-button cerchio">
                <a class="axil-button button-rounded hover-flip-item-wrapper" href="/posts/{{$post->slug}}">
                    <span class="hover-flip-item">
                        <span data-text="Read Post">Read Post</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Post Content  -->
</div>