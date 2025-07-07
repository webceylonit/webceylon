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

 <!-- Case area start here -->
        <section class="case-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                   <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                          <div class="image case-two__image" style="position: relative; overflow: hidden;">
                                <img src="frontend/assets/images/case/case-image44.jpg" alt="Web Development" style="width: 100%; display: block;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                            </div>

                            <div class="case-two__content">
                                <h4><a href="case-details.html" class="text-white">Web Development</a></h4>
                                <p style="color: #ddd; margin: 10px 10px 10px 0;">
                                    Designed and developed a responsive website with dynamic content management, enhancing user experience and site speed.
                                </p>
                                <div style="color: #aaa; font-size: 14px;">
                                    <strong>Technologies:</strong> Laravel, HTML5, CSS3, JavaScript
                                </div>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                          <div class="image case-two__image" style="position: relative; overflow: hidden;">
                                <img src="frontend/assets/images/case/case-image22.jpg" alt="Web Development" style="width: 100%; display: block;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                            </div>

                            <div class="case-two__content">
                                <h4><a href="case-details.html" class="text-white">ERP System Development</a></h4>
                                <p style="color: #ddd; margin: 10px 10px 10px 0;">
                                   Created a custom ERP system to automate HR, inventory, and finance processes, improving overall business efficiency.
                                </p>
                                <div style="color: #aaa; font-size: 14px;">
                                    <strong>Technologies:</strong>PHP, Laravel, MySQL, Bootstrap
                                </div>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                          <div class="image case-two__image" style="position: relative; overflow: hidden;">
                                <img src="frontend/assets/images/case/case-image33.jpg" alt="Web Development" style="width: 100%; display: block;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                            </div>

                            <div class="case-two__content">
                                <h4><a href="case-details.html" class="text-white">Digital Marketing</a></h4>
                                <p style="color: #ddd; margin: 10px 10px 10px 0;">
                                   Executed targeted ad campaigns and content strategies to drive engagement, conversions, and brand visibility across digital channels.
                                </p>
                                <div style="color: #aaa; font-size: 14px;">
                                    <strong>Technologies:</strong>Google Ads, Canva
                                </div>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Case area end here -->
    </main>
@endsection