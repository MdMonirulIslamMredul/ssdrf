@php $siteLogo = \App\Models\Logo::latest()->first(); @endphp

<style>


.rs-slider.main-home .slider-content .content-part {

    max-width: 1200px !important;

}
    /* ── Push slider container flush-left ── */
    .rs-slider.main-home .slider-content .container {
        max-width: 100% !important;
        width: 100% !important;
        margin: 0 !important;
        padding-left: 80px !important;
        padding-right: 15px !important;
    }
    @media (max-width: 991px) {
        .rs-slider.main-home .slider-content .container {
            padding-left: 30px !important;
        }
    }
    @media (max-width: 575px) {
        .rs-slider.main-home .slider-content .container {
            padding-left: 20px !important;
        }
    }

    /* ── Override theme's content-part so our flex layout works ── */
    .rs-slider.main-home .slider-content {
        position: relative;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
    }

    .rs-slider.main-home .slider-content .content-part {
        height: auto !important;
        min-height: 100vh;
        display: flex !important;
        align-items: center;
        justify-content: flex-start;
        padding: 140px 0 100px !important;
        position: relative;
        z-index: 2;
        text-align: left !important;
    }

    /* Dark gradient overlay: deep navy left → warm amber right */
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            105deg,
            rgba(6, 33, 66, 0.53) 0%,
            rgba(6, 33, 66, 0.35) 50%,
            rgba(70, 35, 5, 0.25) 100%
        );
        z-index: 1;
    }

    /* ── Hero content block ── */
    .hero-content {
        max-width: 600px;
        position: relative;
        z-index: 2;
        text-align: left !important;
    }

    /* Thin gold decorative line */
    .hero-eyebrow-line {
        width: 55px;
        height: 2px;
        background: #d4a017;
        margin-bottom: 22px;
    }

    /* Site name */
    .hero-site-name {
        display: block;
        color: #d4a017;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 6px;
        text-transform: uppercase;
        margin-bottom: 30px;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    /* Large serif title */
    .hero-title {
        font-size: clamp(48px, 7vw, 82px);
        font-weight: 800;
        color: #ffffff !important;
        line-height: 1.0;
        font-family: Georgia, 'Times New Roman', serif;
        margin-bottom: 28px;
        letter-spacing: -1px;
    }

    /* Short description */
    .hero-desc {
        color: rgba(255, 255, 255, 0.82) !important;
        font-size: 17px;
        line-height: 1.75;
        max-width: 500px;
        margin-bottom: 46px;
        font-family: 'Segoe UI', Arial, sans-serif;
        text-align: left !important;
    }

    /* CTA button row */
    .hero-btn-row {
        display: flex;
        align-items: center;
        gap: 32px;
        flex-wrap: wrap;
    }

    /* Filled gold button */
    .hero-btn-primary {
        display: inline-block;
        background: #d4a017;
        color: #000000 !important;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        padding: 18px 40px;
        text-decoration: none !important;
        transition: all 0.3s ease;
        font-family: 'Segoe UI', Arial, sans-serif;
        border: 2px solid #d4a017;
    }
    .hero-btn-primary:hover {
        background: #ffffff;
        color: #000000 !important;
        transform: translateY(-3px);
    }

    /* Outlined text button */
    .hero-btn-secondary {
        display: inline-block;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-decoration: none !important;
        padding-bottom: 5px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.55);
        transition: all 0.3s ease;
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    .hero-btn-secondary:hover {
        color: #d4a017 !important;
        border-color: #d4a017;
    }

    /* Owl nav arrow override */
    .rs-slider.main-home .owl-nav button.owl-prev,
    .rs-slider.main-home .owl-nav button.owl-next {
        background: rgba(212, 160, 23, 0.85) !important;
        color: #fff !important;
        width: 52px;
        height: 52px;
        border-radius: 0 !important;
        font-size: 22px !important;
        transition: 0.3s;
    }
    .rs-slider.main-home .owl-nav button:hover {
        background: #d4a017 !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .rs-slider.main-home .slider-content .content-part {
            min-height: 75vh;
            padding: 110px 0 70px !important;
        }
        .hero-title { font-size: 42px !important; }
        .hero-desc  { font-size: 15px; }
    }

</style>

{{-- ───── Slider (keep rs-slider + rs-carousel so theme JS stays intact) ───── --}}
<div class="rs-slider main-home">

    <div class="rs-carousel owl-carousel"
         data-loop="true"
         data-items="1"
         data-margin="0"
         data-autoplay="true"
         data-hoverpause="true"
         data-autoplay-timeout="5500"
         data-smart-speed="900"
         data-dots="false"
         data-nav="true"
         data-nav-speed="false"
         data-center-mode="false"
         data-mobile-device="1"
         data-mobile-device-nav="false"
         data-mobile-device-dots="false"
         data-ipad-device="1"
         data-ipad-device-nav="false"
         data-ipad-device-dots="false"
         data-ipad-device2="1"
         data-ipad-device-nav2="false"
         data-ipad-device-dots2="false"
         data-md-device="1"
         data-md-device-nav="true"
         data-md-device-dots="false">

        @foreach($banners as $banner)

        {{-- keep original class "slider-content" so theme CSS/JS hooks work --}}
        <div class="slider-content"
             style="background: url('{{ asset($banner->image) }}') center/cover no-repeat;">

            {{-- Dark gradient overlay --}}
            <div class="hero-overlay"></div>

            <div class="container">
                <div class="content-part">
                    <div class="hero-content">

                        {{-- Gold accent line --}}
                        <div class="hero-eyebrow-line"></div>

                        {{-- Site name --}}
                        <span class="hero-site-name">
                            {{ $siteLogo->site_name ?? '' }}
                        </span>

                        {{-- Main title (unescaped so <em> tags work for italic gold) --}}
                        <h1 class="hero-title">
                            {!! $banner->title !!}
                        </h1>

                        {{-- Short description --}}
                        @if($banner->short_details)
                        <p class="hero-desc">
                            {{ $banner->short_details }}
                        </p>
                        @endif

                        {{-- CTA Buttons --}}
                        <div class="hero-btn-row">
                            <a href="{{ route('menu.sub_menus', ['menu_id' => 3]) }}"
                               class="hero-btn-primary">
                                Our Programs
                            </a>
                            <a href="{{ route('contacts') }}"
                               class="hero-btn-secondary">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        @endforeach

    </div>

</div>
