@extends('frontEnd.layout.master')
@section('pageTitle', 'Blogs | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
<style>
    body {
    background-color: #f9f9fa
}

.flex {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto
}

@media (max-width:991.98px) {
    .padding {
        padding: 1.5rem
    }
}

@media (max-width:767.98px) {
    .padding {
        padding: 1rem
    }
}

.padding {
    padding: 5rem
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 0
}

.card .card-body {
    padding: 1.25rem 1.75rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 0.875rem;
    font-weight: 500
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem
}

.lightGallery {
    width: 100%;
    margin: 0
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.lightGallery .image-tile {
    position: relative;
    margin-bottom: 30px;
    margin-right: 10px
}
</style>
@endpush

@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card" style="padding: 5%;">
                    <div class="card-body">
                        <h4 class="card-title text-center" style="font-size: 34px;">{{ $gallery->title }}</h4>
                        <p class="card-text" style="font-size: 16px;"> Images of {{ $gallery->title }} Album </p>
                        <div class="row">
                            @foreach ($gallery->galleries as $gal )
                            <div class="col-md-4">
                                <img src="{{ $gal->hasImage() ? asset($gal->image) : '' }}" style="height: 300px; width:300px;padding-right:10px;" alt="">
                            </div>
                            @endforeach
                        </div>
                        {{-- <div id="lightgallery" class="row lightGallery"> <a href="https://i.imgur.com/EEguU02.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/EEguU02.jpg" alt="image small"></a> <a href="https://i.imgur.com/Uv2Yqzo.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/Uv2Yqzo.jpg" alt="image small"></a> <a href="https://i.imgur.com/xbTAITF.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/xbTAITF.jpg" alt="image small"></a> <a href="https://i.imgur.com/EEguU02.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/EEguU02.jpg"></a> </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush
