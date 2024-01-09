<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function view_list_jenis_barang()
    {
        $data = [
            'title' => 'Kategori',
            'data_kategori' => KategoriModel::all(),
        ];
        return view('master-data.list_kategori', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function tambah_data(Request $request)
    {
        KategoriModel::create([
            'nama_kategori' => $request->nama_jenis,
            'slug' => $request->nama_jenis,
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_kategori');
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $request, $id)
    {
        KategoriModel::where('id', $id)->update([
            'nama_kategori' => $request->nama_jenis_edit,
            'slug' => $request->nama_jenis_edit
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_kategori');
    }
    // ---------------------------------------------------------------------------------------------
    public function hapus_data($id)
    {

        KategoriModel::where('id', $id)->where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_kategori');
    }
}
