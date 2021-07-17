@extends('layouts.app')

@section('title', 'Service')

@section('content')

<!-- Banner  -->
<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(images/banner/bnr1.jpg);">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1>Cek Status Pesanan</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cek Status Pemesanan</li>
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
    <div class="container mb-5 pb-5">
        <div class="section-head style-1 text-center">
            <h2 class="title" style="font-size: 40px">Masukkan Nomor Pesananmu</h2>
        </div>
        <div class="row">
            <div class="col-xl-12 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input id="order-id" name="order_id" required type="text" class="form-control"
                                    placeholder="Nomor Pemesanan">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button id="check-button" type="button" class="btn btn-lg gradient btn-primary">Cek
                                Status</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="response-container" class="row justify-content-center">
        </div>
    </div>
    <br>
    <br>
</section>
<script src="{{ asset('services') }}/check-order-status.js"></script>
@endsection