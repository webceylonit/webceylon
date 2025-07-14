@extends ('frontend.master')

@section('title', 'Webceylon - Privacy Policy')

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
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Privacy Policy</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="{{ route('index') }}">Home</a>
                <span><i class="fa-regular fa-angles-right mx-2"></i>Privacy Policy</span>
            </div>
        </div>
    </section>

   <!-- Terms Content Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="terms-content p-4 p-md-5 rounded shadow-sm bg-white">
                    <h3 class="mb-4 text-primary border-bottom pb-2">Privacy Policy</h3>

                    <h4 class="mt-4 mb-2 text-secondary">Introduction</h4>
                    <p class="text-justify">
                        Welcome to <strong>Webceylon.com</strong>. We are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and safeguard information gathered through our website. By using this website, you agree to the practices described in this policy.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">Scope of Coverage</h4>
                    <p class="text-justify">
                        This Privacy Policy applies solely to Webceylon.com and governs the handling of information collected through this website. It does not apply to any third-party websites or services linked from our site. Any external platforms will have their own privacy policies, which we encourage you to review.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">Use of Your Personal Information</h4>
                    <p class="text-justify">
                        Webceylon.com does not collect personal information such as names, email addresses, or phone numbers unless you voluntarily provide it through our contact forms or communication channels. We do not sell, rent, or share any personal information with third parties except as required to respond to your inquiries or comply with legal obligations.
                    </p>
                    <p class="text-justify">
                        Any information you provide through contact or inquiry forms may be used solely for the purpose of responding to your request or communication. Your information may be stored securely for reference, but will not be used for unsolicited marketing or disclosed to external parties without your consent.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">Control of Your Personal Information</h4>
                    <p class="text-justify">
                        You have full control over the information you choose to share with us. If you contact us through our website, you may request to update or delete any personal information you’ve provided. We do not create user accounts or profiles, so there is no ongoing user data stored in any database beyond direct inquiries.
                    </p>

                    <h4 class="mt-4 mb-2 text-secondary">Data Breach Notification Policy</h4>
                    <p class="text-justify">
                        Webceylon is committed to the security of your information. In the unlikely event of a data breach involving personal information submitted via our website, we will assess the situation promptly and notify any affected individuals without undue delay. We will provide relevant details, potential risks, and the actions taken to mitigate the impact.
                    </p>
                    <p class="text-justify">
                        We will also offer guidance on how to protect your information, and ensure our response complies with applicable data protection regulations.
                    </p>

                    <p class="mt-5 text-muted">
                        <strong>Effective Date:</strong> This Privacy Policy was last updated on <strong>25th June 2025</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


</main>

@endsection
