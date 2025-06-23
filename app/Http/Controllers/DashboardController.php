<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekrutmenEvent; 
use App\Models\LaporanPerorangan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalWervingCount = RekrutmenEvent::count();
        $wervingBerjalanEvents = RekrutmenEvent::where('status', 'berjalan')->get();
        $wervingBerjalanCount = $wervingBerjalanEvents->count();
        $wervingSelesaiCount = RekrutmenEvent::where('status', 'selesai')->count();
        $allWervingEvents = RekrutmenEvent::orderBy('tanggal_rekrutmen', 'desc')->get();

        return view('dashboard', compact(
            'totalWervingCount',
            'wervingBerjalanCount',
            'wervingSelesaiCount',
            'wervingBerjalanEvents',
            'allWervingEvents'
        ));
    }
}