@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Slider -->
<div class="banner-two"
    style="background-image:url(images/main-slider/slider2/pic2.png); background-repeat:no-repeat; background-position:top; background-size:100%;">
    <div class="container">
        <div class="banner-inner">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp m-b20" data-wow-delay="1s">Provider Internet Terbaik Untukmu</h1>
                        <p class="wow fadeInUp m-b15" data-wow-delay="1.5s">Teman setia di setiap langkahmu</p>
                        <ul class="wow fadeInUp list-check-2 m-b20" data-wow-delay="2.0s">
                            <li>Kecepatan hingga 1Gbps</li>
                            <li>Teknologi Fiber Optic</li>
                            <li>Coverage area luas</li>
                            <li>Kejutan promo tiap bulan</li>
                        </ul>
                        <a href="#PASANG_SEKARANG" class="wow fadeInUp btn btn-primary rounded-xl gradient"
                            data-wow-delay="2.5s">Pasang Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-media">
                        <img src="{{ asset('assets') }}/images/main-slider/slider2/pic3.png" class="wow fadeInUp"
                            data-wow-delay="2s" alt="" />
                        <div class="move-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->
<section class="content-inner-2"
    style="background-image: url(assets/images/background/bg2.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary m-b10">Layanan Andalan</h6>
            <h2 class="title" style="font-size: 40px">Penunjang Bisnis Segala Bidang</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                    <div class="icon-media">
                        <img src="{{ asset('assets') }}/images/services/pic1.jpg" width="215" alt="" />
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-title">Internet</h4>
                        <p>Layanan internet cepat hingga 1Gbps menggunakan jaringan fiber optic yang tertanam dari
                            Sabang sampai Merauke.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                    <div class="icon-media">
                        <img src="{{ asset('assets') }}/images/services/pic2.jpg" width="215" alt="" />
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-title">TV Global</h4>
                        <p>Kebutuhan hiburanmu akan selalu tercukupi dengan TV kami yang memiliki 1000 channel dari
                            seluruh dunia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-0 offset-md-3">
                <div class="icon-bx-wraper style-7 text-center ">
                    <div class="icon-media">
                        <img src="{{ asset('assets') }}/images/services/pic3.jpg" width="215" alt="" />
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-title">Penyimpanan Awan</h4>
                        <p>Tak perlu khawatir datamu hilang. Karena kamu dapat
                            mengaksesnya kapan saja, darimanapun kamu mau.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counters -->
{{-- <section class="content-inner-3 bg-light"
        style="background-image: url(assets/images/background/bg14.png); background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 m-b30 col-6">
                    <div class="dlab-content-bx style-3 text-center">
                        <div class="icon-bx-sm radius">
                            <span class="icon-cell">
                                <i class="flaticon-smile"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h2 class="m-b0 text-primary"><span class="counter m-r5">18</span></h2>
                            <span class="title">Jumlah Dokter</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 m-b30 col-6">
                    <div class="dlab-content-bx style-3 text-center">
                        <div class="icon-bx-sm radius">
                            <span class="icon-cell">
                                <i class="flaticon-line-chart"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h2 class="m-b0 text-primary"><span class="counter m-r5">200</span></h2>
                            <span class="title">Pelanggan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 m-b30 col-6">
                    <div class="dlab-content-bx style-3 text-center">
                        <div class="icon-bx-sm radius">
                            <span class="icon-cell">
                                <i class="flaticon-startup"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h2 class="m-b0 text-primary"><span class="counter m-r5">10</span></h2>
                            <span class="title">Jangkauan Daerah</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 m-b30 col-6">
                    <div class="dlab-content-bx style-3 text-center">
                        <div class="icon-bx-sm radius">
                            <span class="icon-cell">
                                <i class="flaticon-confetti"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <h2 class="m-b0 text-primary"><span class="counter m-r5">100</span></h2>
                            <span class="title">Directory Pengetahuan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

<!-- Projects -->
{{-- <section class="content-inner-2"
        style="background-image: url(assets/images/background/bg17.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary m-b15">Portfolio</h6>
                <h2 class="title">Bunda Bersama Kami</h2>
            </div>
            <div class="clearfix">
                <div class="row lightgallery">
                    <div class="card-container col-lg-7 col-md-6 col-sm-6 web_design wow fadeInUp">
                        <div class="dlab-box dlab-overlay-box style-2 m-b30 overlay-shine">
                            <div class="dlab-media dlab-img-overlay1">
                                <img src="{{ asset('assets') }}/images/projects/project-2/pic1.jpg" style="object-fit:
cover;" width="800" height="517">
<span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic1.jpg"
    data-src="{{ asset('assets') }}/images/projects/project-2/pic1.jpg" class="lightimg" title="Design">
    <i class="la la-plus"></i>
</span>
</div>
<div class="dlab-info">
    <h5 class="title"><a href="javascript:void(0);">Konsultasi Dokter Kandungan</a></h5>
</div>
</div>
</div>
<div class="card-container col-lg-5 col-md-6 col-sm-6 web_development wow fadeInUp">
    <div class="dlab-box dlab-overlay-box style-2 m-b30  overlay-shine">
        <div class="dlab-media dlab-img-overlay1">
            <img src="{{ asset('assets') }}/images/projects/project-2/pic2.jpg" style="object-fit: cover;" width="800"
                height="737">
            <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic2.jpg"
                data-src="{{ asset('assets') }}/images/projects/project-2/pic2.jpg" class="lightimg" title="Design">
                <i class="la la-plus"></i>
            </span>
        </div>
        <div class="dlab-info">
            <h5 class="title"><a href="javascript:void(0);">Konsultasi Dokter Kandungan</a></h5>
        </div>
    </div>
</div>

<div class="col-lg-7 col-md-6 col-sm-6">
    <div class="row">
        <div class="card-container col-lg-6 col-md-12 col-sm-12 branding wow fadeInUp">
            <div class="dlab-box dlab-overlay-box style-2 m-b30 overlay-shine">
                <div class="dlab-media dlab-img-overlay1">
                    <img src="{{ asset('assets') }}/images/projects/project-2/pic3.jpg" style="object-fit: cover;"
                        width="800" height="486">
                    <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic3.jpg"
                        data-src="{{ asset('assets') }}/images/projects/project-2/pic3.jpg" class="lightimg"
                        title="Design">
                        <i class="la la-plus"></i>
                    </span>
                </div>
                <div class="dlab-info">
                    <h5 class="title"><a href="javascript:void(0);">Konsultasi Dokter Kandungan</a>
                    </h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="card-container col-lg-6 col-md-12 col-sm-12 branding wow fadeInUp">
            <div class="dlab-box dlab-overlay-box style-2 m-b30 overlay-shine">
                <div class="dlab-media dlab-img-overlay1">
                    <img src="{{ asset('assets') }}/images/projects/project-2/pic4.jpg" style="object-fit: cover;"
                        width="800" height="486">
                    <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic4.jpg"
                        data-src="{{ asset('assets') }}/images/projects/project-2/pic4.jpg" class="lightimg"
                        title="Design">
                        <i class="la la-plus"></i>
                    </span>
                </div>
                <div class="dlab-info">
                    <h5 class="title"><a href="javascript:void(0);">Konsultasi Dokter Kandungan</a>
                    </h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="card-container col-lg-12 col-md-12 col-sm-12 web_development wow fadeInUp">
            <div class="dlab-box dlab-overlay-box style-2 m-b30  overlay-shine">
                <div class="dlab-media dlab-img-overlay1">
                    <img src="{{ asset('assets') }}/images/projects/project-2/pic5.jpg" style="object-fit: cover;"
                        width="800" height="337">
                    <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic5.jpg"
                        data-src="{{ asset('assets') }}/images/projects/project-2/pic5.jpg" class="lightimg"
                        title="Design">
                        <i class="la la-plus"></i>
                    </span>
                </div>
                <div class="dlab-info">
                    <h5 class="title"><a href="javascript:void(0);">Konsultasi Dokter Kandungan</a>
                    </h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-container col-lg-5 col-md-6 col-sm-6 seo wow fadeInUp">
    <div class="dlab-box dlab-overlay-box style-2 m-b30 overlay-shine">
        <div class="dlab-media dlab-img-overlay1">
            <img src="{{ asset('assets') }}/images/projects/project-2/pic6.jpg" style="object-fit: cover;" width="800"
                height="861">
            <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic6.jpg"
                data-src="{{ asset('assets') }}/images/projects/project-2/pic6.jpg" class="lightimg" title="Design">
                <i class="la la-plus"></i>
            </span>
        </div>
        <div class="dlab-info">
            <h5 class="title"><a href="javascript:void(0);">Konsultasi Dokter Kandungan</a></h5>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section> --}}

<!-- Our Pricing -->
<section id="packet-container" class="content-inner-2 mb-5"
    style="background-image: url(assets/images/background/bg16.png); background-size: cover; background-position: center; background-repeat: no-repeat;">

</section>

<!-- Clients Logo -->
{{-- <div class="content-inner-3">
        <div class="container">
            <div class="clients-carousel owl-none owl-carousel m-b30 style-2">
                <div class="item">
                    <div class="clients-logo">
                        <img class="logo-main" src="{{ asset('assets') }}/images/logo/logo-pink1.png" alt="">
<img class="logo-hover" src="{{ asset('assets') }}/images/logo/logo-light1.png" alt="">
</div>
</div>
<div class="item">
    <div class="clients-logo">
        <img class="logo-main" src="{{ asset('assets') }}/images/logo/logo-pink2.png" alt="">
        <img class="logo-hover" src="{{ asset('assets') }}/images/logo/logo-light2.png" alt="">
    </div>
</div>
<div class="item">
    <div class="clients-logo">
        <img class="logo-main" src="{{ asset('assets') }}/images/logo/logo-pink3.png" alt="">
        <img class="logo-hover" src="{{ asset('assets') }}/images/logo/logo-light3.png" alt="">
    </div>
</div>
<div class="item">
    <div class="clients-logo">
        <img class="logo-main" src="{{ asset('assets') }}/images/logo/logo-pink4.png" alt="">
        <img class="logo-hover" src="{{ asset('assets') }}/images/logo/logo-light4.png" alt="">
    </div>
</div>
<div class="item">
    <div class="clients-logo">
        <img class="logo-main" src="{{ asset('assets') }}/images/logo/logo-pink5.png" alt="">
        <img class="logo-hover" src="{{ asset('assets') }}/images/logo/logo-light5.png" alt="">
    </div>
</div>
<div class="item">
    <div class="clients-logo">
        <img class="logo-main" src="{{ asset('assets') }}/images/logo/logo-pink6.png" alt="">
        <img class="logo-hover" src="{{ asset('assets') }}/images/logo/logo-light6.png" alt="">
    </div>
</div>
</div>
</div>
</div> --}}

<!-- Subscribe -->
<script src="{{ asset('services') }}/home.js"></script>
@endsection