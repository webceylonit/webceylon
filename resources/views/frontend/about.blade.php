@extends ('frontend.master')

@section('title', 'Webceylon - About us')

@section('content')
<style>
    .about-mission-vision h5 {
    font-weight: 600;
    font-size: 18px;
}

.mission-box, .vision-box {
    background: #f9f9f9;
    padding: 20px 25px;
    border-radius: 8px;
    border-left: 4px solid #007793;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

</style>

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">About Us</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>About
                        Us</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- About area start here -->
        <section class="about-two-area pt-120">
            <div class="about-two__shape">
                <img src="frontend/assets/images/shape/about-two-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__left-item">
                            <div class="dots">
                                <img class="sway_Y__animation" src="frontend/assets/images/shape/about-two-dot.png" alt="shape">
                            </div>
                            <div class="shape-halper">
                                <img class="sway__animation" src="frontend/assets/images/shape/about-circle.png"
                                    alt="shape">
                            </div>
                            <div class="image big-image">
                                <img src="frontend/assets/images/about/about-two-image11.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <img src="frontend/assets/images/about/about-two-image22.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img class="animation__rotate" src="frontend/assets/images/shape/about-circle.png"
                                    alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                                WHO WE ARE
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Ensuring Your
                                Success Through Reliable IT Solutions </h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">At Webceylon, we specialize 
                                in delivering innovative and dependable IT solutions tailored to your business needs. 
                                Our team combines technical expertise with strategic thinking to help you grow, adapt, and 
                                stay ahead in the digital world.</p>
                        </div>
                        <div class="about-two__right-item wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Technology Consultancy</li>
                                <li><i class="fa-solid fa-check"></i>We Provide best services</li>
                            </ul>
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Maintenance And Support</li>
                                <li><i class="fa-solid fa-check"></i>Requirements Gathering</li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

<section class="team-area pb-100">
    <div class="container"> 
        <div class="row g-4">
            <div class="col-md-6">
                <div class="mission-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <h4 class="mb-2"><i class="fa-solid fa-bullseye me-2 text-primary"></i>Our Mission</h4>
                    <p class="mb-0">
                        To empower businesses with reliable, scalable, and innovative digital solutions that accelerate growth and streamline operations.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vision-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <h4 class="mb-2"><i class="fa-solid fa-eye me-2 text-primary"></i>Our Vision</h4>
                    <p class="mb-0">
                        To be a leading technology partner for businesses worldwide, known for quality, integrity, and customer success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Team area start here -->
        <section class="team-area pt-0 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <img class="me-1" src="frontend/assets/images/icon/section-title.png" alt="icon">
                        OUR team
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Team</h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="frontend/assets/images/team/team-image11.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="team-details.html">Kawser Ahmed</a></h4>
                                <span class="text-white">Web Designer</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="frontend/assets/images/team/team-image22.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="team-details.html">Karniz Fatema</a></h4>
                                <span class="text-white">Customer Support</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="frontend/assets/images/team/team-image33.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="team-details.html">Alex Pranto</a></h4>
                                <span class="text-white">UI/UX Designer</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end here -->
    </main>

   

@endsection