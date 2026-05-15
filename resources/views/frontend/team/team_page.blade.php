@extends('frontend.master')
@section('title')
    Doctors
@endsection
@section('content')
    <style>
        /* Breadcrumbs Modernization */
        .modern-team-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-team-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-team-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Team Section Modernization */
        .modern-team-section {
            background-color: #fcfcfc;
            padding: 120px 0;
            position: relative;
        }
        .section-title {
            font-size: 46px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 70px;
            font-family: 'Inter', sans-serif;
            text-align: center;
            position: relative;
            letter-spacing: -1px;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #ff5421;
            margin: 20px auto 0;
            border-radius: 2px;
        }
        .team-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.04);
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            margin-bottom: 40px;
            position: relative;
            border: 1px solid rgba(0,0,0,0.02);
        }
        .team-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        }
        .team-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 380px;
            background: #f8f9fa;
        }
        .team-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        .team-card:hover .team-img-wrapper img {
            transform: scale(1.08);
        }
        .team-content {
            padding: 35px 25px;
            text-align: center;
            background: #fff;
            position: relative;
            z-index: 2;
            transition: padding 0.4s ease;
        }
        .team-name {
            font-size: 24px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 8px;
            font-family: 'Inter', sans-serif;
            transition: color 0.3s;
        }
        .team-card:hover .team-name {
            color: #ff5421;
        }
        .team-designation {
            font-size: 14px;
            color: #ff5421;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 0;
            transition: margin-bottom 0.4s ease;
        }
        .team-card:hover .team-designation {
            margin-bottom: 25px;
        }
        .team-social {
            display: flex;
            justify-content: center;
            gap: 12px;
            list-style: none;
            padding: 0;
            margin: 0;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
            position: absolute;
            bottom: 30px;
            left: 0;
            width: 100%;
            z-index: 3;
        }
        .team-card:hover .team-social {
            opacity: 1;
            transform: translateY(0);
        }
        .team-social li a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #fdfdfd;
            color: #1a1a1a;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            text-decoration: none;
            position: relative;
            z-index: 10;
        }
        .team-social li a:hover {
            background: #ff5421;
            color: #fff;
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(255, 84, 33, 0.25);
        }
        .card-link-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        @media (max-width: 768px) {
            .team-img-wrapper {
                height: 320px;
            }
            .section-title {
                font-size: 32px;
            }
            .modern-team-breadcrumbs {
                height: 500px; /* Reduced for mobile */
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-team-breadcrumbs">
            <div class="breadcrumbs-img">
                @if(!empty($banner->image))
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Team One</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        @php
            $teams= \App\Models\Team::all();
        @endphp
        <!-- Team Section Start -->
        <div class="modern-team-section">
            <div class="container">
                <h2 class="section-title">{{$banner->title??'Our Expert Team'}}</h2>
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-card">
                            <a href="/team/details/{{$team->id}}" class="card-link-overlay"></a>
                            <div class="team-img-wrapper">
                                <img src="{{asset($team->image)}}" alt="{{$team->name}}" onerror="this.style.display='none'">
                            </div>
                            <div class="team-content">
                                <h4 class="team-name">{{$team->name}}</h4>
                                <span class="team-designation">{{$team->designation}}</span>
                                <ul class="team-social">
                                    @if(!empty($team->facebook)) <li><a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a></li> @endif
                                    @if(!empty($team->youtube)) <li><a href="{{$team->youtube}}"><i class="fa fa-youtube-play"></i></a></li> @endif
                                    @if(!empty($team->linkedIn)) <li><a href="{{$team->linkedIn}}"><i class="fa fa-linkedin"></i></a></li> @endif
                                    @if(!empty($team->instagram)) <li><a href="{{$team->instagram}}"><i class="fa fa-instagram"></i></a></li> @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team Section End -->

    </div>
    <!-- Main content End -->
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
@endsection
