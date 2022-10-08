<?php
$parser = new \Gbuckingham89\YouTubeRSSParser\Parser();

$rss_url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCjfUJkrcF6xeqD_8E1Wp-Rg';
$parser->loadUrl($rss_url);

$youtube_feed = $parser->channel->videos;
use Illuminate\Support\Arr;
?>

<div class="axil-video-post-area axil-section-gap bg-color-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Recent Videos</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                <!-- Start Post List  -->
                <div class="content-block post-default image-rounded mt--30">
                    <div class="post-thumbnail">
                        <a href="{{$youtube_feed[0]->url }}">
                            <img src="{{ $youtube_feed[0]->thumbnail_url }}" alt="Post Images">
                        </a>
                        <a class="video-popup position-top-center" href="{{ $youtube_feed[0]->url }}"><span
                                class="play-icon"></span></a>
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
                        <h3 class="title"><a href="{{ $youtube_feed[0]->url }}">{{ $youtube_feed[0]->title }}</a></h3>
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
                                        <li> Published <time>{{ $youtube_feed[0]->published_at->diffForHumans() }}</time></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Post List  -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                <div class="row">
                    <!-- Start Video List  -->
                    <?php
                    $filtered = Arr::except($youtube_feed, [0]);?>
                    @foreach ($filtered as $video)
                        <x-video-loop :video="$video"/>
                    @if ($loop->iteration == 4)
                        @break
                        @endif
                    @endforeach
                    <!-- End Video List  -->
                </div>
            </div>
        </div>
        <div class="tagcloud middle-gap">
            <a href="/all-videos">See More Videos</a>
        </div>
    </div>
</div>