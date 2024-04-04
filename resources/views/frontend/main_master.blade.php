<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Geosunny & Partners</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Preloader -->
    <div class="preloader-bg"></div><div id="preloader"><div id="preloader-status"><div class="preloader-position loader"><span></span></div></div></div>

    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Sidebar Here -->
        @include('frontend.component.sidebar')

    <!-- Main -->
    <div id="bauen-main">

@if(request()->routeIs('home'))
    @include('frontend.component.slider')
@endif

        <!-- Content -->
        <div class="content-wrapper">

            <!-- Lines -->
            <section class="content-lines-wrapper">
                <div class="content-lines-inner">
                    <div class="content-lines"></div>
                </div>
            </section>
            <!-- --------------------------------------------- -->

@if(!request()->routeIs('home'))
        @include('frontend.component.header')
@endif
           
            @yield('main')

            <!-- --------------------------------------------- -->
        @include('frontend.component.footer')
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.isotope.v3.0.2.js') }}"></script>
    
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/YouTubePopUp.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/before-after.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
</body>
</html>