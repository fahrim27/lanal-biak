@extends('layouts.app')
@section('title',"Dharma Bhakti - Lanal Biak")

@section('content')

	<main>
        <!-- page title area start  -->
        <section class="page-title-area" data-background="{{ asset('frontend/assets/img/bg/page-title-bg.jpg')}}">
            <div class="page-title-shape">
                <img class="shape-cube" src="{{ asset('frontend/assets/img/shape/cube-shape.png')}}" alt="img not found">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="page-title-wrapper">
                            <h1 class="page-title mb-10">DHARMA BHAKTI KORPS MARINIR</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="#"><span>PROFIL</span></a>
                                    </li>
                                    <li class="trail-item trail-end"><span>DHARMA BHAKTI kORPS MARINIR</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <!-- services area start  -->
        <section class="services-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single service-default mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-thumb">
                            <a href="#"><img src="{{ asset('uploads/pertempuran/2w8VAUKnhSICCpXYY7dCiLzO4NvS3x2B93YC3Ws2.jpg')}}"
                                            alt="img not found"></a>
                            </div>
                            <div class="service-info">
                                <h4 class="service-title"><a href="#">OPERASI MERAH PUTIH</a></h4>
                                <a href="#" class="arrow-text-btn">
                                    <i class="flaticon-042-arrow-right"></i>
                                    <span>Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single service-default mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-thumb">
                            <a href="#"><img src="{{ asset('uploads/pertempuran/2w8VAUKnhSICCpXYY7dCiLzO4NvS3x2B93YC3Ws2.jpg')}}"
                                            alt="img not found"></a>
                            </div>
                            <div class="service-info">
                                <h4 class="service-title"><a href="#">OPERASI MERAH PUTIH</a></h4>
                                <a href="#" class="arrow-text-btn">
                                    <i class="flaticon-042-arrow-right"></i>
                                    <span>Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single service-default mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-thumb">
                            <a href="#"><img src="{{ asset('uploads/pertempuran/2w8VAUKnhSICCpXYY7dCiLzO4NvS3x2B93YC3Ws2.jpg')}}"
                                            alt="img not found"></a>
                            </div>
                            <div class="service-info">
                                <h4 class="service-title"><a href="#">OPERASI MERAH PUTIH</a></h4>
                                <a href="#" class="arrow-text-btn">
                                    <i class="flaticon-042-arrow-right"></i>
                                    <span>Selengkapnya</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services area end  -->
    </main>

@endsection