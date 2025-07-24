<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Webceylon')</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset('icon.png') }}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 21px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            padding: 1px;
            font-size: 24px;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            color: white;
        }
    </style>

</head>

<body>

    @include('frontend.header')

    @yield('content')

    @include('frontend.footer')



    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/94779954063" target="_blank" class="whatsapp-float">
        <img src="{{ asset('public/frontend/assets/images/icon/whatsapp.png') }}" alt="WhatsApp Business" style="width: 55px; height: 55px;">
    </a>

    <!-- Back to Top Scroll Icon -->
    <div class="scroll-up" style="bottom: 100px;">
        <svg class="scroll-circle svg-content" viewBox="-1 -1 102 102" fill="white">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @yield('scripts')

    <!-- Jquery 3.7.0 Min Js -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Mean menu Js -->
    <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Pace min Js -->
    <script src="{{ asset('frontend/assets/js/pace.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
    <!-- Isotope pkgd min Js -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>

</html>