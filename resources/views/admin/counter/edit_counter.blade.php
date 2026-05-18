@extends('admin.master')

@section('body')

<div class="row justify-content-center mt-3">
    <div class="col-12 col-lg-10">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="bi bi-123 me-2"></i> Counter Settings
                </h3>
            </div>

            <div class="card-body">

                {{-- Success / Error Messages --}}
                @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('update.counter') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="row g-4">

                        {{-- Counter 1 --}}
                        <div class="col-12">
                            <h5 class="border-bottom pb-2 text-primary">
                                <i class="bi bi-1-circle me-1"></i> Counter 1
                            </h5>
                        </div>
                        <!-- <div class="col-md-4">
                            <label class="form-label fw-semibold">Icon Class (e.g. fa fa-users)</label>
                            <input type="text" name="incon_1" class="form-control"
                                   value="{{ old('incon_1', $counter->incon_1 ?? '') }}"
                                   placeholder="e.g. fa fa-users">
                        </div> -->
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" name="title_1" class="form-control"
                                value="{{ old('title_1', $counter->title_1 ?? '') }}"
                                placeholder="e.g. Happy Clients">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Count Value</label>
                            <input type="text" name="value_1" class="form-control"
                                value="{{ old('value_1', $counter->value_1 ?? '') }}"
                                placeholder="e.g. 1500">
                        </div>

                        {{-- Counter 2 --}}
                        <div class="col-12 mt-2">
                            <h5 class="border-bottom pb-2 text-primary">
                                <i class="bi bi-2-circle me-1"></i> Counter 2
                            </h5>
                        </div>
                        <!-- <div class="col-md-4">
                            <label class="form-label fw-semibold">Icon Class</label>
                            <input type="text" name="incon_2" class="form-control"
                                   value="{{ old('incon_2', $counter->incon_2 ?? '') }}"
                                   placeholder="e.g. fa fa-briefcase">
                        </div> -->
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" name="title_2" class="form-control"
                                value="{{ old('title_2', $counter->title_2 ?? '') }}"
                                placeholder="e.g. Projects Done">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Count Value</label>
                            <input type="text" name="value_2" class="form-control"
                                value="{{ old('value_2', $counter->value_2 ?? '') }}"
                                placeholder="e.g. 350">
                        </div>

                        {{-- Counter 3 --}}
                        <div class="col-12 mt-2">
                            <h5 class="border-bottom pb-2 text-primary">
                                <i class="bi bi-3-circle me-1"></i> Counter 3
                            </h5>
                        </div>
                        <!-- <div class="col-md-4">
                            <label class="form-label fw-semibold">Icon Class</label>
                            <input type="text" name="incon_3" class="form-control"
                                   value="{{ old('incon_3', $counter->incon_3 ?? '') }}"
                                   placeholder="e.g. fa fa-award">
                        </div> -->
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" name="title_3" class="form-control"
                                value="{{ old('title_3', $counter->title_3 ?? '') }}"
                                placeholder="e.g. Awards Won">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Count Value</label>
                            <input type="text" name="value_3" class="form-control"
                                value="{{ old('value_3', $counter->value_3 ?? '') }}"
                                placeholder="e.g. 25">
                        </div>

                        {{-- Counter 4 --}}
                        <div class="col-12 mt-2">
                            <h5 class="border-bottom pb-2 text-primary">
                                <i class="bi bi-4-circle me-1"></i> Counter 4
                            </h5>
                        </div>
                        <!-- <div class="col-md-4">
                            <label class="form-label fw-semibold">Icon Class</label>
                            <input type="text" name="incon_4" class="form-control"
                                   value="{{ old('incon_4', $counter->incon_4 ?? '') }}"
                                   placeholder="e.g. fa fa-star">
                        </div> -->
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" name="title_4" class="form-control"
                                value="{{ old('title_4', $counter->title_4 ?? '') }}"
                                placeholder="e.g. Expert Team">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Count Value</label>
                            <input type="text" name="value_4" class="form-control"
                                value="{{ old('value_4', $counter->value_4 ?? '') }}"
                                placeholder="e.g. 40">
                        </div>

                        {{-- Status --}}
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ (old('status', $counter->status ?? 1) == 1) ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ (old('status', $counter->status ?? 1) == 0) ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        {{-- Submit --}}
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-save me-1"></i> Update Counter
                            </button>
                        </div>

                    </div>{{-- /row --}}
                </form>

            </div>{{-- /card-body --}}
        </div>{{-- /card --}}
    </div>{{-- /col --}}
</div>{{-- /row --}}

@endsection