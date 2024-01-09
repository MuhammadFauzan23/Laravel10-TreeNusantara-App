<?php

namespace App\Http\Controllers;

use App\Models\PlaylistModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class PlaylistController extends Controller
{
    public function view_list_playlist()
    {
        $data = [
            'title' => 'Playlist',
            'data_playlist' => PlaylistModel::all(),
        ];
        return view('master-data.list_playlist', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function tambah_data(Request $request)
    {
        PlaylistModel::create([
            'judul_playlist' => $request->judul_playlist,
            'slug' => $request->judul_playlist,
            'deskripsi' => $request->deskripsi,
            'user_id' => Auth::id(),
            'gambar_playlist' => $request->file('gambar_playlist')->store('Playlist'),
            'is_active' => $request->is_active,
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_playlist');
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $playlist, $id)
    {
        if (empty($playlist->file('gambar_playlist'))) {
            PlaylistModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul_playlist' => $playlist->judul_playlist,
                    'slug' => $playlist->judul_playlist,
                    'deskripsi' => $playlist->deskripsi,
                    'user_id' => Auth::id(),
                    'is_active' => $playlist->is_active,
                ]);
        } else {
            $data_id = PlaylistModel::find($id);
            FacadesStorage::delete([$data_id->gambar_playlist]);
            PlaylistModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul_playlist' => $playlist->judul_playlist,
                    'slug' => $playlist->judul_playlist,
                    'deskripsi' => $playlist->deskripsi,
                    'user_id' => Auth::id(),
                    'gambar_playlist' => $playlist->file('gambar_playlist')->store('Playlist'),
                    'is_active' => $playlist->is_active,
                ]);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_playlist');
    }
    // ---------------------------------------------------------------------------------------------
    public function hapus_data($id)
    {
        $data_id = PlaylistModel::find($id);
        FacadesStorage::delete([$data_id->gambar_playlist]);
        PlaylistModel::where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_playlist');
    }
}
