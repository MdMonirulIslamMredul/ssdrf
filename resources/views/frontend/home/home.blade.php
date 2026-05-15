@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')

    <!-- Slider Section Start -->
    @include('frontend.slider.slider')
    <!-- Slider Section End -->
<section class="py-5 border-top border-bottom bg-light"
         style="font-family: serif;">

    <div class="container text-center">

        <p class="text-uppercase small text-muted mb-4"
           style="letter-spacing: 0.3em;">
            Trusted by organizations working for change
        </p>

        <div class="row justify-content-center align-items-center g-4">

            <div class="col-6 col-md-2 text-center">
                <h4 class="fw-bold mb-0 brand-hover">MYA</h4>
            </div>

            <div class="col-6 col-md-2 text-center">
                <h4 class="fw-bold mb-0 brand-hover">UNDP</h4>
            </div>

            <div class="col-6 col-md-2 text-center">
                <h4 class="fw-bold mb-0 brand-hover">WBG</h4>
            </div>

            <div class="col-6 col-md-2 text-center">
                <h4 class="fw-bold mb-0 brand-hover">UNICEF</h4>
            </div>

            <div class="col-6 col-md-2 text-center">
                <h4 class="fw-bold mb-0 brand-hover">BC</h4>
            </div>

        </div>

    </div>

</section>
<style>
    .brand-hover{
    font-family: serif;
    color: #6c757d;
    transition: 0.3s ease;
    cursor: pointer;
}

.brand-hover:hover{
    color: #586481;
}
</style>

{{--    about page start--}}
    @include('frontend.about.about')

    {{--    about page end--}}


    <section class="text-white overflow-hidden"
         style="background:#062142; font-family: Soho, sans-serif;">

    <div class="container-fluid">

        <div class="row min-vh-100">

            <!-- Image -->
            <div class="col-md-6 p-0 position-relative">

                <img src="{{ asset('images/mission-image-7UzAvlHH.jpg') }}"
                     alt="Unity and collaboration"
                     class="w-100 h-100 object-fit-cover"
                     style="min-height:600px;">

                <div class="position-absolute top-0 start-0 w-100 h-100"
                     style="background:rgba(0,0,0,0.3);">
                </div>

            </div>

            <!-- Content -->
            <div class="col-md-6 d-flex align-items-center px-4 px-md-5 py-5">

                <div>

                    <!-- line -->
                    <div style="width:50px; height:2px; background:#d4a017;" class="mb-4"></div>

                    <!-- Title -->
                    <h2 class="fw-bold display-5 lh-sm" style="color:white;">
                        Our Mission &amp;
                        <span class="fst-italic fw-normal" style="color:#d4a017;">
                            Vision
                        </span>
                    </h2>

                    <!-- Mission -->
                    <div class="border-start ps-4 mt-5"
                         style="border-color:rgba(212,160,23,0.4) !important;">

                        <h6 class="text-uppercase small fw-semibold mb-3"
                            style="letter-spacing:4px; color:#d4a017;">
                            Mission
                        </h6>

                        <p class="opacity-75">
                            {!! $mission_vision->details1 ?? '' !!}
                        </p>

                    </div>

                    <!-- Vision -->
                    <div class="border-start ps-4 mt-5"
                         style="border-color:rgba(20,184,166,0.4) !important;">

                        <h6 class="text-uppercase small fw-semibold mb-3"
                            style="letter-spacing:4px; color:#14b8a6;">
                            Vision
                        </h6>

                        <p class="opacity-75">
                            {!! $mission_vision->details2 ?? '' !!}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="py-5"
         style="background:#FBF4EA; font-family: Soho, sans-serif;">

    <div class="container">

        <div class="row text-center g-4">

            <!-- Item 1 -->
            <div class="col-6 col-md-3 position-relative py-4">

                <h1 class="display-4 fw-bold" style="font-family: serif;">
                    500+
                </h1>

                <p class="text-uppercase small mt-3"
                   style="letter-spacing:3px; color:#6c757d;">
                    Lives Transformed
                </p>

            </div>

            <!-- Item 2 -->
            <div class="col-6 col-md-3 position-relative py-4">

                <div class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y"
                     style="width:1px; height:60px; background:rgba(0,0,0,0.1);">
                </div>

                <h1 class="display-4 fw-bold" style="font-family: serif;">
                    15+
                </h1>

                <p class="text-uppercase small mt-3"
                   style="letter-spacing:3px; color:#6c757d;">
                    Programs Delivered
                </p>

            </div>

            <!-- Item 3 -->
            <div class="col-6 col-md-3 position-relative py-4">

                <div class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y"
                     style="width:1px; height:60px; background:rgba(0,0,0,0.1);">
                </div>

                <h1 class="display-4 fw-bold" style="font-family: serif;">
                    9
                </h1>

                <p class="text-uppercase small mt-3"
                   style="letter-spacing:3px; color:#6c757d;">
                    Training Batches
                </p>

            </div>

            <!-- Item 4 -->
            <div class="col-6 col-md-3 position-relative py-4">

                <div class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y"
                     style="width:1px; height:60px; background:rgba(0,0,0,0.1);">
                </div>

                <h1 class="display-4 fw-bold" style="font-family: serif;">
                    30+
                </h1>

                <p class="text-uppercase small mt-3"
                   style="letter-spacing:3px; color:#6c757d;">
                    Partner Organizations
                </p>

            </div>

        </div>

    </div>

</section>
    <!-- Categories Section Start -->
    {{-- @include('frontend.services.services') --}}
    <!-- Categories Section End -->

    <!-- Programs Section Start -->
    @include('frontend.program.program_home')
    <!-- Programs Section End -->


    <!-- Testimonial Section Start -->
    @include('frontend.testimonial.testimonial')
    <!-- Testimonial Section End -->



{{--    gallery start--}}
    <!-- Events Section Start -->
    @include('frontend.gallery.gallery')
    <!-- Events Section End -->
    {{--    gallery end--}}


<section id="donate" class="py-5 position-relative overflow-hidden"
         style="background:#062142;">

    <!-- Background Blur -->
    <div class="position-absolute top-0 end-0 rounded-circle"
         style="width:500px; height:500px; background:rgba(255,193,7,0.08); filter:blur(120px);">
    </div>

    <div class="container position-relative my-5 py-5">
        <div class="row align-items-center gy-5">

            <!-- Left Content -->
            <div class="col-md-7">
                <div style="width:50px; height:2px; background:#ffc107;" class="mb-4"></div>

                <h2 class="display-4 fw-bold text-white lh-sm">
                    Be Part of the <br>
                    <span class="fst-italic fw-normal text-warning">Change</span>
                </h2>

                <p class="text-light opacity-75 mt-4 fs-5" style="max-width:550px;">
                    Whether you want to volunteer, donate, or partner with us —
                    every contribution helps build a better future for communities in need.
                </p>
            </div>

            <!-- Right Buttons -->
            <div class="col-md-4 offset-md-1 d-flex flex-column">

                <a href="#donate"
                   class="custom-btn btn-warning-custom mb-4">
                    Donate Now
                </a>

                <a href="#join"
                   class="custom-btn btn-outline-custom">
                    Join as Volunteer
                </a>

            </div>

        </div>
    </div>
</section>

<style>
    .custom-btn{
        text-decoration:none;
        text-align:center;
        padding:16px 20px;
        font-weight:600;
        text-transform:uppercase;
        letter-spacing:2px;
        transition:0.3s ease;
        border:2px solid transparent;
        border-radius:4px;
    }

    /* Donate Button */
    .btn-warning-custom{
        background:#ffc107;
        color:#000;
    }

    .btn-warning-custom:hover{
        background:#fff;
        color:#000;
        transform:translateY(-3px);
    }

    /* Volunteer Button */
    .btn-outline-custom{
        border:2px solid rgba(255,255,255,0.3);
        color:#fff;
    }

    .btn-outline-custom:hover{
        background:#fff;
        color:#000;
        transform:translateY(-3px);
    }
</style>
<section id="contact" class="py-5"
         style="background:#FBF4EA;">

    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-lg-7">

                <p class="text-uppercase fw-semibold small mb-3"
                   style="letter-spacing:4px; color:#14b8a6;">
                    Stay Connected
                </p>

                <h2 class="font-serif display-5 fw-bold">
                    Join Our
                    <span class="fst-italic fw-normal text-teal" style="color:#14b8a6;">
                        Community
                    </span>
                </h2>

                <p class="text-muted mt-4 fs-5"
                   style="line-height:1.8;">
                    Get updates on our programs, impact stories,
                    and ways to get involved.
                </p>

                <!-- Form -->
                <form class="mt-5">

                    <div class="row g-3 justify-content-center">

                        <div class="col-md-8">

                            <input type="email"
                                   placeholder="Your email address"
                                   class="form-control py-4 px-5 border-0 shadow-sm"
                                   style="background:#fff;">

                        </div>

                        <div class="col-md-auto">

                            <button type="submit"
                                    class="btn px-5 py-3 text-white fw-semibold text-uppercase"
                                    style="background:#062142; letter-spacing:2px; transition:0.3s;">

                                Subscribe

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

<style>
    #contact button:hover{
        background:#14b8a6 !important;
    }

    #contact input:focus{
        box-shadow:none;
        border:1px solid #14b8a6 !important;
    }
    .text-teal{
    color:#14b8a6;
}
</style>

    <!-- Blog Section Start -->
    @include('frontend.blogs.blogs')
    <!-- Blog Section End -->

@endsection
