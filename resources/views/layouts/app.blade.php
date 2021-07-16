<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Get Well Mom - @yield('title')</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/favicon.png">

    <!-- Stylesheet -->
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/animate/animate.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link class="skin" rel="stylesheet" href="{{ asset('assets') }}/css/skin/skin-1.css">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/swiper/css/swiper.min.css">
    <style>
        .label-container {
            position: fixed;
            bottom: 48px;
            left: 105px;
            display: table;
            visibility: hidden;
        }

        .label-text {
            color: #FFF;
            background: rgba(51, 51, 51, 0.5);
            display: table-cell;
            vertical-align: middle;
            padding: 10px;
            border-radius: 3px;
        }

        .label-arrow {
            display: table-cell;
            vertical-align: middle;
            color: #333;
            opacity: 0.5;
        }

        .float {
            position: fixed;
            z-index: 999;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 40px;
            background-color: #5acc37;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float {
            font-size: 24px;
            margin-top: 18px;
        }

        a.float+div.label-container {
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s ease;
        }

        a.float:hover+div.label-container {
            visibility: visible;
            opacity: 1;
        }

    </style>

</head>

<body id="bg">
    <div id="loading-area" class="loading-02"></div>
    <div class="page-wraper">
        <!-- Header -->
        <header class="site-header header mo-left header-transparent text-black">
            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header  logo-dark">
                            <a href="/"><img src="{{ asset('assets') }}/images/logo-2.png" style="height: 55px"></a>
                        </div>
                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Extra Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="/#COBA_SEKARANG" class="btn btn-primary gradient rounded-xl">Berlangganan</a>
                            </div>
                        </div>
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="index.html"><img
                                        src="{{ asset('assets') }}/images/logo-2.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav navbar">
                                <li class="active">
                                    <a href="/"><span>Home</span></a>
                                </li>
                                <li>
                                    <a href="/about"><span>About</span></a>
                                </li>
                                <li>
                                    <a href="/services"><span>Services</span></a>
                                </li>
                            </ul>
                            <div class="dlab-social-icon">
                                <ul>
                                    <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->
        </header>
        <!-- Header End -->

        <div class="page-content bg-white">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="site-footer style-2" id="footer" style="background-image: url(images/background/bg4.png);">
            <div class="container">
                <div class="dlab-subscribe style-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="title">Subscribe To Our Newsletter</h2>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{ url('/newsletter') }}" method="post">
                                @csrf
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group shadow">
                                        <input name="email" required="required" type="email" class="form-control"
                                            placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit"
                                                class="btn btn-primary gradient">
                                                <i class="las la-paper-plane scale4"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="widget widget_about">
                                <div class="footer-logo">
                                    <a href="index.html"><img
                                            src="{{ asset('assets') }}/images/logo-2.png" alt="" /></a>
                                </div>
                                <div class="widget widget_getintuch">
                                    <ul>
                                        <li>
                                            <i class="fa fa-phone gradient"></i>
                                            <span>0812 6860 3378</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope gradient"></i>
                                            <span>halo@getwellmom.com</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        </div>

                        <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Our links</h5>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/services') }}">Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bottom part -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7 text-left">
                            <span class="copyright-text">Copyright © 2021 GetWellMom. All rights reserved.</span>
                        </div>
                        <div class="col-lg-6 col-md-5 text-right">
                            <div class="dlab-social-icon">
                                <ul>
                                    <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                    <li><a class="fa fa-instagram" href="https://www.instagram.com/getwellmom/"></a>
                                    </li>
                                    <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
        <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
    </div>
    <a href="https://wa.me/6281268603378" class="float">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <div class="label-container">
        <div class="label-text">WhatsApp</div>
    </div>
    @if (Session::has('error'))
        <script>
            alert({{ Session::get('error') }})
        </script>
    @endif
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets') }}/vendor/wow/wow.js"></script>
    <!-- WOW JS -->
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/popper.min.js"></script>
    <!-- POPPER.MIN JS -->
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets') }}/vendor/owl-carousel/owl.carousel.js"></script>
    <!-- OWL-CAROUSEL JS -->
    <script src="{{ asset('assets') }}/vendor/magnific-popup/magnific-popup.js"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('assets') }}/vendor/counter/waypoints-min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{ asset('assets') }}/vendor/counter/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="{{ asset('assets') }}/vendor/masonry/masonry-4.2.2.js"></script>
    <!-- MASONRY -->
    <script src="{{ asset('assets') }}/vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <!-- LIGHTGALLERY -->
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/bootstrap-select.min.js"></script>
    <!-- BOOTSTRAP SELECT -->
    <script src="{{ asset('assets') }}/vendor/imagesloaded/imagesloaded.js"></script>
    <!-- IMAGESLOADED -->
    <script src="{{ asset('assets') }}/vendor/masonry/isotope.pkgd.min.js"></script>
    <!-- ISOTOPE -->
    <script src="{{ asset('assets') }}/js/dz.carousel.js"></script>
    <!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets') }}/js/dz.ajax.js"></script>
    <!-- CONTACT JS  -->
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <!-- CUSTOM JS -->


    <script src="{{ asset('assets') }}/vendor/swiper/js/swiper.min.js"></script>
    <!-- swiper -->
    <script>
        var testimonialThumbs = new Swiper('.testimonial-thumbs', {
            spaceBetween: 10,
            slidesPerView: 3,
            centeredSlides: true,
            freeMode: true,
            autoplay: true,
            loop: true,
            speed: 3000,
        });
        var testimonialContent = new Swiper('.testimonial-content', {
            spaceBetween: 10,
            autoplay: true,
            loop: true,
            speed: 3000,
            thumbs: {
                swiper: testimonialThumbs
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>
