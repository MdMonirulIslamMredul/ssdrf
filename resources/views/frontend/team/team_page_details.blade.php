@extends('frontend.master')
@section('title')
{{ $team->name }}
@endsection
@section('content')

<style>
    /* Breadcrumbs Modernization */
    .modern-details-breadcrumbs {
        height: 750px;
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

    /* Profile Section Modernization */
    .modern-profile-section {
        background-color: #fcfcfc;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .profile-image-wrapper {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 2;
    }

    .profile-image-wrapper img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
    }

    .profile-content {
        padding: 20px 0 20px 40px;
    }

    .profile-name {
        font-size: 42px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 10px;
        font-family: 'Inter', sans-serif;
        letter-spacing: -1px;
    }

    .profile-designation {
        font-size: 16px;
        color: #ff5421;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 30px;
        display: inline-block;
        padding-bottom: 10px;
        border-bottom: 3px solid rgba(255, 84, 33, 0.2);
    }

    .profile-details {
        font-size: 17px;
        color: #5a6268;
        line-height: 1.9;
    }

    .profile-details p {
        margin-bottom: 20px;
    }

    /* Social Links */
    .team-social-list {
        display: flex;
        gap: 15px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .team-social-list li a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #fff;
        color: #1a1a1a;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 18px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
        text-decoration: none;
    }

    .team-social-list li a:hover {
        background: #ff5421;
        color: #fff;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(255, 84, 33, 0.25);
    }

    .mt-40 {
        margin-top: 40px;
    }

    /* Decorative Background Element */
    .bg-shape-profile {
        position: absolute;
        top: -100px;
        right: -100px;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255, 84, 33, 0.03) 0%, rgba(255, 84, 33, 0) 70%);
        z-index: 0;
        border-radius: 50%;
    }

    @media (max-width: 991px) {
        .profile-content {
            padding: 40px 0 0 0;
        }

        .profile-name {
            font-size: 36px;
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
            @if(!empty($banner->image))
            <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
            @endif
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">{{ $team->name }}</h1>
            <ul>
                <li>
                    <a class="active" href="{{route('front.page')}}">Home</a>
                </li>
                <li>Profile</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Profile Section Start -->
    <div class="modern-profile-section pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="bg-shape-profile"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 mb-50 md-mb-0">
                    <div class="profile-image-wrapper">
                        <img src="{{asset($team->image)}}" alt="{{ $team->name }}" onerror="this.style.display='none'">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="profile-content">
                        <h2 class="profile-name">{{ $team->name }}</h2>
                        <span class="profile-designation">{{ $team->designation }}</span>
                        <div class="profile-details">
                            {!! $team->details !!}
                        </div>

                        @if(!empty($team->facebook) || !empty($team->youtube) || !empty($team->linkedIn) || !empty($team->instagram))
                        <div class="profile-social mt-40">
                            <ul class="team-social-list">
                                @if(!empty($team->facebook)) <li><a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a></li> @endif
                                @if(!empty($team->youtube)) <li><a href="{{$team->youtube}}"><i class="fa fa-youtube-play"></i></a></li> @endif
                                @if(!empty($team->linkedIn)) <li><a href="{{$team->linkedIn}}"><i class="fa fa-linkedin"></i></a></li> @endif
                                @if(!empty($team->instagram)) <li><a href="{{$team->instagram}}"><i class="fa fa-instagram"></i></a></li> @endif
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Section End -->

</div>
<!-- Main content End -->
@endsection