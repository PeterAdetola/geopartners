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

    <!-- Sidebar Section -->
    <a href="#" class="js-bauen-nav-toggle bauen-nav-toggle"><i></i></a>
    <aside id="bauen-aside">
        <!-- Logo -->
        <div class="bauen-logo">
            <a href="index.html"> <img src="{{ asset('frontend/assets/img/logo.png') }}" class="logo-img" alt="">
                <h2>GEOSUNNY<span>AND PARTNERS</span></h2>
            </a>
        </div>
        </div>
        <!-- Menu -->
        <nav class="bauen-main-menu">
            <ul>
                <li class="active"><a href='#!'>Home</a></li>
                <li><a href='#!'>About</a></li>
                <li><a href='#!'>Services</a></li>
                <li><a href='#!'>Projects</a></li>
                <li><a href='#!'>Contact</a></li>
            </ul>
        </nav>
        <!-- Sidebar Footer -->
        <div class="bauen-footer">
            <ul>
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
                <li><a href="#"><i class="ti-pinterest"></i></a></li>
            </ul>
        </div>
    </aside>
    <!-- Main -->
    <div id="bauen-main">
        <!-- Slider -->
        <header class="header slider-fade">
            <div class="owl-carousel owl-theme">
                <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                <div class="text-end item bg-img" data-overlay-dark="3" data-background="{{ asset('frontend/assets/img/slider/1.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 offset-md-5">
                                    <div class="o-hidden">
                                        <h1>Innovate Design in Toronto</h1>
                                        <p>Architecture viverra tellus nec massa dictum the euismoe.
                                            <br>Curabitur viverra the posuere aukue velit.
                                        </p>
                                        <div class="butn-light mt-30 mb-30"><a href="https://1.envato.market/mDnXD" target="_blank"><span>Buy Now</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end item bg-img" data-overlay-dark="4" data-background="{{ asset('frontend/assets/img/slider/2.jpg') }}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 offset-md-5">
                                    <div class="o-hidden">
                                        <h1>Innovate Design in Canada</h1>
                                        <p>Architecture viverra tellus nec massa dictum the euismoe.
                                            <br>Curabitur viverra the posuere aukue velit.
                                        </p>
                                        <div class="butn-light mt-30 mb-30"><a href="#0"><span>Discover</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Corner -->
            <div class="hero-corner"></div>
            <div class="hero-corner3"></div>
        </header>
        <!-- Content -->
        <div class="content-wrapper">
            <!-- Lines -->
            <section class="content-lines-wrapper">
                <div class="content-lines-inner">
                    <div class="content-lines"></div>
                </div>
            </section>
            <!-- About -->
            <section class="about section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                            <h2 class="section-title">About <span>Us</span></h2>
                            <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                            <p>Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p>
                            <p>Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen. Viverra tristique jusio the ivite dianne onen nivami acsestion.</p>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                            <div class="about-img">
                                <div class="img"> <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt=""> </div>
                                <div class="about-img-2 about-buro">Canada Office</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Projects -->
            <section class="projects section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Our <span>Projects</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/projects/1.jpg') }}" alt=""> </div>
                                    <div class="con">
                                        <h6><a href="cotton-house.html">Interior</a></h6>
                                        <h5><a href="cotton-house.html">Cotton House</a></h5>
                                        <div class="line"></div> <a href="cotton-house.html"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/projects/2.jpg') }}" alt=""> </div>
                                    <div class="con">
                                        <h6><a href="armada-center.html">Exterior</a></h6>
                                        <h5><a href="armada-center.html">Armada Center</a></h5>
                                        <div class="line"></div> <a href="armada-center.html"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/projects/3.jpg') }}" alt=""> </div>
                                    <div class="con">
                                        <h6><a href="stonya-villa.html">Urban</a></h6>
                                        <h5><a href="stonya-villa.html">Stonya Villa</a></h5>
                                        <div class="line"></div> <a href="stonya-villa.html"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/projects/4.jpg') }}" alt=""> </div>
                                    <div class="con">
                                        <h6><a href="prime-hotel.html">Interior</a></h6>
                                        <h5><a href="prime-hotel.html">Prime Hotel</a></h5>
                                        <div class="line"></div> <a href="prime-hotel.html"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services -->
            <section class="services section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Our <span>Services</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <a href="architecture.html"> <img src="{{ asset('frontend/assets/img/icons/icon-1.png') }}" alt="">
                                    <h5>Architecture</h5>
                                    <div class="line"></div>
                                    <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                    <div class="numb">01</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <a href="interior-design.html"> <img src="{{ asset('frontend/assets/img/icons/icon-2.png') }}" alt="">
                                    <h5>Interior Design</h5>
                                    <div class="line"></div>
                                    <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                    <div class="numb">02</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <a href="urban-design.html"> <img src="{{ asset('frontend/assets/img/icons/icon-3.png') }}" alt="">
                                    <h5>Urban Design</h5>
                                    <div class="line"></div>
                                    <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                    <div class="numb">03</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog -->
            <section class="bauen-blog section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">Current <span>News</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/slider/1.jpg') }}" alt=""> </div>
                                    <div class="con"> <span class="category">
                                            <a href="blog.html">Architecture </a> - 20.12.2023
                                        </span>
                                        <h5><a href="post.html">Modern Architectural Structures</a></h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/slider/2.jpg') }}" alt=""> </div>
                                    <div class="con"> <span class="category">
                                            <a href="blog.html">Interior</a> - 18.12.2023
                                        </span>
                                        <h5><a href="post.html">Modernism in Architecture</a></h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/slider/3.jpg') }}" alt=""> </div>
                                    <div class="con"> <span class="category">
                                            <a href="blog.html">Urban</a> - 16.12.2023
                                        </span>
                                        <h5><a href="post.html">Postmodern Architecture</a></h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="position-re o-hidden"> <img src="{{ asset('frontend/assets/img/slider/4.jpg') }}" alt=""> </div>
                                    <div class="con"> <span class="category">
                                            <a href="blog.html">Planing</a> - 14.12.2023
                                        </span>
                                        <h5><a href="post.html">Modern Architecture Buildings</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Promo video - Testiominals -->
            <section class="testimonials">
                <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('frontend/assets/img/banner2.jpg') }}" data-overlay-dark="3">
                    <div class="container">
                        <div class="row">
                            <!-- Promo video -->
                            <div class="col-md-6">
                                <div class="vid-area">
                                    <div class="vid-icon">
                                        <a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
                                            <svg class="circle-fill">
                                                <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                            </svg>
                                            <svg class="circle-track">
                                                <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                                            </svg> <span class="polygon">
                                                <i class="ti-control-play"></i>
                                            </span> </a>
                                    </div>
                                    <div class="cont mt-15 mb-30">
                                        <h5>View promo video</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Testiominals -->
                            <div class="col-md-5 offset-md-1">
                                <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                    <div class="head-box">
                                        <h4>What Client's Say?</h4>
                                    </div>
                                    <div class="owl-carousel owl-theme">
                                        <div class="item"> <span class="quote"><img src="{{ asset('frontend/assets/img/quot.png') }}" alt=""></span>
                                            <p>Architect dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                            <div class="info">
                                                <div class="author-img"> <img src="{{ asset('frontend/assets/img/team/1.jpg') }}" alt=""> </div>
                                                <div class="cont">
                                                    <h6>Jason Brown</h6> <span>Crowne Plaza Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item"> <span class="quote">
                                                <img src="{{ asset('frontend/assets/img/quot.png') }}" alt="">
                                            </span>
                                            <p>Interior dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                            <div class="info">
                                                <div class="author-img"> <img src="{{ asset('frontend/assets/img/team/2.jpg') }}" alt=""> </div>
                                                <div class="cont">
                                                    <h6>Emily White</h6> <span>Armada Owner</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item"> <span class="quote">
                                                <img src="{{ asset('frontend/assets/img/quot.png') }}" alt="">
                                            </span>
                                            <p>Urban dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                            <div class="info">
                                                <div class="author-img"> <img src="{{ asset('frontend/assets/img/team/4.jpg') }}" alt=""> </div>
                                                <div class="cont">
                                                    <h6>Jesica Smith</h6> <span>Alsa Manager</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clients -->
            <section class="clients">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
                        <div class="owl-carousel owl-theme">
                            <div class="clients-logo">
                                <a href="#0"><img src="{{ asset('frontend/assets/img/clients/1.png') }}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{ asset('frontend/assets/img/clients/2.png') }}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{ asset('frontend/assets/img/clients/3.png') }}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{ asset('frontend/assets/img/clients/4.png') }}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{ asset('frontend/assets/img/clients/5.png') }}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{ asset('frontend/assets/img/clients/6.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
        </div>
      </div>
    </section>
            <!-- Footer -->
            <footer class="main-footer dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <div class="item fotcont">
                                <div class="fothead">
                                    <h6>Phone</h6>
                                </div>
                                <p>+1 203-123-0606</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="item fotcont">
                                <div class="fothead">
                                    <h6>Email</h6>
                                </div>
                                <p>architecture@bauen.com</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="item fotcont">
                                <div class="fothead">
                                    <h6>Our Address</h6>
                                </div>
                                <p>24 King St, Charleston, SC 29401 USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-left">
                                    <p>© 2023 Bauen. All right reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-4 abot">
                                <div class="social-icon"> <a href="#!"><i class="ti-facebook"></i></a> <a href="#!"><i class="ti-twitter"></i></a> <a href="#!"><i class="ti-instagram"></i></a> <a href="#!"><i class="ti-pinterest"></i></a> </div>
                            </div>
                            <div class="col-md-4"> </div>
                        </div>
                    </div>
                </div>
            </footer>
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