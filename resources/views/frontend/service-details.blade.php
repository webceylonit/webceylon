@extends ('frontend.master')

@section('title', 'Webceylon - Service Details')

@section('content')

<style>
    .tech-tag {
    border: 1px solid #ccc;
    padding: 6px 14px;
    font-size: 14px;
    background-color: #f9f9f9;
    color: #333;
    transition: all 0.3s ease;
    cursor: default;
}

.tech-tag:hover {
    background: #ff7f00;;
    color: #fff;
    border-color: transparent;
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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Service Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Service Details</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

         <!-- Service area start here -->
        <section class="service-single-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="service-single__left-item">
                           <div class="image mb-50">
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid">
                            </div>

                            <h3 class="title mb-30">{{ $service->name }}</h3>

                            <p class="mb-20">
                                {{ $service->description }}
                            </p>

                            @if($service->additional_info)
                                
                                <p>{{ $service->additional_info }}</p>
                            @endif

                           <div class="case-challenge-list mt-30">
                                <ul class="case-challenge d-flex flex-wrap gap-2 p-0 m-0" style="list-style: none;">
                                    @if (is_array($service->technologies))
                                        @foreach ($service->technologies as $tech)
                                            <li class="tech-tag">{{ $tech }}</li>
                                        @endforeach
                                    @elseif (is_string($service->technologies))
                                        @foreach (explode(',', $service->technologies) as $tech)
                                            <li class="tech-tag">{{ trim($tech) }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
              
                            <h3 class="title mb-30 mt-50">Most Asked Questions?</h3>
                                <p class="mb-30">Below are some of the most frequently asked questions from our clients. If you have any other questions, feel free to contact us!</p>
                                <div class="accordion" id="accordionExample">
                                    <!-- Question 1 -->
                                    <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What IT services do you offer?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We offer a wide range of IT services, including web development, mobile app development, IT consulting, cloud solutions, cybersecurity, and software development, tailored to meet the unique needs of your business.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 2 -->
                                    <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How long does it take to build a website or application?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The timeline for building a website or application depends on the complexity of the project. Typically, a basic website may take a few weeks, while more complex projects, such as web applications or e-commerce platforms, may take several months.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 3 -->
                                    <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What is the cost of your IT services?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The cost of our IT services depends on the type of project and the scope of work involved. We provide custom quotes based on your specific requirements, and we are happy to discuss your budget and goals to find a solution that fits.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 4 -->
                                    <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Do you offer support and maintenance after the project is completed?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Yes, we offer ongoing support and maintenance for all the projects we complete. This includes bug fixes, updates, and any other assistance you may need to ensure your system continues running smoothly.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question 5 -->
                                    <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="800ms" data-wow-duration="1500ms">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                How secure are the IT solutions you provide?
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We prioritize security in all our IT solutions. From secure coding practices to encryption and regular security audits, we ensure that your website or application is protected from potential threats and vulnerabilities.</p>
                                            </div>
                                        </div>
                                    </div>

                                   

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="service-single__right-item service-single__left-item">
                            <div class="item sub-bg mb-30 align-items-center">
                                    <h4 class="mb-20">Benefits With Our Service</h4>
                                    <ul>
                                        <li class="mb-15"><i class="fa-solid fa-check"></i>Technology Consultancy</li>
                                        <li class="mb-15"><i class="fa-solid fa-check"></i>Maintenance And Support</li>
                                        <li class="mb-15"><i class="fa-solid fa-check"></i>We Provide best services</li>
                                        <li class="mb-15"><i class="fa-solid fa-check"></i>Requirements Gathering</li>
                                        <li class="mb-15"><i class="fa-solid fa-check"></i>Business Growth</li>
                                    </ul>
                            </div>
                            <div class="item sub-bg mb-30">
                                <h4 class="mb-20">Opening Hours</h4>
                                <ul class="category">
                                    <li class="primary-color justify-content-start gap-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                                fill="#3C72FC" />
                                            <path
                                                d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                                fill="#3C72FC" />
                                        </svg>
                                        Mon - Fri: 8.00 AM - 6.00 PM
                                    </li>
                                    
                                    <li class="primary-color justify-content-start gap-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                                fill="#3C72FC" />
                                            <path
                                                d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                                fill="#3C72FC" />
                                        </svg>
                                        Sat - Sun: Closed
                                    </li>
                                    <li class="primary-color justify-content-start gap-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.8505 9.41291L8.61967 7.73979V4.3316C8.61967 3.98891 8.34266 3.71191 7.99998 3.71191C7.65729 3.71191 7.38029 3.98891 7.38029 4.3316V8.04966C7.38029 8.24485 7.47201 8.42892 7.62817 8.54541L10.1069 10.4044C10.2138 10.485 10.3441 10.5285 10.478 10.5284C10.667 10.5284 10.8529 10.4435 10.9744 10.2799C11.1802 10.0066 11.1244 9.61804 10.8505 9.41291Z"
                                                fill="#3C72FC" />
                                            <path
                                                d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                                                fill="#3C72FC" />
                                        </svg>
                                        Emergency: 24 hours
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->
    </main>

@endsection