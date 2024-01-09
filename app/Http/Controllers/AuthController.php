<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use App\Models\MateriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function view_login()
    {
        return view('auth.v_login');
    }
    // ---------------------------------------------------------------------------------------------
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'data_artikel' => ArtikelModel::all()->count(),
            'data_kategori' => KategoriModel::all()->count(),
            'data_materi' => MateriModel::all()->count(),
            'data_user' => User::all(),
        ];
        return view('layout.dashboard', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function proses_login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username tidak boleh kosong!',
                'password.required' => 'Password tidak boleh kosong!'
            ]
        );
        $data = [
            'name' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $login = User::where('name', $request->username)->get();
            // dd($login);
            // while ($login = User::where('name', $request->username)->get()) {

            //     //Telegram
            //     $botToken = '6292345616:AAGXI8fJyFBAtvoARPaXhw9kzFI4e75Dprg';
            //     $chatId = '1375154226';

            //     // Mendapatkan alamat IP pengguna yang login
            //     $_SERVER['REMOTE_ADDR'];

            //     //membuat jeda 1 menit
            //     #sleep(60);

            //     // Membuat pesan yang berisi informasi login dan alamat IP
            //     $message = $request->username . ' Telah Login Ke Daydream Akuntansi.' . "\n";
            //     #$message .= 'Alamat IP: ' . $userIP;

            //     // Mengirim pesan ke bot Telegram
            //     $apiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatId}&text=" . urlencode($message);
            //     file_get_contents($apiUrl);
            // }
            $pesan = [
                'stts' => true,
                'msg' => 'Selamat Datang!'
            ];
            session()->flash('message', $pesan);
            session()->regenerate();
            return redirect()->intended('/home');
        } else {
            $pesan = [
                'stts' => false,
                'msg' => 'Username dan password salah!'
            ];
            session()->flash('message', $pesan);
            return redirect('/login_page');
        }
    }

    // ---------------------------------------------------------------------------------------------
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        $pesan = [
            'stts' => true,
            'msg' => 'Terima Kasih!'
        ];
        session()->flash('message', $pesan);
        return redirect('/login_page');
    }

    // +------------------+
    // +------------------+ 
    // |  Setting Profile |
    // +----------------=-+
    // +------------------+

    public function dataUser()
    {

        $idUser = Auth::user('id');
        $data = [
            'title' => 'Setting Profile',
            'data_user' => User::find($idUser)
        ];
        return view('auth.edit_profile', $data);
    }
    // ---------------------------------------------------------------------------------------------
    public function edit_data(Request $request, $id)
    {
        $password = [
            'password' => $request->password
        ];
        $konfirmasi_password = [
            'password' => $request->konfirmasi_password
        ];
        $data = [
            'id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        if ($data && $password != $konfirmasi_password) {
            $pesan = [
                'stts' => false,
                'msg' => 'Password dan konfimasi password tidak sama!'
            ];
            session()->flash('message', $pesan);
            return redirect('user_setting');
        } elseif ($data && $password == $konfirmasi_password) {
            User::where('id', $id)->update($data);
            $pesan = [
                'stts' => True,
                'msg' => 'Data Berhasil diubah!'
            ];
            session()->flash('message', $pesan);
            return redirect('/user_setting');
        }
    }
}
