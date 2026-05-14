<div id="rs-about" class="rs-about style1 pt-50 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-12">
                <h2 style="text-align: left">Notice</h2>              
                @foreach($notices as $notice)
                    <div class="card shadow mb-3" style="max-width: 540px;">
                        <div class="row ">
                          <div class="col-md-2">
                            <div class="text-center mt-4" style="background-color: #ff5421; color:white;">
                                <span class="" >{{ Carbon\Carbon::parse($notice->created_at)->format('d') }}<br>{{ Carbon\Carbon::parse($notice->created_at)->format('M') }}</span>
                            </div>
                            
                            
                          </div>
                          <div class="col-md-10">
                            
                              <p class="" ><a href="" class="text-dark">{!! Str::words($notice->short_des,10) !!}</a></p>                             
                         
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                   

                

            </div>

            <div class="col-md-8 col-12">
                <!--<div class="col-lg-6 order-last padding-0 md-pl-10 md-pr-15 md-mb-30">-->
                <!--    <div class="img-part">-->
                <!--        <div class="about-img-wrap">-->
                <!--            <img src="{{asset($about->image1??null)}}" alt="Image" class="about-img-one">-->
                <!--            <img src="{{asset($about->image2??null)}}" alt="Image" class="about-img-two d-none d-md-block">-->
                <!--            {{--                            <img src="{{asset($about->image3??null)}}" alt="Image" class="about-img-three">--}}-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-lg-6 pr-70 md-pr-15">-->
                <!--    <div class="sec-title">-->
                <!--        <div class="sub-title orange">About Us</div>-->
                <!--        <h2 class="title mb-17">{{$about->title??null}}</h2>-->
                <!--      {!! Str::words($notice->details1 ,100) !!}  -->
                <!--    </div>-->
                <!--</div>-->
                <section id="about" class="py-5 overflow-hidden" style="font-family: Soho;">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Image -->
            <div class="col-md-5 position-relative">

                <div class="position-relative about-image-wrap">

                    <!-- border effect -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 border border-warning opacity-25"
                         style="transform: translate(-15px,-15px); z-index:0;">
                    </div>

                    <!-- image -->
                   <img src="{{ asset($about->banner_image ?? 'About/about-image-B4QVOczb.jpg') }}"
     alt="Community empowerment session"
     class="img-fluid about-img">
                    <!-- yellow corner box -->
                    <div class="yellow-box"></div>

                </div>

            </div>

            <!-- Content -->
            <div class="col-md-6 offset-md-1">

                <div class="border-top border-2 border-success mb-3" style="width:60px;  border-color:#00858D !important;"></div>

                <p class="text-uppercase fw-semibold text-success small mb-3"
                   style="letter-spacing:4px; color:#00858D !important;">
                    Our Story
                </p>

                <h2 class="fw-bold display-5 lh-sm text-4xl md:text-5xl lg:text-6xl font-bold text-foreground leading-[1.05]" style="font-family: serif;">
                    A Dream Growing <br>
                    Into <span class="fst-italic fw-normal text-success" style="color:#00858D !important;">Reality</span>
                </h2>

<div class="text-muted mt-4 about-details">

    {!! $about->details1 ?? null !!}

</div>




                <!-- Stats -->
                <div class="row border-top mt-5 pt-4">

                    <div class="col-4 text-center">
                        <h3 class="fw-bold text-warning">500+</h3>
                        <small class="text-muted text-uppercase">Lives Impacted</small>
                    </div>

                    <div class="col-4 text-center">
                        <h3 class="fw-bold text-warning">9</h3>
                        <small class="text-muted text-uppercase">Program Batches</small>
                    </div>

                    <div class="col-4 text-center">
                        <h3 class="fw-bold text-warning">50+</h3>
                        <small class="text-muted text-uppercase">Trained Mentors</small>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<style>
    .about-img:hover{
    filter: grayscale(0%) !important;
    transform: scale(1.05);
}
/* Yellow right corner box */
.yellow-box{
    position:absolute;
    bottom:-20px;
    right:-20px;
    width:120px;
    height:120px;
    background:#ffc107;
    opacity:0.1;
}
body{
    font-family: Soho, sans-serif;
}
.about-details{
    font-family: Soho, sans-serif;
    font-size: 20px;
    line-height: 1.8;
    color: #6c757d;
}

/* CKEditor content style */
.about-details p{
    font-family: Soho, sans-serif;
    font-size: 20px;
    line-height: 1.8;
    color: #6c757d;
    margin-bottom: 20px;
}
.about-details img{
    max-width:100%;
    border-radius:10px;
    margin-top:20px;
}
.about-img{
    height:550px;
    width:100%;
    object-fit:cover;
    filter:grayscale(100%);
    transition:0.5s;
    border-radius:5px;
}

.about-img:hover{
    filter:grayscale(0%);
    transform:scale(1.05);
}
</style>
            </div>
            
            
        </div>
    </div>
</div>
