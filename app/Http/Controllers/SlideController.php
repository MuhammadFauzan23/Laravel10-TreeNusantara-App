<?php

namespace App\Http\Controllers;

use App\Models\SlideModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function view_list_slide_banner()
    {
        $data = [
            'title' => 'Slide Banner',
            'data_slide_banner' => SlideModel::all(),

        ];
        return view('master-data.list_slide_banner', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function tambah_data(Request $request)
    {
        SlideModel::create([
            'judul_slide' => $request->judul_slide,
            'link' => $request->link,
            'gambar_slide' => $request->file('gambar_slide')->store('Slide'),
            'status' => $request->is_active,
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_slide_banner');
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $request, $id)
    {
        if (empty($request->file('gambar_slide'))) {
            SlideModel::where('id', $id)
                ->where('id', $id)
                ->update([
                    'judul_slide' => $request->judul_slide,
                    'link' => $request->link,
                    'status' => $request->is_active,
                ]);
        } else {
            $data_id = SlideModel::find($id);
            Storage::delete([$data_id->gambar_slide]);
            SlideModel::where('id', $id)
                ->update([
                    'judul_slide' => $request->judul_slide,
                    'link' => $request->link,
                    'gambar_slide' => $request->file('gambar_slide')->store('Slide'),
                    'status' => $request->is_active,
                ]);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_slide_banner');
    }
    // ---------------------------------------------------------------------------------------------
    public function hapus_data($id)
    {
        $data_id = SlideModel::find($id);
        Storage::delete([$data_id->gambar_slide]);
        SlideModel::where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_slide_banner');
    }
}
