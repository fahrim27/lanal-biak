{{--  BEGIN: Main Menu --}}

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="{{ route('admin.index') }}">
                        <div class="">
                            <img style="max-width: 55px" src="">
                        </div>
                        <b style="font-size: 20px" class="mb-0 pl-1 text-center">Lanal Biak Admin</b>
                    </a></li>
                {{-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li> --}}
            </ul>
        </div><br>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><span>Main</span>
                </li>
                <li class=" nav-item {{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin.index')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                
                <li class="menu-item {{ request()->is('admin/master/*') ? 'open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon feather icon-settings"></i>
                        <div data-i18n="Dashboards">Master</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/master/user') ? 'active' : '' }}">
                          <a href="{{route('admin.user.showAll')}}" class="menu-link">
                            <div data-i18n="User"><i class="menu-icon feather icon-circle"></i> User</div>
                          </a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Menus</span>
                </li>
                <li class="menu-item {{ request()->is('admin/header/*') ? 'open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon feather icon-chevrons-up"></i>
                        <div data-i18n="Header">Header</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/header/logo') || request()->is('admin/header/logo/*') ? 'active' : '' }}">
                          <a href="{{route('admin.header.logo.index')}}" class="menu-link">
                            <div data-i18n="Logo"><i class="menu-icon feather icon-circle"></i> Logo</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/header/tentang-kami') || request()->is('admin/header/tentang-kami/*') ? 'active' : '' }}">
                          <a href="{{route('admin.header.aboutus.index')}}" class="menu-link">
                            <div data-i18n="About"><i class="menu-icon feather icon-circle"></i> Tentang Kami</div>
                          </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item {{ request()->is('admin/beranda/*') ? 'open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon feather icon-layout"></i>
                        <div data-i18n="Beranda">Beranda</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/beranda/home-sliders') || request()->is('admin/beranda/home-sliders/*') ? 'active' : '' }}">
                          <a href="{{route('admin.beranda.home-sliders.index')}}" class="menu-link">
                            <div data-i18n="Sliders"><i class="menu-icon feather icon-circle"></i> Sliders</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/beranda/taklimat-awal') || request()->is('admin/beranda/taklimat-awal/*') ? 'active' : '' }}">
                          <a href="{{route('admin.beranda.taklimat-awal.index')}}" class="menu-link">
                            <div data-i18n="Taklimat"><i class="menu-icon feather icon-circle"></i> Taklimat Komandan</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/beranda/banner') || request()->is('admin/beranda/banner/*') ? 'active' : '' }}">
                          <a href="{{route('admin.beranda.banner.index')}}" class="menu-link">
                            <div data-i18n="Banner"><i class="menu-icon feather icon-circle"></i> Banner Peringatan</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/beranda/tugas-pokok') || request()->is('admin/beranda/tugas-pokok/*') ? 'active' : '' }}">
                          <a href="{{route('admin.beranda.tugas-pokok.index')}}" class="menu-link">
                            <div data-i18n="Tugas"><i class="menu-icon feather icon-circle"></i> Tugas Pokok</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/beranda/instansi') || request()->is('admin/beranda/instansi/*') ? 'active' : '' }}">
                          <a href="{{route('admin.beranda.instansi.index')}}" class="menu-link">
                            <div data-i18n="Instansi"><i class="menu-icon feather icon-circle"></i> Instansi Terkait</div>
                          </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item {{ request()->is('admin/footer/*') ? 'open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon feather icon-chevrons-down"></i>
                        <div data-i18n="Footer">Footer</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/footer/motto') || request()->is('admin/footer/motto/*') ? 'active' : '' }}">
                          <a href="{{route('admin.footer.motto.index')}}" class="menu-link">
                            <div data-i18n="Motto"><i class="menu-icon feather icon-circle"></i> Motto Satuan</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/footer/alamat-kontak') || request()->is('admin/footer/alamat-kontak/*') ? 'active' : '' }}">
                          <a href="{{route('admin.footer.alamatkontak.index')}}" class="menu-link">
                            <div data-i18n="Alamat"><i class="menu-icon feather icon-circle"></i> Alamat & Kontak</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/footer/website-terkait') || request()->is('admin/footer/website-terkait/*') ? 'active' : '' }}">
                          <a href="{{route('admin.footer.websiteterkait.index')}}" class="menu-link">
                            <div data-i18n="Website"><i class="menu-icon feather icon-circle"></i> Website Terkait</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/footer/sosial-media') || request()->is('admin/footer/sosial-media/*') ? 'active' : '' }}">
                          <a href="{{route('admin.footer.sosialmedia.index')}}" class="menu-link">
                            <div data-i18n="Sosial"><i class="menu-icon feather icon-circle"></i> Sosial Media</div>
                          </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item {{ request()->is('admin/profil/*') ? 'open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon feather icon-user"></i>
                        <div data-i18n="Profil">Profil</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/profil/visi-misi') || request()->is('admin/profil/visi-misi/*') ? 'active' : '' }}">
                          <a href="{{route('admin.profil.visimisi.index')}}" class="menu-link">
                            <div data-i18n="Visi"><i class="menu-icon feather icon-circle"></i> Visi Misi</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/profil/struktur-organisasi') || request()->is('admin/profil/struktur-organisasi/*') ? 'active' : '' }}">
                          <a href="{{route('admin.profil.struktur.index')}}" class="menu-link">
                            <div data-i18n="Struktur"><i class="menu-icon feather icon-circle"></i> Struktur Organisasi</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/profil/pimpinan') || request()->is('admin/profil/pimpinan/*') ? 'active' : '' }}">
                          <a href="{{route('admin.profil.pimpinan.index')}}" class="menu-link">
                            <div data-i18n="Pimpinan"><i class="menu-icon feather icon-circle"></i> Pimpinan</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/profil/pejabat-utama') || request()->is('admin/profil/pejabat-utama/*') ? 'active' : '' }}">
                          <a href="{{route('admin.profil.pejabat.index')}}" class="menu-link">
                            <div data-i18n="Pejabat"><i class="menu-icon feather icon-circle"></i> Pejabat Utama</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/profil/dharma-bhakti') || request()->is('admin/profil/dharma-bhakti/*') ? 'active' : '' }}">
                          <a href="{{route('admin.profil.dharmabhakti.index')}}" class="menu-link">
                            <div data-i18n="Dharma"><i class="menu-icon feather icon-circle"></i> Dharma Bhakti</div>
                          </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/profil/prajurit') || request()->is('admin/profil/prajurit/*') ? 'active' : '' }}">
                          <a href="{{route('admin.profil.prajurit.index')}}" class="menu-link">
                            <div data-i18n="Prajurit"><i class="menu-icon feather icon-circle"></i> Prajurit</div>
                          </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu
