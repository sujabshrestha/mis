@extends('frontEnd.layout.master')
@section('pageTitle', 'Contact Us | '.getSiteSetting('site_title'))
@section('pageName', 'Contact Us')
@push('style')

@endpush

@section('content')

<div id="content" class="site-content">
    <div class="entry-content">
        <div class="container">
            <div class="boxed-content">

                <section class="wpb_row row-fluid section-padd no-bot">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12 col-md-9">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>Office</span></h6>
                                            <h2 class="section-title">{{ getSiteSetting('address') }}</h2>
                                        </div>

                                        <div class="empty_space_12"><span class="empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-12 col-md-8">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element contact-info">
                                            <div class="wpb_wrapper">
                                                <p><a href="mailto:info.consultax@gmail.com"><i class="fa fa-envelope"> {{ getSiteSetting('primary_email') }}</i></a><a href="tel:+911 0113 0114"><i class="fa fa-phone-square"> +977-{{ getSiteSetting('primary_phone')  }}</i></a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-12 col-md-4">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element socials text-right md-hidden sm-hidden">
                                            <div class="wpb_wrapper">
                                                <p><a href="{{ getSiteSetting('fb_link') }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-official">fb</i></a><a href="{{ getSiteSetting('twitter_link') }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter">tw</i></a><a href="{{ getSiteSetting('insta_link') }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram">pr</i></a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="wpb_row row-fluid section-padd no-bot">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="gray-line">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="wpb_row row-fluid section-padd">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12 col-md-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>CONTACT FORM</span></h6>
                                            <h2 class="section-title">How can we help</h2>
                                        </div>

                                        <div class="empty_space_12"><span class="empty_space_inner"></span></div>
                                        <div role="form" class="wpcf7" id="wpcf7-f1989-p967-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="{{ route('front.submitContact') }}" method="post" class="wpcf7-form">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control" required="" placeholder="Name"></span></div>
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject"></span></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control" placeholder="Phone Number"></span></div>
                                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address"></span></div>
                                                </div>

                                                <div class="contact-mess"><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="Messenger"></textarea></span></div>
                                                <p>
                                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                                </p>
                                            </form>
                                        </div>
                                        <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <iframe src="{{ getSiteSetting('map_location') }}" height="300px" width="100%" frameborder="0"></iframe>

            </div>
        </div>
    </div>
</div>

@endsection

@push('script')


@endpush
