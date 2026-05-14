@extends('admin.master')
@section('body')
{{-- @dd($enrollments); --}}
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Name</th>
                            <th>Roll No.</th>
                            {{-- <th>Payment Method</th> --}}
                            <th>Number</th>
                            {{-- <th>Transaction ID</th> --}}
                            <th>Status</th>
                            <th>Invoice</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($enrollments as $enrollment)
                            <tr>
                                <td>{{ $enrollment->service->service_title ?? null }}</td>
                                <td>{{ $enrollment->user->name ?? null }}</td>
                                <td>{{ $enrollment->user->roll_no ?? null }}</td>
                                {{-- <td>{{ $enrollment->payment_type ?? null }}</td> --}}
                                <td>
                                    @if($enrollment->personal_mobile)
                                    {{ $enrollment->personal_mobile ?? null }}
                                    @else
                                    {{ $enrollment->guardian_mobile ?? null }}
                                    @endif
                                </td>
                                {{-- <td>{{ $enrollment->transaction_id ?? null }}</td> --}}
                                <td>
                                    @if ($enrollment->status == 1)
                                        <button class="btn btn-sm btn-success">Paid</button>
                                    @elseif($enrollment->status == 0)
                                        <button class="btn btn-sm btn-warning">Unpaid</button>
                                    @endif
                                </td>
                                <td><a href="" class="btn btn-info btn-sm"><i class="bi bi-arrow-down"></i>Download</a></td>
                                <td>
                                    <a href="{{ route('update.enrollment',['id'=>$enrollment->id]) }}" class="btn btn-primary btn-sm editProduct">
                                        {{ $enrollment->status == 1 ? 'Make Pending' : 'Approve'}}</a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
