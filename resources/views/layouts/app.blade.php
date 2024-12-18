<!DOCTYPE html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="Korps Lanal Biak">
     <meta name="robots" content="index, follow">
    <title>Beranda | Korps Lanal Biak</title>
        <meta property="og:description" content="Website Resmi Korps Lanal Biak">
    <meta property="og:site_name" content="" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="">
   
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/preloader.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/backToTop.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
</head>

<body>
  
@include('layouts.front.header')
@yield('content')
@include('layouts.front.footer')

<script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/meanmenu.js')}}"></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/backToTop.js')}}"></script>
<script src="{{ asset('frontend/assets/js/nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/ajax-form.js')}}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.appear.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.odometer.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/js_circle-progress.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>

@yield('js')
</body>

</html>