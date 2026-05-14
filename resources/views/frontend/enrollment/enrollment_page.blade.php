@extends('frontend.master')
@section('title')
    Enrollment
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
                <h1 class="page-title">Course Enrollment</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Course Enrollment</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Shop Single Start -->
        <div class="container my-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="table-responsive m-t-40">
                        <table id="config-table" class="table display table-striped border no-wrap">
                            <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>User Name</th>
                                <th>Payment Method</th>
                                <th>Number</th>
                                <th>Transaction ID</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->service->service_title ?? null }}</td>
                                    <td>{{ $enrollment->user->name ?? null }}</td>
                                    <td>{{ $enrollment->payment_type ?? null }}</td>
                                    <td>{{ $enrollment->number ?? null }}</td>
                                    <td>{{ $enrollment->transaction_id ?? null }}</td>
                                    <td>
                                        @if ($enrollment->status == 1)
                                            <button class="btn btn-sm btn-success">Approved</button>
                                        @elseif($enrollment->status == 0)
                                            <button class="btn btn-sm btn-warning">Pending</button>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        </div>


    </div>
    <!-- Main content End -->
@endsection
