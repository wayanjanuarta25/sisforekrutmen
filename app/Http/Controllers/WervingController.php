<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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