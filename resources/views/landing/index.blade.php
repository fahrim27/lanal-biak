@extends('layouts.app')
@section('title',"Beranda - Lanal Biak")

@section('content')
<main>
    <!-- banner-area-start -->
    <div class="banner-area banner-area1 pos-rel z-index-2">
        <!-- line animation - start -->
        <div class="line_wrap banner-line">
            <div class="line_item"></div>
        </div>
        <div class="swiper-container slider__active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-banner single-banner-3 banner-800 p-relative d-flex align-items-center">
                        <div class="banner-bg banner-bg3 banner-bg3-1 d-none" data-background="">
                        </div>
                        <div class="video-wrapper p-relative">
                            <video autoplay muted loop>
                                <source src="{{ asset('frontend/assets/video/video1.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-banner single-banner-3 banner-800 p-relative d-flex align-items-center">
                        <div class="banner-bg banner-bg1 banner-bg1-1" data-background="{{ asset('uploads/header/smk38bOtCdqGuAFo3tmfPSQqraSDFeKYWLoqmY85.png')}}">
                        </div>

                        <div class="container">
                            <div class="banner-inner p-relative">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="banner-content banner-content3 banner-content3-1 text-center">
                                            <p>
                                                KORPS MARINIR INDONESIA
                                            </p>
                                            <h1 class="banner-meta-text mb-15 text-danger">
                                                -
                                            </h1>
                                            <div class="banner-meta-text">
                                                <span> -</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-banner single-banner-3 banner-800 p-relative d-flex align-items-center">
                        <div class="banner-bg banner-bg1 banner-bg1-1" data-background="{{ asset('uploads/header/t0ymGH3XQXzpJ9Uw7BBkKqJocvbB9ev7ivUQrrqp.jpg')}}">
                        </div>

                        <div class="container">
                            <div class="banner-inner p-relative">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="banner-content banner-content3 banner-content3-1 text-center">
                                            <p>
                                                KORPS MARINIR INDONESIA
                                            </p>
                                            <h1 class="banner-meta-text mb-15 text-danger">
                                                PRAJURIT MARINIR
                                            </h1>
                                            <div class="banner-meta-text">
                                                <span> BERSAMA TUHAN MENYERBU DARI LAUT</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="slider-pagination slider-3-pagination"></div>
    </div>
    <!-- banner-area-end -->

    <!-- about-area-start-->
    <section class="about-area pt-70 pb-20 p-relative bg-dark z-index-2 fix">
        <!-- line animation - start -->
        <div class="deco_wrap">
            <div class="line_wrap body-line">
                <div class="line_item"></div>
            </div>
        </div>
        <!-- line animation - end -->

        <div class="container">
            <div class="about-inner p-relative">
                <div class="about-area-shape">
                    <img class="about-shape-1" src="{{ asset('frontend/assets/img/shape/x-frame.png')}}" alt="img not found">
                </div>
                                <div class="row  align-items-center">
                    <div class="col-xl-5">
                        <div class="about-thumb-1-area">
                            <div class="about-thumb-1-wrapper mb-65 p-relative z-index-1">
                                <div class="about-thumb about-thumb-1 p-relative wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="{{ asset('uploads/perintah/WosMWRH4opVADT8xmXzvBQxnJtUb0fKvnQ7qJqMW.jpg')}}" alt="img not found">
                                    <div class="panel wow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">

                        <div class="about-content-wrapper mb-65 wow fadeInRight" data-wow-delay=".3s">
                            <div class="bd-section-title-wrapper">
                                <div class="bd-section-subtitle">
                                    Komandan Korps Marinir
                                    <i class="flaticon-001-bullet"></i>
                                </div>
                                <h3 class="bd-section-title text-white mb-40">TAKLIMAT AWAL KOMANDAN LANAL BIAK
                                </h3>
                            </div>
                            <div class="about-content">
                                <h5 class="text-white">
                                    <p style="margin-top: 6pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b>PARA PRAJURIT PETARUNG KORPS MARINIR</b></p>
                                    <p class="MsoNormal"><o:p><b>&nbsp;</b></o:p></p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- ucapan  -->
    <section class="element fix pt-130 pb-130 bg-white z-index-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-wrapper">
                        <div class="team-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-card team-special">
                                        <div class="team-thumb">
                                            <div class="panel wow"></div>

                                            <img src="{{ asset('uploads/ucapan/WxzAt8niCrnzNHmfJ5SbcFkKsOFBm1TQLL1H2UkQ.jpg')}}" alt="img not found">
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

    <!-- team area start  -->
    <section class="team-area pt-130 pb-130 p-relative fix bg-white z-index-2">
        <div class="team-overlay area-absolute parallax-bg" data-background="{{ asset('frontend/assets/img/bg/form-parallax.jpg')}}"></div>
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-6">
                    <div class="bd-section-title-wrapper bd-section-title-wrapper-team-3 centered-title">
                        <h3 class="bd-section-title mb-50"> WARGA KEHORMATAN</h3>
                    </div>
                </div>
            </div>

            <div class="team-inner wow fadeInUp" data-wow-delay=".3s">
                <div class="swiper team-3-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card team-3">
                                <div class="team-thumb">
                                    <div class="team-thumb-bg"><a href="detail-warga/prof-dr-h-mahfud-md-sh-su-mip.html"></a></div>
                                    <img src="{{ asset('uploads/warga/fCiDEivQ7Q19GyBJykfGPcgwKYv0Q2gJ3FyVKzDu.jpg')}}" alt="img not found">
                                </div>
                                <div class="team-content">
                                    <h4 class="member-name"><a href="detail-warga/prof-dr-h-mahfud-md-sh-su-mip.html">Profile Lengkap</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                                                
                    </div>
                </div>
                <div class="team-3-pagination circle-dot-pagination wow fadeInUp" data-wow-delay=".3s"></div>
            </div>
        </div>
    </section>
    <!-- team area end  -->

    <!-- video slider area start  -->
    <div class="video-slider-area pt-130 pb-40 p-relative bg-dark z-index-2">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-4">
                    <div class="about-content-wrapper mb-65 wow fadeInRight" data-wow-delay=".3s">
                        <div class="bd-section-title-wrapper">
                            <div class="bd-section-subtitle">
                                Video
                                <i class="flaticon-001-bullet"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="video-slide-wrapper">
                        <div class="swiper-container video-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="video-thumb-wrapper">
                                        <div class="video-thumb">
                                            <img src="{{ asset('uploads/marinestv/FCfRpW4ikYmuhaYzM9Bt9OB1SoBYULgw7ouiGcQd.png')}}"
                                                alt="img not found">
                                        </div>
                                        <div class="video-thumb-btn">
                                            <a href="https://www.youtube.com/watch?v=6amTleGRKjA&amp;t=77s"
                                                class="popup-video">
                                                <span class="play-btn"><i class="fas fa-play"></i></span></a>
                                        </div>
                                        <h3 class="text-white mt-3">BELIEVE - THE ULTIMATE BATTLE
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-pagination circle-dot-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video slider area end  -->

    <!-- latest-news-area-start -->
    <section class="element fix pt-130 pb-130 bg-white z-index-2">
        <div class="donation-overlay-img area-absolute parallax-bg " data-background="{{ asset('frontend/assets/img/bg/22.jpg')}}">
        </div>

        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="bd-section-title-wrapper wow fadeInUp" data-wow-delay=".3s">
                        <div class="bd-section-subtitle">
                            Berita
                            <i class="flaticon-001-bullet"></i>
                        </div>
                        <h3 class="bd-section-title text-white mb-50">Berita Utama
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news-btn mb-65 wow fadeInUp" data-wow-delay=".3s">
                        <a href="berita-utama.html" class="arrow-text-btn">
                            <i class="flaticon-042-arrow-right text-white"></i>
                            <span class="text-white">Lihat Semua Berita</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-news wow fadeInUp" data-wow-delay=".3s">
                        <div class="row align-items-center">
                            <div class="col-xl-6 order-xl-2">
                                <div class="latest-news-thumb mb-30">
                                    <a href="blog-details.html"><img src="{{ asset('uploads/berita/cT0ATpKqogrS0O6oLooauZQTi14sgwE4TWyO8vYa.jpg')}}" alt="img not found"></a>
                                    <div class="panel wow"></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="news-box mb-30">
                                    <div class="news-box-date">
                                        <div class="news-box-inner">
                                            <h3>18</h3>
                                            <span>Nov-2024</span>
                                        </div>
                                    </div>
                                    <div class="news-box-content">
                                        <h4 class="text-white">DANKORMAR BERIKAN PEMBEKALAN  PASIS DIKREG SESKOAL ANGKATAN  - 62 TAHUN 202...<br></h4>
                                        <h5 class="text-white"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">Dispen Kormar TNI Angkatan Laut (Jakarta). Komandan Korps Marinir (Dankormar) Mayor Jenderal TNI (Mar) Dr. Endi Supardi, S.E., M.M., M.Tr.Opsla., CHRMP., CRMP., memberikan pembekalan kepada Perwira Siswa (Pasis) Pendidikan Regul...</h5>
                                        <div class="blog-btn mt-40">
                                            <a href="detail-berita/dankormar-berikan-pembekalan-pasis-dikreg-seskoal-angkatan-62-tahun-2024.html" class="arm-btn text-white"><span class="circle-btn"><i class="fal fa-long-arrow-right"></i></span>Read
                                                More</a>
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
    <!-- latest-news-area-end -->

    <section class="element fix pt-130 pb-130 bg-white z-index-2">
        <div class="donation-overlay-img area-absolute parallax-bg" data-background="{{asset('frontend/assets/img/bg/bg-prestasi.jpg')}}">
        </div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="bd-section-title-wrapper wow fadeInUp" data-wow-delay=".3s">

                        <h3 class="bd-section-title mb-50 text-white">Berita Satuan
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news-btn mb-65 wow fadeInUp" data-wow-delay=".3s">
                        <a href="berita-prestasi.html" class="arrow-text-btn">
                            <i class="flaticon-042-arrow-right text-white"></i>
                            <span class="text-white">Lihat Semua Berita</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog blog-main-single-2 mb-30">
                            <div class="blog-thumb">
                                <a href="#">
                                    <img src="{{ asset('uploads/berita/dTMw2fIqF0HD2oM5Cm6V5jqTLI4lfAgxHH3BBFP6.jpg')}}" alt="img not found">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-wrapper">
                                    <div class="meta-list">
                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="flaticon-048-calendar"></i>
                                            </div>
                                            <div class="meta-text text-white">
                                                02-Nov-2024
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h4 class="blog-title text-white">
                                    <a href="detail-berita/atlet-renang-yonif-1-marinir-juarai-open-turnamen-kejuaraan-nasional-selam-open-water-fin-swimming-piala-panglima-tni-tahun-2024.html">
                                        Atlet Renang Yonif 1 Marinir Juarai Open Turnamen Kejuaraan Nasional Selam Open Water Fin Swimming Piala Panglima TNI Tahun 2024
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog blog-main-single-2 mb-30">
                            <div class="blog-thumb">
                                <a href="#">
                                    <img src="{{ asset('uploads/berita/dTMw2fIqF0HD2oM5Cm6V5jqTLI4lfAgxHH3BBFP6.jpg')}}" alt="img not found">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-wrapper">
                                    <div class="meta-list">
                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="flaticon-048-calendar"></i>
                                            </div>
                                            <div class="meta-text text-white">
                                                02-Nov-2024
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h4 class="blog-title text-white">
                                    <a href="detail-berita/atlet-renang-yonif-1-marinir-juarai-open-turnamen-kejuaraan-nasional-selam-open-water-fin-swimming-piala-panglima-tni-tahun-2024.html">
                                        Atlet Renang Yonif 1 Marinir Juarai Open Turnamen Kejuaraan Nasional Selam Open Water Fin Swimming Piala Panglima TNI Tahun 2024
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog blog-main-single-2 mb-30">
                            <div class="blog-thumb">
                                <a href="#">
                                    <img src="{{ asset('uploads/berita/dTMw2fIqF0HD2oM5Cm6V5jqTLI4lfAgxHH3BBFP6.jpg')}}" alt="img not found">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta-wrapper">
                                    <div class="meta-list">
                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="flaticon-048-calendar"></i>
                                            </div>
                                            <div class="meta-text text-white">
                                                02-Nov-2024
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h4 class="blog-title text-white">
                                    <a href="detail-berita/atlet-renang-yonif-1-marinir-juarai-open-turnamen-kejuaraan-nasional-selam-open-water-fin-swimming-piala-panglima-tni-tahun-2024.html">
                                        Atlet Renang Yonif 1 Marinir Juarai Open Turnamen Kejuaraan Nasional Selam Open Water Fin Swimming Piala Panglima TNI Tahun 2024
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service-area-start -->
    <section class="service-area service-style pt-130 pb-65" data-background="{{ asset('frontend/assets/img/bg/img-1.jpg')}}">
        <div class="overlay-img">
        </div>
        <div class="service-shape-wrapper">
            <div class="service-shape shape-1">
                <img src="{{ asset('frontend/assets/img/shape/service/img-1.png')}}" alt="img not found">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="services-title-wrapper mb-65 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bd-section-title-wrapper">
                            <div class="bd-section-subtitle">
                                TUGAS POKOK KORPS MARINIR
                                <i class="flaticon-001-bullet"></i>
                            </div>
                            <h3 class="text-white">" MENYELENGGARAKAN OPERASI AMPHIBI, OPERASI PERTAHANAN PANTAI, DAN
                                PENGAMANAN
                                PULAU TERLUAR STRATEGIS DALAM RANGKA OMP & OMSP SERTA OPERASI LAINNYA SESUAI KEBIJAKAN
                                PANGLIMA TNI "
                            </h3>
                        </div>
                        {{-- <div class="service-btn mt-65">
                            <div class="row wow fadeInUp" data-wow-delay=".3s">
                                <div class="col-lg-12">
                                    <div class="video-content">
                                        <div class="video-btn mb-95">
                                            <a href="https://www.youtube.com/watch?v=8QfTE6txCfY" class="popup-video">
                                                <span class="play-btn"><i class="fas fa-play"></i></span></a>
                                            <h3 class="text-warning mt-3">Video Profile Korps Marinir</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="service-slide-wrapper p-relative mb-65">
                        <div class="service-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-content">
                                        <div class="service-thumb">
                                            <a href="#"><img src="{{ asset('uploads/tugasartikel/ppDsfdtCskAo52E6smPz37yaPg77tSZzjDFRHEoG.jpg')}}" alt="img not found"></a>
                                        </div>
                                        <div class="service-info">
                                            <h4 class="service-title"><a href="#">OPERASI PERTAHANAN PANTAI</a>
                                            </h4>
                                            <a href="detail/operasi-pertahanan-pantai.html" class="arrow-text-btn">
                                                <i class="flaticon-042-arrow-right"></i>
                                                <span>Service Details</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-pagination circle-dot-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-area-end -->

    <!-- team area start  -->
    <section class="team-area pt-130 pb-130 p-relative fix bg-white z-index-2">
        <div class="team-overlay area-absolute"></div>
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-6">
                    <div class="bd-section-title-wrapper bd-section-title-wrapper-team-3 centered-title">
                        <div class="bd-section-subtitle">
                            PENPAS
                            <i class="flaticon-001-bullet"></i>
                        </div>
                        <h3 class="bd-section-title mb-50">PENERANGAN PASUKAN</h3>
                    </div>
                </div>
            </div>

            <div class="team-inner wow fadeInUp" data-wow-delay=".3s">
                <div class="swiper team-3-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card team-3">
                                <div class="team-thumb">
                                    <div class="team-thumb-bg"></div>
                                    <a href="{{ asset('uploads/penpas/9DU1KgUVosXn2jGAqtcKjdP3jMQgUcq65iG30Lgz.jpg')}}"><img src="{{ asset('uploads/penpas/9DU1KgUVosXn2jGAqtcKjdP3jMQgUcq65iG30Lgz.jpg')}}" alt="img not found"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-3-pagination circle-dot-pagination wow fadeInUp" data-wow-delay=".3s"></div>
            </div>

        </div>
    </section>
    <!-- team area end  -->

    <div class="brand-area  pt-70 pb-70 bg-white p-relative z-index-2">

        <!-- line animation - start -->
        <div class="deco_wrap">
            <div class="line_wrap body-line">
                <div class="line_item"></div>
            </div>
        </div>
        <!-- line animation - end -->

        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="brand-active slider-drag wow fadeInUp" data-wow-delay=".3s">
                        <div class="arm">
                            <a href="https://pasmar1.tnial.mil.id/" target="__blank"><img src="{{ asset('frontend/assets/img/brand/img-1.png')}}" alt="img not found">&nbsp;&nbsp;&nbsp;Pasmar</a>
                        </div>
                        <div class="arm">
                            <a href="https://pasmar1.tnial.mil.id/" target="__blank"><img src="{{ asset('frontend/assets/img/brand/img-1.png')}}" alt="img not found">&nbsp;&nbsp;&nbsp;Pasmar</a>
                        </div>
                        <div class="arm">
                            <a href="https://pasmar1.tnial.mil.id/" target="__blank"><img src="{{ asset('frontend/assets/img/brand/img-1.png')}}" alt="img not found">&nbsp;&nbsp;&nbsp;Pasmar</a>
                        </div>
                        <div class="arm">
                            <a href="https://pasmar1.tnial.mil.id/" target="__blank"><img src="{{ asset('frontend/assets/img/brand/img-1.png')}}" alt="img not found">&nbsp;&nbsp;&nbsp;Pasmar</a>
                        </div>
                        <div class="arm">
                            <a href="https://pasmar1.tnial.mil.id/" target="__blank"><img src="{{ asset('frontend/assets/img/brand/img-1.png')}}" alt="img not found">&nbsp;&nbsp;&nbsp;Pasmar</a>
                        </div>
                        <div class="arm">
                            <a href="https://pasmar1.tnial.mil.id/" target="__blank"><img src="{{ asset('frontend/assets/img/brand/img-1.png')}}" alt="img not found">&nbsp;&nbsp;&nbsp;Pasmar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
</main>
@endsection