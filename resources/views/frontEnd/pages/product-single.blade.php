@extends('frontEnd.layout.master')
@section('pageTitle', 'Products | '.getSiteSetting('site_title'))
@section('pageName', 'Product')
@push('style')
@endpush

@section('content')

    <!-- Page title -->
    @include('frontEnd.layout.page-title')
    <!-- /.page-title -->


    <section class="main-content page-single page-about">
        <div class="container">
            <div class="row">
                <div class="page-content">
                    <div class="post-wrap">
                        <div class="featured-post flat-blog-slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        {!! gobalPostImage($product->id, 'full') !!}
                                    </li>

                                </ul>
                            </div>
                        </div><!-- /.feature-post -->

                        <div class="about-content-text">
                            <h4 class="about-content-title">Description</h4>
                            {!! $product->post_content !!}
                        </div>

                        <div class="main-single">
                            <div style="text-align: center" class="text-center sharethis-inline-share-buttons"></div>
                            <div class="comments-area">
                                <div class="comment-respond" id="respond">
                                    <h2 class="comment-reply-title">Leave Comment</h2>
                                    <div class="fb-comments" data-href="{{ route('front.product.single', $product->slug) }}" data-numposts="5" data-width="100%"></div>
                                </div><!-- /.comment-respond -->
                            </div><!-- /.comments-area -->
                        </div>
                    </div>
                </div>

                <div class="page-sidebar">
                    <div class="sidebar">
                        <h3 class="title-project-detail">Product Details</h3>
                        <ul class="entry-details-content">

                            @if(isset($product->product_details))
                                @foreach($product->product_details as $detail)
                            <li class="">
                                <strong>{{ $detail['title']??'' }}</strong>
                                <p>{{ $detail['value']??'' }}</p>
                            </li>
                                @endforeach
                            @endif
                        </ul>


                        @if($product->brochure)
                        <div class="brochure">
                            <h3>Our Brochure</h3>
                            <p>View our Company products and detail in our brochure.</p>
                            <p class="flat-button radius"><a target="_blank" href="{{ asset($product->brochure)  }}"><i class="fa fa-file-pdf-o"></i> Download .PDF</a></p>
                        </div>
                            @endif
                    </div>

                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection

@push('script')


@endpush