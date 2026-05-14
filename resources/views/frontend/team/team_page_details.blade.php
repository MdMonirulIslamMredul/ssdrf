@extends('frontend.master')
@section('title')
    Message
@endsection
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image??null)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Message</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Message</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Events Section Start -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row margin-0">
                    
                    <div class="col-lg-12 col-md-12">
                        
                        <img src="{{asset($team->image)}}" style="height: 190px">
                        <h4>{{ $team->name }}</h4>
                        <h3>{{ $team->designation }}</h3>
                        <p>{!! $team->details !!}</p>
                    </div>
              
                </div>
            </div>
        </div>
        <!-- Events Section End -->



    </div>
    <!-- Main content End -->
@endsection
