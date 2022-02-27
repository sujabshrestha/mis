@extends('frontEnd.layout.master')
@section('pageTitle', 'Career | '.getSiteSetting('site_title'))
@section('pageName', 'Career')
@push('style')
@endpush

@section('content')
@if(isset($posts) && $posts->count() > 0 )
@foreach ($posts as $post)
<div id="content" class="site-content">
    <div class="entry-content">
        <div class="container">
            <div class="boxed-content">



                <section class="wpb_row row-fluid radius-top row-has-fill download-section">
                    <img src="{{ asset($post->image) }}" style="height: 400px !important;" width="100%" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    {{-- <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element text-light">
                                            <div class="wpb_wrapper">
                                                <h5 class="cv-download">Company pre-filled forms<br>
                                                <a class="text-primary font12" href="#">Download</a></h5>
                                            </div>
                                        </div>
                                    </div> --}}
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
                                        <div class="section-head ">
                                            <h6><span>We are Hiring</span></h6>
                                            <h2 class="section-title">{{ $post->title }}</h2>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>{!! $post->post_content !!}</p>

                                            </div>
                                        </div>

                                        {{-- <div class="career-box ">
                                            <h5>Financial department manager (01 person)</h5>
                                            <div class="content-box">
                                                <h6 class="font12">Descriptions:</h6>
                                                <p>Montes orci eget enim ad metus et convallis ultricies habitant aliquet curae tellus facilisis lobortis, imperdiet sociis sodales mollis suscipit neque quam sed felis porttitor lectus nascetur.</p>
                                                <h6 class="font12">Desired Skills:</h6>
                                                <ul>
                                                    <li>Sagittis eu faucibus integer, habitasse parturient.</li>
                                                    <li>Pharetra massa pretium cras quam, id nulla habitasse.</li>
                                                    <li>Torquent tellus nisl nam ornare a, lacinia metus fames.</li>
                                                </ul>
                                                <a class="btn" href="#">APPLY NOW</a> </div>
                                        </div>

                                        <div class="empty_space_45"></div>

                                        <div class="career-box ">
                                            <h5>Research &amp; Development department manager (01 person)</h5>
                                            <div class="content-box">
                                                <h6 class="font12">Descriptions:</h6>
                                                <p>Montes orci eget enim ad metus et convallis ultricies habitant aliquet curae tellus facilisis lobortis, imperdiet sociis sodales mollis suscipit neque quam sed felis porttitor lectus nascetur.</p>
                                                <h6 class="font12">Desired Skills:</h6>
                                                <ul>
                                                    <li>Sagittis eu faucibus integer, habitasse parturient.</li>
                                                    <li>Pharetra massa pretium cras quam, id nulla habitasse.</li>
                                                    <li>Torquent tellus nisl nam ornare a, lacinia metus fames.</li>
                                                </ul>
                                                <a class="btn" href="#">APPLY NOW</a> </div>
                                        </div>

                                        <div class="empty_space_45"></div>

                                        <div class="career-box ">
                                            <h5>Sales department manager (01 person)</h5>
                                            <div class="content-box">
                                                <h6 class="font12">Descriptions:</h6>
                                                <p>Montes orci eget enim ad metus et convallis ultricies habitant aliquet curae tellus facilisis lobortis, imperdiet sociis sodales mollis suscipit neque quam sed felis porttitor lectus nascetur.</p>
                                                <h6 class="font12">Desired Skills:</h6>
                                                <ul>
                                                    <li>Sagittis eu faucibus integer, habitasse parturient.</li>
                                                    <li>Pharetra massa pretium cras quam, id nulla habitasse.</li>
                                                    <li>Torquent tellus nisl nam ornare a, lacinia metus fames.</li>
                                                </ul>
                                                <a class="btn" href="#">APPLY NOW</a> </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                @endforeach
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@push('script')


@endpush
