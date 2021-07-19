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
    <div id="detail-container" class="container mb-3">
    </div>
</section>

<div class="content-inner" id="PASANG_SEKARANG">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary m-b15">Berlangganan</h6>
            <h2 class="title">Ayo Berlangganan!</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="dlab-media">
                    <img src="{{asset('assets')}}/images/services/langganan.png" class="move-3" alt="">
                </div>
            </div>
            <div class="col-xl-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input id="full-name" required type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input id="personal-id" type="text" class="form-control" placeholder="Nomor Identitas">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input id="phone" required type="text" class="form-control" placeholder="Nomor HP">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <select class="form-control" id="gender">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <textarea id="address" required class="form-control" placeholder="Alamat"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <label for="select-packet">Pilih Paket</label>
                            <select class="form-control" id="select-packet">
                                <option>-- Pilih --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <label for="select-topping">Pilih Topping</label>
                            <select class="form-control" id="select-topping">
                                <option>-- Pilih --</option>
                            </select>
                        </div>
                    </div>
                    <div id="error-message-container" class="col-md-12">
                    </div>
                    <div class="col-sm-12">
                        <button id="order-button" type="button" class="btn btn-lg gradient btn-primary w-100">Ajukan
                            Pemesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade pt-5 mt-5" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered py-5 mb-5" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modal-order-body" class="modal-body">
            </div>
            <div id="modal-footer" class="modal-footer">

            </div>
        </div>
    </div>
</div>
<script src="{{ asset('services') }}/detail-packet.js"></script>
@endsection