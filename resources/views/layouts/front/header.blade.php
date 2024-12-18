    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- header area start  -->
    <header>
        <div id="header-sticky" class="header-main header-main1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="header-main-content-wrapper">
                            <div class="header-main-left header-main-left-header1">
                                <div class="header-logo header1-logo">
                                    <a href="{{route('landing.index')}}" class="logo-white"><img src="{{ asset('uploads/media/kgv9bcEolQERgLtzc6hcdDAbyl633YMSIdypWpKQ.png')}}" alt="logo-img"></a>
                                </div>
                            </div>
                            <div class="header-main-right header-main-right-header1">
                                <div class="main-menu main-menu1 d-none d-xl-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="{{route('landing.index')}}">Beranda</a></li>
                                            <li class="menu-item-has-children"><a href="#">Profil</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('landing.profil.visimisi')}}">Visi & Misi</a>
                                                    </li>
                                                    <li><a href="{{route('landing.profil.strukturorganisasi')}}">Struktur
                                                            Organisasi</a>
                                                    </li>
                                                    <li><a href="{{route('landing.profil.pimpinan')}}">Pimpinan</a></li>
                                                    </li>
                                                    <li><a href="{{route('landing.profil.pju')}}">Pejabat Utama</a></li>
                                                    <li><a href="{{route('landing.profil.dharma')}}">Dharma Bhakti</a></li>
                                                    <li><a href="{{route('landing.profil.prajurit')}}">Prajurit Berprestasi</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Berita</a>
                                                <ul class="sub-menu">
                                                    <li><a href="berita-profesional.html">Profesional</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"><a href="#">Sejarah</a>
                                                <ul class="sub-menu">
                                                    <li><a href="sejarah-korps.html">Sejarah Satuan</a>
                                                    </li>
                                                    <li><a href="pertempuran.html">Pertempuran</a>
                                                    </li>
                                                    <li><a href="warga-kehormatan.html">Warga
                                                            Kehormatan</a></li>
                                                    <li><a href="pahlawan.html">Pahlawan</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Galeri</a>
                                                <ul class="sub-menu">
                                                    <li><a href="galeri-video.html">Video</a></li>
                                                    <li><a href="galeri-picture.html">Foto</a></li>
                                                    <li><a href="galeri-majalah.html">Majalah</a></li>
                                                    <li><a href="galeri-penpas.html">Penpas</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"><a href="#">Informasi</a>
                                                <ul class="sub-menu">
                                                    <li><a href="pengumuman-barangjasa.html">Barang & Jasa</a>
                                                    </li>
                                                    <li><a href="pengumuman-sekolah.html">Kursus/Pendidikan</a>
                                                    </li>
                                                    <li><a href="pengumuman-lain.html">Lain-lain</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Zona Integritas</a>
                                                <ul class="sub-menu">
                                                    <li><a href="pengaduan-kormar.html">Pengaduan</a></li>
                                                    <li><a href="https://www.lapor.go.id/instansi/kementerian-pendayagunaan-aparatur-negara-dan-reformasi-birokrasi" target="_blank">Pengaduan Kemenpan RB</a></li>
                                                    <li><a href="survey.html">Kuisioner</a></li>
                                                </ul>
                                            </li>

                                        </ul>

                                    </nav>

                                </div>

                            </div>
                            <div class="menu-bar">
                                <a class="offset-btn d-none d-xl-inline-block" href="javascript:void(0)">
                                    <div class="dot-icon">
                                        <img src="{{ asset('frontend/assets/img/icons/side-toggle.png')}}" alt="img not found">
                                    </div>
                                </a>
                                <a class="side-toggle d-xl-none" href="javascript:void(0)">
                                    <div class="dot-icon">
                                        <img src="{{ asset('frontend/assets/img/icons/side-toggle.png')}}" alt="img not found">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- offset-content start  -->
    <aside class="offset-content-wrapper offset-content-wrapper-army p-relative">
        <button class="offset-content-close">
            <i class="fal fa-times"></i>
        </button>
        <div class="offset-content offset-menu-content offset-content-army">
            <div class="offset-info">
                <div class="offset-logo mb-65">
                    <a href="index-2.html"><img src="{{ asset('frontend/assets/img/logo/logo.png')}}" alt="img not found"></a>
                </div>
                <div class="offset-info-widget">
                    <h4 class="offset-info-heading">Tentang Kami</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="offset-thumb">
                <img src="{{ asset('frontend/assets/img/bg/offset-bg.jpg')}}" alt="img not found">
            </div>
        </div>
    </aside>
    <!-- offset-content end  -->

    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info side-info-army">
            <div class="side-info-content">
                <div class="offset-widget offset-header mb-40">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <div class="offset-logo">
                                <a href="index-2.html">
                                    <img src="{{ asset('frontend/assets/img/logo/logo.png')}}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <button class="side-info-close">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-widget offset_searchbar mb-30">
                    <form action="#" method="GET" class="filter-search-input">
                        <input type="text" name="search" placeholder="Search keyword">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </form>
                </div>
                <div class="offset-widget offset-support mb-30">
                    <div class="meta-item header-meta-item">
                        <a href="tel:+91036259003">
                            <div class="meta-item-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </a>
                        <div class="meta-item-content">
                            <div class="meta-title"><span>Emargency</span> Call</div>
                            <p><a href="tel:+91036259003">+91 036 259 003</a></p>
                        </div>
                    </div>
                </div>
                <div class="offset-widget offset-social mb-0">
                    <div class="social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/dispenkormar?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>