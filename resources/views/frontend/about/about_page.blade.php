@extends('frontend.master')
@section('title')
About
@endsection
@section('content')

<style>
    .modern-about-section {
        background-color: #fcfcfc;
        position: relative;
        overflow: hidden;
        padding: 120px 0;
    }

    .about-image-collage {
        position: relative;
        padding-right: 40px;
        z-index: 1;
    }

    .about-img-main {
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.06);
        width: 100%;
        height: auto;
        position: relative;
        z-index: 2;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .about-image-collage:hover .about-img-main {
        transform: translateY(-10px);
    }

    .about-img-secondary {
        position: absolute;
        bottom: -50px;
        right: -20px;
        width: 60%;
        border-radius: 24px;
        border: 12px solid #ffffff;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        z-index: 3;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .about-image-collage:hover .about-img-secondary {
        transform: scale(1.05) translate(-10px, -10px);
    }

    .about-content-wrapper {
        padding: 20px 0 20px 40px;
        position: relative;
        z-index: 2;
    }

    .about-subtitle {
        color: #ff5421;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 15px;
        display: inline-block;
        position: relative;
    }

    .about-subtitle::after {
        content: '';
        display: block;
        width: 40px;
        height: 3px;
        background: #ff5421;
        margin-top: 8px;
        border-radius: 2px;
    }

    .about-title {
        font-size: 46px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 30px;
        line-height: 1.2;
        font-family: 'Inter', sans-serif;
        letter-spacing: -1px;
    }

    .about-desc {
        color: #5a6268;
        font-size: 17px;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .about-desc p {
        margin-bottom: 20px;
    }

    /* Decorative elements */
    .bg-shape-1 {
        position: absolute;
        top: -150px;
        left: -150px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255, 84, 33, 0.03) 0%, rgba(255, 84, 33, 0) 70%);
        z-index: 0;
        border-radius: 50%;
    }

    .bg-shape-2 {
        position: absolute;
        bottom: -100px;
        right: -100px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(0, 0, 0, 0.02) 0%, rgba(0, 0, 0, 0) 70%);
        z-index: 0;
        border-radius: 50%;
    }

    @media (max-width: 991px) {
        .modern-about-section {
            padding: 80px 0;
        }

        .about-content-wrapper {
            padding: 50px 0 0 0;
        }

        .about-title {
            font-size: 36px;
        }

        .about-image-collage {
            margin-bottom: 60px;
            padding-right: 20px;
        }

        .about-img-secondary {
            bottom: -30px;
            right: -10px;
            width: 55%;
        }
    }

    @media (max-width: 767px) {
        .about-title {
            font-size: 30px;
        }

        .modern-about-section {
            padding: 60px 0;
        }
    }
</style>

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay" style="height: 750px; background-color: #1a1a1a;">
        <div class="breadcrumbs-img" style="height: 100%;">
            @if(!empty($about->banner_image))
            <img src="{{asset($about->banner_image)}}" alt="Breadcrumbs Image" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none'">
            @endif
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
    <div class="modern-about-section">
        <div class="bg-shape-1"></div>
        <div class="bg-shape-2"></div>
        <div class="container">
            <div class="row align-items-center">
                @if(!empty($about->image1) || !empty($about->image2))
                <div class="col-lg-6">
                    <div class="about-image-collage">
                        @if(!empty($about->image1))
                        <img src="{{asset($about->image1)}}" alt="About Us Main" class="about-img-main">
                        @endif
                        @if(!empty($about->image2))
                        <img src="{{asset($about->image2)}}" alt="About Us Secondary" class="about-img-secondary d-none d-md-block">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    @else
                    <div class="col-lg-12">
                        @endif
                        <div class="about-content-wrapper">
                            <div class="about-subtitle">Discover Our Story</div>
                            <h2 class="about-title">{{$about->title??null}}</h2>
                            <div class="about-desc">
                                {!! $about->details1??null !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

    </div>
    <!-- Main content End -->
    @endsection