<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::user()->role == 'administrator') {
            return $next($request);
        } elseif (Auth::user()->role == 'penulis') {
            return $next($request);
        }
        $pesan = [
            'stts' => true,
            'msg' => 'Anda mengakses diluar batas hak akses!'
        ];
        session()->flash('message', $pesan);
        // response()->json('Anda mengakses diluar batas hak akses!');
    }
}
