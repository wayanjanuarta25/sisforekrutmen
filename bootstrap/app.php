<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware; // <--- PASTIKAN BARIS INI ADA UNTUK MENGIMPOR KELAS MIDDLEWARE

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Daftarkan alias middleware Anda di sini
        $middleware->alias([
            'role' => RoleMiddleware::class, // <--- TAMBAHKAN BARIS INI DENGAN BENAR
        ]);

        // ... bagian lain dari konfigurasi middleware Anda (jangan diubah jika tidak yakin) ...

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();