@extends('frontEnd.layout.master')
@section('pageTitle', 'About Us | '.getSiteSetting('site_title'))
@section('pageName', 'About Us')
@push('style')
<style>
</style>
@endpush

@section('content')
<div id="content" class="site-content">

    <div class="entry-content">
        <div class="container">
            <div class="boxed-content">

                <section class="wpb_row row-fluid section-padd">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>ABOUT US</span></h6>
                                            <h2 class="section-title">{{ $about->title }}</h2>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <p>{!! $about->post_content !!}
                                                    <a class="pagelink" href="#">Our team</a>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="ot-socials ">
                                            <span>Follow us:</span>
                                            <a target="_blank" href="{{ getSiteSetting('fb_link') }}"><i class="fa fa-facebook"></i></a>
                                            <a target="_blank" href="{{ getSiteSetting('twitter_link') }}"><i class="fa fa-twitter"></i></a>
                                            <a target="_blank" href="{{ getSiteSetting('instagram_link') }}"><i class="fa fa-instagram"></i></a>
                                            <a target="_blank" href="{{ getSiteSetting('youtube_link') }}"><i class="fa fa-linkedin"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
</div>

@endsection

@push('script')


@endpush






