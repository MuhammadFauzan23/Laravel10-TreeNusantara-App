<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function view_list_users()
    {
        $data = [
            'title' => 'Teams',
            'data_team' => ModelsUser::all(),
        ];
        return view('master-data.list_team', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function tambah_data(Request $request)
    {
        ModelsUser::create([
            'name' => $request->username,
            'password' => bcrypt($request->username),
            'role' => $request->role,
            'status' => $request->status,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'gambar_user' => $request->file('gambar_users')->store('Users'),
        ]);
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil ditambah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_users');
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $request, $id)
    {
        if (empty($request->file('gambar_users'))) {
            ModelsUser::where('id', $id)
                ->where('id', $id)
                ->update([
                    'name' => $request->username,
                    // 'password' => bcrypt($request->username),
                    'role' => $request->role,
                    'jabatan' => $request->jabatan,
                    'status' => $request->status,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'tiktok' => $request->tiktok,
                    'facebook' => $request->facebook,
                    'linkedin' => $request->linkedin,
                ]);
        } else {
            $data_id = ModelsUser::find($id);
            Storage::delete([$data_id->gambar_materi]);
            ModelsUser::where('id', $id)
                ->update([
                    'name' => $request->username,
                    // 'password' => bcrypt($request->username),
                    'role' => $request->role,
                    'jabatan' => $request->jabatan,
                    'status' => $request->status,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'tiktok' => $request->tiktok,
                    'facebook' => $request->facebook,
                    'linkedin' => $request->linkedin,
                    'gambar_user' => $request->file('gambar_users')->store('Users'),
                ]);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil diubah!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_users');
    }
    // ---------------------------------------------------------------------------------------------
    public function hapus_data($id)
    {
        $data_id = ModelsUser::find($id);
        Storage::delete([$data_id->gambar_materi]);
        ModelsUser::where('id', $id)->delete();
        $pesan = [
            'stts' => true,
            'msg' => 'Data berhasil dihapus!'
        ];
        session()->flash('message', $pesan);
        return redirect('/list_users');
    }
}
