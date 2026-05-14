@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($about->banner_image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">About Us</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <!--<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">-->
                    <!--    <div class="img-part">-->
                    <!--        <div class="about-img-wrap">-->
                    <!--            <img src="{{asset($about->image1??null)}}" alt="Image" class="about-img-one">-->
                    <!--            <img src="{{asset($about->image2??null)}}" alt="Image" class="about-img-two d-none d-md-block">-->
                    <!--            {{--                            <img src="{{asset($about->image3??null)}}" alt="Image" class="about-img-three">--}}-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-12 pr-70 md-pr-15">
                        <div class="sec-title">
                            <div class="sub-title orange">About Us</div>
                            <h2 class="title mb-17">{{$about->title??null}}</h2>
                            {!! $about->details1??null !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->




     





    </div>
    <!-- Main content End -->
@endsection
