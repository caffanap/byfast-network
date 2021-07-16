@extends('layouts.app')

@section('title', 'Service')

@section('content')

    <!-- Banner  -->
    <div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1>Our Services</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Blog -->
    <section class="content-inner-2"
        style="background-image: url(assets/images/background/bg2.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h2 class="title" style="font-size: 40px">Mengawal Kehamilan Dengan Pintar</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic1.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Asisten Pribadi Chatbot WhatsApp</h4>
                            <p>Tanyakan apapun mengenai kehamilan dan dapatkan jawabannya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic2.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Mom’s Edu</h4>
                            <p>Kami memberikan informasi pengetahuan untuk Bunda tentang Persalinan dan Menyusui</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-0 offset-md-3">
                    <div class="icon-bx-wraper style-7 text-center ">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic3.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Mom’s Shop</h4>
                            <p>Tidak perlu repot mencari produk online, cukup tanyakan kami dan informasi produk relevan dengan harga kompetitif akan kami sediakan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic1.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Mom’s Doc</h4>
                            <p>(Coming Soon)</p>
                            <p>Konsultasi virtual langsung dengan dokter spesialis kandungan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic2.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Mom’s Lator</h4>
                            <p>(Coming Soon)</p>
                            <p>Kalkulator otomatis untuk perhitungan ovulasi, masa kehamilan dan estimasi biaya anak</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 offset-lg-0 offset-md-3">
                    <div class="icon-bx-wraper style-7 text-center ">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic3.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Mom’s Feed</h4>
                            <p>(Coming Soon)</p>
                            <p>Forum diskusi sesama Ibu Hamil untuk mendapatkan info yang lebih akurat berdasarkan pengalaman masing-masing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>

    <!-- Services -->
    {{-- <section class="content-inner-2"
        style="background-image: url(assets/images/background/bg2.png); background-size: contain; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="section-head style-1">
                        <h6 class="sub-title text-primary m-b15">Layanan</h6>
                        <h2 class="title" style="font-size: 40px">Asisten Virtual dengan Teknologi Kekinian untuk Bunda</h2>
                    </div>
                    <div class="icon-bx-wraper style-3 left box-hover m-r50 m-b30 wow fadeInRight" data-wow-duration="2s"
                        data-wow-delay="0.4s">
                        <div class="icon-bx-sm radius">
                            <a href="javascript:void(0);" class="icon-cell">
                                <i class="flaticon-idea"></i>
                            </a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b10">Dokter Kandungan Yang Friendly</h4>
                            <p>Memberikan Ide dan Analisis untuk keperluan Ibu Hamil dan Menyusui</p>
                        </div>
                    </div>
                    <div class="icon-bx-wraper style-3 left box-hover active m-l50 m-b30 wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="icon-bx-sm radius">
                            <a href="javascript:void(0);" class="icon-cell">
                                <i class="flaticon-coding"></i>
                            </a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b10">Share Pengetahuan Pra & Pasca Kelahiran</h4>
                            <p>Membuat Pengetahuan yang bermanfaat bagi Bunda</p>
                        </div>
                    </div>
                    <div class="icon-bx-wraper style-3 left box-hover m-r50 m-b30 wow fadeInRight" data-wow-duration="2s"
                        data-wow-delay="0.8s">
                        <div class="icon-bx-sm radius">
                            <a href="javascript:void(0);" class="icon-cell">
                                <i class="flaticon-rocket"></i>
                            </a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b10">Keberhasilan & Kenyamanan Bunda</h4>
                            <p>Selalu memberikan prioritas utama untuk layanan Bunda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cf-r-img d-lg-block d-none">
                        <img src="{{ asset('assets') }}/images/about/pic3.png" class="move-2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
