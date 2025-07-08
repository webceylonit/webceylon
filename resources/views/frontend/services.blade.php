@extends ('frontend.master')

@section('title', 'Webceylon - Services')

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
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Services
                        </span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Service area start here -->
        <section class="service-inner-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    @foreach($services as $service)
                        <div class="col-lg-6 col-md-6">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="image" style="width: 100%; height: 250px; object-fit: cover;">
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