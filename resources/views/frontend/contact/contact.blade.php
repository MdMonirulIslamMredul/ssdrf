@extends('frontend.master')
@section('title')
    Contact Us
@endsection
@section('content')

    <style>
        /* Breadcrumbs */
        .modern-contact-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-contact-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-contact-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Info Cards */
        .modern-contact-section {
            background: #fdfdfd;
            padding: 100px 0 0;
        }
        .contact-info-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
            border: 1px solid rgba(0,0,0,0.03);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
        }
        .contact-info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
        }
        .contact-icon-badge {
            width: 60px;
            height: 60px;
            min-width: 60px;
            border-radius: 16px;
            background: linear-gradient(135deg, #ff5421 0%, #ff7b54 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(255, 84, 33, 0.3);
        }
        .contact-icon-badge i {
            color: #fff;
            font-size: 22px;
        }
        .contact-info-text .info-label {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #ff5421;
            display: block;
            margin-bottom: 8px;
        }
        .contact-info-text .info-value {
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            line-height: 1.5;
        }
        .contact-info-text .info-value a {
            color: #1a1a1a;
            text-decoration: none;
            transition: color 0.3s;
        }
        .contact-info-text .info-value a:hover {
            color: #ff5421;
        }

        /* Map & Form Section */
        .modern-contact-main {
            background: #fdfdfd;
            padding: 80px 0 100px;
        }
        .contact-map-wrapper {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.08);
            height: 100%;
            min-height: 500px;
        }
        .contact-map-wrapper iframe {
            width: 100%;
            height: 100%;
            min-height: 500px;
            border: none;
            display: block;
        }

        /* Form Wrapper */
        .modern-contact-form-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.06);
            padding: 50px 45px;
            border: 1px solid rgba(0,0,0,0.02);
            position: relative;
            overflow: hidden;
        }
        .modern-contact-form-card::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -80px;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(255,84,33,0.05) 0%, transparent 70%);
            border-radius: 50%;
        }
        .form-card-header {
            margin-bottom: 35px;
        }
        .form-card-header h2 {
            font-size: 32px;
            font-weight: 800;
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
            margin-bottom: 10px;
        }
        .form-card-header p {
            color: #777;
            font-size: 16px;
            line-height: 1.6;
        }
        .modern-input-group {
            margin-bottom: 22px;
        }
        .modern-input-group label {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }
        .modern-contact-input {
            width: 100%;
            height: 54px;
            padding: 10px 18px;
            border-radius: 12px;
            border: 1.5px solid #e8e8e8;
            background: #fcfcfc;
            font-size: 15px;
            color: #333;
            transition: all 0.3s ease;
        }
        .modern-contact-textarea {
            width: 100%;
            padding: 14px 18px;
            border-radius: 12px;
            border: 1.5px solid #e8e8e8;
            background: #fcfcfc;
            font-size: 15px;
            color: #333;
            resize: vertical;
            min-height: 140px;
            transition: all 0.3s ease;
            font-family: inherit;
        }
        .modern-contact-input:focus,
        .modern-contact-textarea:focus {
            border-color: #ff5421;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(255, 84, 33, 0.08);
            outline: none;
        }
        .modern-contact-input::placeholder,
        .modern-contact-textarea::placeholder {
            color: #bbb;
        }
        .modern-contact-submit {
            background: linear-gradient(135deg, #ff5421 0%, #ff7b54 100%);
            color: #fff;
            border: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 25px rgba(255, 84, 33, 0.3);
            width: 100%;
            margin-top: 10px;
        }
        .modern-contact-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 84, 33, 0.4);
        }

        @media (max-width: 991px) {
            .contact-map-wrapper {
                min-height: 350px;
                margin-bottom: 40px;
            }
            .contact-map-wrapper iframe {
                min-height: 350px;
            }
        }
        @media (max-width: 768px) {
            .modern-contact-breadcrumbs { height: 500px; }
            .modern-contact-form-card { padding: 35px 25px; }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-contact-breadcrumbs">
            <div class="breadcrumbs-img">
                @if(!empty($banner->image))
                    <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Contact Us</h1>
                <ul>
                    <li><a class="active" href="{{route('front.page')}}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Info Cards Section Start -->
        <div class="modern-contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-info-card">
                            <div class="contact-icon-badge">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-info-text">
                                <span class="info-label">Our Address</span>
                                <span class="info-value">{{ $links->address ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-info-card">
                            <div class="contact-icon-badge">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <span class="info-label">Email Address</span>
                                <span class="info-value">
                                    <a href="mailto:{{ $links->email ?? '' }}">{{ $links->email ?? 'N/A' }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-info-card">
                            <div class="contact-icon-badge">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-info-text">
                                <span class="info-label">Phone Number</span>
                                <span class="info-value">
                                    <a href="tel:{{ $links->number ?? '' }}">{{ $links->number ?? 'N/A' }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Cards Section End -->

        <!-- Map & Form Section Start -->
        <div class="modern-contact-main">
            <div class="container">
                <div class="row align-items-stretch">
                    {{-- Map --}}
                    <div class="col-lg-6 mb-40 md-mb-40">
                        <div class="contact-map-wrapper">
                            {!! $links->map_link !!}
                        </div>
                    </div>

                    {{-- Form --}}
                    <div class="col-lg-6">
                        <div class="modern-contact-form-card">
                            <div class="form-card-header">
                                <h2>Get In Touch</h2>
                                @if(!empty($banner->title))
                                <p>{{ $banner->title }}</p>
                                @else
                                <p>We'd love to hear from you. Fill out the form and we'll get back to you shortly.</p>
                                @endif
                            </div>

                            @if(session('success'))
                            <div style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 15px 20px; border-radius: 12px; margin-bottom: 25px; font-weight: 600;">
                                <i class="fa fa-check-circle" style="margin-right: 8px;"></i> {{ session('success') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('contact') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="modern-input-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" name="name" id="name" class="modern-contact-input" placeholder="Enter your name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="modern-input-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" class="modern-contact-input" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="modern-input-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" name="number" id="phone" class="modern-contact-input" placeholder="Enter phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="modern-input-group">
                                            <label for="msg_subject">Subject</label>
                                            <input type="text" name="subject" id="msg_subject" class="modern-contact-input" placeholder="Enter subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="modern-input-group">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" class="modern-contact-textarea" placeholder="Write your message here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="modern-contact-submit">
                                            <i class="fa fa-paper-plane" style="margin-right: 8px;"></i> Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map & Form Section End -->

    </div>
    <!-- Main content End -->
@endsection
