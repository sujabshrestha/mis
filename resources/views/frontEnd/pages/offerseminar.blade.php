@extends('frontEnd.layout.master')
@section('pageTitle', 'Blogs | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
<style>
    body{
        background: #e5eef6;
    }
    .allpost .slick-arrow {
  display: none !important;
}
.allpost .news-item {
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  padding: 0 15px;
}
.allpost .news-item .inner-item {
  transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  margin-bottom: 15px;
}

.allpost .news-item .inner-item .thumb-image {
  height: 175px;
}
.allpost .news-item .inner-item:hover {
  box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
}
.allpost .news-item .inner-item:hover .post-link {
  color: #f26522;
  border-color: #f8b29c;
}
.allpost .news-item .inner-post {
  padding: 26px 30px;
}
.allpost .news-item .inner-post p:last-child {
  margin-bottom: 0;
}
.allpost .news-item .thumb-image img {
  width: 100%;
}
.allpost .news-item .post-link {
  color: #737373;
  border-color: #c1c1c1;
}
.allpost .news-item .post-link:visited {
  color: #737373;
}
.allpost .news-item .post-link:hover {
  color: #f26522;
  border-color: #f26522;
}
.allpost.s2 .news-item {
  margin-top: 3px;
}
.allpost.s2 .news-item .inner-item {
  overflow: hidden;
  background: #fff;
}

.allpost.s2 .news-item .thumb-image {
  float: left;
  width: 35%;
}
.allpost.s2 .news-item .inner-post {
  float: left;
  width: 65%;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row allpost">
        <div class="allpost-head" style="margin-left: 1%;padding-top:2%;">
            <h2 class="section-title">Offer And Seminars</h2>
        </div>

        @foreach($posts as $seminar)
        <div class="col-md-4" style="margin-top: 1%;">

            <article class="news-item content-area{{$seminar->id }}">
                <div class="inner-item radius-top">
                    <div class="thumb-image">
                        <a href="#">
                            <img src="{{asset($seminar->image) }}" alt="" />
                        </a>
                    </div>
                    <div class="inner-post radius-bottom">
                        <div class="entry-meta">
                            <span class="posted-on">
                                @foreach($seminar->postMetas as $seminarmeta)
                                <time class="entry-date">{!! $seminarmeta->value !!}</time>
                                @endforeach
                            </span>
                            <span class="posted-in">
                                <a href="#">{{ $seminar->title }}</a>
                            </span>
                        </div>
                        <h4 class="entry-title">
                            <a href="">How to prepare for MBBS entrance?</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipiscing elit ad, tincidunt senectus felis
                            platea natoque mattis....
                        </p>
                        <a class="post-link" href="{{ route('front.seminarsingle',$seminar->slug) }}">Read more</a>
                    </div>
                </div>
            </article>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('script')


@endpush
