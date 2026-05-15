@extends('frontend.master')
@section('title')
    {{ $blog->title ?? 'Blog Details' }}
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
        .modern-blog-details {
            background-color: #fcfcfc;
            padding: 100px 0;
        }
        .blog-details-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.05);
            padding: 50px;
            border: 1px solid rgba(0,0,0,0.02);
        }
        .blog-desc {
            font-size: 17px;
            line-height: 1.9;
            color: #5a6268;
        }
        .blog-desc h1, .blog-desc h2, .blog-desc h3, .blog-desc h4 {
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .blog-desc p {
            margin-bottom: 20px;
        }
        .blog-desc ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }
        .blog-desc li {
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
            margin-bottom: 40px;
        }
        .main-featured-img:hover {
            transform: scale(1.02);
        }

        @media (max-width: 768px) {
            .blog-details-card {
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
                @if(!empty($blog->banner_image))
                <img src="{{asset($blog->banner_image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{ $blog->title ?? 'Blog Details' }}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <section class="modern-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details-card">
                            
                            @if(!empty($blog->details_image1))
                            <div class="text-center">
                                <a data-fancybox="gallery">
                                    <img src="{{asset($blog->details_image1)}}" class="main-featured-img" alt="Featured Image" onerror="this.style.display='none'">
                                </a>
                            </div>
                            @endif

                            <div class="blog-desc">
                                {!! $blog->details1 !!}
                                
                                @if(!empty($blog->details_image2) || !empty($blog->details_image3))
                                <div class="row my-5">
                                    @if(!empty($blog->details_image2))
                                    <div class="col-md-6 mb-30 md-mb-30">
                                        <a data-fancybox="gallery">
                                            <img src="{{asset($blog->details_image2)}}" class="w-100 gallery-img" style="height: 350px;" alt="Image" onerror="this.style.display='none'">
                                        </a>
                                    </div>
                                    @endif
                                    
                                    @if(!empty($blog->details_image3))
                                    <div class="col-md-6">
                                        <a data-fancybox="gallery">
                                            <img src="{{asset($blog->details_image3)}}" class="w-100 gallery-img" style="height: 350px;" alt="Image" onerror="this.style.display='none'">
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                @endif
                                
                                {!! $blog->details2 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

    </div>
    <!-- Main content End -->
@endsection
