<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Public Routes
Route::get('/', 'App\Http\Controllers\LandingPageController@index')->name('landing.index');

Route::get('/profil/visi-misi', 'App\Http\Controllers\ProfilController@visimisi')->name('landing.profil.visimisi');
Route::get('/profil/struktur-organisasi', 'App\Http\Controllers\ProfilController@strukturOrganisasi')->name('landing.profil.strukturorganisasi');
Route::get('/profil/pimpinan', 'App\Http\Controllers\ProfilController@pimpinan')->name('landing.profil.pimpinan');
Route::get('/profil/pejabat-utama', 'App\Http\Controllers\ProfilController@pju')->name('landing.profil.pju');
Route::get('/profil/dharma-bhakti', 'App\Http\Controllers\ProfilController@dharma')->name('landing.profil.dharma');
Route::get('/profil/prajurit', 'App\Http\Controllers\ProfilController@prajurit')->name('landing.profil.prajurit');

//Admin Routes
Route::middleware(['auth.role:admin'])->group(function () {
    //Put all admin routes with prefix /admin
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.index');

    Route::get('/admin/master/user/', 'App\Http\Controllers\Admin\UserController@showAll')->name("admin.user.showAll");
    Route::post('/admin/user/save', 'App\Http\Controllers\Admin\UserController@save')->name("admin.user.save");
    Route::patch('admin/user/save/update/{id}', 'App\Http\Controllers\Admin\UserController@saveUpdate')->name("admin.user.save.update");
    Route::delete('admin/user/remove/{id}', 'App\Http\Controllers\Admin\UserController@remove')->name("admin.user.remove");

    //beranda
    Route::resource('/admin/beranda/home-sliders', 'App\Http\Controllers\Admin\Beranda\HomeSliderController')->names('admin.beranda.home-sliders');
    Route::resource('/admin/beranda/taklimat-awal', 'App\Http\Controllers\Admin\Beranda\TaklimatAwalController')->names('admin.beranda.taklimat-awal');
    Route::resource('/admin/beranda/banner', 'App\Http\Controllers\Admin\Beranda\GreetingBannerController')->names('admin.beranda.banner');
    Route::resource('/admin/beranda/tugas-pokok', 'App\Http\Controllers\Admin\Beranda\TugasPokokController')->names('admin.beranda.tugas-pokok');
    Route::resource('/admin/beranda/instansi', 'App\Http\Controllers\Admin\Beranda\InstansiTerkaitController')->names('admin.beranda.instansi');

    //footer
    Route::resource('/admin/footer/motto', 'App\Http\Controllers\Admin\Footer\MottoController')->names('admin.footer.motto');
    Route::resource('/admin/footer/alamat-kontak', 'App\Http\Controllers\Admin\Footer\AlamatKontakController')->names('admin.footer.alamatkontak');
    Route::resource('/admin/footer/website-terkait', 'App\Http\Controllers\Admin\Footer\WebsiteTerkaitController')->names('admin.footer.websiteterkait');
    Route::resource('/admin/footer/sosial-media', 'App\Http\Controllers\Admin\Footer\SosialMediaController')->names('admin.footer.sosialmedia');

    //header
    Route::resource('/admin/header/logo', 'App\Http\Controllers\Admin\Header\LogoController')->names('admin.header.logo');
    Route::resource('/admin/header/tentang-kami', 'App\Http\Controllers\Admin\Header\AboutUsController')->names('admin.header.aboutus');

    //profil
    Route::resource('/admin/profil/visi-misi', 'App\Http\Controllers\Admin\Profil\VisiMisiController')->names('admin.profil.visimisi');
    Route::resource('/admin/profil/struktur-organisasi', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController')->names('admin.profil.struktur');
    Route::resource('/admin/profil/pimpinan', 'App\Http\Controllers\Admin\Profil\PimpinanController')->names('admin.profil.pimpinan');
    Route::resource('/admin/profil/pejabat-utama', 'App\Http\Controllers\Admin\Profil\PejabatUtamaController')->names('admin.profil.pejabat');
    Route::resource('/admin/profil/dharma-bhakti', 'App\Http\Controllers\Admin\Profil\DharmaBhaktiController')->names('admin.profil.dharmabhakti');
    Route::resource('/admin/profil/prajurit', 'App\Http\Controllers\Admin\Profil\PrajuritController')->names('admin.profil.prajurit');
});

Route::get('locale/{locale}','App\Http\Controllers\LanguageController@switchLang')->name('locale');


Auth::routes();
