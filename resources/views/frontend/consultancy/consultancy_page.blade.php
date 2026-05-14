@extends('frontend.master')
@section('title')
    Consultancy
@endsection
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($consultancy->banner_image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{ $consultancy->title }}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>{{ $consultancy->title }}</li>
                </ul>
                
            </div>
            
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        
          <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="blog-deatails">
                   
                    <div class="blog-full">
                        <div class="post-para">
                            {!! $consultancy->details1 !!}
                            @if($consultancy->details_image2)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-img">
                                        <img src="{{asset($consultancy->details_image2)}}" width="100%" class="mb-2" alt="Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-img">
                                        <img src="{{asset($consultancy->details_image3)}}" width="100%" class="mb-2" alt="Image">
                                    </div>
                                </div>
                            </div>
                            @endif
                            {!! $consultancy->details2 !!}
                        </div>
                        
                         <div class="bs-img">
                        <a href="#"><img src="{{asset($consultancy->image)}}" width="100%" height="600px" alt=""></a>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        
        
        
        
       
    <!-- Main content End -->
@endsection
