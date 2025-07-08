@extends ('frontend.master')

@section('title', 'Webceylon - Project - Details')

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Project - Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Project - Details
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
                        <img src="frontend/assets/images/case/case-details-image1.jpg" alt="image">
                    </div>
                    <h3 class="case-single__title mt-40 mb-30">Web Development Solution</h3>
                    <p>Nulla faucibus malesuada. In placerat feugiat eros ac tempor. Integer euismod massa sapien, et
                        consequat enim laoreet
                        et. Nulla sit amet nisi dapibus, gravida turpis sit amet, accumsan nisl. Fusce vel semper risus.
                        Morbi congue eros
                        sagittis, sodales turpis venenatis, iaculis dui. Proin ac purus sed nibh dapibus neque.
                        scelerisque sed quis ante.
                        Suspendisse potenti. Mauris vitae sagittis diam. Vivamus imperdiet nulla ut nisi fermentum,
                        vitae euismod mi
                        egestas. In
                        quis auctor magna. Maecenas sodales nunc tellus, non iaculis est iaculis placerat. Morbi
                        suscipit,</p>
                    <ul class="case-date py-4 bor-top bor-bottom mt-40">
                        <li><span>Completed Date:</span> 23-12-2023</li>
                        <li><span>Client:</span> Robert Fox</li>
                        <li><span>Location:</span> fot kde, USA</li>
                    </ul>
                    <h3 class="case-single__title mt-40 mb-30">Our Challenge</h3>
                    <p>Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci malesuada
                        sollicitudin. Aenean faucibus
                        scelerisque convallis. Quisque interdum mauris id nunc molestie, ac tincidunt erat gravida.
                        Nullam dui libero, mollis ac
                        quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue. Proin id
                        volutpat massa. Vivamus
                        tincidunt nunc justo, ac aliquam ex molestie id.</p>
                    <div class="case-challenge-list mt-30">
                        <ul class="case-challenge">
                            <li class="mb-3"><i class="fa-solid fa-check"></i>Technology Consultancy</li>
                            <li><i class="fa-solid fa-check"></i>Maintenance And Support</li>
                        </ul>
                        <ul class="case-challenge">
                            <li class="mb-3"><i class="fa-solid fa-check"></i>We Provide best services</li>
                            <li><i class="fa-solid fa-check"></i>Requirements Gathering</li>
                        </ul>
                        <ul class="case-challenge">
                            <li class="mb-3"><i class="fa-solid fa-check"></i>Maintenance And Support</li>
                            <li><i class="fa-solid fa-check"></i>Technology Consultancy</li>
                        </ul>
                    </div>
                    <h3 class="case-single__title mt-40 mb-30">Project Overview</h3>
                    <p>Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci malesuada
                        sollicitudin. Aenean faucibus
                        scelerisque convallis. Quisque interdum mauris id nunc molestie, ac tincidunt erat gravida.
                        Nullam dui libero, mollis ac
                        quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue. Proin id
                        volutpat massa. Vivamus
                        tincidunt nunc justo, ac aliquam ex molestie id.</p>
                </div>
                <div class="row g-4 mt-10">
                    <div class="col-md-6">
                        <div class="image">
                            <img src="frontend/assets/images/case/case-details-image2.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image">
                            <img src="frontend/assets/images/case/case-details-image3.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Case area end here -->
    </main>

@endsection