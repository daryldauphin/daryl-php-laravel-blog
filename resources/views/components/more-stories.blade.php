<?php
use Canvas\Models\Post;

$post = Post::get();
?>
 @for ($i = 0; $i < 1; $i++)
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <!-- Start Post List  -->
    <div class="post-stories content-block mt--30">
        <div class="post-thumbnail">
            <a href="post-details.html">
                <img src="assets/images/post-single/stories-03.jpg" alt="Post Images">
            </a>
        </div>
        <div class="post-content">
            <div class="post-cat">
                <div class="post-cat-list">
                    {{-- <?php
                        dd($post[0]->topic)
                    ?> --}}
                    <a href="/categories/{{$post->topic[0]->name}}">{{$post->topic[0]->name}}</a>
                </div>
            </div>
            <h5 class="title"><a href="/posts/{{ $post[0]->slug }}">{{ $post[0]->title }}</a></h5>
        </div>
    </div>
    <!-- End Post List  -->
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <!-- Start Post List  -->
    <div class="post-stories content-block mt--30">
        <div class="post-thumbnail">
            <a href="post-details.html">
                <img src="assets/images/post-single/stories-03.jpg" alt="Post Images">
            </a>
        </div>
        <div class="post-content">
            <div class="post-cat">
                <div class="post-cat-list">
                    <a href="/categories/{{$post[0]->topic[0]->name}}">{{$post[0]->topic[0]->name}}</a>
                </div>
            </div>
            <h5 class="title"><a href="/posts/{{ $post[1]->slug }}">{{ $post[1]->title }}</a></h5>
        </div>
    </div>
    <!-- End Post List  -->
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <!-- Start Post List  -->
    <div class="post-stories content-block mt--30">
        <div class="post-thumbnail">
            <a href="post-details.html">
                <img src="assets/images/post-single/stories-03.jpg" alt="Post Images">
            </a>
        </div>
        <div class="post-content">
            <div class="post-cat">
                <div class="post-cat-list">
                    <a href="/categories/{{$post[0]->topic[0]->name}}">{{$post[0]->topic[0]->name}}</a>
                </div>
            </div>
            <h5 class="title"><a href="/posts/{{ $post[2]->slug }}">{{ $post[2]->title }}</a></h5>
        </div>
    </div>
    <!-- End Post List  -->
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <!-- Start Post List  -->
    <div class="post-stories content-block mt--30">
        <div class="post-thumbnail">
            <a href="post-details.html">
                <img src="assets/images/post-single/stories-03.jpg" alt="Post Images">
            </a>
        </div>
        <div class="post-content">
            <div class="post-cat">
                <div class="post-cat-list">
                    <a href="/categories/{{$post[0]->topic[0]->name}}">{{$post[0]->topic[0]->name}}</a>
                </div>
            </div>
            <h5 class="title"><a href="/posts/{{ $post[3]->slug }}">{{ $post[3]->title }}</a></h5>
        </div>
    </div>
    <!-- End Post List  -->
</div>
@endfor