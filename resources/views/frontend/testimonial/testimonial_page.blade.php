@extends('frontend.master')
@section('title')
Testimonials
@endsection
@section('content')

    <style>
        /* Breadcrumbs Modernization */
        .modern-testimonial-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-testimonial-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-testimonial-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Listing Section */
        .modern-testimonial-section {
            background-color: #fdfdfd;
            padding: 120px 0;
            position: relative;
        }

        .testimonial-grid-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            border: 1px solid rgba(0,0,0,0.02);
            display: flex;
            flex-direction: column;
            height: 100%;
            margin-bottom: 40px;
        }

        .testimonial-grid-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }

        .quote-icon-top {
            position: absolute;
            top: 30px;
            right: 40px;
            color: rgba(20, 184, 166, 0.15); /* Elegant translucent teal quote */
            font-size: 60px;
            line-height: 1;
            font-family: Georgia, serif;
            pointer-events: none;
        }

        .testimonial-stars {
            display: flex;
            gap: 4px;
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
            color: #ffc107; /* Bright gold stars */
            font-size: 16px;
        }

        .testimonial-text-content {
            font-family: 'Soho', 'Inter', sans-serif;
            font-size: 16px;
            line-height: 1.8;
            color: #555555;
            font-style: italic;
            margin-bottom: 30px;
            flex-grow: 1;
        }

        .client-profile {
            display: flex;
            align-items: center;
            border-top: 1px solid rgba(0,0,0,0.06);
            padding-top: 25px;
            margin-top: auto;
        }

        .client-profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #00858D; /* Matching theme teal border */
            margin-right: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .client-profile-name {
            font-family: serif;
            font-size: 18px;
            font-weight: 700;
            color: #111111;
            margin: 0 0 4px 0;
        }

        .client-profile-designation {
            font-family: 'Soho', sans-serif;
            font-size: 12px;
            letter-spacing: 0.5px;
            color: #777777;
            text-transform: uppercase;
        }

        .empty-state {
            background: #ffffff;
            padding: 80px 40px;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        }

        @media (max-width: 768px) {
            .modern-testimonial-breadcrumbs {
                height: 500px;
            }
            .testimonial-grid-card {
                padding: 35px 25px;
            }
            .modern-testimonial-section {
                padding: 80px 0;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-testimonial-breadcrumbs">
            <div class="breadcrumbs-img">
                @if($banner && $banner->image)
                    <img src="{{ asset($banner->image) }}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Testimonials</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('front.page') }}">Home</a>
                    </li>
                    <li>Testimonials</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Testimonial Section Start -->
        <div class="modern-testimonial-section">
            <div class="container">
                @if(isset($testimonials) && $testimonials->count() > 0)
                    <div class="row">
                        @foreach($testimonials as $testimonial)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-grid-card">
                                    {{-- Upper Quotes --}}
                                    <div class="quote-icon-top">”</div>

                                    {{-- Star Ratings --}}
                                    <ul class="testimonial-stars">
                                        @for($i = 0; $i < ($testimonial->star ?? 5); $i++)
                                            <li><i class="fa fa-star"></i></li>
                                        @endfor
                                    </ul>

                                    {{-- Review Content --}}
                                    <div class="testimonial-text-content">
                                        {!! $testimonial->review !!}
                                    </div>

                                    {{-- Client Bio --}}
                                    <div class="client-profile">
                                        @if($testimonial->image)
                                            <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}" class="client-profile-img">
                                        @endif
                                        <div>
                                            <h4 class="client-profile-name">{{ $testimonial->name }}</h4>
                                            <span class="client-profile-designation">{{ $testimonial->designation }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="empty-state text-center">
                        <h3 style="color: #1a1a1a; margin-bottom: 20px;">No Testimonials Yet</h3>
                        <p style="font-size: 18px; color: #777; margin-bottom: 30px;">We haven't received any testimonials yet. Check back soon!</p>
                        <a href="{{ route('front.page') }}" class="btn-testimonial-all" style="margin-top: 0; background: #ff5421; box-shadow: 0 5px 15px rgba(255, 84, 33, 0.2);">
                            <i class="fa fa-home" style="margin-right: 8px;"></i> Back to Home
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <!-- Testimonial Section End -->

    </div>
    <!-- Main content End -->

@endsection