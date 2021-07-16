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
                            <h1 class="wow fadeInUp m-b20" data-wow-delay="1s">Teman Virtual Ibu Hamil & Menyusui</h1>
                            <p class="wow fadeInUp m-b15" data-wow-delay="1.5s">Solusi seputar Kehamilan dan Masa Menyusui dengan Akses Mudah via Whatsapp</p>
                            <ul class="wow fadeInUp list-check-2 m-b20" data-wow-delay="2.0s">
                                <li>Konsultasi kehamilan dan pasca melahirkan via Whatsapp</li>
                                <li>Informasi dokter dan rumah sakit terdekat</li>
                                <li>Pengetahuan seputar Ibu Hamil dan Menyusui</li>
                                <li>Informasi lengkap perihal produk dan jasa untuk kehamilan dan pasca Melahirkan</li>
                            </ul>
                            <a href="#COBA_SEKARANG" class="wow fadeInUp btn btn-primary rounded-xl gradient"
                                data-wow-delay="2.5s">COBA SEKARANG</a>
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
                <h6 class="sub-title text-primary m-b10">Terbaik untuk Bunda</h6>
                <h2 class="title" style="font-size: 40px">Mengawal Kehamilan Dengan Pintar</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic1.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Dokter Kandungan</h4>
                            <p>Konsultasi dengan dokter spesialis kandungan dengan menggunakan perangkat WhatsApps</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-bx-wraper style-7 text-center m-lg-b30">
                        <div class="icon-media">
                            <img src="{{ asset('assets') }}/images/services/pic2.jpg" width="215" alt="" />
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title">Informasi Kehamilan </h4>
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
                            <h4 class="dlab-title">Perlengkapan Bunda</h4>
                            <p>Kami menyediakan perlengkapan yang siap untuk membantu kebutuhan Bunda</p>
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
                                <img src="{{ asset('assets') }}/images/projects/project-2/pic1.jpg" style="object-fit: cover;" width="800" height="517">
                                <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic1.jpg"
                                    data-src="{{ asset('assets') }}/images/projects/project-2/pic1.jpg" class="lightimg"
                                    title="Design">
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
                                <img src="{{ asset('assets') }}/images/projects/project-2/pic2.jpg" style="object-fit: cover;" width="800" height="737">
                                <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic2.jpg"
                                    data-src="{{ asset('assets') }}/images/projects/project-2/pic2.jpg" class="lightimg"
                                    title="Design">
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
                                        <img src="{{ asset('assets') }}/images/projects/project-2/pic3.jpg"  style="object-fit: cover;" width="800" height="486">
                                        <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic3.jpg"
                                            data-src="{{ asset('assets') }}/images/projects/project-2/pic3.jpg"
                                            class="lightimg" title="Design">
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
                                        <img src="{{ asset('assets') }}/images/projects/project-2/pic4.jpg" style="object-fit: cover;" width="800" height="486">
                                        <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic4.jpg"
                                            data-src="{{ asset('assets') }}/images/projects/project-2/pic4.jpg"
                                            class="lightimg" title="Design">
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
                                        <img src="{{ asset('assets') }}/images/projects/project-2/pic5.jpg" style="object-fit: cover;" width="800" height="337">
                                        <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic5.jpg"
                                            data-src="{{ asset('assets') }}/images/projects/project-2/pic5.jpg"
                                            class="lightimg" title="Design">
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
                                <img src="{{ asset('assets') }}/images/projects/project-2/pic6.jpg" style="object-fit: cover;" width="800" height="861">
                                <span data-exthumbimage="{{ asset('assets') }}/images/projects/project-2/pic6.jpg"
                                    data-src="{{ asset('assets') }}/images/projects/project-2/pic6.jpg" class="lightimg"
                                    title="Design">
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
    <section class="content-inner-2"
        style="background-image: url(assets/images/background/bg16.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="section-head style-1 text-center mb-3">
                {{-- <h6 class="sub-title m-b15 text-primary">Pilih Jasa Kami Sesuai Kebutuhan Ibu</h6> --}}
                <h4 class="title">Pilih Jasa Kami Sesuai Kebutuhan Ibu</h4>
            </div>
            <div class="pricingtable-row" style="padding-top: 34px">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="pricingtable-wrapper style-2 m-md-b30">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-title">
                                    <h3>Free</h3>
                                    <p style="visibility: hidden"> a</p>
                                </div>
                                <div class="pricingtable-media m-b15">
                                    <img src="{{ asset('assets') }}/images/services/pic4.jpg" width="125" alt="" />
                                </div>
                                <div class="pricingtable-price">
                                    <h2 class="pricingtable-bx" style="font-size: 22px">Rp 0<small class="pricingtable-type">/Bulan</small></h2>
                                </div>
                                <ul class="pricingtable-features">
                                    <li>Share Tips Kehamilan </li>
                                    <li>Share Tips Menyusui</li>
                                    <li>Alarm Persalinan</li>
                                    <li>Informasi Kebutuhan Kehamilan</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                </ul>
                                <div class="pricingtable-footer">
                                    <a href="#COBA_SEKARANG" class="btn btn-primary gradient shadow rounded-xl">COBA SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="pricingtable-wrapper style-2 active m-md-b30">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-title">
                                    <h3>Standard Plan</h3>
                                    <p>Coming Soon</p>
                                </div>
                                <div class="pricingtable-media m-b15">
                                    <img src="{{ asset('assets') }}/images/services/pic5.jpg" width="125" alt="" />
                                </div>
                                <div class="pricingtable-price">
                                    <h2 class="pricingtable-bx" style="font-size: 22px">Rp 10.000<small class="pricingtable-type">/Bulan</small>
                                    </h2>
                                </div>
                                <ul class="pricingtable-features">
                                    <li>Share Tips Kehamilan </li>
                                    <li>Share Tips Menyusui</li>
                                    <li>Informasi Kebutuhan</li>
                                    <li>Pesan Obat Online</li>
                                    <li>Konsultasi Dokter / 1 x / Bulan</li>
                                    <li>-</li>
                                    <li>-</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="pricingtable-wrapper style-2">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-title">
                                    <h3>Premium Plan</h3>
                                    <p>Coming Soon</p>
                                </div>
                                <div class="pricingtable-media m-b15">
                                    <img src="{{ asset('assets') }}/images/services/pic6.jpg" width="125" alt="" />
                                </div>
                                <div class="pricingtable-price">
                                    <h2 class="pricingtable-bx" style="font-size: 22px">Rp 20.000<small class="pricingtable-type">/Bulan</small>
                                    </h2>
                                </div>
                                <ul class="pricingtable-features">
                                    <li>Share Tips Kehamilan </li>
                                    <li>Share Tips Menyusui</li>
                                    <li>Informasi Kebutuhan</li>
                                    <li>Pesan Obat Online</li>
                                    <li>Konsultasi Dokter / Unlimited / Bulan</li>
                                    <li>Informasi RS Terdekat</li>
                                    <li>Penjemputan Darulat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
		<div class="content-inner" id="COBA_SEKARANG">
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
						<form method="POST" action="{{ url('/subscriber/store') }}">
                            {{ csrf_field() }}
                            <div class="row">
								<div class="col-sm-6">
									<div class="input-group">
										<input name="nama_lengkap" required type="text" class="form-control" placeholder="Nama Lengkap">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="email" required type="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="no_telpon" required type="number" class="form-control" placeholder="No Telpon">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<input name="umur_kehamilan" required type="number" class="form-control" placeholder="Umur Kehamilan (Bulan)">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
                                        <label for="tertarik">Tertarik menggunakan Get Well Mom untuk</label>
                                        <select class="form-control" name="tertarik" id="tertarik">
                                            <option>-- Pilih --</option>
                                            <option value="Ingin konsultasi dan sharing tentang kehamilan dan pasca melahirkan">Ingin konsultasi dan sharing tentang kehamilan dan pasca melahirkan</option>
                                            <option value="Ingin mendapatkan seputar info kehamilan dan menyusui">Ingin mendapatkan seputar info kehamilan dan menyusui</option>
                                            <option value="Ingin mendapatkan info produk relevan terkait kehamilan dan pasca melahirkan">Ingin mendapatkan info produk relevan terkait kehamilan dan pasca melahirkan</option>
                                            <option value="Ingin mendapatkan informasi dokter dan rumah sakit terdekat">Ingin mendapatkan informasi dokter dan rumah sakit terdekat</option>
                                        </select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<textarea name="alamat" required class="form-control" placeholder="Alamat"></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<button type="submit" class="btn btn-lg gradient btn-primary">Langganan Sekarang</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection
