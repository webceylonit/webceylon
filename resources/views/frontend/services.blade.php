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
                    <div class="col-lg-6 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="frontend/assets/images/service/service1.jpg" alt="image" style="width: 100%; height: 250px; object-fit: cover;">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="frontend/assets/images/icon/service-two-icon1.png" alt="icon">
                                </div>
                                <div class="shape"><img src="frontend/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Web Development</a></h4>
                                <p>We build high-performance, secure, and scalable websites and
                                web applications tailored to your business needs using modern
                                frameworks like Laravel, Vue.js, and more.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="frontend/assets/images/service/service2.jpg" alt="image" style="width: 100%; height: 250px; object-fit: cover;">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="frontend/assets/images/icon/service-two-icon2.png" alt="icon">
                                </div>
                                <div class="shape"><img src="frontend/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">ERP System Development</a></h4>
                                <p>We develop custom ERP systems to streamline your business
processes — from HR to inventory and sales — tailored to your
operations and workflow.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="frontend/assets/images/service/service3.jpg" alt="image" style="width: 100%; height: 250px; object-fit: cover;">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="frontend/assets/images/icon/service-two-icon3.png" alt="icon">
                                </div>
                                <div class="shape"><img src="frontend/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">SEO (Search Engine Optimization)</a></h4>
                                <p>Boost your website’s visibility on search engines with our expert
SEO services. From on-page SEO to technical optimization and
backlink strategies, we help your site rank higher and reach your
audience.</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="frontend/assets/images/service/service4.jpg" alt="image" style="width: 100%; height: 250px; object-fit: cover;">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="frontend/assets/images/icon/service-two-icon4.png" alt="icon">
                                </div>
                                <div class="shape"><img src="frontend/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="service-details.html" class="primary-hover">Digital Marketing</a></h4>
                                <p>Drive traffic and conversions through our digital marketing
services including content strategy, social media marketing, email
campaigns, and paid advertising (Google Ads, Facebook Ads)</p>
                                <a class="read-more-btn" href="service-details.html">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->
    </main>

   

@endsection