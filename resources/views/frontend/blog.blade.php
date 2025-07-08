@extends ('frontend.master')

@section('title', 'Webceylon - Blogs')

@section('content')

 
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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Blogs</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Blogs</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->


       <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="blog__item">
                                <!-- Blog Image -->
                                <a href="{{ route('blog-details', $blog->id) }}" class="blog__image d-block image">
                                    <img src="{{ asset('storage/' . $blog->main_image) }}" alt="image">
                                    <div class="blog-tag">
                                        <h3 class="text-white">{{ \Carbon\Carbon::parse($blog->date)->format('d') }}</h3>
                                        <span class="text-white">{{ \Carbon\Carbon::parse($blog->date)->format('M') }}</span>
                                    </div>
                                </a>

                                <!-- Blog Content -->
                                <div class="blog__content">
                                    <ul class="blog-info pb-20 bor-bottom mb-20">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5436 5.19275C14.5436 7.69093 12.499 9.7355 10.0008 9.7355C7.50268 9.7355 5.45811 7.69093 5.45811 5.19275C5.45811 2.69457 7.50264 0.65 10.0008 0.65C12.499 0.65 14.5436 2.69458 14.5436 5.19275Z"
                                                    stroke="#3C72FC" stroke-width="1.3" />
                                                <path
                                                    d="M18.2644 14.6706C18.1052 14.9458 17.9241 15.2073 17.7169 15.4766L17.7168 15.4765L17.7089 15.4873C17.4204 15.8788 17.0845 16.2373 16.7295 16.5924C16.4326 16.8892 16.0933 17.186 15.7568 17.4385C14.0794 18.6911 12.0622 19.3499 9.97818 19.3499C7.8984 19.3499 5.8851 18.6938 4.2098 17.4461C3.84591 17.1504 3.51371 16.8792 3.2269 16.5924L3.21993 16.5854L3.21276 16.5787C2.85667 16.2436 2.54242 15.8877 2.24749 15.4874L2.24751 15.4873L2.24417 15.4829C2.06196 15.24 1.87324 14.9756 1.71923 14.7169C1.83622 14.4559 1.98458 14.1847 2.14525 13.9526L2.14536 13.9527L2.15288 13.9413C3.06988 12.5556 4.53709 11.6388 6.16646 11.4148L6.18604 11.4121L6.20542 11.4082C6.2309 11.4031 6.29498 11.4117 6.34551 11.4496L6.3455 11.4496L6.34951 11.4525C7.41654 12.2401 8.68633 12.6453 10.0008 12.6453C11.3153 12.6453 12.5851 12.2401 13.6522 11.4525L13.6522 11.4525L13.6562 11.4496C13.6716 11.438 13.7404 11.408 13.8492 11.4167C15.4689 11.6435 16.9121 12.5568 17.8525 13.9468L17.8524 13.9469L17.8564 13.9526C18.0166 14.1839 18.1557 14.4231 18.2644 14.6706Z"
                                                    stroke="#3C72FC" stroke-width="1.3" />
                                            </svg>
                                            <a href="#0">By {{ $blog->author }}</a>
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('blog-details', $blog->id) }}" class="primary-hover">{{ $blog->title }}</a></h3>
                                    <a class="mt-25 read-more-btn" href="{{ route('blog-details', $blog->id) }}">Read More <i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="pegi justify-content-center mt-60">
                    {{ $blogs->links() }}
                </div>
            </div>
        </section>

    </main>

@endsection