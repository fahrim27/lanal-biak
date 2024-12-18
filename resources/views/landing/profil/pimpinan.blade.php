@extends('layouts.app')
@section('title',"Pimpinan - Lanal Biak")

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
                            <h1 class="page-title mb-10">PIMPINAN KORPS MARINIR</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="#"><span>Profil</span></a>
                                    </li>
                                    <li class="trail-item trail-end"><span>PIMPINAN KORPS MARINIR</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <!-- team area start  -->
        <div class="team-area pt-130 pb-100 p-relative bg-white z-index-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="team-card team-default mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="team-thumb">
                                <a href="#"><img src="{{ asset('uploads/pimpinan/MYvGdu2zNEPWf7iwNYMIZYJIroddA1AhcjryYCVX.jpg')}}"
                                        alt="img not found"></a>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="member-name"><a href="#">Profile</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end  -->
    </main>

@endsection