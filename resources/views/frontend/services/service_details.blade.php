@extends('frontend.master')
@section('title')
    {{$service->service_title}}
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
        .modern-service-details {
            background-color: #fcfcfc;
            padding: 100px 0;
        }
        .service-details-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.05);
            padding: 50px;
            border: 1px solid rgba(0,0,0,0.02);
        }
        .service-desc {
            font-size: 17px;
            line-height: 1.9;
            color: #5a6268;
        }
        .service-desc h1, .service-desc h2, .service-desc h3, .service-desc h4 {
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .service-desc ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }
        .service-desc li {
            margin-bottom: 10px;
        }
        .modern-enroll-btn {
            display: inline-block;
            background: linear-gradient(135deg, #ff5421 0%, #ff7b54 100%);
            color: #fff;
            font-weight: 700;
            padding: 15px 40px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-decoration: none;
            box-shadow: 0 10px 20px rgba(255, 84, 33, 0.3);
            transition: all 0.4s ease;
            margin: 30px 0;
            border: none;
        }
        .modern-enroll-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(255, 84, 33, 0.4);
            color: #fff;
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
        @media (max-width: 768px) {
            .service-details-card {
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
                @if(!empty($service->banner_image))
                <img src="{{asset($service->banner_image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{$service->service_title}}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Course Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Details Section -->
        <section class="modern-service-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-details-card">
                            <div class="service-desc">
                                {!! $service->service_details1 !!}
                                
                                <div class="text-center md-text-left">
                                    <a class="modern-enroll-btn" href="{{route('enrollment',['id'=>$service->id])}}">Enroll Now</a>
                                </div>
                                
                                <div class="row my-5">
                                    @if(!empty($service->details_image1))
                                    <div class="col-md-6 mb-30 md-mb-30">
                                        <a data-fancybox="gallery">
                                            <img src="{{asset($service->details_image1)}}" class="w-100 gallery-img" style="height: 350px;" alt="Image" onerror="this.style.display='none'">
                                        </a>
                                    </div>
                                    @endif
                                    @if(!empty($service->details_image2))
                                    <div class="col-md-6 mb-30 md-mb-0">
                                        <a data-fancybox="gallery">
                                            <img src="{{asset($service->details_image2)}}" class="w-100 gallery-img" style="height: 350px;" alt="Image" onerror="this.style.display='none'">
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                
                                {!! $service->service_details2 !!}
                                
                                @if(!empty($service->details_image3))
                                <div class="my-5 text-center">
                                    <a data-fancybox="gallery">
                                        <img src="{{asset($service->details_image3)}}" class="w-100 gallery-img" style="max-width: 800px; height: auto;" alt="Image" onerror="this.style.display='none'">
                                    </a>
                                </div>
                                @endif
                                
                                {!! $service->service_details3 !!}
                                
                                <div class="text-center mt-50">
                                    <a class="modern-enroll-btn" href="{{route('enrollment',['id'=>$service->id])}}">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details Section -->

    </div>
    <!-- Main content End -->
@endsection
