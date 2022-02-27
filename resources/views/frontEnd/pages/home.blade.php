@extends('frontEnd.layout.master')

@push('style')
<style>
.banner-slider{
    margin-bottom: 0 !important;
}
.banner-slider .slick-next{
    right: 45px;
    background: #ec1218;
    padding: 10px;
    height: 40px;
    font-weight: bold;
    border-radius: 4px;
    width: 45px;
    line-height: 29px;
}
.banner-slider .slick-prev{
    left: 45px;
    z-index: 1;
    background: #ec1218;
    padding: 10px;
    height: 40px;
    font-weight: bold;
    border-radius: 4px;
    width: 45px;
    line-height: 29px;
}
    .banner-slider .banner-item{
        position: relative;
        height: calc( 100vh - 160px);;
        z-index: 0;
    }
    .banner-slider .banner-item::after{
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 0;
        background: rgba(0, 0, 0, 0.342)
    }
    .banner-slider .banner-item img{
        height: 100%;
        width: 100%;
    }
    .banner-slider .banner-item .title{
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        z-index: 1;
        justify-content: flex-start;
        margin-left: 10%;
        font-size: 32px;
        font-weight: bold;
        color: white;
        align-items: center;
    }
</style>
@endpush

@section('content')
<div id="page" class="site">


    <div id="content" class="site-content">
        <div class="banner-slider">
            @if(isset($sliders) && $sliders->count() > 0)
            @foreach ($sliders as $slider)

            <div>
                <div class="banner-item">
                    <img src="{{ asset($slider->image) }}"  alt="">
                    {{-- <div class="title">
                        {{ $slider->title }}
                    </div> --}}

                </div>
            </div>

            @endforeach
            @endif

        </div>
        <section
            class="wpb_row row-fluid section-padd row-has-fill row-o-equal-height row-o-content-middle row-flex bg-light">

            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12 col-md-9">
                        <div class="column-inner">
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                    <div class="wpb_wrapper">
                                        <p>
                                            <a class="pagelink gray" href="{{ route('front.allphilosophy') }}">View all</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(isset($ourphilosophies) && $ourphilosophies->count() > 0)
                    @foreach ($ourphilosophies as $ourphilosophy)


                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div
                                    class="row wpb_row inner row-fluid row-o-equal-height row-o-content-middle row-flex">
                                    <div
                                        class="wpb_column column_container col-sm-12 col-md-6 col-has-fill custom-padd-1">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="bg-second wpb_column column_container col-sm-12 col-md-6">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="empty_space_60 lg-hidden h60">
                                                    <span class="empty_space_inner"></span>
                                                </div>

                                                <div class="section-head padding-box-2 text-light">
                                                    <h6><span>WHO WE ARE</span></h6>
                                                    <h2 class="section-title">{{ $ourphilosophy->title }}</h2>
                                                </div>

                                                <div
                                                    class="wpb_text_column wpb_content_element padding-box-2 text-light">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            {!! $ourphilosophy->post_content !!}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="wpb_text_column wpb_content_element paddtop-75 padding-box-2 info-box text-light">
                                                    <div class="wpb_wrapper">
                                                        <div class="sign">
                                                            <p>
                                                                <!-- <img
                                    class="alignnone size-full wp-image-1087"
                                    src="images/sign1.png"
                                    alt=""
                                    width="79"
                                    height="49"
                                  /> -->
                                                            </p>
                                                            @foreach ($ourphilosophy->postMetas as $key =>
                                                            $philosophymeta)
                                                            @if($philosophymeta->key == "name")
                                                            <h5>{{ $philosophymeta->value ?? '' }}</h5>
                                                            @else
                                                            <p>{{ $philosophymeta->value ?? ''  }}</p>
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="empty_space_60 lg-hidden">
                                                    <span class="empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12 col-md-9">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="section-head">
                                    <h6><span>OUR SERVICES</span></h6>
                                    <h2 class="section-title">What we bring to you</h2>
                                </div>

                                <div class="empty_space_30 md-hidden sm-hidden">
                                    <span class="empty_space_inner"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                    <div class="wpb_wrapper">
                                        <p>
                                            <a class="pagelink gray" href="{{ route('front.allservices') }}">All
                                                services</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($ourservices) && $ourservices->count() > 0)
                    @foreach ($ourservices as $ourservice)
                    <div class="wpb_column column_container col-sm-6 col-md-4">
                        <div class="column-inner">

                            <div class="wpb_wrapper">

                                <div class="service-box icon-box ionic hover-box" style="height: 300px;">
                                    @foreach($ourservice->postMetas as $ourservicemeta)
                                    {!! $ourservicemeta->value !!}
                                    @endforeach
                                    <div class="content-box">
                                        <h4>{{ $ourservice->title }}</h4>
                                        <p>
                                            {!! $ourservice->post_content !!}
                                        </p>
                                        <a class="link-box pagelink"
                                            href="{{ route('front.servicessingle',$ourservice->slug) }}"
                                            target="_self">Read more</a>
                                    </div>
                                </div>

                                <div class="empty_space_30">
                                    <span class="empty_space_inner"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    @endif



                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd-top bg-light" style="display: none">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12 col-md-9">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="section-head">
                                    <h6><span>Our Projects</span></h6>
                                    <h2 class="section-title">We are the leaders</h2>
                                </div>

                                <div class="empty_space_30 md-hidden sm-hidden">
                                    <span class="empty_space_inner"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                    <div class="wpb_wrapper">
                                        <p>
                                            <a class="pagelink gray" href="#">All projects</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd-bot row-has-fill row-full-width row-no-padding bg-light"
            style="display: none">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="project-list-2">
                                <div class="project-slider-2 projects" data-show="1" data-auto="" data-dot="true">
                                    <div class="col-md-12">
                                        <div class="project-item">
                                            <div class="slide-img">
                                                <img src="https://via.placeholder.com/1170x550" alt="" />
                                            </div>

                                            <div class="inner row">
                                                <div class="col-md-3">
                                                    <img src="https://via.placeholder.com/156x29" alt="logo" />
                                                    Contract Project: May 22, 2017
                                                    <div class="gaps lg-hidden"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>
                                                        <a href="#">Financial Report 2019</a>
                                                    </h4>
                                                    <p>
                                                        Fames integer pretium commodo sed orci magnis
                                                        euismod a, fusce felis leo habitant ridiculus
                                                        auctor nisl id, cras nisi porta mus enim dapibus
                                                        aenean.
                                                    </p>
                                                    <a class="pagelink gray" href="#">View details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="project-item">
                                            <div class="slide-img">
                                                <img src="https://via.placeholder.com/1170x550" alt="" />
                                            </div>

                                            <div class="inner row">
                                                <div class="col-md-3">
                                                    <img src="https://via.placeholder.com/156x29" alt="logo" />
                                                    Contract Project: November 15, 2018
                                                    <div class="gaps lg-hidden"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>
                                                        <a href="#">Business Growth Solutions</a>
                                                    </h4>
                                                    <p>
                                                        Fames integer pretium commodo sed orci magnis
                                                        euismod a, fusce felis leo habitant ridiculus
                                                        auctor nisl id, cras nisi porta mus enim dapibus
                                                        aenean.
                                                    </p>
                                                    <a class="pagelink gray" href="#">View details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="project-item">
                                            <div class="slide-img">
                                                <img src="https://via.placeholder.com/1170x550" alt="" />
                                            </div>

                                            <div class="inner row">
                                                <div class="col-md-3">
                                                    <img src="https://via.placeholder.com/156x29" alt="logo" />
                                                    Contract Project: September 14, 2017
                                                    <div class="gaps lg-hidden"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>
                                                        <a href="#">MO Insurance Finance</a>
                                                    </h4>
                                                    <p>
                                                        Fames integer pretium commodo sed orci magnis
                                                        euismod a, fusce felis leo habitant ridiculus
                                                        auctor nisl id, cras nisi porta mus enim dapibus
                                                        aenean.
                                                    </p>
                                                    <a class="pagelink gray" href="#">View details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="project-item">
                                            <div class="slide-img">
                                                <img src="https://via.placeholder.com/1170x550" alt="" />
                                            </div>

                                            <div class="inner row">
                                                <div class="col-md-3">
                                                    <img src="https://via.placeholder.com/156x29" alt="logo" />
                                                    Contract Project: April 24, 2016
                                                    <div class="gaps lg-hidden"></div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h4>
                                                        <a href="#">Enterprise Loan 2016</a>
                                                    </h4>
                                                    <p>
                                                        Fames integer pretium commodo sed orci magnis
                                                        euismod a, fusce felis leo habitant ridiculus
                                                        auctor nisl id, cras nisi porta mus enim dapibus
                                                        aenean.
                                                    </p>
                                                    <a class="pagelink gray" href="#">View details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="arrows-slick">
                                        <button type="button" class="btn-left slick-arrow prev-nav">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                        <button type="button" class="btn-right slick-arrow next-nav">
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd bg-second row-has-fill">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-6">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <h2 class="custom_heading text-light">
                                    Request a Free<br />Call Back
                                </h2>
                                <div class="wpb_text_column wpb_content_element text-light">
                                    <div class="wpb_wrapper">
                                        <p>
                                            Drop your enquiries and we’ll get back to
                                            <br />
                                            you as soon as possible
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div role="form" class="wpcf7" id="wpcf7-f1626-p1530-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="{{ route('front.callbacksubmit') }}" method="post" class="wpcf7-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" name="name" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        required="" aria-invalid="false" placeholder="Your Name" />
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="wpcf7-form-control-wrap your-service">
                                                    <select name="service" class="wpcf7-form-control wpcf7-select"
                                                        aria-invalid="false">
                                                        @if(isset($ourservices) && $ourservices->count() > 0 )
                                                        @foreach($ourservices as $ourservice)

                                                        <option value="{{ $ourservice->title }} &amp; Assurance">
                                                            {{ $ourservice->title }}
                                                        </option>
                                                        @endforeach
                                                        @endif
                                                    </select>


                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" name="email" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                        required="" placeholder="Email Address" />
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="wpcf7-form-control-wrap your-phone">
                                                    <input type="tel" name="phone" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                        placeholder="Phone Number" />
                                                </span>
                                            </div>
                                        </div>
                                        <p>
                                            <input type="submit" value="SUBMIT"
                                                class="wpcf7-form-control wpcf7-submit btn" />
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd bg-light">
            <div class="container">
                <div class="row">

                    <div class="wpb_column column_container col-sm-12 col-md-9">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="section-head">
                                    <h6><span>our blog</span></h6>
                                    <h2 class="section-title">Our latest news</h2>
                                </div>

                                <div class="empty_space_30 md-hidden sm-hidden">
                                    <span class="empty_space_inner"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12 col-md-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                    <div class="wpb_wrapper">
                                        <p>
                                            <a class="pagelink gray" href="{{ route('front.allblogs') }}">View all
                                                posts</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="news-slider posts-grid row" data-show="3" data-auto="true">
                                    @foreach($blogs->posts->take(3) as $blog)
                                    <div>
                                        <article class="news-item content-area{{$blog->id }}">
                                            <div class="inner-item radius-top">
                                                <div class="thumb-image">
                                                    <a href="#">
                                                        <img src="{{asset($blog->image) }}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="inner-post radius-bottom">
                                                    <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">January 11, 2020</time>
                                                        </span>
                                                        <span class="posted-in">
                                                            <a href="#">{{ $blog->title }}</a>
                                                        </span>
                                                    </div>
                                                    <h4 class="entry-title">
                                                        <a href="#">How to prepare for MBBS entrance?</a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipiscing elit ad, tincidunt senectus felis
                                                        platea natoque mattis....
                                                    </p>
                                                    <a class="post-link"
                                                        href="{{ route('front.blogSingle',$blog->slug) }}">Read more</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
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
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="partner-title">
                                    <p class="main">OUR PARTNERS</p>
                                    <p class="sub">
                                        Our partnering universities and institutions across the
                                        globe
                                    </p>
                                </div>

                                <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">
                                    @if(isset($ourpartners) && $ourpartners->count() > 0)
                                    @foreach($ourpartners as $ourpartner)
                                    <div>
                                        <div class="partner-item text-center clearfix">
                                            <div class="inner">
                                                <div class="thumb">
                                                    @foreach ($ourpartner->postMetas as $partnermeta)

                                                    <a href="{{ $partnermeta->value }}" target="_blank"
                                                        style="text-decoration: none;"><img
                                                            src="{{ asset($ourpartner->image) }}" alt="" /></a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>

                                <div class="empty_space_80">
                                    <span class="empty_space_inner"></span>
                                </div>

                                <div class="section-head">
                                    <h6><span>testimonial</span></h6>
                                    <h2 class="section-title">What our students says?</h2>
                                </div>

                                <div class="empty_space_30">
                                    <span class="empty_space_inner"></span>
                                </div>

                                <div class="testi-slider" data-show="3" data-arrow="true" style="height: 400px;">
                                    @if(count($testimonials) > 0 && isset($testimonials))
                                    @foreach ($testimonials as $testimonial)
                                    <div>
                                        <div class="testi-item box-shadow-hover" >
                                            <div class="testi-head">
                                                <img width="50" height="50" src="{{ asset($testimonial->image) }}"
                                                    class="client-img" alt="" />
                                                <h5>
                                                    {{ $testimonial->title }}
                                                    <span class="font12 normal">
                                                        @foreach ($testimonial->postMetas as $key => $testo)
                                                        @if($key == '0')
                                                        <span class="post"> {{ $testo->value }}</span>
                                                        @endif
                                                        @endforeach
                                                    </span>
                                                </h5>
                                            </div>
                                            <div class="line"></div>
                                            <div class="testi-content" style="max-height: 300px;">
                                                <i class="ion-md-quote"></i>
                                                <img width="86px" height="12px"
                                                    src="" alt="" />
                                                <p>
                                                    {!! $testimonial->post_content !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- #content -->



</div>

<!-- Button trigger modal -->


<!-- Modal -->
@if(isset($popups) && $popups->count() > 0))
@foreach ($popups as $popup)


<div class="modal fade mt-5" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ $popup->title }}</h4>
            </div>
            <div class="modal-body">
                <img src="{{ asset($popup->image) }}" style="height:300px !important;" width="100%" alt="">
            </div>

        </div>
    </div>
</div>
@endforeach
@endif

@endsection

@push('script')
<script>
    window.onload = function () {
        $('.modal').modal('show');
    };

    //    $( document ).ready(function() {
    //     });
    $('.banner-slider').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 3000,
});

</script>

<script>
    $('.frontslider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: true,
        cssEase: 'linear',
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1,
                    dots: true
                }
            }
        ]
    });

</script>

@endpush
