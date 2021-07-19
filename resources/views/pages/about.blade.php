@extends('layouts.app')

@section('title', 'About')

@section('content')
{{-- {{ $about->desc1 }} --}}
{{-- Output  --}}
<div class="page-content bg-white">
    <!-- Banner  -->
    <div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1>About Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- About -->
    <section class="content-inner-2">
        <div class="container">
            <div class="section-head style-1 text-center">
                <h6 class="sub-title text-primary">Our Steps</h6>
                <h2 class="title">How It Works</h2>
            </div>
            <div class="row about-wraper-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="col-md-4">
                    <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                        <div class="icon-bx-lg radius bg-white">
                            <a href="javascript:void(0);" class="icon-cell text-primary">
                                <i class="flaticon-vector"></i>
                            </a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b15">Pilih Paket</h4>
                            <p>Tentukan paket pilihan yang sesuai untukmu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                        <div class="icon-bx-lg radius bg-white">
                            <a href="javascript:void(0);" class="icon-cell text-primary">
                                <i class="flaticon-sketch"></i>
                            </a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b15">Isi Formulir Pemesanan</h4>
                            <p>Isi formulir untuk mengajukan pemesanan layanan internet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                        <div class="icon-bx-lg radius bg-white">
                            <a href="javascript:void(0);" class="icon-cell text-primary">
                                <i class="flaticon-startup"></i>
                            </a>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b15">Nikmati Layanan Internet Cepat ByFast</h4>
                            <p>Layanan internet akan dapat anda nikmati setelah pemesanan dikonfirmasi admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-inner about-wraper-1"
        style="background-image: url(images/background/bg15.png); background-size: contain; background-position: center right; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dz-media left">
                        <img src="{{ asset('assets') }}/images/about/flat.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="section-head style-1">
                        <h6 class="sub-title text-primary m-b15">About Us</h6>
                        <h2 class="title m-b20" style="font-size: 40px">{{ $aboutUs->desc1 }}</h2>
                        <p>{{ $aboutUs->desc2 }}</p>
                    </div>
                    <ul class="list-check primary m-b30">
                        <li>{{ $aboutUs->desc3 }}</li>
                        <li>{{ $aboutUs->desc4 }}</li>
                        <li>{{ $aboutUs->desc5 }}</li>
                    </ul>
                    <a href="{{ url('/#packet-container') }}" class="btn btn-primary rounded-xl gradient">Berlangganan</a>
                </div>
            </div>
        </div>
    </section>



</div>


@endsection