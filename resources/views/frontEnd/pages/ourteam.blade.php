@extends('frontEnd.layout.master')
@section('pageTitle', 'OurTeam | '.getSiteSetting('site_title'))
@section('pageName', 'OurTeam')
@push('style')
<style>
    .our-team{
    text-align: center;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease 0s;
}
.our-team .pic{
    background: #002c60;
    transition: all 0.3s ease 0s;
}
.our-team:hover .pic{
    padding: 10px;
    border-radius: 10px;
    transform: scale(0.5) translateY(-30%);
}
.our-team .pic img{
    width: 100%;
    height: 400px;
}
.our-team .team-content{
    width: 100%;
    padding: 7px 15px;
    background: #002c60;
    position: absolute;
    bottom: -30%;
    right: 0;
    opacity: 0;
    transition: all 0.3s ease 0s;
}
.our-team:hover .team-content{
    opacity: 1;
    bottom: -10px;
}
.our-team .title{
    font-size: 15px;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 5px 0;
}
.our-team .post{
    display: block;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    font-style: italic;
    text-transform: capitalize;
    margin: 0 0 5px 0;
}
.our-team .social{
    padding: 0;
    margin: 0;
    list-style: none;
    transition: all 0.35s ease 0s;
}
.our-team .social li{
    display: inline-block;
    margin: 0 5px 0 0;
}
.our-team .social li a{
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 15px 0 15px 0;
    font-size: 20px;
    color: #fff;
    overflow: hidden;
    z-index: 1;
    position: relative;
    transition: all 0.35s ease 0s;
}
.our-team .social li a:before{
    content: "";
    width: 100%;
    height: 100%;
    background: #002c60;
    position: absolute;
    top: 0;
    left: -100%;
    z-index: -1;
    transition: all 0.3s ease-in-out 0s;
}
.our-team .social li a:hover:before{ left: 0; }
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
</style>
<script src="https://kit.fontawesome.com/3a77735fb2.js" crossorigin="anonymous"></script>
@endpush

@section('content')
<div class="container" style="margin-top: 3%;margin-bottom:4%;">
    <h2>Our Team Style</h2>
    <div class="row">
        @foreach ($ourteams as $team)


        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="{{ asset($team->image) }}">
                </div>
                <div class="team-content">
                    <h6 class="title">{{ $team->title }}</h6>
                    <span class="post">{!! $team->porst_content !!}</span>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection

@push('script')

@endpush
