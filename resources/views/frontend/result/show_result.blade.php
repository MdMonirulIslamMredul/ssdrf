@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Results</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Show Result</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Popular Courses Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
<h3 class="text-center">{{ $result_types->title }} All Results</h3>
                <div class="card" style="background-color: #fff;
                padding: 1.5em;
                box-shadow: 3px 3px 20px rgba(0,0,0,.3);
                border-radius: 7px;
            ">
                    <div class="card-body">

                        <div class="table-responsive m-t-40">
                            <table id="config-table" class="table display table-striped border no-wrap" >
                                <thead>
                               
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Result</th>                                                
                                </tr>                                        
                                </thead>
                                <tbody>
                                    @foreach ( $uploaded_results as $uploaded_result)
                                    <tr style="">
                                        <td>{{ $uploaded_result->id }}</td>
                                        <td>{{ $uploaded_result->user->name }}</td>
                                        <td>{{ $uploaded_result->user->roll_no }}</td>                                       
                                        <td>{{ $uploaded_result->result_grate }}</td>                                       
                                    </tr>                                        
                                    @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Popular Courses Section End -->


    </div>
    <!-- Main content End -->
@endsection
