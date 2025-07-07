@extends ('frontend.master')

@section('title', 'Webceylon - Careers')

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Careers</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Careers
                        Us</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

       
        <!-- Cause area start here -->
        <section class="case-area pt-50 pb-120">
            <div class="container">
    <div class="section-header mb-40 text-center">
        <h2>Join Our Team — Current Vacancies</h2>
    </div>
    <div class="row g-4">
        <!-- Repeat for all 4 cards -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="case__item d-flex flex-column justify-content-between" 
                 style="border: 1px solid #e0e0e0; padding: 25px; border-radius: 10px; height: 100%; min-height: 180px;  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); transition: 0.3s;">
                <div>
                    <h4>
                        <a href="careers-details.html" class="text-black primary-hover">
                            Front-End Developer
                        </a>
                    </h4>
                </div>
                <a href="careers-details.html" class="btn btn-outline-primary btn-sm mt-3 align-self-start">
                    Apply
                </a>
            </div>
        </div>

        <!-- Repeat for Back-End Developer -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="case__item d-flex flex-column justify-content-between"
                 style="border: 1px solid #e0e0e0; padding: 25px; border-radius: 10px; height: 100%; min-height: 180px;  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); transition: 0.3s;">
                <div>
                    <h4>
                        <a href="careers-details.html" class="text-black primary-hover">
                            Back-End Developer
                        </a>
                    </h4>
                </div>
                <a href="careers-details.html" class="btn btn-outline-primary btn-sm mt-3 align-self-start">
                    Apply
                </a>
            </div>
        </div>

        <!-- Repeat for SEO Specialist -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="case__item d-flex flex-column justify-content-between"
                 style="border: 1px solid #e0e0e0; padding: 25px; border-radius: 10px; height: 100%; min-height: 180px;  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); transition: 0.3s;">
                <div>
                    <h4>
                        <a href="careers-details.html" class="text-black primary-hover">
                            SEO Specialist
                        </a>
                    </h4>
                </div>
                <a href="careers-details.html" class="btn btn-outline-primary btn-sm mt-3 align-self-start">
                    Apply
                </a>
            </div>
        </div>

        <!-- Repeat for Digital Marketing Executive -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="case__item d-flex flex-column justify-content-between"
                 style="border: 1px solid #e0e0e0; padding: 25px; border-radius: 10px; height: 100%; min-height: 180px;  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); transition: 0.3s;">
                <div>
                    <h4>
                        <a href="careers-details.html" class="text-black primary-hover">
                            Digital Marketing Executive
                        </a>
                    </h4>
                </div>
                <a href="careers-details.html" class="btn btn-outline-primary btn-sm mt-3 align-self-start">
                    Apply
                </a>
            </div>
        </div>
    </div>
</div>

        </section>

        <!-- Cause area end here -->
    </main>
   

@endsection