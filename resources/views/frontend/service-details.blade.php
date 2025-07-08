@extends ('frontend.master')

@section('title', 'Webceylon - Service Details')

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Service Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Service Details
                        </span>
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
                                <img src="frontend/assets/images/service/service-single-image1.jpg" alt="image">
                                <div class="service-single__video-btn">
                                    <div class="video-btn video-pulse wow fadeIn" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title mb-30">Web Development</h3>
                            <p class="mb-20">The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend
                                porta
                                arcu In hac habitasse the platea
                                thelorem turpoi dictumst. In lacus libero faucibus malesuada sagittis placerat eros sed
                                istincidunt augue ac ante rutrum
                                sed the is sodales augue consequat.</p>
                            <p>lacus sed pretium pretium justo. Integer is vitae venenatis lorem. Maecenas lacinia
                                turpis the in
                                nunc quam hendrerit
                                scelerisque at finibus enim sagittis. Aliquam erat is volutpat nam nec purus at is orci
                                volutpat
                                semper vel id turpis In
                                a malesuada arcu ac hendrerit.</p>
                            
                            <p class="mb-40">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore of
                                magna
                                aliqua. Ut enim ad minim
                                veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                dolor
                                commodo consequat. Duis
                                aute irure and dolor in reprehenderit.</p>
                            <h3 class="title mb-30">Most Comment Question?</h3>
                            <p class="mb-30">The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend
                                porta
                                arcu In hac
                                habitasse the platea
                                thelorem turpoi dictumst. In lacus libero faucibus malesuada sagittis placerat eros sed
                                istincidunt augue ac ante rutrum
                                sed the is sodales augue consequat.</p>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Where should I incorporate my business?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What happens my free trial?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                            aria-expanded="false" aria-controls="collapsethree">
                                            What is included in your services?
                                        </button>
                                    </h2>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
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