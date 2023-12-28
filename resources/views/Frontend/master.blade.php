<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://themewagon.github.io/jobfinderportal/assets/css/bootstrap.min.css">
    <!--
            CSS here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/flaticon.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/price_rangs.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/slicknav.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/animate.min.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/themify-icons.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/slick.css">
    <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/nice-select.css">
    <link href="{{url('/css/frontend/css/style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>


        .sidebar {


            background-color: #fff;
            padding-top: 15px;
        }

        .sidebar a {
            padding: 8px 15px;
            display: block;
            text-decoration: none;
            color: #495057;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
        }

    </style>
</head>
<Body>
<header>
    @include('frontend.partials.Navbar')
    @auth
        @include('frontend.partials.secondnav')
    @endauth
</header>


@yield('content')

<br><br><br><br>
<!-- Footer -->
@include('frontend.partials.Footer')

<!-- JS here -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/popper.min.js"></script>

<!-- All JS Custom Plugins Link Here here -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/owl.carousel.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/slick.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/price_rangs.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/wow.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/animated.headline.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.scrollUp.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.nice-select.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/contact.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.form.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.validate.min.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/mail-script.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="https://themewagon.github.io/jobfinderportal/assets/js/plugins.js"></script>
<script src="https://themewagon.github.io/jobfinderportal/assets/js/main.js"></script>
   @stack('js')
</body>
</html>
