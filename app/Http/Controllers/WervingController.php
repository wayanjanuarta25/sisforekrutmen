<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Hapus import Casis karena sudah tidak dipakai: use App\Models\Casis;
use App\Models\LaporanPerorangan;
use App\Models\RekrutmenEvent; // Masih dibutuhkan untuk dropdown event rekrutmen
use App\Models\ProfilingMediaSosial;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WervingController extends Controller
{
    public function index()
    {
        // Ambil semua data personel dari database
        $personel = Personel::all();
        // Meneruskan data ke view
        return (view('werving.index',['personel' => $personel]));


    }
}