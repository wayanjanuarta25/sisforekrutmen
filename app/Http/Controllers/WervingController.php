<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WervingController extends Controller
{
    public function index()
    {

        // Meneruskan data ke view
        return view('werving.index');
    }
}