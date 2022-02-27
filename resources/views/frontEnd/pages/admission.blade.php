@extends('frontEnd.layout.master')
@section('pageTitle', 'Contact Us | '.getSiteSetting('site_title'))
@section('pageName', 'Contact Us')
@push('style')
<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>

</style>
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
                                            <form action="{{ route('front.submitAdmission') }}" method="post" class="wpcf7-form" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">First Name</label>
                                                        <span class="wpcf7-form-control-wrap your-fname"><input type="text" name="fname" value="" size="40" class="wpcf7-form-control" required="" placeholder="First Name"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Last Name</label>
                                                        <span class="wpcf7-form-control-wrap your-lname"><input type="text" name="lname" value="" size="40" class="wpcf7-form-control" required="" placeholder="Last Name"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Email</label>
                                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="Email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Contact</label>
                                                        <span class="wpcf7-form-control-wrap your-contact"><input type="number" name="Contact" value="" size="40" class="wpcf7-form-control" required="" placeholder="Contact"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Date</label>
                                                        <span class="wpcf7-form-control-wrap your-dob"><input type="date" name="dob" value="" size="40" class="wpcf7-form-control" required="" placeholder="Date of Birth"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Time</label>
                                                        <span class="wpcf7-form-control-wrap your-time"><input type="time" name="time" value="" size="40" class="wpcf7-form-control" required="" placeholder="Time"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Address</label>
                                                        <span class="wpcf7-form-control-wrap your-address"><input type="text" name="address" value="" size="40" class="wpcf7-form-control" required="" placeholder="Address"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" value="" size="40" class="form-control" required="" placeholder="Time">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Course</label>
                                                        <select name="course" id="" class="wpcf7-form-control">
                                                            @if(isset($courses) && $courses->count() > 0)
                                                            @foreach ($courses as $course)
                                                            <option value="{{ $course->title }}"> {{ $course->title }}</option>
                                                            @endforeach
                                                            <option value="language_classes">Language Classes</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Education</label>
                                                        <span class="wpcf7-form-control-wrap your-email"><input type="text" name="education" value="" size="40" class="wpcf7-form-control" required="" placeholder="Education"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Gender</label>
                                                        <span class="wpcf7-form-control-wrap your-company">
                                                            <select name="gender" id="" class="wpcf7-form-control">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Others</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Nationality</label>
                                                        <span class="wpcf7-form-control-wrap nationality"><input type="text" name="nationality" value="" size="40" class="wpcf7-form-control" placeholder="Nationality"></span>
                                                    </div>
                                                </div>
                                                <div class="know_about_mis">
                                                    <label for="">Know About MIS</label>
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="know_about_mis" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="How you come to know about mis"></textarea></span>
                                                </div>
                                                <div class="contact-mess">
                                                    <label for="">Contact</label>
                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="Messenger"></textarea></span>
                                                </div>
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

                <iframe src="{!! getSiteSetting('map_location') !!}" height="300px" width="100%" frameborder="0"></iframe>


            </div>
        </div>
    </div>
</div>
@endsection

@push('script')


@endpush
