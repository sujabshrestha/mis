
   <header
   id="site-header"
   class="site-header mobile-header-blue header-style-1"
 >
   <div
     id="header_topbar"
     class="header-topbar md-hidden sm-hidden clearfix"
   >
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <!-- social icons -->
           <ul class="social-list fleft">
             <li>
               <a href="{{ getSiteSetting('twitter_link') }}" target="_blank"
                 ><i class="fa fa-twitter"></i
               ></a>
             </li>
             <li>
               <a href="{{ getSiteSetting('fb_link') }}" target="_blank"
                 ><i class="fa fa-facebook"></i
               ></a>
             </li>
             <li>
               <a href="{{ getSiteSetting('youtube_link') }}" target="_blank"
                 ><i class="fa fa-linkedin"></i
               ></a>
             </li>
             <li>
               <a href="{{ getSiteSetting('insta_link') }}" target="_blank"
                 ><i class="fa fa-instagram"></i
               ></a>
             </li>
           </ul>
           <!-- social icons close -->
           <div class="topbar-text fright">
             Opening Hours : Monday to Saturday - 8am to 9pm
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Top bar close -->

   <!-- Main header start -->
   <div class="main-header md-hidden sm-hidden">
     <div class="main-header-top">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="col-wrap-table">
               <div
                 id="site-logo"
                 class="site-logo col-media-left col-media-middle"
               >
                 <a href="{{ route('front.home') }}">
                   <img
                     class="logo-static"
                     src="{{ asset(getSiteSetting('logo')) ?? '' }}"
                   />

                 </a>
               </div>
               <div class="col-media-body col-media-middle">
                 <!-- contact info -->
                 <ul class="info-list info_on_right_side fright">
                   <li>
                     <span
                       >Address (Head Office):<br />
                       <strong>{{ getSiteSetting('address') }}</strong></span
                     >
                   </li>
                   <li>
                     <span>
                       <strong>
                         <i class="fa fa-phone"></i>
                         <a href="tel:+97714479580">+977-{{ getSiteSetting('primary_phone') }}</a>
                       </strong></span
                     >
                     <br />
                     <span>
                       <strong
                         ><i class="fa fa-envelope"></i
                         >{{ getSiteSetting('primary_email') }}</strong
                       ></span
                     >
                   </li>
                 </ul>
                 <!-- contact info close -->
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="main-header-bottom">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="header-mainnav">
               <div id="site-navigation" class="main-navigation">
                 <ul id="primary-menu" class="menu">
                   <li><a href="{{ route('front.home') }}">Home</a></li>
                   <li>
                     <a href="#">About</a>
                    <ul class="sub-menu">
                       <li class="menu-item-1738">
                         <a href="{{ route('front.about-us') }}">About Us</a>
                       </li>
                       <li class="menu-item-1745">
                         <a href="{{ route('front.ourteam') }}">Our Team</a>
                       </li>
                       <li class="menu-item-1746">
                         <a href="{{ route('front.testomonialpage') }}">Testimonials</a>
                       </li>

                       <li class="menu-item-1740">
                         <a href="{{ route('front.career') }}">Career</a>
                       </li>
                     </ul>
                   </li>
                   <li
                     class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"
                   >
                   @php
                        $testpreparations = getGobalPostByPostType('test-preparation')->where('slug','!=','language-classes-1');
                        $languageclass = getGobalPostBySlug('language-classes-1');

                   @endphp

                     <a href="#">Courses</a>
                     <ul class="sub-menu">
                       <li class="menu-item-has-children">
                         <a href="#">Test Preparaion</a>
                         <ul class="sub-menu">
                             @foreach ($testpreparations as $testpreparation)

                             <li><a href="{{ route('front.preparationsingle',$testpreparation->slug) }}">{{ $testpreparation->title }}</a></li>
                             @endforeach

                         </ul>
                       </li>
                       <li class="menu-item-1758">
                        <a href="{{ route('front.preparationsingle',$languageclass->slug) }}">{{ $languageclass->title }}</a>
                       </li>
                     </ul>
                   </li>
                   @php
                   $studyineuropes = getGobalPostByPostType('study');

                    @endphp
                   <li class="menu-item-has-children">
                     <a href="#">Study Abroad</a>
                     <ul class="sub-menu">
                        @foreach ($studyineuropes as $study)
                        <li>
                        <a href="{{ route('front.studysingle',$study->slug) }}">Study in {{ $study->title }}</a>
                        </li>
                        @endforeach
                     </ul>
                   </li>
                   <li>
                     <a href="{{ route('front.offerandseminar') }}">Offers and Seminar</a>
                     <!-- <ul class="sub-menu">
                       <li><a href="#">Blog List</a></li>
                       <li><a href="#">Blog Details</a></li>
                     </ul> -->
                   </li>
                   <li><a href="{{ route('front.testomonialpage') }}">Testimonial</a></li>
                   <li><a href="{{ route('front.albums') }}">Gallery</a></li>
                   <li><a href="{{ route('front.contact') }}">Contact</a></li>
                   <li><a href="{{ route('front.allblogs')}}">Blog</a></li>
                   <li><a href="{{ route('front.admission') }}">Admission</a></li>

                 </ul>
               </div>
               <!-- #site-navigation -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Main header close -->
   <div class="header_mobile">
     <div class="mlogo_wrapper clearfix">
       <div class="mobile_logo">
         <a href="#"
           ><img src="{{ asset(getSiteSetting('logo')) ?? '' }}" alt="Consultax"
         /></a>
       </div>
       <div id="mmenu_toggle">
         <button></button>
       </div>
     </div>
     <div class="mmenu_wrapper">
       <div class="mobile_nav collapse">
         <ul id="menu-main-menu" class="mobile_mainmenu">
           <li
             class="current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"
           >
             <a href="{{ route('front.home')}}">Home</a>
             <ul class="sub-menu">
               <li
                 class="menu-item-home current-page_item page-item-1530 current_page_item menu-item-2017"
               >
                 <a href="index.html" aria-current="page">Home 1</a>
               </li>
               <li class="menu-item-2016">
                 <a href="#">Home 2</a>
               </li>
               <li class="menu-item-2015">
                 <a href="#">Home 3</a>
               </li>
               <li class="menu-item-2059">
                 <a href="#">Home 4</a>
               </li>
             </ul>
           </li>
           <li
             class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"
           >
             <a href="#">Pages</a>
             <ul class="sub-menu">
               <li class="menu-item-1738">
                 <a href="#">About Us</a>
               </li>
               <li class="menu-item-1745">
                 <a href="#">Our Team</a>
               </li>
               <li class="menu-item-1742">
                 <a href="#">How It Work</a>
               </li>
               <li class="menu-item-1746">
                 <a href="#">Testimonials</a>
               </li>
               <li class="menu-item-1757">
                 <a href="#">Services Box</a>
               </li>
               <li class="menu-item-1744">
                 <a href="#">Icon Box</a>
               </li>
               <li class="menu-item-1740">
                 <a href="#">Career</a>
               </li>
             </ul>
           </li>
           <li
             class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"
           >
             <a href="#">Services</a>
             <ul class="sub-menu">
               <li class="menu-item-1791">
                 <a href="#">Financial Consulting</a>
               </li>
               <li class="menu-item-1758">
                 <a href="#">International Business</a>
               </li>
               <li class="menu-item-1790">
                 <a href="#">Audit &amp; Assurance</a>
               </li>
               <li class="menu-item-1760">
                 <a href="#">Taxes and Efficiency</a>
               </li>
               <li class="menu-item-1761">
                 <a href="#">Bonds &amp; Commodities</a>
               </li>
             </ul>
           </li>
           <li class="menu-item-has-children">
             <a href="#">Cases Study</a>
             <ul class="sub-menu">
               <li><a href="#">Cases Study 2 Columns</a></li>
               <li><a href="#">Cases Study 3 Columns</a></li>

               <li>
                 <a href="#">Cases Study Details</a>
               </li>
             </ul>
           </li>
           <li class="menu-item-has-children">
             <a href="{{ route('front.allblogs') }}">Blog</a>
             {{-- <ul class="sub-menu">
               <li><a href="#">Blog List</a></li>
               <li><a href="#">Blog Details</a></li>
             </ul> --}}
           </li>
           <li><a href="{{ route('front.contact') }}">Contact</a></li>
         </ul>
       </div>
     </div>
   </div>
 </header>
 <!-- #site-header -->
