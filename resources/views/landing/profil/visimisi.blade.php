@extends('layouts.app')
@section('title',"Beranda - Lanal Biak")

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
                        <h1 class="page-title mb-10">VISI / MISI KORPS MARINIR</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><a href="index-2.html"><span>Profil</span></a>
                                </li>
                                <li class="trail-item trail-end"><span>Visi / Misi Korps Marinir</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- about area start  -->
    <section class="about-area pt-40 pb-65 p-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-content-wrapper mb-65 wow fadeInRight" data-wow-delay=".3s">
                        <div class="about-tab-wrapper">
                           
                            <div class="about-tab-content">
                                <div class="tab-content" id="nav-tabContent">
                                    
                                        <!-- <div class="bd-section-title-wrapper">
                                            <h3 class="bd-section-title mb-40">Visi & Misi Korps Marinir</h3>
                                        </div> -->
                                    <div class="about-content">
                                        <p>
                                           <p><span class="example2" style="font-size: 18pt;"><strong>Visi</strong></span></p>
                                            <p>Mewujudkan Korps Marinir sebagai pasukan pendarat yang bermoral, profesional dan dicintai rakyat.</p>
                                            <p><span style="font-size: 18pt;"><strong>Misi</strong></span></p>
                                            <p style="text-align: justify;">Untuk mewujudkan visi Korps Marinir dan memberikan peluang untuk perubahan sesuai tuntutan lingkungan strategis serta atas dasar kewenangan yang dimiliki organisasi ditetapkan misi Korps Marinir sebagai berikut :</p>
                                            <p style="text-align: justify;">1. Terwujudnya organisasi Korps Marinir yang kokoh dan dinamis sebagai wadah kegiatan pembinaan dan pengembangan kesatuan untuk senantiasa siap melaksanakan tugas operasi terhadap setiap bentuk ancaman militer dan ancaman bersenjata dari luar dan dari dalam negeri terhadap kedaulatan, keutuhan wilayah dan keselamatan NKRI</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end  -->
</main>

@endsection