@extends('frontend.master')
@section('title')
    Gallery
@endsection
@section('content')

    <style>
        /* Breadcrumbs Modernization */
        .modern-gallery-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-gallery-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-gallery-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Gallery Section */
        .modern-gallery-section {
            background-color: #fdfdfd;
            padding: 120px 0;
            position: relative;
        }
        .gallery-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            margin-bottom: 30px;
            background: #fff;
            aspect-ratio: 1 / 1;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: block;
        }
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(26, 26, 26, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.4s ease;
            z-index: 2;
        }
        .gallery-overlay i {
            color: #fff;
            font-size: 36px;
            transform: scale(0.5);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-item:hover .gallery-overlay i {
            transform: scale(1);
        }
        
        .empty-state {
            background: #fff;
            padding: 60px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            text-align: center;
            width: 100%;
        }

        @media (max-width: 768px) {
            .modern-gallery-breadcrumbs {
                height: 500px;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-gallery-breadcrumbs">
            <div class="breadcrumbs-img">
                @if(!empty($banner->image))
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Gallery</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Gallery Section Start -->
        <div class="modern-gallery-section">
            <div class="container">
                @if(isset($galleries) && count($galleries) > 0)
                <div class="row">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-4 col-md-6">
                            <a class="image-popup d-block" data-fancybox="gallery" href="{{asset($gallery->image)}}">
                                <div class="gallery-item">
                                    <img src="{{asset($gallery->image)}}" alt="Gallery Image" onerror="this.style.display='none'">
                                    <div class="gallery-overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="empty-state">
                            <h3 style="color: #1a1a1a; margin-bottom: 20px;">No Images Found</h3>
                            <p style="font-size: 18px; color: #777; margin-bottom: 30px;">The gallery is currently empty. Check back soon for new photos!</p>
                            <a href="{{ route('front.page') }}" class="read-more-btn" style="background: #f4f4f4; padding: 15px 30px; border-radius: 30px; display: inline-flex; color: #1a1a1a; font-weight: 700; text-decoration: none;">
                                <i class="fa fa-home" style="margin-right: 8px;"></i> Back to Home
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!-- Gallery Section End -->

    </div>
    <!-- Main content End -->
@endsection
