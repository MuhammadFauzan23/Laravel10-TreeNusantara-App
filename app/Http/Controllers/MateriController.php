<?php

namespace App\Http\Controllers;

use App\Models\MateriModel;
use App\Models\PlaylistModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function view_list_materi()
    {
        $data = [
            'title' => 'Materi',
            'data_materi' => MateriModel::all(),
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('master-data.list_materi', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function tambah_data(Request $request)
    {
        MateriModel::create([
            'judul_materi' => $request->judul_materi,
            'slug' => $request->judul_materi,
            'deskripsi_materi' => $request->deskripsi,
            'link' => $request->link,
            'playlist_id' => $request->jenis_playlist,
            'user_id' => Auth::id(),
            'gambar_materi' => $request->file('gambar_materi')->store('Materi'),
            'is_active' => $request->is_active,
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_materi');
    }
    // ---------------------------------------------------------------------------------------------
    public function tampil_edit_data($id)
    {
        $data = [
            'title' => 'Materi',
            'data_materi' => MateriModel::where('id', $id)->get(),
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('master-data.v_tampilan_edit_materi', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $materi, $id)
    {
        if (empty($materi->file('gambar_materi'))) {
            MateriModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul_materi' => $materi->judul_materi,
                    'slug' => $materi->judul_materi,
                    'deskripsi_materi' => $materi->deskripsi,
                    'user_id' => Auth::id(),
                    'link' => $materi->link,
                    'playlist_id' => $materi->jenis_playlist,
                    'is_active' => $materi->is_active,
                ]);
        } else {
            $data_id = MateriModel::find($id);
            Storage::delete([$data_id->gambar_materi]);
            MateriModel::where('id', $id)
                ->update([
                    'judul_materi' => $materi->judul_materi,
                    'slug' => $materi->judul_materi,
                    'deskripsi_materi' => $materi->deskripsi,
                    'link' => $materi->link,
                    'playlist_id' => $materi->jenis_playlist,
                    'user_id' => Auth::id(),
                    'gambar_materi' => $materi->file('gambar_materi')->store('Materi'),
                    'is_active' => $materi->is_active,
                ]);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_materi');
    }
    // ---------------------------------------------------------------------------------------------
    public function hapus_data($id)
    {
        $data_id = MateriModel::find($id);
        Storage::delete([$data_id->gambar_materi]);
        MateriModel::where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_materi');
    }
}
