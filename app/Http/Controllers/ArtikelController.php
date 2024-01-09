<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class ArtikelController extends Controller
{
    public function view_list_artikel()
    {
        $data = [
            'title' => 'Artikel',
            'data_artikel' => ArtikelModel::all(),
            'data_kategori' => KategoriModel::all(),

        ];
        return view('master-data.list_artikel', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function tambah_data(Request $request)
    {
        ArtikelModel::create([
            'judul' => $request->judul,
            'slug' => $request->judul,
            'body' => $request->body,
            'kategori_id' => $request->kategori_id,
            'user_id' => Auth::id(),
            'gambar_artikel' => $request->file('gambar_artikel')->store('Artikel'),
            'is_active' => $request->is_active,
            'views' => 0,
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_artikel');
    }
    // ---------------------------------------------------------------------------------------------
    public function tampil_edit_data($id)
    {
        $data = [
            'title' => 'Artikel',
            'data_artikel' => ArtikelModel::where('id', $id)->get(),
            'data_kategori' => KategoriModel::all(),
        ];
        return view('master-data.v_tampilan_edit_artikel', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $artikelModel, $id)
    {
        if (empty($artikelModel->file('gambar_artikel'))) {
            ArtikelModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul' => $artikelModel->judul,
                    'slug' => $artikelModel->judul,
                    'body' => $artikelModel->body,
                    'kategori_id' => $artikelModel->kategori_id,
                    'user_id' => Auth::id(),
                    'is_active' => $artikelModel->is_active,
                    'views' => 0,
                ]);
        } else {
            $data_id = ArtikelModel::find($id);
            FacadesStorage::delete([$data_id->gambar_artikel]);
            ArtikelModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul' => $artikelModel->judul,
                    'slug' => $artikelModel->judul,
                    'body' => $artikelModel->body,
                    'kategori_id' => $artikelModel->kategori_id,
                    'user_id' => Auth::id(),
                    'gambar_artikel' => $artikelModel->file('gambar_artikel')->store('Artikel'),
                    'is_active' => $artikelModel->is_active,
                    'views' => 0,
                ]);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_artikel');
    }
    // ---------------------------------------------------------------------------------------------
    public function hapus_data($id)
    {
        $data_id = ArtikelModel::find($id);
        FacadesStorage::delete([$data_id->gambar_artikel]);
        ArtikelModel::where('id', $id)->where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_artikel');
    }
}
