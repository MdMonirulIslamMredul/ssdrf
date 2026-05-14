@extends('frontend.master')
@section('title')
    Gallery
@endsection
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image??null)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Gallery 3</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Events Section Start -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row margin-0">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="{{asset($gallery->image)}}"><img src="{{asset($gallery->image)}}" alt=""></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Events Section End -->



    </div>
    <!-- Main content End -->
@endsection
