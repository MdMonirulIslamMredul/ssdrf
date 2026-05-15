@extends('frontend.master')
@section('title')
Services
@endsection
@section('content')

<style>
    /* Breadcrumbs Modernization */
    .modern-courses-breadcrumbs {
        height: 750px;
        background-color: #1a1a1a;
        position: relative;
    }

    .modern-courses-breadcrumbs .breadcrumbs-img {
        height: 100%;
        width: 100%;
    }

    .modern-courses-breadcrumbs .breadcrumbs-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Courses Section */
    .modern-courses-section {
        background-color: #fdfdfd;
        padding: 120px 0;
        position: relative;
    }

    .course-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        margin-bottom: 40px;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.02);
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .course-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    }

    .course-img-wrapper {
        position: relative;
        overflow: hidden;
        height: 250px;
        background: #f4f4f4;
    }

    .course-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .course-card:hover .course-img-wrapper img {
        transform: scale(1.08);
    }

    .course-price-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #ff5421;
        color: #fff;
        font-weight: 700;
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 16px;
        box-shadow: 0 5px 15px rgba(255, 84, 33, 0.3);
        z-index: 3;
    }

    .course-content {
        padding: 35px 30px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        background: #fff;
        position: relative;
        z-index: 2;
    }

    .course-title {
        font-size: 24px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 20px;
        font-family: 'Inter', sans-serif;
        line-height: 1.3;
    }

    .course-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s;
    }

    .course-title a:hover {
        color: #ff5421;
    }

    .course-footer {
        margin-top: auto;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding-top: 25px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .enroll-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
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

    .enroll-btn i {
        margin-left: 8px;
        transition: transform 0.3s;
    }

    .course-card:hover .enroll-btn {
        color: #d93d0d;
    }

    .course-card:hover .enroll-btn i {
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

    @media (max-width: 768px) {
        .modern-courses-breadcrumbs {
            height: 500px;
        }

        .course-content {
            padding: 25px 20px;
        }
    }
</style>

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay modern-courses-breadcrumbs">
        <div class="breadcrumbs-img">
            @if(!empty($banner->image))
            <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
            @endif
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Courses</h1>
            <ul>
                <li>
                    <a class="active" href="{{route('front.page')}}">Home</a>
                </li>
                <li>Course</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div class="modern-courses-section">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="course-card">
                        <a href="{{route('services.details',['id'=>$service->id])}}" class="card-link-overlay"></a>
                        <div class="course-img-wrapper">
                            <div class="course-price-badge"> ৳ {{$service->price}}</div>
                            <img src="{{asset($service->main_image)}}" alt="{{$service->service_title}}" onerror="this.style.display='none'">
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">
                                <a href="{{route('services.details',['id'=>$service->id])}}">{{$service->service_title}}</a>
                            </h3>
                            <div class="course-footer">
                                <span class="enroll-btn">Enroll Now <i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-5">
                {!! $services->links() !!}
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection