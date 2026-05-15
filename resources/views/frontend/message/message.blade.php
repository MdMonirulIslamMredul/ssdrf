@extends('frontend.master')
@section('title')
    Message
@endsection
@section('content')
    <style>
        .modern-message-card {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            margin-bottom: 50px;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.02);
            position: relative;
            z-index: 1;
        }
        .modern-message-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        }
        .message-img-wrapper {
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            height: 100%;
        }
        .message-img-wrapper img {
            max-width: 100%;
            border-radius: 50%;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            object-fit: cover;
            border: 8px solid #fff;
            width: 260px;
            height: 260px;
            transition: transform 0.5s ease;
        }
        .modern-message-card:hover .message-img-wrapper img {
            transform: scale(1.05);
        }
        .message-content {
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            background: #fff;
            position: relative;
        }
        .message-name {
            font-size: 32px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
            font-family: 'Inter', sans-serif;
        }
        .message-designation {
            font-size: 15px;
            color: #ff5421;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            display: inline-block;
        }
        .message-desc {
            color: #5a6268;
            line-height: 1.8;
            font-size: 16px;
            position: relative;
            z-index: 2;
        }
        .message-desc p {
            margin-bottom: 15px;
        }
        .quote-icon {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 140px;
            color: rgba(255, 84, 33, 0.04);
            font-family: Georgia, serif;
            line-height: 1;
            z-index: 0;
            pointer-events: none;
        }
        .page-bg-light {
            background-color: #f8f9fa;
        }
        @media (max-width: 991px) {
            .message-img-wrapper {
                padding: 40px 20px;
            }
            .message-content {
                padding: 40px 30px;
            }
        }
        @media (max-width: 768px) {
            .message-img-wrapper img {
                width: 200px;
                height: 200px;
            }
            .message-name {
                font-size: 26px;
            }
            .quote-icon {
                font-size: 100px;
                top: 10px;
                right: 20px;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content page-bg-light">
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

        <!-- Message Section Start -->
        <div class="pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                @foreach($messages as $index => $message)
                <div class="modern-message-card">
                    <div class="row align-items-stretch m-0 {{ $index % 2 !== 0 ? 'flex-row-reverse' : '' }}">
                        <div class="col-lg-4 col-md-5 p-0">
                            <div class="message-img-wrapper">
                                <img src="{{ asset('images') }}/{{ $message->image }}" alt="{{ $message->name }}">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 p-0">
                            <div class="message-content">
                                <div class="quote-icon">&rdquo;</div>
                                <h3 class="message-name">{{ $message->name }}</h3>
                                <span class="message-designation">{{ $message->designation }}</span>
                                <div class="message-desc">
                                    {!! $message->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Message Section End -->

    </div>
    <!-- Main content End -->
@endsection
