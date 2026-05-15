@extends('frontend.master')
@section('title')
    {{ $menu->title ?? 'All Posts' }}
@endsection
@section('content')

    <style>
        /* Breadcrumbs Modernization */
        .modern-submenu-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-submenu-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-submenu-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Listing Section */
        .modern-submenu-section {
            background-color: #fdfdfd;
            padding: 120px 0;
            position: relative;
        }
        .post-card {
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
        .post-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }
        .post-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 260px;
            background: #f4f4f4;
        }
        .post-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .post-card:hover .post-img-wrapper img {
            transform: scale(1.08);
        }
        .post-content {
            padding: 35px 30px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            background: #fff;
            position: relative;
            z-index: 2;
        }
        .post-meta {
            display: flex;
            gap: 15px;
            list-style: none;
            padding: 0;
            margin: 0 0 15px 0;
            font-size: 14px;
            color: #777;
            font-weight: 500;
        }
        .post-meta li {
            display: flex;
            align-items: center;
        }
        .post-meta i {
            color: #ff5421;
            margin-right: 6px;
        }
        .post-title {
            font-size: 22px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 20px;
            font-family: 'Inter', sans-serif;
            line-height: 1.4;
        }
        .post-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s;
        }
        .post-title a:hover {
            color: #ff5421;
        }
        .post-footer {
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
        .post-card:hover .read-more-btn {
            color: #d93d0d;
        }
        .post-card:hover .read-more-btn i {
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
            .modern-submenu-breadcrumbs {
                height: 500px;
            }
            .post-content {
                padding: 25px 20px;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-submenu-breadcrumbs">
            <div class="breadcrumbs-img">
                @if($banner && $banner->image)
                    <img src="{{ asset($banner->image) }}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{ $menu->title ?? 'All Posts' }}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('front.page') }}">Home</a>
                    </li>
                    <li>{{ $menu->title ?? 'All Posts' }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Sub Menu Listing Section Start -->
        <div class="modern-submenu-section">
            <div class="container">

                @if($sub_menus->count() > 0)
                    <div class="row">
                        @foreach($sub_menus as $sub_menu)
                            <div class="col-lg-4 col-md-6 mb-40">
                                <div class="post-card">
                                    <a href="{{ route('submenu.details', ['id' => $sub_menu->id]) }}" class="card-link-overlay"></a>
                                    
                                    {{-- Card Image --}}
                                    @if($sub_menu->image)
                                        <div class="post-img-wrapper">
                                            <img src="{{ asset($sub_menu->image) }}" alt="{{ $sub_menu->title }}" onerror="this.style.display='none'">
                                        </div>
                                    @endif

                                    {{-- Card Content --}}
                                    <div class="post-content">
                                        {{-- Meta Information --}}
                                        @if($sub_menu->name || $sub_menu->designation)
                                            <ul class="post-meta">
                                                @if($sub_menu->name)
                                                    <li><i class="fa fa-user"></i> {{ $sub_menu->name }}</li>
                                                @endif
                                                @if($sub_menu->designation)
                                                    <li><i class="fa fa-tag"></i> {{ $sub_menu->designation }}</li>
                                                @endif
                                            </ul>
                                        @endif

                                        {{-- Title --}}
                                        <h3 class="post-title">
                                            <a href="{{ route('submenu.details', ['id' => $sub_menu->id]) }}">
                                                {{ $sub_menu->title }}
                                            </a>
                                        </h3>

                                        {{-- Read More --}}
                                        <div class="post-footer">
                                            <span class="read-more-btn">Read More <i class="fa fa-long-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="empty-state text-center">
                        <h3 style="color: #1a1a1a; margin-bottom: 20px;">No Posts Found</h3>
                        <p style="font-size: 18px; color: #777; margin-bottom: 30px;">There are currently no posts available under <strong>{{ $menu->title }}</strong>.</p>
                        <a href="{{ route('front.page') }}" class="read-more-btn" style="background: #f4f4f4; padding: 15px 30px; border-radius: 30px; display: inline-flex;">
                            <i class="fa fa-home" style="margin-right: 8px; margin-left: 0;"></i> Back to Home
                        </a>
                    </div>
                @endif

            </div>
        </div>
        <!-- Sub Menu Listing Section End -->

    </div>
    <!-- Main content End -->

@endsection
