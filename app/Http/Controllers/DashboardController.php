<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekrutmenEvent; 
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah total event rekrutmen
        $totalWervingCount = RekrutmenEvent::count();

        // Mengambil event rekrutmen yang berstatus 'berjalan'
        $wervingBerjalanEvents = RekrutmenEvent::where('status', 'berjalan')->get();

        // Menghitung jumlah event rekrutmen yang berstatus 'berjalan'
        $wervingBerjalanCount = $wervingBerjalanEvents->count();

        $wervingSelesaiCount = RekrutmenEvent::where('status', 'selesai')->count(); // Menghitung event selesai

        // Mengambil SEMUA event rekrutmen untuk tabel "Data Werving Keseluruhan"
        $allWervingEvents = RekrutmenEvent::orderBy('tanggal_rekrutmen', 'desc')->get();

        // Meneruskan data ke view dashboard
        return view('dashboard', compact(
            'totalWervingCount',
            'wervingBerjalanCount',
            'wervingSelesaiCount', 
            'wervingBerjalanEvents',
            'allWervingEvents' 
        ));
    }
}