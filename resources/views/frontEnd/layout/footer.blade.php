<footer id="site-footer" class="site-footer bg-second">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div id="media_image-1" class="widget widget_media_image">
                        <a href="index.html"><img src="{{ asset(getSiteSetting('logo')) ?? ''  }}"
                                alt="" /></a>
                    </div>
                    <div class="footer-address">
                        <div class="footer-address-single">
                            <h4 class="widget-title">Head Office</h4>
                            <ul>
                                <li>
                                    <i class="fa fa-map-pin"></i>{{ getSiteSetting('address') }}
                                </li>
                                <li><i class="fa fa-phone"></i>+977-{{ getSiteSetting('primary_phone') }}</li>
                                <li>
                                    <i class="fa fa-envelope"></i>{{ getSiteSetting('primary_email') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="custom_html-1" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="ot-socials bg-white">
                                <a target="_blank" href="{{ getSiteSetting('fb_link') }}" rel="noopener noreferrer"><i
                                        class="fa fa-facebook"></i></a>
                                <a target="_blank" href="{{ getSiteSetting('twitter_link') }}"
                                    rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="{{ getSiteSetting('instagram_link') }}"
                                    rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="{{ getSiteSetting('youtube_link') }}"
                                    rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="footer-address" id="footer-address-separate">
                        <div class="footer-address-single">
                            <h4 class="widget-title">USA Office</h4>
                            <ul>
                                <li>
                                    <i class="fa fa-map-pin"></i>Queens , New York , USA
                                </li>
                                <li><i class="fa fa-phone"></i>+1-443796342</li>
                                <li>
                                    <i class="fa fa-envelope"></i>miseducation@gmail.com
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <section id="custom_html-2" class="widget_text widget widget_custom_html padding-left">
                        <h4 class="widget-title">Services</h4>
                        @php
                        $ourservices = getGobalPostByPostType('our-services');
                        @endphp

                        <div class="textwidget custom-html-widget">
                            <ul class="padd-left">
                                @foreach ($ourservices as $ourservice)

                                <li>
                                    <a
                                        href="{{ route('front.servicessingle',$ourservice->slug) }}">{{ $ourservice->title }}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </section>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <section id="custom_html-3" class="widget_text widget widget_custom_html padding-left">
                        <h4 class="widget-title">Company</h4>
                        <div class="textwidget custom-html-widget">
                            <ul class="padd-left">
                                <li><a href="{{ route('front.home') }}">Home</a></li>
                                <li><a href="{{ route('front.about-us') }}">About</a></li>
                                <li><a href="{{ route('front.offerandseminar') }}">Offers and Services</a></li>
                                <li><a href="{{ route('front.testomonialpage') }}">Testimonial</a></li>
                                <li><a href="{{ route('front.albums') }}">Gallery</a></li>
                                <li><a href="{{ route('front.contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <img src="https://scontent.fbwa1-1.fna.fbcdn.net/v/t1.30497-1/cp0/c23.0.80.80a/p80x80/84702798_579370612644419_4516628711310622720_n.png?_nc_cat=1&ccb=1-4&_nc_sid=dbb9e7&_nc_ohc=NExCuIaIbf4AX8MebPL&_nc_ht=scontent.fbwa1-1.fna&edm=AOWI9OIEAAAA&oh=922c58066b31e7833d40aac9b3cd5b46&oe=61393438" alt="">
                            </div>

                        </div>
                    </section>
                </div>
                <!-- end col-lg-3 -->
            </div>
        </div>
    </div>
    <!-- .main-footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        © 2022 MIS Education Foundation by
                        <a target="_blank" href="https://an4soft.com/"><strong>An4soft</strong></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-nav text-right mobile-center">
                        <ul id="footer-menu" class="none-style">
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .copyright-footer -->
    <a id="back-to-top" href="#" class="show"></a>
</footer>
<!-- #site-footer -->
