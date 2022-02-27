@extends('frontEnd.layout.master')
@section('pageTitle', $unit->title.' | '.getSiteSetting('site_title'))
@section('pageName', $postType->title)
@push('style')
@endpush

@section('content')

    <!-- Page title -->
    @include('frontEnd.layout.page-title')
    <!-- /.page-title -->

    <section class="main-content blog-posts blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-wrap">
                        <article class="post clearfix">
                            <div class="featured-post">
                                {!! gobalPostImage($unit->id, 'full') !!}
                                <ul class="post-comment">
                                    <li class="date">
                                        <span class="day"> {{ $unit->created_at->format('d') }} </span>
                                    </li>
                                    <li class="comment">
                                        {{ $unit->created_at->format('F') }}
                                    </li>
                                </ul><!-- /.post-comment -->
                            </div><!-- /.feature-post -->
                            <div class="content-post">
                                <h2 class="title-post"><a href="javascript:void(0)">{{ $unit->title }}</a></h2>

                                <div class="entry excerpt">
                                    {!! $unit->post_content !!}


                                </div>

                            </div><!-- /.content-post -->
                        </article>

                        <div class="main-single">
                            <div style="text-align: center" class="text-center sharethis-inline-share-buttons"></div>
                            <div class="comments-area">
                                <div class="comment-respond" id="respond">
                                    <h2 class="comment-reply-title">Leave Comment</h2>
                                    <div class="fb-comments" data-href="{{ route('front.unitSingle', [$postType->slug, $unit->slug]) }}" data-numposts="5" data-width="100%"></div>
                                </div><!-- /.comment-respond -->
                            </div><!-- /.comments-area -->
                        </div>

                    </div><!-- /.post-wrap -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-4">
                    <div class="sidebar">



                        <div class="widget widget-recent-news">
                            <h5 class="widget-title">Others {{ $postType->title }} </h5>
                            <ul>
                                @if($posts)
                                    @foreach($posts as $post)
                                <li><a href="{{ route('front.blogSingle', $post->slug) }}">{{ $post->title }}</a></li>
                                    @endforeach
                                @endif

                            </ul>
                        </div><!-- /.widget-popular-news -->




                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection

@push('script')


@endpush