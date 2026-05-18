<style>
    .premium-blog-section {
        background-color: #fafbfc;
        padding: 100px 0;
        position: relative;
    }

    .premium-blog-card {
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(0, 0, 0, 0.015);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    .premium-blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.09);
    }

    .premium-blog-img-box {
        position: relative;
        height: 280px;
        overflow: hidden;
        background-color: #f5f5f5;
    }

    .premium-blog-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .premium-blog-card:hover .premium-blog-img-box img {
        transform: scale(1.05);
    }

    .premium-blog-date {
        position: absolute;
        top: 20px;
        left: 20px;
        background: #14b8a6; /* Theme Teal */
        color: #ffffff;
        padding: 10px 18px;
        border-radius: 14px;
        font-family: 'Inter', sans-serif;
        text-align: center;
        box-shadow: 0 4px 12px rgba(20, 184, 166, 0.3);
        z-index: 10;
    }

    .premium-blog-date .date-day {
        font-size: 22px;
        font-weight: 800;
        line-height: 1;
        display: block;
    }

    .premium-blog-date .date-month {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        margin-top: 4px;
        display: block;
    }

    .premium-blog-body {
        padding: 35px 30px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .premium-blog-title {
        font-family: serif;
        font-size: 22px;
        font-weight: 700;
        line-height: 1.4;
        color: #111111;
        margin-bottom: 15px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .premium-blog-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .premium-blog-title a:hover {
        color: #14b8a6;
    }

    .premium-blog-desc {
        font-family: Soho, sans-serif;
        font-size: 15px;
        line-height: 1.7;
        color: #555555;
        margin-bottom: 25px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex-grow: 1;
    }

    .premium-blog-footer {
        border-top: 1px solid rgba(0, 0, 0, 0.06);
        padding-top: 20px;
        margin-top: auto;
    }

    .premium-read-more {
        display: inline-flex;
        align-items: center;
        color: #14b8a6;
        font-family: Soho, sans-serif;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .premium-read-more svg {
        transition: transform 0.3s ease;
    }

    .premium-blog-card:hover .premium-read-more {
        color: #0d9488;
    }

    .premium-blog-card:hover .premium-read-more svg {
        transform: translateX(6px);
    }
</style>

<div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70 premium-blog-section">
    <div class="container">
        <div class="sec-title3 text-center mb-50">
            <div class="sub-title"> News Update</div>

            @foreach($titles as $data)
                @if($data->page == 'blogs' )
                    <h2 class="title">{{$data->title}}</h2>
                @endif
            @endforeach
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="false">
            @if($blogs != null)
                @foreach($blogs as $blog)
                    @php 
                        $timestamp = strtotime($blog->created_at); 
                        $day = date('d', $timestamp);
                        $month = date('M', $timestamp);
                    @endphp
                    <div class="blog-item" style="height: 100%;">
                        <div class="premium-blog-card">
                            {{-- Card Image & Date Badge --}}
                            <div class="premium-blog-img-box">
                                <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->title }}" onerror="this.style.display='none'">
                                <div class="premium-blog-date">
                                    <span class="date-day">{{ $day }}</span>
                                    <span class="date-month">{{ $month }}</span>
                                </div>
                            </div>
                            
                            {{-- Card Content --}}
                            <div class="premium-blog-body">
                                <h3 class="premium-blog-title">
                                    <a href="{{ route('blogs.details', ['id' => $blog->id]) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <div class="premium-blog-desc">{!! $blog->short_details !!}</div>
                                
                                <div class="premium-blog-footer">
                                    <a href="{{ route('blogs.details', ['id' => $blog->id]) }}" class="premium-read-more">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
