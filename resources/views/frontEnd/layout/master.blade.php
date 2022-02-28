<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link
      rel="stylesheet"
      id="bootstrap-css"
      href="{{ asset('mis/css/bootstrap.css') }}"
      type="text/css"
      media="all"
    /> --}}
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link
      rel="stylesheet"
      id="awesome-font-css"
      href="{{ asset('mis/css/font-awesome.css')}}"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="ionicon-font-css"
      href="{{ asset('mis/css/ionicon.css ')}}"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="royal-preload-css"
      href="{{asset('mis/css/royal-preload.css') }}"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="slick-slider-css"
      href="{{ asset('mis/css/slick.css') }}"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="slick-theme-css"
      href="{{ asset('mis/css/slick-theme.css') }}"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="consultax-style-css"
      href="{{ asset('mis/style.css') }}"
      type="text/css"
      media="all"
    />

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mis/revolution/css/settings.css') }}" />

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mis/revolution/css/layers.css') }}" />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('mis/revolution/css/navigation.css') }}"

    />
    <script src="https://kit.fontawesome.com/3a77735fb2.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{ asset(getSiteSetting('logo')) ?? '' }}" />
    @stack('style')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=1116107258874367&autoLogAppEvents=1" nonce="oSOqPfyR"></script>
</head>

<body>
<div class="boxed">
    @include('frontEnd.layout.header')


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @include('frontEnd.layout.messages')

    @yield('content')

    @include('frontEnd.layout.footer')



</div>
<script type="text/javascript" src="{{ asset('mis/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mis/js/countto.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mis/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mis/js/royal_preloader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mis/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mis/js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('mis/js/header-footer.js') }}"></script>

<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"
></script>
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"
></script>
<!-- RS5.0 Extensions Files -->
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.video.min.js') }}"
></script>
{{-- <script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"
></script> --}}
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"
></script>
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.navigation.min.js') }}"
></script>
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.actions.min.js') }}"
></script>
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"
></script>
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.migration.min.js') }}"
></script>
<script
  type="text/javascript"
  src="{{ asset('mis/revolution/js/extensions/revolution.extension.parallax.min.js') }}"
></script>
{{-- <script>
  jQuery(document).ready(function () {
    jQuery("#revolution-slider").revolution({
      sliderType: "standard",
      delay: 7500,
      navigation: {
        arrows: { enable: true },
      },
      spinner: "off",
      gridwidth: 1170,
      gridheight: 700,
      disableProgressBar: "on",
      responsiveLevels: [1920, 1229, 991, 480],
      gridwidth: [1170, 970, 750, 450],
      gridheight: [700, 700, 700, 700],
    });
  });
</script> --}}

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('front/assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/parallax.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('front/assets/javascript/smoothscroll.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery-validate.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('front/assets/https://maps.googleapis.com/maps/api/js?sensor=false') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('front/assets/javascript/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/assets/javascript/jquery.themepunch.revolution.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('front/assets/javascript/slider.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
{!! Toastr::message() !!}
@stack('script')
</body>
</html>
