@extends('frontend.master')

@section('content')

<!-- Main content Start -->
<div class="main-content">

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            @php
                $banner=\App\Models\BannerAndTitle::where('page','register')->latest()->first();
            @endphp
            <img src="{{asset($banner->image??null)}}" alt="Breadcrumbs Image">
        </div>

        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Register</h1>
            <ul>
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Register Section -->
    <section class="register-section pt-100 pb-100">
        <div class="container">
            <div class="register-box">

                <div class="sec-title text-center mb-30">
                    <h2 class="title mb-10">Create New Account</h2>
                </div>

                <!-- 🔥 ERROR MESSAGE SHOW -->
                @if ($errors->any())
                    <div style="color:red; margin-bottom:15px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Form -->
                <div class="styled-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">

                            <!-- Form Group -->
                            <div class="form-group col-lg-12 mb-25">
                                <input id="name" name="name" type="text" placeholder="Username" required>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input id="email" type="email" name="email" placeholder="Email" required>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input id="pwd" name="password" placeholder="Password" type="password" required>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input id="pwd_2" name="password_confirmation" placeholder="Confirm Password" type="password" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                <button type="submit" class="readon register-btn">
                                    <span class="txt">Sign Up</span>
                                </button>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="users">
                                    Already have an account? <a href="{{ route('login') }}">Sign In</a>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

</div>
<!-- Main content End -->

@endsection