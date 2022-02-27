@extends('frontEnd.layout.master')
@section('pageTitle', $preparation->title.' | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
@endpush

@section('content')
<div id="content" class="site-content">
    <div class="entry-content">
        <div class="container">
            <div class="row">

                <div id="primary" class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <article class="post-box post type-post hentry">
                            <div class="entry-media">
                                <a href="post.html">
                                    <img src=" {{ asset($preparation->image) }}" width="100%" alt="">
                                </a>
                            </div>
                            <div class="inner-post">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <time class="entry-date published">{{ $preparation->created_at->format('Y-m-d') }}</time>
                                        </span>
                                        <span class="posted-in">
                                            <a href="#" rel="category tag">{{ $preparation->title }}</a>
                                        </span>
                                    </div>
                                </header>

                                <div class="entry-summary">

                                    <p>{!! $preparation->post_content !!}</p>

                                </div>


                            </div>
                        </article>

                        <div id="comments" class="comments-area">
                            <h4 class="comments-title">Comments (4)</h4>
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>

                        </div>

                    </main>
                    <!-- #main -->
                </div>

            </div>
        </div>
    </div>
</div>





@endsection

@push('script')


@endpush
