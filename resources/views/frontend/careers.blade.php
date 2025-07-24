@extends ('frontend.master')

@section('title', 'Webceylon - Careers')

@section('content')

<style>
    .career-box:hover {
        box-shadow: 0 8px 25px rgba(0, 123, 255, 0.15);
        transform: translateY(-5px);
    }

    .career-box::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        width: 100%;
        background: linear-gradient(90deg, #007793, #00060c);
        transform-origin: left;
    }
</style>

<main>
    <!-- Page banner area start here -->
    <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
        data-background="{{ asset('frontend/assets/images/about/aboutus.jpg') }}">
        <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="{{ asset('frontend/assets/images/banner/inner-banner-shape2.png') }}" alt="shape">
        </div>
        <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="{{ asset('frontend/assets/images/banner/inner-banner-shape.png') }}" alt="shape" style="width:400px">
        </div>
        <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway__animationX" src="{{ asset('frontend/assets/images/banner/inner-banner-shape3.png') }}" alt="shape">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Careers</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ route('index') }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Careers</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->


    <section class="case-area pt-50 pb-120">
        <div class="container">
            <div class="section-header mb-40 text-center">
                <h2>Join Our Team — Current Vacancies</h2>
                <p class="text-muted" style="max-width: 800px; margin: 0 auto;">
                    At <strong>Webceylon</strong>, we believe in nurturing talent and empowering individuals to grow within a dynamic, forward-thinking environment. Explore our current openings and become part of a passionate team that's redefining digital innovation.
                </p>
            </div>
            <div class="row g-4">
                @forelse ($careers as $career)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="case__item career-box d-flex flex-column justify-content-between"
                        style="border: 1px solid #e0e0e0; padding: 30px;  height: 100%; min-height: 200px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); background: #fff; transition: all 0.3s ease-in-out; position: relative;">
                        <div>
                            <h4 style="font-weight: 600; font-size: 20px;">
                                <a href="#" class="text-black primary-hover" style="text-decoration: none;">
                                    {{ $career->job_title }}
                                </a>
                            </h4>
                            <p class="text-muted mb-0" style="font-size: 14px;">{{ $career->description ?? '' }}</p>
                            <p class="text-muted mb-0" style="font-size: 14px;">📍 {{ $career->location }}</p>
                            <p class="text-muted mb-0" style="font-size: 14px;">⏰ Deadline Date: {{ $career->deadline_date->toDateString() }}</p>
                        </div>
                        <a href="{{ $career->link ?? '#' }}" class="btn btn-outline-primary btn-sm mt-4 align-self-start" style="border-radius: 30px; padding: 6px 20px;">
                            Apply Now
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p class="text-muted fs-5">There are currently no job vacancies available at Webceylon. Please check back soon or follow us on social media for updates.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>


</main>


@endsection