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

            <!-- Program 1 -->
            <a href="#" class="text-decoration-none text-dark">

                <div class="row align-items-center program-item">

                    <div class="col-md-1">
                        <span class="small text-muted">01</span>
                    </div>

                    <div class="col-md-3">

                        <h3 class="fw-bold mb-0 program-title">
                            Self Mastery
                        </h3>

                        <span class="program-badge">
                            9th Batch Running
                        </span>

                    </div>

                    <div class="col-md-2">

                        <p class="small text-uppercase text-teal fw-semibold tracking-small mb-0">
                            For Professionals
                        </p>

                    </div>

                    <div class="col-md-5">

                        <p class="text-muted mb-0">
                            A transformative journey of self-discovery,
                            leadership, and personal excellence.
                        </p>

                    </div>

                    <div class="col-md-1 text-end">

                        <i class="bi bi-arrow-right program-arrow"></i>

                    </div>

                </div>

            </a>

            <!-- Program 2 -->
            <a href="#" class="text-decoration-none text-dark">

                <div class="row align-items-center program-item">

                    <div class="col-md-1">
                        <span class="small text-muted">02</span>
                    </div>

                    <div class="col-md-3">

                        <h3 class="fw-bold mb-0 program-title">
                            Youth Empowerment
                        </h3>

                        <span class="program-badge">
                            Enrolling Now
                        </span>

                    </div>

                    <div class="col-md-2">

                        <p class="small text-uppercase text-teal fw-semibold tracking-small mb-0">
                            Campus Programs
                        </p>

                    </div>

                    <div class="col-md-5">

                        <p class="text-muted mb-0">
                            Building confidence, communication,
                            and career readiness for the next generation.
                        </p>

                    </div>

                    <div class="col-md-1 text-end">

                        <i class="bi bi-arrow-right program-arrow"></i>

                    </div>

                </div>

            </a>

            <!-- Program 3 -->
            <a href="#" class="text-decoration-none text-dark">

                <div class="row align-items-center program-item">

                    <div class="col-md-1">
                        <span class="small text-muted">03</span>
                    </div>

                    <div class="col-md-3">

                        <h3 class="fw-bold mb-0 program-title">
                            Community Leadership
                        </h3>

                        <span class="program-badge">
                            Coming Soon
                        </span>

                    </div>

                    <div class="col-md-2">

                        <p class="small text-uppercase text-teal fw-semibold tracking-small mb-0">
                            Grassroots Initiative
                        </p>

                    </div>

                    <div class="col-md-5">

                        <p class="text-muted mb-0">
                            Equipping community leaders with tools to drive
                            social change and sustainable development.
                        </p>

                    </div>

                    <div class="col-md-1 text-end">

                        <i class="bi bi-arrow-right program-arrow"></i>

                    </div>

                </div>

            </a>

        </div>

        <!-- Button -->
        <div class="text-center mt-5">

            <a href="#"
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