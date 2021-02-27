<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('site-page-title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('site/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('site/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('site/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ url('site/assets/vendor/boxicons/css/boxicons.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('site/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('site/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ url('site/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('site/assets/css/style.css') }}" rel="stylesheet">

    @yield('site-css')

</head>

<body>
    @include('site.partials.modal')

    <!-- ======= Header ======= -->
    @include('site.partials.navegation')
    <!-- End Header -->

    <!-- Main -->
    @yield('site-content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('site.partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('site/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ url('site/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('site/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('site/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('site/assets/js/main.js') }}"></script>

    @yield('site-js')

</body>

</html>
