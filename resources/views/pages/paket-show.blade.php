@extends('layouts.app')

@section('title', 'Cek Status Pemesanan')

@section('content')

<!-- Banner  -->
<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(images/banner/bnr1.jpg);">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1>Detail Paket</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Paket</li>
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
    <div id="detail-container" class="container mb-5 pb-5">

    </div>
    <br>
    <br>
</section>
<script src="{{ asset('services') }}/detail-packet.js"></script>
@endsection