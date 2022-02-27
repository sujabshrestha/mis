@extends('frontEnd.layout.master')
@section('pageTitle', 'Testomonial | '.getSiteSetting('site_title'))
@section('pageName', 'Testomonial')
@push('style')
<style>
body{
    background: #e5eef6;
}
</style>
@endpush

@section('content')
<div class="container" style="margin-top: 5%;">
    <div class="section-head">
        <h6><span>testimonial</span></h6>
        <h2 class="section-title">What our students says?</h2>
    </div>

    <div class="empty_space_30">
        <span class="empty_space_inner"></span>
    </div>

    <div class="testi-slider" data-show="3" data-arrow="true" style="height:500px;">
        @if(count($testimonials) > 0 && isset($testimonials))
        @foreach ($testimonials as $testimonial)
        <div>
            <div class="testi-item box-shadow-hover">
                <div class="testi-head">
                    <img width="50" height="50" src="{{ asset($testimonial->image) }}"
                        class="client-img" alt="" />
                    <h5>
                        {{ $testimonial->title }}<span class="font12 normal">
                            @foreach ($testimonial->postMetas as $key => $testo)
                            @if($key == '0')
                            <span class="post"> {{ $testo->value }}</span>
                            @endif
                            @endforeach
                        </span>
                    </h5>
                </div>
                <div class="line"></div>
                <div class="testi-content" style="max-height: 300px !important">
                    <i class="ion-md-quote"></i>
                    <img width="86px" height="12px" src=""
                        alt="" />
                    <p style="max-height: 200px !important;">
                        {!! $testimonial->post_content !!}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</div>

@endsection

@push('script')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:2,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,1],
            pagination:true,
            navigation:false,
            autoplay:true
        });
    });
</script>

@endpush

