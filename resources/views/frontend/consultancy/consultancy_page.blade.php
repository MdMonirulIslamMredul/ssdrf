@extends('frontend.master')
@section('title')
    {{ $consultancy->title ?? 'Consultancy' }}
@endsection
@section('content')

    <style>
        /* Breadcrumbs Modernization */
        .modern-details-breadcrumbs {
            height: 500px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-details-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-details-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Details Section */
        .modern-consultancy-details {
            background-color: #fcfcfc;
            padding: 100px 0;
        }
        .consultancy-details-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.05);
            padding: 50px;
            border: 1px solid rgba(0,0,0,0.02);
        }
        .consultancy-desc {
            font-size: 17px;
            line-height: 1.9;
            color: #5a6268;
        }
        .consultancy-desc h1, .consultancy-desc h2, .consultancy-desc h3, .consultancy-desc h4 {
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .consultancy-desc p {
            margin-bottom: 20px;
        }
        .consultancy-desc ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }
        .consultancy-desc li {
            margin-bottom: 10px;
        }
        
        .gallery-img {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .gallery-img:hover {
            transform: scale(1.03);
        }
        
        .main-featured-img {
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            object-fit: cover;
            transition: transform 0.4s ease;
            width: 100%;
            max-height: 600px;
        }
        .main-featured-img:hover {
            transform: scale(1.02);
        }

        @media (max-width: 768px) {
            .consultancy-details-card {
                padding: 30px 20px;
            }
            .modern-details-breadcrumbs {
                height: 400px;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-details-breadcrumbs">
            <div class="breadcrumbs-img">
                @if(!empty($consultancy->banner_image))
                <img src="{{asset($consultancy->banner_image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{ $consultancy->title }}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>{{ $consultancy->title }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Details Section Start -->
        <section class="modern-consultancy-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="consultancy-details-card">
                            <div class="consultancy-desc">
                                {!! $consultancy->details1 !!}
                                
                                @if(!empty($consultancy->details_image2) || !empty($consultancy->details_image3))
                                <div class="row my-5">
                                    @if(!empty($consultancy->details_image2))
                                    <div class="col-md-6 mb-30 md-mb-30">
                                        <a data-fancybox="gallery">
                                            <img src="{{asset($consultancy->details_image2)}}" class="w-100 gallery-img" style="height: 350px;" alt="Image" onerror="this.style.display='none'">
                                        </a>
                                    </div>
                                    @endif
                                    
                                    @if(!empty($consultancy->details_image3))
                                    <div class="col-md-6">
                                        <a data-fancybox="gallery">
                                            <img src="{{asset($consultancy->details_image3)}}" class="w-100 gallery-img" style="height: 350px;" alt="Image" onerror="this.style.display='none'">
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                @endif
                                
                                {!! $consultancy->details2 !!}
                                
                                @if(!empty($consultancy->image))
                                <div class="mt-5 text-center">
                                    <a data-fancybox="gallery">
                                        <img src="{{asset($consultancy->image)}}" class="main-featured-img" alt="Featured Image" onerror="this.style.display='none'">
                                    </a>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Details Section End -->
        
    </div>
    <!-- Main content End -->
@endsection
