@extends('frontEnd.layout.master')
@section('pageTitle', 'Products | '.getSiteSetting('site_title'))
@section('pageName', 'Product')
@push('style')
@endpush

@section('content')

    <!-- Page title -->
    @include('frontEnd.layout.page-title')
    <!-- /.page-title -->

    <section class="flat-row portfolio-post" id="work">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio-filter style1">

                        @if($productCategories)
                            <li class="active"><a data-filter="*" href="#">All Products</a></li>
                            @foreach($productCategories as $category)
                                <li><a data-filter=".{{ $category->id }}" href="#">{{ $category->title }}</a></li>
                            @endforeach
                        @endif
                    </ul><!-- /.project-filter -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-portfolio v4 style1 grid-3columns">
                        <div class="portfolio-wrap clearfix">
                            @if($products)
                                @foreach($products as $product)
                                    <div class="item {{ $product->parent_category }}">
                                        <div class="featured-images">
                                            {!! gobalPostImage($product->id, 'thumbnail') !!}
                                            <h3 class="project-title">{{ $product->title }}</h3>
                                            <a class="view-detail" href="{{ route('front.product.single', $product->slug) }}">View More</a>
                                            <div class="overlay">
                                            </div>
                                        </div><!-- /.featured-images -->
                                    </div>
                                @endforeach
                            @endif
                        </div><!-- /.portfolio-wrap -->
                    </div><!-- /.flat-portfolio -->
                </div>
            </div>
        </div>
    </section>


@endsection

@push('script')


@endpush