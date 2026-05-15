@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('content')

    <style>
        /* Breadcrumbs Modernization */
        .modern-blog-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-blog-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-blog-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Listing Section */
        .modern-blog-section {
            background-color: #fdfdfd;
            padding: 120px 0;
            position: relative;
        }
        .blog-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            margin-bottom: 40px;
            position: relative;
            border: 1px solid rgba(0,0,0,0.02);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }
        .blog-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 260px;
            background: #f4f4f4;
        }
        .blog-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .blog-card:hover .blog-img-wrapper img {
            transform: scale(1.08);
        }
        .blog-date-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #ff5421;
            color: #fff;
            font-weight: 700;
            padding: 8px 15px;
            border-radius: 10px;
            font-size: 14px;
            box-shadow: 0 5px 15px rgba(255, 84, 33, 0.3);
            z-index: 3;
            display: flex;
            align-items: center;
        }
        .blog-date-badge i {
            margin-right: 6px;
        }
        .blog-content {
            padding: 35px 30px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            background: #fff;
            position: relative;
            z-index: 2;
        }
        .blog-title {
            font-size: 22px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 15px;
            font-family: 'Inter', sans-serif;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 60px;
        }
        .blog-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s;
        }
        .blog-title a:hover {
            color: #ff5421;
        }
        .blog-excerpt {
            color: #777;
            line-height: 1.6;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .blog-footer {
            margin-top: auto;
            border-top: 1px solid rgba(0,0,0,0.05);
            padding-top: 20px;
        }
        .read-more-btn {
            display: inline-flex;
            align-items: center;
            font-weight: 700;
            color: #ff5421;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s;
            position: relative;
            z-index: 5;
        }
        .read-more-btn i {
            margin-left: 8px;
            transition: transform 0.3s;
        }
        .blog-card:hover .read-more-btn {
            color: #d93d0d;
        }
        .blog-card:hover .read-more-btn i {
            transform: translateX(5px);
        }
        .card-link-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .empty-state {
            background: #fff;
            padding: 60px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        }
        @media (max-width: 768px) {
            .modern-blog-breadcrumbs {
                height: 500px;
            }
            .blog-content {
                padding: 25px 20px;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-blog-breadcrumbs">
            <div class="breadcrumbs-img">
                @if(!empty($banner->image))
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blogs</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="modern-blog-section">
            <div class="container">
                @if($blogs->count() > 0)
                <div class="row">
                    @foreach($blogs as $blog)
                    @php 
                        $timestamp = strtotime($blog->created_at); 
                        $month = date('M', $timestamp);
                        $year = date('Y', $timestamp);
                        $day = date('d', $timestamp);
                    @endphp
                    <div class="col-lg-4 col-md-6 mb-40">
                        <div class="blog-card">
                            <a href="{{route('blogs.details',['id'=>$blog->id])}}" class="card-link-overlay"></a>
                            <div class="blog-img-wrapper">
                                <div class="blog-date-badge">
                                    <i class="fa fa-calendar"></i> {{ $month }} {{ $day }}, {{$year}}
                                </div>
                                @if(!empty($blog->main_image))
                                <img src="{{asset($blog->main_image)}}" alt="{{$blog->title??'Blog Post'}}" onerror="this.style.display='none'">
                                @endif
                            </div>
                            
                            <div class="blog-content">
                                <h3 class="blog-title">
                                    <a href="{{route('blogs.details',['id'=>$blog->id])}}">{{$blog->title??'Untitled'}}</a>
                                </h3>
                                <div class="blog-excerpt">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->short_details??''), 150) }}
                                </div>
                                <div class="blog-footer">
                                    <a href="{{route('blogs.details',['id'=>$blog->id])}}" class="read-more-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-5">
                    {{$blogs->links()}}
                </div>
                @else
                <div class="empty-state text-center">
                    <h3 style="color: #1a1a1a; margin-bottom: 20px;">No Blogs Found</h3>
                    <p style="font-size: 18px; color: #777; margin-bottom: 30px;">There are currently no blog posts available.</p>
                    <a href="{{ route('front.page') }}" class="read-more-btn" style="background: #f4f4f4; padding: 15px 30px; border-radius: 30px; display: inline-flex;">
                        <i class="fa fa-home" style="margin-right: 8px; margin-left: 0;"></i> Back to Home
                    </a>
                </div>
                @endif
            </div>
        </div>
        <!-- Blog Section End -->
    </div>
    <!-- Main content End -->
@endsection
