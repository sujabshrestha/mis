@extends('frontEnd.layout.master')
@section('pageTitle', $postType->title .' | '.getSiteSetting('site_title'))
@section('pageName', $postType->title)
@push('style')
@endpush

@section('content')

    <!-- Page title -->
    @include('frontEnd.layout.page-title')
    <!-- /.page-title -->

    <section class="flat-row what-we-do offer" id="services">
        <div class="container">
            <div class="row">
                @if($posts)
                    @foreach($posts as $post)
                <div class="col-md-4 col-sm-6 col-xs-6 mt-30">
                    <div class="iconbox-item">
                        <div class="iconbox left style3">
                            {!! gobalPostImage($post->id, 'full') !!}
                            <div class="box-content">
                                <div class="box-title">
                                    <a href="{{ route('front.unitSingle', [$postType->slug, $post->slug]) }}">{{ $post->title }}</a>
                                </div>
                                {!! substr(strip_tags($post->post_content), 0 , 100) !!}
                                <a href="{{ route('front.unitSingle', [$postType->slug, $post->slug]) }}" class="box-redmore">Read More</a>
                            </div>

                        </div><!-- /.iconbox -->
                    </div><!-- /.iconbox-item -->

                </div>
                    @endforeach
                @endif
            </div>
        </div><!-- /.container -->
    </section>

@endsection

@push('script')


@endpush