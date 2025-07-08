@extends ('frontend.master')

@section('title', 'Webceylon - Project - Details')

@section('content')

<style>
    .img-fixed-size {
        width: 100%;
        height: 300px; /* Adjust as needed */
        overflow: hidden;
        border-radius: 8px;
    }

    .img-fixed-size img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Project - Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="{{ route('index') }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Project - Details
                        </span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

  <!-- Case area start here -->
        <section class="case-single-area pt-120 pb-120">
            <div class="container">
                <div class="case-single__item">
                    <div class="image">
                        <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title }}">
                    </div>
                    <h3 class="case-single__title mt-40 mb-30">{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>

                    <ul class="case-date py-4 bor-top bor-bottom mt-40">
                        <li><span>Completed Date:</span> {{ $project->completed_date?->format('d-m-Y') }}</li>
                        <li><span>Client:</span> {{ $project->client }}</li>
                        <li><span>Category:</span> {{ $project->type }}</li>
                        <li><span>Location:</span> {{ $project->location }}</li>
                    </ul>

                    <div class="case-challenge-list mt-30">
                        @if (is_array($project->technologies_used))
                            @foreach (array_chunk($project->technologies_used, 2) as $chunk)
                                <ul class="case-challenge">
                                    @foreach ($chunk as $tech)
                                        <li class="mb-3"><i class="fa-solid fa-check"></i> {{ $tech }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        @elseif (is_string($project->technologies_used))
                            @foreach (explode(',', $project->technologies_used) as $tech)
                                <ul class="case-challenge">
                                    <li class="mb-3"><i class="fa-solid fa-check"></i> {{ trim($tech) }}</li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="row g-4 mt-4">
                    @if ($project->subimage1)
                        <div class="col-md-6">
                            <div class="image img-fixed-size">
                                <img src="{{ asset('storage/' . $project->subimage1) }}" alt="sub image 1">
                            </div>
                        </div>
                    @endif
                    @if ($project->subimage2)
                        <div class="col-md-6">
                            <div class="image img-fixed-size">
                                <img src="{{ asset('storage/' . $project->subimage2) }}" alt="sub image 2">
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </section>

        <!-- Case area end here -->
    </main>

@endsection