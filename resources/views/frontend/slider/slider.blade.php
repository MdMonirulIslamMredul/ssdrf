<style>
    .rs-slider.main-home .slider-content .content-part {
        height: 900px !important;
    }
</style>
<div class="rs-slider main-home">
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
        @foreach($banners as $banner)
        <div class="slider-content" style="background: url({{asset($banner->image)}});background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="container">
            <div class="content-part w-100" style="text-align:left height:800px !important;">
            
<h1 class="sl-sub-title wow bounceInLeft font-serif text-5xl md:text-7xl lg:text-8xl font-bold text-white leading-[0.95] tracking-tight text-gold"
    data-wow-delay="300ms"
    data-wow-duration="2000ms"
    style="text-align:left !important;">
    {{$banner->title}}
</h1>

<p class="sl-title wow fadeInRight text-sm md:text-base text-white opacity-80"
   data-wow-delay="600ms"
   data-wow-duration="2000ms"
   style="text-align:left !important;">
    {{$banner->short_details}}
</p>
            
            </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Features Section start -->
{{--    <div id="rs-features" class="rs-features main-home">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-12 md-mb-30">--}}
{{--                    <div class="features-wrap">--}}
{{--                        <div class="icon-part">--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/features/icon/3.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="content-part">--}}
{{--                            <h4 class="title">--}}
{{--                                <span class="watermark">5,320 online courses</span>--}}
{{--                            </h4>--}}
{{--                            <p class="dese">--}}
{{--                                Enjoy a variety of fresh topics--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-12 md-mb-30">--}}
{{--                    <div class="features-wrap">--}}
{{--                        <div class="icon-part">--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/features/icon/2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="content-part">--}}
{{--                            <h4 class="title">--}}
{{--                                <span class="watermark">Expert instruction</span>--}}
{{--                            </h4>--}}
{{--                            <p class="dese">--}}
{{--                                Find the right instructor--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="features-wrap">--}}
{{--                        <div class="icon-part">--}}
{{--                            <img src="{{asset('/')}}frontend/assets/images/features/icon/1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="content-part">--}}
{{--                            <h4 class="title">--}}
{{--                                <span class="watermark">Lifetime access</span>--}}
{{--                            </h4>--}}
{{--                            <p class="dese">--}}
{{--                                Learn on your schedule--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Features Section End -->
</div>
