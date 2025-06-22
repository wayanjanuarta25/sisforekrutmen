<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekrutmenEventController; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\WervingController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    // Cek apakah pengguna sudah login
    if (Auth::check()) {
        // Jika sudah login, arahkan ke dashboard
        return redirect()->route('dashboard');
    }
    // Jika belum login, arahkan ke halaman login
    return redirect()->route('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/personel', [PersonelController::class,'index'])->name('index-personel');
Route::middleware(['auth'])->group(function () {
    // Rute untuk Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['verified', 'role:admin,superadmin'])->name('dashboard');

    Route::resource('rekrutmen-event', RekrutmenEventController::class);

    Route::get('werving', [WervingController::class, 'index'])->name('werving.index');

    // Rute Profil pengguna Laravel Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Khusus Superadmin
    Route::middleware('role:superadmin')->group(function () {
        Route::get('/superadmin/settings', function () {
            return "Ini halaman pengaturan Superadmin.";
        })->name('superadmin.settings');
        
    });
    
});
Route::post('/personel/create', [PersonelController::class, 'create'])->name('personel.create');

require __DIR__.'/auth.php';