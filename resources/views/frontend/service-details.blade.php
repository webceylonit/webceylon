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
                    <a href="{{ route('index') }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Service Details</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

         <!-- Service area start here -->
        <section class="service-single-area pt-50 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="service-single__left-item">
                           <div class="image mb-50">
                                <img src="{{ asset('public/storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid">
                            </div>

                            <h3 class="title mb-30">{{ $service->name }}</h3>

                            <p class="mb-20">
                                {!! $service->description !!}
                            </p>

                            <!-- @if($service->additional_info)
                                
                                <p>{{ $service->additional_info }}</p>
                            @endif -->

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

                            

                            @if ($service->name === 'Digital Marketing')
                                <div class="custom-dm-section mt-10">
                                    <h3 class="title mb-30 text-center">Our Digital Marketing Process</h3>
                                    <p class="text-center mb-60">We follow a structured step-by-step strategy that ensures impactful marketing and consistent results.</p>

                                    <div class="timeline-wrapper position-relative">
                                        @php
                                            $steps = [
                                                [
                                                    'title' => 'Study and Research',
                                                    'desc' => 'We analyze your brand, audience, and competitors to understand what works best for your niche.'
                                                ],
                                                [
                                                    'title' => 'Voice and Content Creation',
                                                    'desc' => 'We develop tailored content using the right tone and message that fits your brand identity.'
                                                ],
                                                [
                                                    'title' => 'Execution',
                                                    'desc' => 'Campaigns are launched across relevant digital platforms for maximum visibility and engagement.'
                                                ],
                                                [
                                                    'title' => 'Reputation Management',
                                                    'desc' => 'We monitor responses, engage with your audience, and ensure your online reputation remains strong.'
                                                ],
                                                [
                                                    'title' => 'Analysis and Reporting',
                                                    'desc' => 'We assess results through analytics and deliver reports to help you track growth and ROI.'
                                                ],
                                            ];
                                        @endphp

                                        @foreach ($steps as $index => $step)
                                            <div class="timeline-step d-flex align-items-start">
                                                <div class="step-icon">
                                                    <span>{{ $index + 1 }}</span>
                                                </div>
                                                <div class="step-content ms-4 p-3 shadow-sm rounded transition">
                                                    <h5>{{ $step['title'] }}</h5>
                                                    <p>{{ $step['desc'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <style>
                                    .timeline-wrapper {
                                        border-left: 3px solid #ff7f00;
                                        padding-left: 30px;
                                        margin-left: 15px;
                                    }

                                    .timeline-step {
                                        position: relative;
                                        margin-bottom: 40px;
                                        transition: all 0.3s ease;
                                    }

                                    .timeline-step:last-child {
                                        margin-bottom: 0;
                                    }

                                    .step-icon {
                                        position: absolute;
                                        left: -52px;
                                        top: 6px;
                                        width: 40px;
                                        height: 40px;
                                        background-color: #ff7f00;
                                        color: #fff;
                                        border-radius: 50%;
                                        font-weight: bold;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        z-index: 1;
                                        box-shadow: 0 0 0 0 transparent;
                                        transition: box-shadow 0.3s ease;
                                    }

                                    /* Triangle Pointer at Bottom */
                                    .step-icon::after {
                                        content: '';
                                        position: absolute;
                                        bottom: -8px;
                                        left: 50%;
                                        transform: translateX(-50%);
                                        width: 0;
                                        height: 0;
                                        border-left: 15px solid transparent;
                                        border-right: 15px solid transparent;
                                        border-top: 15px solid #ff7f00;
                                    }


                                    .step-content {
                                        background-color: #fff;
                                        transition: all 0.3s ease;
                                    }

                                    .step-content h5 {
                                        font-weight: 600;
                                        margin-bottom: 5px;
                                        color: #ff7f00;
                                    }

                                    .step-content p {
                                        color: #444;
                                        font-size: 14px;
                                        margin-bottom: 0;
                                    }

                                    .timeline-step:hover .step-content {
                                        background-color: #fff7f0;
                                        box-shadow: 0 6px 20px rgba(255, 127, 0, 0.1);
                                        transform: translateY(-2px);
                                    }

                                    .timeline-step:hover .step-icon {
                                        box-shadow: 0 0 0 4px rgba(255, 127, 0, 0.3);
                                    }
                                </style>
                            @endif




                            @if ($service->name !== 'Digital Marketing' && $service->name !== 'ERP System Development')
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
                            @endif
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

                            <!-- Support Box Start -->
                            <div class="item sub-bg text-center p-4 mb-30">
                                <div class="mb-3">
                                    <img src="{{ asset('webceylon.png') }}" alt="WebCeylon Logo" style="max-width: 150px;">
                                </div>
                                <h5 class="mb-2">Need Help?</h5>
                                <p class="text-muted mb-3" style="font-size: 14px;">We are here to support your business journey every step of the way.</p>
                                <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-primary">Contact Us</a>
                            </div>
                            <!-- Support Box End -->

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->

        @if ($service->name === 'Digital Marketing')
            <section class="pricing-area pt-10 pb-120" style="margin-top:-20px;">
                <div class="container">
                    <div class="section-header text-center mb-60">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img class="me-1" src="{{ asset('frontend/assets/images/icon/section-title.png') }}" alt="icon">
                            OUR PLANS
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Flexible Ditital Marketing Plans</h2>
                    </div>

                    <div class="row g-4">
                        @php
                            $plans = [
                                [
                                    'title' => 'SILVER PLAN',
                                    'price' => 'Rs. 65,000',
                                    'delay' => '00ms',
                                    'icon' => 'pricing-icon1.png',
                                    'features' => [
                                        'Manage Digital Platforms<br><small>(Google Ads, Meta Ads: Facebook, Instagram, TikTok, YouTube)</small>',
                                        '4 Posts per Month',
                                        'Advertising Campaigns',
                                        'Brand Building & Engagement',
                                        'Monthly Reporting & Analysis',
                                        'Social Media Competitor Analysis'
                                    ],
                                    'additional' => [
                                        '🎬 1 video (30 seconds)'
                                    ]
                                ],
                                [
                                    'title' => 'GOLD PLAN',
                                    'price' => 'Rs. 95,000',
                                    'delay' => '200ms',
                                    'icon' => 'pricing-icon2.png',
                                    'features' => [
                                        'Manage Digital Platforms<br><small>(Google Ads, Meta Ads: Facebook, Instagram, TikTok, YouTube)</small>',
                                        '6 Posts per Month',
                                        'Advertising Campaigns',
                                        'Brand Building & Engagement',
                                        'Monthly Reporting & Analysis',
                                        'Social Media Competitor Analysis'
                                    ],
                                    'additional' => [
                                        '✨ Brand Building Package',
                                        '🎬 2 video clips (15s & 30s)'
                                    ]
                                ],
                                [
                                    'title' => 'PLATINUM PLAN',
                                    'price' => 'Rs. 130,000',
                                    'delay' => '400ms',
                                    'icon' => 'pricing-icon3.png',
                                    'features' => [
                                        'Manage Digital Platforms<br><small>(Google Ads, Meta Ads: Facebook, Instagram, TikTok, YouTube)</small>',
                                        '8 Posts per Month',
                                        'Advertising Campaigns',
                                        'Brand Building & Engagement',
                                        'Monthly Reporting & Analysis',
                                        'Social Media Competitor Analysis'
                                    ],
                                    'additional' => [
                                        '✨ Brand Building Package',
                                        '🎬 3 video reels (15s, 30s, 45–90s)'
                                    ]
                                ],
                            ];
                        @endphp

                        @foreach ($plans as $plan)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $plan['delay'] }}" data-wow-duration="1500ms">
                                <div class="pricing__item d-flex flex-column justify-content-between h-100 position-relative">
                                    <div class="item-shape">
                                        <img src="{{ asset('frontend/assets/images/shape/pricing-item-shape.png') }}" alt="shape">
                                    </div>
                                    <div class="pricing-head mb-3">
                                        <div>
                                            
                                            <h4 class="mb-10">{{ $plan['price'] }}</h4>
                                            <h2 style="font-size: 30px;" class="text-white ">{{ $plan['title'] }}</h2>
                                        </div>
                                    </div>

                                    <ul class="mb-3 ps-4 position-relative">
                                        @foreach ($plan['features'] as $feature)
                                        <li class="position-relative ps-4">{!! $feature !!}</li>
                                        @endforeach
                                    </ul>

                                    @if(count($plan['additional']))
                                        <div class="additional-features">
                                            <h6 class="text-white mt-3 mb-2">Additional Features:</h6>
                                            <ul class="ps-4 position-relative">
                                                @foreach ($plan['additional'] as $addon)
                                                    <li class="position-relative ps-4">{!! $addon !!}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <a class="btn-one d-block text-center mt-auto">Choose Plan <i class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- 🔶 Special Plans CTA -->
                    <div class="row mt-80">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="special-plan-box text-center p-5 rounded shadow bg-light">
                                <h4 class="mb-3 text-dark">Do You Need Customized Plan?</h4>
                                <p class="mb-4">We can build <strong>customized marketing plans</strong> based on your business goals and industry requirements.</p>
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary">Request Custom Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 🔧 Styling -->
            <style>
                .pricing__item {
                    background: #007793;
                    padding: 30px;
                    border-radius: 12px;
                    border: 1px solid #eee;
                    color: #fff;
                    position: relative;
                    transition: all 0.3s ease;
                    min-height: 100%;
                }

                .pricing__item:hover {
                    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
                    transform: translateY(-5px);
                }

                .pricing-head h4,
                .pricing-head h2 {
                    color: #fff;
                }

                .pricing__item ul li {
                    color: #fff;
                    margin-bottom: 6px;
                    font-size: 15px;
                    list-style: none;
                    position: relative;
                }

                .pricing__item ul li::before {
                    content: "✔";
                    position: absolute;
                    left: 0;
                    color: #ffb84d;
                    font-weight: bold;
                }

                .additional-features ul li::before {
                    content: "➕";
                    color: #fff;
                }

                .item-shape {
                    position: absolute;
                    top: 0;
                    right: 0;
                    z-index: 0;
                    opacity: 0.1;
                }

                .special-plan-box {
                    background: #fffefb;
                    border: 2px dashed #ff7f00;
                }

                .btn-one {
                    background-color: #ff7f00;
                    color: #fff;
                    padding: 10px 25px;
                    border-radius: 6px;
                    transition: all 0.3s ease;
                }

                .btn-one:hover {
                    background-color: #d96600;
                    color: #fff;
                }
            </style>
        @endif


        @if ($service->name === 'ERP System Development')
            <section class="custom-erp-section pb-120" style="margin-top:-50px;">
                <div class="container">
                    <div class="section-header text-center mb-60">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img class="me-1" src="{{ asset('frontend/assets/images/icon/section-title.png') }}" alt="icon">
                            Our Systems
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Enterprise ERP Systems</h2>
                    </div>

                    <div class="row g-4">
                        @php
                            $erpModules = [
                                ['title' => 'HR & ePayroll System', 'desc' => 'Manage employees, payroll, attendance, and more.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Budgeting System', 'desc' => 'Plan and control financial resources efficiently.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Inventory Management System', 'desc' => 'Track stock levels, orders, and deliveries.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Sales Dashboards', 'desc' => 'Visualize and manage your sales performance.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Fixed Assets Registers', 'desc' => 'Track physical assets and depreciation.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Accounting Systems', 'desc' => 'Handle accounts, ledgers, invoices, and more.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Project Management Systems', 'desc' => 'Plan, track, and collaborate on tasks and projects with milestones, file sharing, and real-time team updates.', 'url' => 'http://ehirs.ceylonbp.com/'],
                                ['title' => 'Invoicing Systems', 'desc' => 'Generate and manage invoices, track payments, send reminders, and streamline your cash flow with real-time reporting.', 'url' => 'http://ehirs.ceylonbp.com/'],
                            ];
                        @endphp

                        @foreach ($erpModules as $module)
                            <div class="col-md-6 col-lg-4">
                                <div class="erp-box d-flex flex-column justify-content-between text-center p-4 shadow-sm border rounded equal-height">
                                    <div>
                                        <h4 class="mb-2">🎯 {{ $module['title'] }}</h4>
                                        <p class="text-muted small">{{ $module['desc'] }}</p>
                                    </div>
                                    <div class="mt-3">
                                        <a href="{{ $module['url'] }}" target="_blank" class="btn btn-outline-primary btn-sm erp-btn">Explore</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <style>
                .erp-box {
                    background-color: #ffffff;
                    border: 1px solid #ddd;
                    transition: all 0.3s ease;
                    height: 100%;
                    min-height: 220px;
                }

                .erp-box:hover {
                    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
                    transform: translateY(-3px);
                }

                .erp-btn {
                    transition: background-color 0.3s ease, color 0.3s ease;
                }

                .erp-btn:hover {
                    background-color: #ff7f00;
                    color: #fff;
                    border-color: #ff7f00;
                }

                .equal-height {
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                }
            </style>
        @endif



    </main>

@endsection