@extends('frontend.master')
@section('title')
    Membership
@endsection
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image??null)}}" alt="Breadcrumbs Image">
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

        <!-- Events Section Start -->
        <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row margin-0">
                    @foreach($memberships as $membership)
                    <div class="col-lg-3 col-md-6">
                        {!! $membership->description !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Events Section End -->
  <form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
   
    <hr>
<div class="row">
    <div class="col-md-12" style="    display: flex;
">
        
         <div class="col-md-6">
              <label for="email"><b>Name</b></label>
    <input type="text"class="form-control" placeholder="Enter Name" name="name" id="Name" required><br>
    <label for="email"><b>Father’s Name</b></label>
    <input type="text" class="form-control" placeholder="Enter Father’s Name" name="father" id="Father’s Name" required><br>
    <label for="email"><b>Mother’s Name</b></label>
    <input type="text" class="form-control" placeholder="Enter Mother’s Name" name="mother" id="Mother’s Name" required><br>
    <label for="email"><b>Present Address</b></label>
    <input type="text" class="form-control" placeholder="Enter Present Address" name="paddress" id="Present Address" required><br>
    <label for="email"><b>Permanant Address</b></label>
    <input type="text" class="form-control" placeholder="Enter Permanant Address" name="ppaddress" id="Permanant Address" required><br>
    <label for="email"><b>Profession</b></label>
    <input type="text" class="form-control" placeholder="Enter Profession " name="profession" id="" required><br>
         </div>
          <div class="col-md-6">
               <label for="email"><b>NID Number</b></label>
    <input type="text" class="form-control" class="form-control" placeholder="Enter nid" name="nid" id="Permanant Address" required><br>
    <label for="email"><b>Mobile No</b></label>
    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" id="Permanant Address" required><br>
    <label for="email"><b>Email</b></label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" required><br>
    <label for="email"><b>Cv (Only For Carrer)</b></label>
    <input type="file" class="form-control" placeholder="Enter Email" name="file" id="file" required><br>
    <label for="email"><b>Registration Type</b></label>
   <select name="type" class="form-control">
       <option>Internship</option>
       <option>Membership</option>
       <option>Carrer</option>
   </select>

          </div>
    </div>
</div>
   
   
  
    <button type="submit" class="registerbtn">Register</button>
  </div>

  
</form>


    </div>
    <!-- Main content End -->
@endsection
