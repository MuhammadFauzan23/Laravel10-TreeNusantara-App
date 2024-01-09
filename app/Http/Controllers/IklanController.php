<?php

namespace App\Http\Controllers;

use App\Models\IklanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IklanController extends Controller
{
    public function view_list_iklan()
    {
        $data = [
            'title' => 'Iklan',
            'data_iklan' => IklanModel::all(),

        ];
        return view('master-data.list_iklan', $data);
    }

    public function tambah_data(Request $request)
    {
        IklanModel::create([
            'judul_iklan' => $request->judul_iklan,
            'link' => $request->link,
            'gambar_iklan' => $request->file('gambar_iklan')->store('Iklan'),
            'status' => $request->is_active,
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_iklan');
    }

    public function edit_data(Request $request, $id)
    {
        if (empty($request->file('gambar_iklan'))) {
            IklanModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul_iklan' => $request->judul_iklan,
                    'link' => $request->link,
                    'status' => $request->is_active,
                ]);
        } else {
            $data_id = IklanModel::find($id);
            Storage::delete([$data_id->gambar_iklan]);
            IklanModel::where('id', $id)
                ->update([
                    'judul_iklan' => $request->judul_iklan,
                    'link' => $request->link,
                    'gambar_iklan' => $request->file('gambar_iklan')->store('Iklan'),
                    'status' => $request->is_active,
                ]);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_iklan');
    }

    public function hapus_data($id)
    {
        $data_id = IklanModel::find($id);
        Storage::delete([$data_id->gambar_iklan]);
        IklanModel::where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_iklan');
    }
}
