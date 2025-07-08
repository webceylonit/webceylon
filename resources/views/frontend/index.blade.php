@extends ('frontend.master')

@section('content')

<style>
.case__image img {
    width: 100%;
    height: 270px;
    object-fit: cover;
    border-radius: 10px;
}

</style>


    

    <main>
        <!-- Banner area start here -->
        <section class="banner-area">
            <div class="banner__line">
               <!--<img class="sway__animation" src="/assets/images/banner/banner-line.png" alt="shape">-->
            </div>
            <div class="swiper banner__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div data-animation="slideInLeft" data-duration="2s" data-delay=".3s"
                            class="banner__shape-left2">
                            <img src="frontend/assets/images/banner/banner-regular-left-shape.png" alt="shape">
                        </div>
                        <div data-animation="slideInLeft" data-duration="2s" data-delay=".9s"
                            class="banner__shape-left1">
                            <img src="frontend/assets/images/banner/banner-solid-left-shape.png" alt="shape">
                        </div>
                        <div class="banner__shape-left3 wow slideInLeft">
                            <img class="sway__animation" src="frontend/assets/images/banner/banner-shape-left.png" alt="shape">
                        </div>
                        <div class="banner__shape-right2" data-animation="slideInRight" data-duration="3s"
                            data-delay=".3s">
                            <img src="/assets/images/banner/banner-shape-right-line.png" alt="shape">
                        </div>
                        <div class="banner__shape-right1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="frontend/assets/images/banner/banner-shape-right.png" alt="shape">
                        </div>
                        <div class="banner__right-line1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".9s">
                            <img src="frontend/assets/images/banner/banner-right-line1.png" alt="shape">
                        </div>
                        <div class="banner__right-line2" data-animation="slideInRight" data-duration="2s"
                            data-delay=".7s">
                            <img src="frontend/assets/images/banner/banner-right-line2.png" alt="shape">
                        </div>
                        <div class="banner__right-line3" data-animation="slideInRight" data-duration="2s"
                            data-delay=".5s">
                            <img src="frontend/assets/images/banner/banner-right-line3.png" alt="shape">
                        </div>
                        <div class="banner__right-line4" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="frontend/assets/images/banner/banner-right-line4.png" alt="shape">
                        </div>
                        <div class="slide-bg" data-background="frontend/assets/images/banner/banner11.jpg"></div>
                        <div class="container">
                            <div class="banner__content">
                                <h4 data-animation="slideInRight" data-duration="2s" data-delay=".3s"
                                    class="text-white mb-20">
                                    <svg class="me-1" width="40" height="16" viewBox="0 0 40 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.500183" width="25.6667" height="15" rx="7.5"
                                            stroke="white" />
                                        <rect x="13.3334" y="0.000183105" width="26.6667" height="16" rx="8"
                                            fill="white" />
                                    </svg>
                                    Best it SOLUTION Provider
                                </h4>
                                <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s"
                                    class="text-white">
                                   Innovative Software Solutions for Your Business
                                </h1>
                                <p style="font-size: 20px;" data-animation="slideInRight" data-duration="2s" data-delay=".7s" class="mt-20">
                                   We build web, mobile, and cloud applications <br>to
                                    drive growth and digital transformation.
                                </p>
                                <a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="{{ route('services') }}"
                                    class="btn-one mt-60">Our Services
                                     <i class="fa-regular fa-arrow-right-long"></i></a>

                                      <a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="{{ route('portfolio') }}"
                                    class="btn-two mt-60">
                                    View Portfolio <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div data-animation="slideInLeft" data-duration="2s" data-delay=".3s"
                            class="banner__shape-left2">
                            <img src="frontend/assets/images/banner/banner-regular-left-shape.png" alt="shape">
                        </div>
                        <div data-animation="slideInLeft" data-duration="2s" data-delay=".9s"
                            class="banner__shape-left1">
                            <img src="frontend/assets/images/banner/banner-solid-left-shape.png" alt="shape">
                        </div>
                        <div class="banner__shape-left3 wow slideInLeft">
                            <img class="sway__animation" src="frontend/assets/images/banner/banner-shape-left.png" alt="shape">
                        </div>
                        <div class="banner__shape-right2" data-animation="slideInRight" data-duration="3s"
                            data-delay=".3s">
                            <img src="/assets/images/banner/banner-shape-right-line.png" alt="shape">
                        </div>
                        <div class="banner__shape-right1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="frontend/assets/images/banner/banner-shape-right.png" alt="shape">
                        </div>
                        <div class="banner__right-line1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".9s">
                            <img src="frontend/assets/images/banner/banner-right-line1.png" alt="shape">
                        </div>
                        <div class="banner__right-line2" data-animation="slideInRight" data-duration="2s"
                            data-delay=".7s">
                            <img src="frontend/assets/images/banner/banner-right-line2.png" alt="shape">
                        </div>
                        <div class="banner__right-line3" data-animation="slideInRight" data-duration="2s"
                            data-delay=".5s">
                            <img src="frontend/assets/images/banner/banner-right-line3.png" alt="shape">
                        </div>
                        <div class="banner__right-line4" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="frontend/assets/images/banner/banner-right-line4.png" alt="shape">
                        </div>
                        <div class="slide-bg" data-background="frontend/assets/images/banner/banner22.jpg"></div>
                        <div class="container">
                            <div class="banner__content">
                                <h4 data-animation="slideInRight" data-duration="2s" data-delay=".3s"
                                    class="text-white mb-20">
                                    <svg class="me-1" width="40" height="16" viewBox="0 0 40 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.500183" width="25.6667" height="15" rx="7.5"
                                            stroke="white" />
                                        <rect x="13.3334" y="0.000183105" width="26.6667" height="16" rx="8"
                                            fill="white" />
                                    </svg>
                                    Best it SOLUTION Provider
                                </h4>
                                <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s"
                                    class="text-white">
                                  Innovative Software Solutions for Your Business
                                </h1>
                                <p style="font-size: 20px;" data-animation="slideInRight" data-duration="2s" data-delay=".7s" class="mt-20">
                                  We build web, mobile, and cloud applications <br> to
                                drive growth and digital transformation.
                                </p>
                                <a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="{{ route('services') }}"
                                    class="btn-one mt-60">
                                    Our Services <i class="fa-regular fa-arrow-right-long"></i></a>

                                     <a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="{{ route('portfolio') }}"
                                    class="btn-two mt-60">
                                    View Portfolio <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div data-animation="slideInLeft" data-duration="2s" data-delay=".3s"
                            class="banner__shape-left2">
                            <img src="frontend/assets/images/banner/banner-regular-left-shape.png" alt="shape">
                        </div>
                        <div data-animation="slideInLeft" data-duration="2s" data-delay=".9s"
                            class="banner__shape-left1">
                            <img src="frontend/assets/images/banner/banner-solid-left-shape.png" alt="shape">
                        </div>
                        <div class="banner__shape-left3 wow slideInLeft">
                            <img class="sway__animation" src="frontend/assets/images/banner/banner-shape-left.png" alt="shape">
                        </div>
                        <div class="banner__shape-right2" data-animation="slideInRight" data-duration="3s"
                            data-delay=".3s">
                            <img src="/assets/images/banner/banner-shape-right-line.png" alt="shape">
                        </div>
                        <div class="banner__shape-right1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="frontend/assets/images/banner/banner-shape-right.png" alt="shape">
                        </div>
                        <div class="banner__right-line1" data-animation="slideInRight" data-duration="2s"
                            data-delay=".9s">
                            <img src="frontend/assets/images/banner/banner-right-line1.png" alt="shape">
                        </div>
                        <div class="banner__right-line2" data-animation="slideInRight" data-duration="2s"
                            data-delay=".7s">
                            <img src="/assets/images/banner/banner-right-line2.png" alt="shape">
                        </div>
                        <div class="banner__right-line3" data-animation="slideInRight" data-duration="2s"
                            data-delay=".5s">
                            <img src="frontend/assets/images/banner/banner-right-line3.png" alt="shape">
                        </div>
                        <div class="banner__right-line4" data-animation="slideInRight" data-duration="2s"
                            data-delay=".3s">
                            <img src="frontend/assets/images/banner/banner-right-line4.png" alt="shape">
                        </div>
                        <div class="slide-bg" data-background="frontend/assets/images/banner/banner33.jpg"></div>
                        <div class="container">
                            <div class="banner__content">
                                <h4 data-animation="slideInRight" data-duration="2s" data-delay=".3s"
                                    class="text-white mb-20">
                                    <svg class="me-1" width="40" height="16" viewBox="0 0 40 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.500183" width="25.6667" height="15" rx="7.5"
                                            stroke="white" />
                                        <rect x="13.3334" y="0.000183105" width="26.6667" height="16" rx="8"
                                            fill="white" />
                                    </svg>
                                    Best it SOLUTION Provider
                                </h4>
                                <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s"
                                    class="text-white">
                                   Innovative Software Solutions for Your Business
                                </h1>
                                <p style="font-size: 20px;"  data-animation="slideInRight" data-duration="2s" data-delay=".7s" class="mt-20">
                                  We build web, mobile, and cloud applications <br> to
                                    drive growth and digital transformation.
                                </p>
                                <a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="{{ route('services') }}"
                                    class="btn-one mt-60">
                                    Our Services <i class="fa-regular fa-arrow-right-long"></i></a>
                                    
                                <a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="{{ route('portfolio') }}"
                                    class="btn-two mt-60">
                                    View Portfolio <i class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__dot-wrp">
                <div class="dot-light banner__dot"></div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Service area start here -->
        <section class="service-area pt-120 pb-120">
            <div class="service__shape wow slideInRight">
                <img class="sway_Y__animation" src="frontend/assets/images/shape/service-bg-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-60">
                    <div class="section-header">
                        <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                            What We OFFER
                        </h5>
                        <h2 class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Excellent IT
                            Services</h2>
                    </div>
                    <a href="service.html" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">View All
                        Services <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <div class="service__item">
                            <div class="service-shape">
                                <img src="frontend/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="frontend/assets/images/icon/service-icon1.png" alt="icon">
                            </div>
                           <h4><a href="service-details.html">Web Development</a></h4>
<p>We create secure, high-performance websites and web apps using modern frameworks like Laravel and Vue.js.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="service__item active">
                            <div class="service-shape">
                                <img src="frontend/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="frontend/assets/images/icon/service-icon2.png" alt="icon">
                            </div>
                         <h4><a href="service-details.html">ERP System Development</a></h4>
<p>Custom ERP systems to manage HR, inventory, sales, and more—tailored to fit your workflow.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="service__item">
                            <div class="service-shape">
                                <img src="frontend/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="frontend/assets/images/icon/service-icon3.png" alt="icon">
                            </div>
                            <h4><a href="service-details.html">SEO</a></h4>
<p>Improve your search rankings with expert on-page SEO, technical fixes, and smart link strategies.</p>
ttract the right audience.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="service__item">
                            <div class="service-shape">
                                <img src="frontend/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="frontend/assets/images/icon/service-icon3.png" alt="icon">
                            </div>
                           <h4><a href="service-details.html">Digital Marketing</a></h4>
<p>Boost traffic and conversions through content, social media, email campaigns, and paid ads  (Google Ads, Facebook Ads).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->

        <!-- About area start here -->
        <section class="about-area sub-bg pt-120">
            <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img src="frontend/assets/images/shape/about-line.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__left-item">
                            <div class="image big-image">
                                <img src="frontend/assets/images/about/about-image11.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <!--<div class="video__btn-wrp">
                                    <div class="video-btn video-pulse">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>-->
                                <img src="frontend/assets/images/about/about-image22.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img src="frontend/assets/images/shape/about-circle.png" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                                ABOUT Webceylon
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We Strive to
                                Offer Intelligent IT Solutions</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">At Webceylon, 
                                we deliver smart IT solutions to help businesses grow. 
                                From boosting web traffic to streamlining operations, we use modern technology to drive results.
</p>
                        </div>
                        <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="frontend/assets/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Best Services</h4>
                                        <p>Tailored IT solutions for every business</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="frontend/assets/images/icon/about-icon2.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">24/7 Call Support</h4>
                                        <p>Always available for your tech needs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="about.html" class="btn-one">Explore More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Counter area start here -->
        <section class="counter-area">
            <div class="container">
                <div class="counter__wrp gradient-bg">
                    <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <img src="frontend/assets/images/shape/counnter-bg-shape.png" alt="shape">
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <img src="frontend/assets/images/icon/counter-icon1.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">6,561</span>+</h3>
                            <p class="text-white">Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <img src="frontend/assets/images/icon/counter-icon2.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">600</span>+</h3>
                            <p class="text-white">Finished Projects</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <img src="frontend/assets/images/icon/counter-icon3.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">250</span>+</h3>
                            <p class="text-white">Skilled Experts</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                        <img src="frontend/assets/images/icon/counter-icon4.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">590</span>+</h3>
                            <p class="text-white">Media Posts</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end here -->

        <!-- Cause area start here -->
        <section class="case-area pt-120 pb-100">
            <div class="container">
                <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-60">
                    <div class="section-header">
                        <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                            FROM OUR CASE studies
                        </h5>
                        <h2 class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">We Delivered Best
                            Solution</h2>
                    </div>
                    <a href="{{ route('portfolio') }}" class="btn-one wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">view All
                        Case <i class="fa-regular fa-arrow-right-long"></i></a>
                </div>
            </div>

           <div class="swiper case__slider">
                <div class="swiper-wrapper justify-content-center">
                    @forelse ($projects as $project)
                        <div class="swiper-slide">
                            <div class="case__item">
                                <div class="image case__image">
                                    <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title }}">
                                </div>
                                <div class="case__content">
                                    <span class="primary-color sm-font">{{ $project->type }}</span>
                                    <h3>
                                        <a href="{{ route('project-details', $project->id) }}" class="text-white primary-hover">
                                            {{ $project->title }}
                                        </a>
                                    </h3>
                                </div>
                                <a href="{{ route('project-details', $project->id) }}" class="case__btn">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <p class="text-center">No projects available.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            
            <div class="mt-60 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="dot case__dot"></div>
            </div>
        </section>
        <!-- Cause area end here -->

       
        

        <!-- Process area start here -->
        <section class="process-area pt-0 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                        Work Process
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Development Process
                    </h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="process__item mb-100">
                            <div class="process-arry bobble__animation">
                                <img src="frontend/assets/images/process/process-arry.png" alt="arry-icon">
                            </div>
                            <div class="process__image">
                                <img src="frontend/assets/images/process/process-image11.png" alt="image">
                                <span class="process-number">1</span>
                            </div>
                           <div class="process__content">
                                <h4 class="mt-25 mb-10">
                                    Define Requirements
                                </h4>
                                <p>We begin by analyzing your goals, identifying business challenges, and gathering requirements to plan effective solutions tailored for web development, SEO strategies, or ERP system implementation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="process__item mb-100">
                            <div class="process-arry bobble__animation">
                                <img src="frontend/assets/images/process/process-arry.png" alt="arry-icon">
                            </div>
                            <div class="process__image">
                                <img src="frontend/assets/images/process/process-image22.png" alt="image">
                                <span class="process-number">2</span>
                            </div>
                            <div class="process__content">
                                <h4 class="mt-25 mb-10">
                                    Design & Prototyping
                                </h4>
                                <p>We create intuitive designs and interactive prototypes to visualize the solution, focusing on user experience, system logic, and functionality across SEO, ERP platforms, or custom web interfaces.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="process__item">
                            <div class="process__image">
                                <img src="frontend/assets/images/process/process-image33.png" alt="image">
                                <span class="process-number">3</span>
                            </div>
                            <div class="process__content">
                                <h4 class="mt-25 mb-10">
                                    Final Solution
                                </h4>
                                <p>We develop, test, and deploy robust solutions — ensuring speed, security, and scalability for websites, SEO-optimized platforms, or ERP systems tailored to support business growth and efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Process area end here -->

        <!-- Testimonial area start here -->
        <section class="testimonial-area bg-image pt-0 pb-0" data-background="frontend/assets/images/bg/testimonial-three-bg.png">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="talk-us__item">
                            <div class="section-header mb-30">
                                <h5 class="text-white">
                                    <svg width="28" height="12" viewBox="0 0 28 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="white"
                                            stroke-width="1.5" />
                                        <rect x="8" width="20" height="12" rx="6" fill="white" />
                                    </svg>
                                    TALK TO US
                                </h5>
                                <h2 class="text-white">How May We Help You!</h2>
                            </div>
                            <form action="{{ route('inquiry.store') }}" method="POST">
                                 @csrf
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="name">Your name*</label>
                                        <input type="text" id="name" name="name"  placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email">Your Email*</label>
                                        <input type="email" id="email" name="email" placeholder="info@example.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="subject">subject*</label>
                                        <input type="text" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="number">Your Phone*</label>
                                        <input type="text" id="number" name="phone" placeholder="+1253 457 7840">
                                    </div>
                                    <div class="col-12">
                                        <label for="massage">Message*</label>
                                        <textarea id="massage" name="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <button>Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-2 ps-lg-5">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                                CLIENTS REVIEW
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">What They Say
                                About Our</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Our clients 
                                consistently share positive feedback about the quality of our work, attention to detail,
                                 and reliable support. Their reviews reflect the trust we've built through successful 
                                 partnerships.</p>
                        </div>
                        <div class="swiper testimonial__slider wow fadeInDown" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__item">
                                        <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z"
                                                fill="#3C72FC" />
                                        </svg>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="frontend/assets/images/testimonial/person1.jpg" style="width:70px; height:auto" alt="image">
                                            <div class="testi-info">
                                                <h4>Suborna Tarchera</h4>
                                                <p>Web Developer</p>
                                                <div class="star mt-1">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star disable"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-30">“ Their team delivered high-quality solutions, 
                                            met our needs, and provided excellent support. We’re very satisfied with the results.”</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item">
                                        <svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z"
                                                fill="#3C72FC" />
                                        </svg>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="frontend/assets/images/testimonial/person1.jpg" style="width:70px; height:auto" alt="image">
                                            <div class="testi-info">
                                                <h4>Suborna Tarchera</h4>
                                                <p>Web Developer</p>
                                                <div class="star mt-1">
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-solid fa-star disable"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-30">“ Their team delivered high-quality solutions, 
                                            met our needs, and provided excellent support. We’re very satisfied with the results.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arry-btn mt-40 wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <button class="arry-prev testimonial__arry-prev"><i
                                    class="fa-light fa-chevron-left"></i></button>
                            <button class="arry-next testimonial__arry-next active"><i
                                    class="fa-light fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end here -->

        <!-- Blog area start here -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                        Blog & news
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Explore Blogs and News</h2>
                </div>
                <div class="row g-4">
                    @foreach($blogs as $blog)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="blog__item">
                                <a href="{{ route('blog-details', $blog->id) }}" class="blog__image d-block image">
                                    <img src="{{ asset('storage/' . $blog->main_image) }}" alt="{{ $blog->title }}">
                                    <div class="blog-tag">
                                        <h3 class="text-white">{{ $blog->date->format('d') }}</h3>
                                        <span class="text-white">{{ $blog->date->format('M') }}</span>
                                    </div>
                                </a>
                                <div class="blog__content">
                                    <ul class="blog-info pb-20 bor-bottom mb-20">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.5 5.2C14.5 7.7 12.5 9.7 10 9.7C7.5 9.7 5.5 7.7 5.5 5.2C5.5 2.7 7.5 0.7 10 0.7C12.5 0.7 14.5 2.7 14.5 5.2Z" stroke="#3C72FC" stroke-width="1.3"/>
                                                <path d="M18.3 14.7C17.9 15.4 17.3 16.2 16.7 16.8C15.2 18.2 13.2 19.3 10 19.3C6.8 19.3 4.8 18.2 3.2 16.6C2.6 16 2.1 15.4 1.7 14.7C2.8 12.7 4.5 11.6 6.2 11.4C8 12.6 11.9 12.6 13.7 11.4C15.4 11.6 17.1 12.7 18.3 14.7Z" stroke="#3C72FC" stroke-width="1.3"/>
                                            </svg>
                                            <a href="#">By {{ $blog->author }}</a>
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href="{{ route('blog-details', $blog->id) }}" class="primary-hover">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <a class="mt-25 read-more-btn" href="{{ route('blog-details', $blog->id) }}">
                                        Read More <i class="fa-regular fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog area end here -->
    </main>

   

@endsection