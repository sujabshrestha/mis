@extends('frontEnd.layout.master')
@section('pageTitle', $philosophy->title.' | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
@endpush

@section('content')
<div id="content" class="site-content">

    <div class="entry-content">
        <div class="container">
            <div class="row">

                <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <article class="post-box post type-post hentry">
                            <div class="entry-media">
                                <a href="post.html">
                                    <img src=" {{ asset($philosophy->image) }}" width="100%" alt="">
                                </a>
                            </div>
                            <div class="inner-post">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <time class="entry-date published">{{ $philosophy->created_at->format('Y-m-d') }}</time>
                                        </span>
                                        <span class="posted-in">
                                            <a href="#" rel="category tag">{{ $philosophy->title }}</a>
                                        </span>
                                    </div>
                                </header>

                                <div class="entry-summary">

                                    <p>{!! $philosophy->post_content !!}</p>

                                </div>


                            </div>
                        </article>

                        <div id="comments" class="comments-area">
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
                        </div>

                    </main>
                    <!-- #main -->
                </div>

                <aside id="sidebar" class="widget-area primary-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section id="recent_news-1" class="widget widget_recent_news">
                        <h4 class="widget-title">Latest Posts</h4>
                        <ul class="recent-news clearfix">
                            @if(isset($ourphilosophies) && $ourphilosophies->count() > 0)
                            @foreach($ourphilosophies->take(4) as $ourphilosophy)
                            <li class="clearfix ">
                                <div class="thumb">
                                    <a href="post.html">
                                        <img src="{{ asset($ourphilosophy->image) ?? "" }}" height="100px !important" width="100px" alt="">
                                    </a>
                                </div>
                                <div class="entry-header">
                                    <h6>
                                        <a href="{{ route('front.philosophySingle',$ourphilosophy->slug) }}">{{ $ourphilosophy->title }}</a>
                                    </h6>
                                    <span class="post-on">
                                        <span class="entry-date">{{ $ourphilosophy->created_at->format("Y-m-d") }}</span>
                                    </span>
                                </div>
                            </li>
                            @endforeach
                            @endif


                        </ul>

                    </section>
                </aside>

            </div>
        </div>
    </div>
</div>
@endsection

@push('script')


@endpush
