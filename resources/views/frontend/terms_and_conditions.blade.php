@extends ('frontend.master')

@section('title', 'Webceylon - Terms and Conditions')

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
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Terms and Conditions</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ route('index') }}">Home</a>
                <span><i class="fa-regular fa-angles-right mx-2"></i>Terms and Conditions</span>
            </div>
        </div>
    </section>

   <!-- Terms Content Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="terms-content p-4 p-md-5 rounded shadow-sm bg-white">
                    <h3 class="mb-4 text-primary border-bottom pb-2">Terms and Conditions</h3>
                    <p class="mb-4 text-justify" >
                        Welcome to <strong>Webceylon.com</strong>. These Terms and Conditions govern your access to and use of our website, services, and payment processes related to our IT solutions. By using our site, you agree to comply with these terms. Please read them carefully.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">1. Use of the Website</h4>
                    <p class="text-justify">
                        Webceylon.com is an informational platform showcasing our IT services, portfolio, blog content, career opportunities, and contact details. By using this site, you agree to use it only for lawful and appropriate purposes. Any attempt to disrupt the operation of the website, access unauthorized sections, or misuse its content is strictly prohibited.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">2. Payments</h4>
                    <p class="text-justify">
                        Webceylon.com does not facilitate any online payments or financial transactions through this website. Any service inquiries or project engagements are handled directly through communication channels such as email or phone, as listed on our Contact page.
                    </p>


                    <h4 class="mt-4 mb-2 text-secondary">3. Intellectual Property</h4>
                    <p class="text-justify">
                        All content on our website, including text, logos, graphics, and media, is the intellectual property of Webceylon or its licensors. Reproduction, distribution, or modification without written permission is strictly prohibited.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">4. Limitation of Liability</h4>
                    <p class="text-justify">
                        Webceylon and its team will not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use our website or services.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">5. Amendments and Termination</h4>
                    <p class="text-justify">
                        We reserve the right to update or terminate these Terms at any time without prior notice. It is your responsibility to review them periodically. Continued use of the site after updates constitutes acceptance of the new terms.
                    </p>

                    <p class="mt-5 text-muted">
                        <strong>Effective Date:</strong> These Terms and Conditions were last updated on <strong>25th June 2025</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

@endsection
