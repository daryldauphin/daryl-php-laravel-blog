<!-- Start Post List  -->
<div class="content-block post-list-view mt--30">
    <div class="post-thumbnail">
        <a href="/posts/{{ $result->slug }}">
            <img src="{{ $result->featured_image }}" alt="Post Images">
        </a>
    </div>
    <div class="post-content">
        {{-- <div class="post-cat">
            <div class="post-cat-list">
                <a class="hover-flip-item-wrapper" href="/posts/{{ $result->slug }}">
                    <span class="hover-flip-item">
                        <span data-text=" {{$result->topic[0]->name}}"> {{$result->topic[0]->name}}</span>
                    </span>
                </a>
            </div>
        </div> --}}
        <h4 class="title"><a href="/posts/{{ $result->slug }}">{{ $result->title }}</a></h4>
        <div class="post-meta-wrapper">
            <div class="post-meta">
                <div class="content">
                    <h6 class="post-author-name">
                        <a class="hover-flip-item-wrapper" href="/author/{{ $result->user->name }}">
                            <span class="hover-flip-item">
                                <span data-text="{{$result->user->name}}">{{$result->user->name}}</span>
                            </span>
                        </a>
                    </h6>
                    <ul class="post-meta-list">
                        <li>Published <time>{{ $result->created_at->diffForHumans() }}</time></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Post List  -->
