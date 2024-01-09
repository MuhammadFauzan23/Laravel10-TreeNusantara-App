<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Landing Page
route::get('/', [LandingPageController::class, 'view_home'])->name('login');
route::get('/view_about', [LandingPageController::class, 'view_about']);
route::get('/view_service', [LandingPageController::class, 'view_service']);
route::get('/view_teams', [LandingPageController::class, 'view_teams']);
route::get('/view_contact', [LandingPageController::class, 'view_contact']);
// ------------------------------------------------------------------------------------------------------
route::get('/view_artikel_detail/{id}', [LandingPageController::class, 'view_artikel_detail']);
route::get('/view_artikel_per_kategori/{id}', [LandingPageController::class, 'view_artikel_perkategori']);
route::get('/view_artikel_detail_perkategori/{kategori_id}/{artikel_id}', [LandingPageController::class, 'view_artikel_detail_perkategori']);
route::get('/view_materi_per_kategori/{id}', [LandingPageController::class, 'view_home_materi_perkategori']);
route::get('/view_materi_detail_perkategori/{playlist_id}/{materi_id}', [LandingPageController::class, 'view_materi_detail_perkategori']);

// Routes Search
Route::get('/search', [UserController::class, 'search'])->name('search');

// Routes Login
route::get('/login_page', [AuthController::class, 'view_login']);
route::post('/proses_login', [AuthController::class, 'proses_login']);
route::get('/log_out', [AuthController::class, 'logout']);

// Routes bbrp CRUD dengan batasan akses sbg Administrator
Route::middleware(['auth', 'hakAkses:administrator'])->group(function () {
    // CRUD Kategori
    route::get('/list_kategori', [KategoriController::class, 'view_list_jenis_barang']);
    route::post('/list_kategori/proses_tambah', [KategoriController::class, 'tambah_data']);
    route::post('/list_kategori/proses_edit/{id}', [KategoriController::class, 'edit_data']);
    route::get('/list_kategori/proses_hapus/{id}', [KategoriController::class, 'hapus_data']);

    // CRUD Artikel
    route::get('/list_artikel', [ArtikelController::class, 'view_list_artikel']);
    route::post('/list_artikel/proses_tambah', [ArtikelController::class, 'tambah_data']);
    route::get('/list_artikel/tampilan_edit/{id}', [ArtikelController::class, 'tampil_edit_data']);
    route::post('/list_artikel/proses_edit/{id}', [ArtikelController::class, 'edit_data']);
    route::get('/list_artikel/proses_hapus/{id}', [ArtikelController::class, 'hapus_data']);

    // CRUD Playlist
    route::get('/list_playlist', [PlaylistController::class, 'view_list_playlist']);
    route::post('/list_playlist/proses_tambah', [PlaylistController::class, 'tambah_data']);
    route::post('/list_playlist/proses_edit/{id}', [PlaylistController::class, 'edit_data']);
    route::get('/list_playlist/proses_hapus/{id}', [PlaylistController::class, 'hapus_data']);

    // CRUD materi
    route::get('/list_materi', [MateriController::class, 'view_list_materi']);
    route::post('/list_materi/proses_tambah', [MateriController::class, 'tambah_data']);
    route::get('/list_materi/tampilan_edit/{id}', [MateriController::class, 'tampil_edit_data']);
    route::post('/list_materi/proses_edit/{id}', [MateriController::class, 'edit_data']);
    route::get('/list_materi/proses_hapus/{id}', [MateriController::class, 'hapus_data']);

    // CRUD materi
    route::get('/list_slide_banner', [SlideController::class, 'view_list_slide_banner']);
    route::post('/list_slide_banner/proses_tambah', [SlideController::class, 'tambah_data']);
    route::post('/list_slide_banner/proses_edit/{id}', [SlideController::class, 'edit_data']);
    route::get('/list_slide_banner/proses_hapus/{id}', [SlideController::class, 'hapus_data']);

    // CRUD Iklan
    route::get('/list_iklan', [IklanController::class, 'view_list_iklan']);
    route::post('/list_iklan/proses_tambah', [IklanController::class, 'tambah_data']);
    route::post('/list_iklan/proses_edit/{id}', [IklanController::class, 'edit_data']);
    route::get('/list_iklan/proses_hapus/{id}', [IklanController::class, 'hapus_data']);

    // CRUD Users
    route::get('/list_users', [UserController::class, 'view_list_users']);
    route::post('/list_users/proses_tambah', [UserController::class, 'tambah_data']);
    route::post('/list_users/proses_edit/{id}', [UserController::class, 'edit_data']);
    route::get('/list_users/proses_hapus/{id}', [UserController::class, 'hapus_data']);
});

// Routes dashboard
Route::middleware(['auth', 'hakAkses:administrator,penulis'])->group(function () {
    route::get('/home', [AuthController::class, 'dashboard']);

    // Setting User
    route::get('/user_setting', [AuthController::class, 'dataUser']);
    route::post('/user_setting/proses_edit/{id}', [AuthController::class, 'edit_data']);
});
