@extends ('frontend.master')

@section('title', 'Webceylon - Portfolio')

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Portfolio</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Portfolio
                        </span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <section class="case-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    @foreach($projects as $project)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="case-two__item">
                                <div class="image case-two__image" style="position: relative; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title }}" style="width: 100%; height: 250px; object-fit: cover; display: block;">
                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                                </div>

                                <div class="case-two__content">
                                    <h4><a href="{{ route('project-details', $project->id) }}" class="text-white">{{ $project->title }}</a></h4>

                                    <div style="color: #aaa; font-size: 14px;">
                                        <strong>{{ $project->type }} </strong> 
                                    </div>
                                </div>
                                <a href="{{ route('project-details', $project->id) }}" class="case-two__btn">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection