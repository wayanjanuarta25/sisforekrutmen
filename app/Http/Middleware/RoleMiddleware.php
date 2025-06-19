<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Penting: Tambahkan ini untuk mengakses Auth::check() dan Auth::user()

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string ...$roles  // Parameter ini akan menerima daftar role yang diizinkan
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('/login'); // Arahkan ke halaman login jika belum login
        }

        $user = Auth::user(); // Ambil objek pengguna yang sedang login

        // Periksa apakah role pengguna ada dalam daftar role yang diizinkan
        foreach ($roles as $role) {
            if ($user->role === $role) {
                return $next($request); // Lanjutkan permintaan jika role cocok
            }
        }

        // Jika tidak ada role yang cocok, abort dengan error 403 (Forbidden)
        abort(403, 'Akses Dilarang. Anda tidak memiliki izin.');
    }
}