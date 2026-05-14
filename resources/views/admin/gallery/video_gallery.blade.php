@extends('admin.master')
@section('title')
    Video Gallery list
@endsection

@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>Video</th>
                            <th>Active/Deactive</th>
                            <th>Display Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{!! $gallery->video_link !!}</td>
                                    @if ($gallery->status == 1)
                                        <button class="btn btn-sm btn-success">Active</button>
                                    @elseif($gallery->status == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($gallery->video == 1)
                                        <button class="btn btn-sm btn-warning">Video</button>
                                    @elseif($gallery->video == 0)
                                        <button class="btn btn-sm btn-info">Image</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="action-btns d-flex align-items-center">
                                        <div>
                                            <a href="{{ route('edit.video.gallery',['id'=>$gallery->id]) }}"
                                                class="text-info" data-toggle="tooltip"
                                                data-placement="top" data-bs-original-title="Edit"><i class="fa-solid fa-pen-to-square fa-fw"></i>
                                            </a>
                                        </div>
                                        {{-- <div>
                                            <form action=""
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-warning btn_custom show_confirm" data-toggle="tooltip"
                                                data-placement="top" data-bs-original-title="Delete">
                                                    <i class="fa-solid fa-trash-can fa-fw"></i>
                                                </button>
                                            </form>
                                        </div> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.1.1/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea#default'
    });
</script>
@include('admin.common.script')
@endpush
