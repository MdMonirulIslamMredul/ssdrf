<style>
    .text-gold {
        color: #d4a017;
    }

    .text-teal {
        color: #14b8a6;
    }

    /* Updated Background Color */
    .bg-warm {
        background: #FCF0E0;
    }

    .testimonial-card {
        background: #fff;
        padding: 40px;
        border-left: 4px solid rgba(212, 160, 23, 0.3);
        height: 100%;
        transition: 0.3s;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        font-family: Soho, sans-serif;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .testimonial-text {
        color: rgba(0, 0, 0, 0.8);
        font-family: Soho, sans-serif;
        font-size: 24px;
        line-height: 2;
        color: #555;
        font-style: italic;
        font-weight: 400;

    }

    .testimonial-img {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        object-fit: cover;
    }

    .section-line {
        width: 50px;
        height: 2px;
        background: #d4a017;
        margin-bottom: 20px;
    }


    .testimonial-img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #00858D;
    }

    .testimonial-name {
        font-family: serif;
        font-size: 20px;
        color: #111;
    }

    .testimonial-designation {
        font-family: Soho, sans-serif;
        letter-spacing: 1px;
        font-size: 12px;
    }
</style>

<section class="py-5 py-md-6 bg-warm">

    <div class="container">

        <!-- Section Header -->
        <div class="row mb-5">

            <div class="col-lg-6">

                <div class="section-line"></div>

                <p class="text-uppercase small fw-semibold text-gold mb-3"
                    style="letter-spacing:3px;">
                    Testimonials
                </p>

                <h2 class="display-4 fw-bold">
                    Voices of <br>
                    <span class="fst-italic fw-normal text-teal">
                        Transformation
                    </span>
                </h2>

            </div>

        </div>

        <!-- Testimonials -->
        <div class="row g-4">

            <!-- Testimonial 1 -->
            <div class="col-md-6">

                <div class="testimonial-card">

                    @if(isset($testimonials) && $testimonials->count() > 0)

                    @php
                    $testimonial = $testimonials->first();
                    @endphp

                    <div class="testimonial-item">

                        <p class="testimonial-text">
                            {!! $testimonial->review !!}
                        </p>

                    </div>

                    <div class="d-flex align-items-center mt-5">

                        <img src="{{ asset($testimonial->image) }}"
                            alt="{{ $testimonial->name }}"
                            class="testimonial-img me-3">

                        <div>

                            <h6 class="mb-1 fw-semibold">
                                {{ $testimonial->name }}
                            </h6>

                            <small class="text-muted text-uppercase"
                                style="letter-spacing:1px;">

                                {{ $testimonial->designation }}

                            </small>

                        </div>

                    </div>

                    @endif

                </div>

            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-6">

                <div class="testimonial-card">

                    @if(isset($testimonials) && $testimonials->count() > 0)

                    @php
                    $testimonial = $testimonials->skip(1)->first();
                    @endphp

                    @if($testimonial)

                    <p class="testimonial-text">
                        {!! $testimonial->review !!}
                    </p>

                    <div class="d-flex align-items-center mt-5">

                        <img src="{{ asset($testimonial->image) }}"
                            alt="{{ $testimonial->name }}"
                            class="testimonial-img me-3">

                        <div>

                            <h6 class="mb-1 fw-semibold testimonial-name">
                                {{ $testimonial->name }}
                            </h6>

                            <small class="text-muted text-uppercase testimonial-designation">
                                {{ $testimonial->designation }}
                            </small>

                        </div>

                    </div>

                    @endif

                    @endif



                </div>



            </div>

            <div class="col-md-12">
                <div class="text-center mt-5">

                    <a href="{{ route('testimonial.page') }}"
                        class="text-decoration-none text-teal fw-semibold text-uppercase small">
                        See All Testimonials
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>
            </div>
        </div>

    </div>

</section>