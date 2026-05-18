<!--<div class="rs-gallery pb-100 md-pt-70 md-pb-70">-->
<!--    <div class="container">-->
<!--        <div class="sec-title3 text-center mb-50">-->
<!--            <div class="sub-title"> Our Gallery</div>-->
<!--            <h2 class="title">{{$banner->title??null}}</h2>-->
<!--        </div>-->
<!--        <div class="row margin-0">-->
<!--            @foreach($galleries as $gallery)-->
<!--                <div class="col-lg-4 mb-0 padding-0 col-md-6">-->
<!--                    <div class="gallery-img">-->
<!--                        <a class="image-popup" href="{{asset($gallery->image)}}"><img src="{{asset($gallery->image)}}" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            @endforeach-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<style>
    :root {
        --teal: #14b8a6;
        --navy: #0f172a;
    }

    .text-teal {
        color: var(--teal);
    }

    .gallery-section {
        background: #fff;
    }

    .section-line {
        width: 50px;
        height: 2px;
        background: var(--teal);
        margin-bottom: 25px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        border-radius: 6px;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    /* Zoom Effect */
    .gallery-item:hover img {
        transform: scale(1.08);
    }

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: rgba(15, 23, 42, 0);
        display: flex;
        align-items: flex-end;
        padding: 20px;
        transition: 0.5s ease;
    }

    .gallery-item:hover .gallery-overlay {
        background: rgba(15, 23, 42, 0.45);
    }

    .gallery-text {
        color: #fff;
        font-size: 14px;
        opacity: 0;
        transform: translateY(10px);
        transition: 0.5s ease;
        letter-spacing: 0.5px;
    }

    .gallery-item:hover .gallery-text {
        opacity: 1;
        transform: translateY(0);
    }

    .gallery-top-img {
        height: 320px;
    }

    .gallery-bottom-img {
        height: 400px;
    }

    @media (max-width: 768px) {

        .gallery-top-img,
        .gallery-bottom-img {
            height: 250px;
        }

        /* Direct text visibility on mobile since touch screens lack hovering state */
        .d-block.d-md-none .gallery-overlay {
            background: rgba(15, 23, 42, 0.45) !important;
            opacity: 1 !important;
        }

        .d-block.d-md-none .gallery-text {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    }
</style>

<section id="gallery" class="gallery-section py-5 py-md-6">

    <div class="container">

        <!-- Header -->
        <div class="mb-5">

            <div class="section-line"></div>

            <div class="row align-items-end">

                <div class="col-lg-7">

                    <p class="text-uppercase text-teal fw-semibold small mb-3"
                        style="letter-spacing:3px;">
                        Gallery
                    </p>

                    <h2 class="display-4 fw-bold lh-sm">
                        Moments That
                        <span class="fst-italic fw-normal text-teal">
                            Matter
                        </span>
                    </h2>

                </div>

                <div class="col-lg-4 offset-lg-1">

                    <p class="text-muted">
                        Glimpses from our workshops, community events,
                        and the transformations that unfold every day.
                    </p>

                </div>

            </div>

        </div>

        <!-- Mobile Gallery Carousel (Visible only on Mobile) -->
        <div class="d-block d-md-none">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="15" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="4000" data-smart-speed="800" data-dots="true" data-nav="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-md-device="1">

                <!-- Slide 1 -->
                <div class="gallery-item" style="height: 300px; border-radius: 12px; overflow: hidden; position: relative;">
                    @if(isset($galleries[1]))
                    @foreach($galleries->skip(1)->take(1) as $gallery)
                    <img src="{{ asset($gallery->image) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    @endforeach
                    @else
                    <img src="{{ asset('gallery/gallery-1.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    @endif
                    <div class="gallery-overlay" style="background: rgba(15, 23, 42, 0.45); opacity: 1; display: flex; align-items: flex-end; padding: 20px; position: absolute; inset: 0;">
                        <span class="gallery-text" style="opacity: 1; transform: translateY(0); color: #fff; font-size: 14px;">
                            Soft Skills Workshop — Batch 7
                        </span>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="gallery-item" style="height: 300px; border-radius: 12px; overflow: hidden; position: relative;">
                    <img src="{{ asset('gallery/gallery-2-DdkatZ-e.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="background: rgba(15, 23, 42, 0.45); opacity: 1; display: flex; align-items: flex-end; padding: 20px; position: absolute; inset: 0;">
                        <span class="gallery-text" style="opacity: 1; transform: translateY(0); color: #fff; font-size: 14px;">
                            Youth Empowerment Seminar 2024
                        </span>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="gallery-item" style="height: 300px; border-radius: 12px; overflow: hidden; position: relative;">
                    <img src="{{ asset('gallery/gallery-3-B4FKnKyL.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="background: rgba(15, 23, 42, 0.45); opacity: 1; display: flex; align-items: flex-end; padding: 20px; position: absolute; inset: 0;">
                        <span class="gallery-text" style="opacity: 1; transform: translateY(0); color: #fff; font-size: 14px;">
                            Community Outreach Event
                        </span>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="gallery-item" style="height: 300px; border-radius: 12px; overflow: hidden; position: relative;">
                    <img src="{{ asset('gallery/gallery-4-ct5OIfTC.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="background: rgba(15, 23, 42, 0.45); opacity: 1; display: flex; align-items: flex-end; padding: 20px; position: absolute; inset: 0;">
                        <span class="gallery-text" style="opacity: 1; transform: translateY(0); color: #fff; font-size: 14px;">
                            Women Leadership Program
                        </span>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="gallery-item" style="height: 300px; border-radius: 12px; overflow: hidden; position: relative;">
                    <img src="{{ asset('gallery/gallery-5-D_BEguKs.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="background: rgba(15, 23, 42, 0.45); opacity: 1; display: flex; align-items: flex-end; padding: 20px; position: absolute; inset: 0;">
                        <span class="gallery-text" style="opacity: 1; transform: translateY(0); color: #fff; font-size: 14px;">
                            Education Material Distribution
                        </span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Desktop Gallery (Visible only on Desktop/Tablets) -->
        <div class="d-none d-md-block">
            <!-- Top Gallery -->
            <div class="row g-3">

                <!-- Image 1 -->
                <div class="col-md-4">
                    @if(isset($galleries[1]))
                    <div class="gallery-item">
                        @foreach($galleries->skip(1)->take(1) as $gallery)
                        <img src="{{ asset($gallery->image) }}" alt="">
                        @endforeach
                        <div class="gallery-overlay">
                            <span class="gallery-text">
                                Soft Skills Workshop — Batch 7
                            </span>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Image 2 -->
                <div class="col-md-4">
                    <div class="gallery-item gallery-top-img">
                        <img src="{{ asset('gallery/gallery-2-DdkatZ-e.jpg') }}" alt="">
                        <div class="gallery-overlay">
                            <span class="gallery-text">
                                Youth Empowerment Seminar 2024
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-md-4">
                    <div class="gallery-item gallery-top-img">
                        <img src="{{ asset('gallery/gallery-3-B4FKnKyL.jpg') }}" alt="">
                        <div class="gallery-overlay">
                            <span class="gallery-text">
                                Community Outreach Event
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Gallery -->
            <div class="row g-3 mt-1">

                <!-- Image 4 -->
                <div class="col-md-6">
                    <div class="gallery-item gallery-bottom-img">
                        <img src="{{ asset('gallery/gallery-4-ct5OIfTC.jpg') }}" alt="">
                        <div class="gallery-overlay">
                            <span class="gallery-text">
                                Women Leadership Program
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="col-md-6">
                    <div class="gallery-item gallery-bottom-img">
                        <img src="{{ asset('gallery/gallery-5-D_BEguKs.jpg') }}" alt="">
                        <div class="gallery-overlay">
                            <span class="gallery-text">
                                Education Material Distribution
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>