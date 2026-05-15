<style>
    .text-teal {
        color: #14b8a6;
    }

    .text-gold {
        color: #d4a017;
    }

    .bg-program {
        background: #fafafa;
    }

    .section-line {
        width: 50px;
        height: 2px;
        background: #14b8a6;
        margin-bottom: 25px;
    }

    .program-item {
        padding: 40px 20px;
        border-bottom: 1px solid #e5e5e5;
        transition: all 0.35s ease;
        cursor: pointer;
    }

    .program-item:hover {
        background: #FBF5EC;
        transform: translateY(-3px);
    }

    .program-item:hover .program-title {
        color: #14b8a6;
    }

    .program-item:hover .program-arrow {
        transform: translateX(6px);
        color: #14b8a6;
    }

    .program-title {
        transition: 0.3s;
    }

    .program-arrow {
        transition: 0.3s;
        color: rgba(0,0,0,0.3);
        font-size: 20px;
    }

    .program-badge {
        display: inline-block;
        margin-top: 10px;
        background: rgba(212, 160, 23, 0.1);
        color: #d4a017;
        padding: 6px 12px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        border-radius: 30px;
    }

    .tracking {
        letter-spacing: 3px;
    }

    .tracking-small {
        letter-spacing: 2px;
    }
</style>

<section id="programs" class="py-5 py-md-6 bg-program">

    <div class="container">

        <!-- Header -->
        <div class="row mb-5 align-items-end">

            <div class="col-lg-5">

                <div class="section-line"></div>

                <p class="text-uppercase text-teal fw-semibold small tracking mb-3">
                    Our Programs
                </p>

                <h2 class="display-4 fw-bold lh-sm">
                    Transformative <br>
                    Learning
                    <span class="fst-italic fw-normal text-teal">
                        Journeys
                    </span>
                </h2>

            </div>

            <div class="col-lg-5 offset-lg-2">

                <p class="text-muted fs-5">
                    Carefully designed programs that blend theory, practice,
                    and mentorship to create lasting personal and professional growth.
                </p>

            </div>

        </div>

        <!-- Programs -->
        <div class="border-top">

            @forelse($programs as $program)

            <a href="{{ route('submenu.details', ['id' => $program->id]) }}"
               class="text-decoration-none text-dark">

                <div class="row align-items-center program-item">

                    {{-- Serial Number --}}
                    <div class="col-md-1">
                        <span class="small text-muted">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>

                    {{-- Title + Badge --}}
                    <div class="col-md-3">

                        <h3 class="fw-bold mb-0 program-title">
                            {{ $program->title }}
                        </h3>

                        @if($program->designation)
                        <span class="program-badge">
                            {{ $program->designation }}
                        </span>
                        @endif

                    </div>

                    {{-- Name --}}
                    <div class="col-md-2">

                        @if($program->name)
                        <p class="small text-uppercase text-teal fw-semibold tracking-small mb-0">
                            {{ $program->name }}
                        </p>
                        @endif

                    </div>

                    {{-- Short Description --}}
                    <div class="col-md-5">

                        <p class="text-muted mb-0">
                            {{ \Illuminate\Support\Str::limit(strip_tags($program->details1 ?? ''), 120) }}
                        </p>

                    </div>

                    {{-- Arrow --}}
                    <div class="col-md-1 text-end">
                        <i class="bi bi-arrow-right program-arrow"></i>
                    </div>

                </div>

            </a>

            @empty

            <div class="text-center py-5">
                <p class="text-muted">No programs available at the moment.</p>
            </div>

            @endforelse

        </div>

        <!-- View All Button -->
        <div class="text-center mt-5">

            <a href="{{ route('menu.sub_menus', ['menu_id' => 3]) }}"
               class="text-decoration-none text-teal fw-semibold text-uppercase small">
                View All Programs
                <i class="bi bi-arrow-right ms-2"></i>
            </a>

        </div>

    </div>

</section>

<!-- Bootstrap Icons -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
