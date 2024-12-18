@extends('layouts.app')
@section('title',"Struktur Organisasi - Lanal Biak")

@section('content')

	<main>
        <section class="page-title-area" data-background="{{ asset('frontend/assets/img/bg/page-title-bg.jpg')}}">
            <div class="page-title-shape">
                <img class="shape-cube" src="{{ asset('frontend/assets/img/shape/cube-shape.png')}}" alt="img not found">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="page-title-wrapper">
                            <h1 class="page-title mb-10">STRUKTUR ORGANISASI</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="#"><span>Profil</span></a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Struktu Organisasi</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->
        <!-- element area start  -->
        <section class="element fix pt-130 pb-130 bg-white z-index-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-section-title-wrapper">
                            <h3 class="bd-section-title mb-65 text-center">
                                Struktur Organisasi
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="blog-thumb">
                            <div class="blog-tags">
                                <img src="{{ asset('uploads/visimisi/Ml96k8OIkRflySR1tTQCO7BXOw2CvsB7EYzf1EDI.jpg')}}" alt="img not found">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- element area end  -->
    </main>

@endsection