@extends('frontend.master')
@section('title')
    Membership
@endsection
@section('content')
    <style>
        /* Breadcrumbs Modernization */
        .modern-membership-breadcrumbs {
            height: 750px;
            background-color: #1a1a1a;
            position: relative;
        }
        .modern-membership-breadcrumbs .breadcrumbs-img {
            height: 100%;
            width: 100%;
        }
        .modern-membership-breadcrumbs .breadcrumbs-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Membership Section */
        .modern-membership-section {
            background-color: #fdfdfd;
            padding: 100px 0;
            position: relative;
        }
        .membership-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
            border: 1px solid rgba(0,0,0,0.03);
            transition: all 0.4s ease;
            height: 100%;
            text-align: center;
        }
        .membership-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }

        /* Registration Form Section */
        .modern-registration-section {
            background-color: #fff;
            padding: 100px 0;
        }
        .registration-wrapper {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.08);
            padding: 60px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.02);
        }
        .reg-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .reg-header h2 {
            font-size: 36px;
            font-weight: 800;
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
        }
        .reg-header p {
            color: #777;
            font-size: 16px;
        }
        
        .modern-form-group {
            margin-bottom: 25px;
        }
        .modern-form-group label {
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 10px;
            display: block;
            font-size: 14px;
        }
        .modern-form-control {
            width: 100%;
            height: 55px;
            padding: 10px 20px;
            border-radius: 12px;
            border: 1px solid #e1e1e1;
            background: #fcfcfc;
            font-size: 15px;
            color: #333;
            transition: all 0.3s ease;
        }
        .modern-form-control:focus {
            border-color: #ff5421;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(255, 84, 33, 0.1);
            outline: none;
        }
        .modern-form-control::placeholder {
            color: #aaa;
        }
        
        .modern-submit-btn {
            background: linear-gradient(135deg, #ff5421 0%, #ff7b54 100%);
            color: #fff;
            border: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(255, 84, 33, 0.3);
            width: 100%;
            margin-top: 20px;
        }
        .modern-submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 84, 33, 0.4);
        }

        /* Decorative bg */
        .bg-shape-reg {
            position: absolute;
            top: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,84,33,0.04) 0%, rgba(255,84,33,0) 70%);
            z-index: 0;
            border-radius: 50%;
        }

        @media (max-width: 768px) {
            .modern-membership-breadcrumbs {
                height: 500px;
            }
            .registration-wrapper {
                padding: 40px 20px;
            }
        }
    </style>

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay modern-membership-breadcrumbs">
            <div class="breadcrumbs-img">
                @if(!empty($banner->image))
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image" onerror="this.style.display='none'">
                @endif
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Membership</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Membership</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Memberships Description Section Start -->
        @if(count($memberships) > 0)
        <div class="modern-membership-section">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($memberships as $membership)
                    <div class="col-lg-4 col-md-6 mb-40">
                        <div class="membership-card">
                            {!! $membership->description !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- Memberships Description Section End -->

        <!-- Registration Form Section Start -->
        <div class="modern-registration-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="registration-wrapper">
                            <div class="bg-shape-reg"></div>
                            
                            <div class="reg-header position-relative" style="z-index: 2;">
                                <h2>Apply For Registration</h2>
                                <p>Join our community by filling out the form below.</p>
                            </div>

                            <form action="" method="POST" enctype="multipart/form-data" class="position-relative" style="z-index: 2;">
                                @csrf
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <div class="modern-form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Full Name" name="name" id="name" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="father">Father’s Name</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Father’s Name" name="father" id="father" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="mother">Mother’s Name</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Mother’s Name" name="mother" id="mother" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="paddress">Present Address</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Present Address" name="paddress" id="paddress" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="ppaddress">Permanent Address</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Permanent Address" name="ppaddress" id="ppaddress" required>
                                        </div>
                                    </div>
                                    
                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <div class="modern-form-group">
                                            <label for="profession">Profession</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Profession" name="profession" id="profession" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="nid">NID Number</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter NID Number" name="nid" id="nid" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="mobile">Mobile Number</label>
                                            <input type="text" class="modern-form-control" placeholder="Enter Mobile Number" name="mobile" id="mobile" required>
                                        </div>
                                        
                                        <div class="modern-form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="modern-form-control" placeholder="Enter Email Address" name="email" id="email" required>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="modern-form-group">
                                                    <label for="type">Registration Type</label>
                                                    <select name="type" id="type" class="modern-form-control">
                                                        <option value="Internship">Internship</option>
                                                        <option value="Membership">Membership</option>
                                                        <option value="Career">Career</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="modern-form-group">
                                                    <label for="file">CV (For Career)</label>
                                                    <input type="file" class="modern-form-control" style="padding-top: 13px;" name="file" id="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 text-center mt-3">
                                        <button type="submit" class="modern-submit-btn">Submit Application</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form Section End -->

    </div>
    <!-- Main content End -->
@endsection
