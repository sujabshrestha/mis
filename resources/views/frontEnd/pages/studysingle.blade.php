@extends('frontEnd.layout.master')
@section('pageTitle', $study->title.' | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
<style>

</style>
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
                                    <img src=" {{ asset($study->image) }}" width="100%" alt="">
                                </a>
                            </div>
                            <div class="inner-post">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <time class="entry-date published">{{ $study->created_at->format('Y-m-d') }}</time>
                                        </span>
                                        <span class="posted-in">
                                            <a href="#" rel="category tag">{{ $study->title }}</a>
                                        </span>
                                    </div>
                                </header>

                                <div class="entry-summary">

                                    <p>{!! $study->post_content !!}</p>

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
                    <section id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tagcloud"><a href="#">Advisor</a>
                            <a href="#">Agency</a>
                            <a href="#">Business</a>
                            <a href="#">Consuting</a>
                            <a href="#">Finacial</a>
                            <a href="#">Franchising</a></div>
                    </section>
                </aside>

            </div>
        </div>
    </div>
</div>





@endsection

@push('script')

<script async defer src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6"></script>
@endpush
