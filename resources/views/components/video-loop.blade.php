
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="content-block post-default image-rounded mt--30">
        <div class="post-thumbnail">
            <a href="{{ $video->url }}">
                <img src="{{ $video->thumbnail_url }}" alt="Post Images">
            </a>
            <a class="video-popup size-medium position-top-center" href="{{ $video->url }}"><span class="play-icon"></span></a>
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
            <h5 class="title"><a href="{{ $video->url }}">{{ $video->title }}</a></h5>
        </div>
    </div>
</div>
