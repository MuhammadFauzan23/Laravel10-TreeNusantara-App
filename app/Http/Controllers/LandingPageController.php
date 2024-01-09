<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\IklanModel;
use App\Models\KategoriModel;
use App\Models\MateriModel;
use App\Models\PlaylistModel;
use App\Models\SlideModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function view_home()
    {
        $data = [
            'title' => 'Home',
            'data_artikel' => ArtikelModel::where('is_active', 1)->get(),
            'data_kategori' => KategoriModel::all(),
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('konten-berita.v_home', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function view_about()
    {
        $data = [
            'title' => 'About',
            'data_kategori' => KategoriModel::all(),
            'data_iklan' => IklanModel::where('status', 1)->get(),
            'data_banner' => SlideModel::all(),
            'data_playlist' => PlaylistModel::all(),

        ];
        return view('konten-berita.v_about', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function view_service()
    {
        $data = [
            'title' => 'Service',
            'data_kategori' => KategoriModel::all(),
            'data_playlist' => PlaylistModel::all(),

        ];
        return view('konten-berita.v_service', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function view_teams()
    {
        $data = [
            'title' => 'Teams',
            'data_kategori' => KategoriModel::all(),
            'data_playlist' => PlaylistModel::all(),
            'data_users' => User::where('status', 1)->get(),
        ];
        return view('konten-berita.v_team', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function view_contact()
    {
        $data = [
            'title' => 'Contact',
            'data_kategori' => KategoriModel::all(),
            'data_playlist' => PlaylistModel::all(),

        ];
        return view('konten-berita.v_contact', $data);
        return view('layout.navbar', $data);
    }

    // +-----------------------------------------------------+
    // |   Controller View Page sesuai atikel yang dipilih   |
    // +-----------------------------------------------------+

    public function view_artikel_perkategori($kategoriID)
    {
        $data_limit = DB::table('tbl_artikel')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_artikel.kategori_id')
            ->where('tbl_artikel.kategori_id', $kategoriID)
            ->where('tbl_artikel.is_active', 1)
            ->select('tbl_artikel.*', 'tbl_kategori.*')
            ->limit(1)
            ->get();
        // $data_no_limit1 = DB::table('tbl_kategori')->where('id', $kategoriID)->get();
        $data_no_limit2 = ArtikelModel::where('kategori_id', $kategoriID)->where('is_active', 1)->get();
        $data = [
            'title' => 'Home',
            // 'data_artikel_no_limit1' => $data_no_limit1,
            'data_artikel_no_limit2' => $data_no_limit2,
            'data_artikel_limit' => $data_limit,
            'data_kategori' => KategoriModel::all(),
            'data_playlist' => PlaylistModel::all(),
        ];
        // dd($data_no_limit2);
        return view('konten-berita.v_artikel_per_kategori', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function view_artikel_detail($artikelID)
    {
        $data_artikel_by_id = DB::table('tbl_artikel')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_artikel.kategori_id')
            ->join('tbl_users', 'tbl_users.id', '=', 'tbl_artikel.user_id')
            ->where('tbl_artikel.id', $artikelID)
            ->select('tbl_artikel.*', 'tbl_kategori.*', 'tbl_users.*')->get();
        $postingan_terbaru = ArtikelModel::where('is_active', 1)->orderBy('created_at', 'DESC')->limit('6')->get();

        $data = [
            'title' =>  'Detail Artikel',
            'data_artikel' => $data_artikel_by_id,
            'data_kategori' => KategoriModel::all(),
            'data_iklan' => IklanModel::where('status', 1)->get(),
            'data_banner' => SlideModel::where('status', 1)->get(),
            'post_terbaru' => $postingan_terbaru,
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('konten-berita.v_artikel_detail', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function view_artikel_detail_perkategori($kategoriID, $artikelID)
    {
        $postingan_related = ArtikelModel::where('kategori_id', $kategoriID)->where('is_active', 1)->orderBy('created_at', 'DESC')->limit('6')->get();
        $data_artikel = DB::table('tbl_kategori')
            ->join('tbl_artikel', 'tbl_kategori.id', 'tbl_artikel.kategori_id')
            ->join('tbl_users', 'tbl_users.id', '=', 'tbl_artikel.user_id')
            ->where('tbl_artikel.id', $artikelID)
            ->select('tbl_artikel.*', 'tbl_kategori.*', 'tbl_users.*')
            ->get();
        $data = [
            'title' =>  'Detail artikel',
            'data_artikel' => $data_artikel,
            'data_kategori' => KategoriModel::all(),
            'data_iklan' => IklanModel::where('status', 1)->get(),
            'data_banner' => SlideModel::where('status', 1)->get(),
            'post_related' => $postingan_related,
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('konten-berita.v_artikel_detail_perkategori', $data);
        return view('layout.navbar', $data);
    }

    // +-------------------------------------------------------+
    // |   Controller View Page sesuai Playlist yang dipilih   |
    // +-------------------------------------------------------+

    public function view_home_materi_perkategori($playlistID)
    {
        $data_limit = DB::table('tbl_materi')
            ->join('tbl_playlist', 'tbl_playlist.id', '=', 'tbl_materi.playlist_id')
            ->where('tbl_materi.playlist_id', $playlistID)
            ->select('tbl_materi.*', 'tbl_playlist.*')
            ->limit(1)
            ->get();
        // $data_no_limit1 = DB::table('tbl_playlist')->where('id', $playlistID)->get();
        $data_no_limit2 = MateriModel::where('playlist_id', $playlistID)->where('is_active', 1)->get();
        $data = [
            'title' => 'Home',
            // 'data_materi_no_limit1' => $data_no_limit1,
            'data_materi_no_limit2' => $data_no_limit2,
            'data_materi_limit' => $data_limit,
            'data_kategori' => KategoriModel::all(),
            'data_playlist' => PlaylistModel::all(),
        ];
        // dd($data_no_limit2);
        return view('konten-berita.v_home_materi', $data);
        return view('layout.navbar', $data);
    }
    // ---------------------------------------------------------------------------------------------

    public function view_materi_detail_perkategori($playlistID, $materiID)
    {
        $postingan_related = MateriModel::where('playlist_id', $playlistID)->where('is_active', 1)->orderBy('created_at', 'DESC')->limit('6')->get();
        $data_materi = DB::table('tbl_playlist')
            ->join('tbl_materi', 'tbl_playlist.id', 'tbl_materi.playlist_id')
            ->join('tbl_users', 'tbl_users.id', 'tbl_materi.user_id')
            ->where('tbl_materi.id', $materiID)
            ->where('tbl_materi.is_active', 1)
            ->select('tbl_materi.*', 'tbl_playlist.*', 'tbl_users.*')
            ->get();
        $data = [
            'title' =>  'Detail artikel',
            'data_materi' => $data_materi,
            'data_kategori' => KategoriModel::all(),
            'data_iklan' => IklanModel::where('status', 1)->get(),
            'data_banner' => SlideModel::where('status', 1)->get(),
            'post_related' => $postingan_related,
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('konten-berita.v_materi_detail_perkategori', $data);
        return view('layout.navbar', $data);
    }
}
