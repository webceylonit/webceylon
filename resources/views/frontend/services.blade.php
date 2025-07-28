@extends ('frontend.master')

@section('title', 'Our Services - Webceylon')
@section('meta_description', 'Explore Webceylon’s full range of business-driven services including Website Development, ERP Systems, SEO, Digital Marketing, Payroll, HR, Inventory, and Analytics Dashboards.')
@section('og_title', 'Webceylon Services')
@section('og_description', 'We provide powerful digital solutions: web development, SEO, marketing, ERP, HR & Payroll systems, inventory and budgeting tools for business growth.')

@section('content')


<main>
    <!-- Page banner area start here -->
    <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
        data-background="frontend/assets/images/about/aboutus.jpg">
        <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="frontend/assets/images/banner/inner-banner-shape2.png" alt="shape">
        </div>
        <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="frontend/assets/images/banner/inner-banner-shape.png" alt="shape" style="width:400px">
        </div>
        <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway__animationX" src="frontend/assets/images/banner/inner-banner-shape3.png" alt="shape">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Services</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ route('index') }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Services
                </span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Services Intro Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Empowering Businesses Through Technology</h2>
            <p class="text-secondary mb-0" style="max-width: 850px; margin: 0 auto;">
                At <strong>Webceylon</strong>, we offer a full spectrum of professional software and web development services designed to transform ideas into scalable digital solutions. Whether you're a startup or an established business, our team is dedicated to delivering results-driven services that boost efficiency, visibility, and growth.
            </p>
        </div>
    </section>

    <!-- Service area start here -->
    <section class="service-inner-area pt-30 pb-120">
        <div class="container">
            <div class="row g-4">
                @foreach($services as $service)
                <div class="col-lg-6 col-md-6">
                    <div class="service-two__item">
                        <div class="image">
                            <img src="{{ asset('public/storage/' . $service->image) }}" alt="image" style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <div class="service-two__content">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icon/service-two-icon1.png') }}" alt="icon">
                            </div>
                            <div class="shape">
                                <img src="{{ asset('frontend/assets/images/shape/service-two-item-shape.png') }}" alt="shape">
                            </div>
                            <h4>
                                <a href="{{ route('service.details', $service->id) }}" class="primary-hover">{{ $service->name }}</a>
                            </h4>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($service->description), 200, '...') }}</p>
                            <a class="read-more-btn" href="{{ route('service.details', $service->id) }}">
                                Read More <i class="fa-regular fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Service area end here -->
</main>



@endsection