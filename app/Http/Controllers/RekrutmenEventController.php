<?php

namespace App\Http\Controllers;

use App\Models\RekrutmenEvent; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;

class RekrutmenEventController extends Controller
{

    public function index()
    {
        $rekrutmenEvents = RekrutmenEvent::orderBy('tanggal_rekrutmen', 'desc')->paginate(10);
        return view('rekrutmen.index', compact('rekrutmenEvents')); 
    }

    public function create()
    {
        return view('rekrutmen.create'); 
    }

    public function show(RekrutmenEvent $rekrutmenEvent)
    {
        return view('rekrutmen.show', compact('rekrutmenEvent'));
    }

    public function edit(RekrutmenEvent $rekrutmenEvent)
    {
        return view('rekrutmen.edit', compact('rekrutmenEvent'));
    }

    public function update(Request $request, RekrutmenEvent $rekrutmenEvent)
    {
        // Validasi input dari form
        $request->validate([
            'nama_rekrutmen' => 'required|string|max:255',
            'tanggal_rekrutmen' => 'required|date',
            'lokasi_rekrutmen' => 'required|string|max:255',
            'status' => 'required|in:berjalan,selesai', 
        ]);

        // Perbarui data event rekrutmen
        $rekrutmenEvent->update($request->all());

        // Redirect kembali ke daftar event rekrutmen dengan pesan sukses
        return redirect()->route('rekrutmen-event.index')->with('success', 'Rekrutmen berhasil diperbarui.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_rekrutmen' => 'required|string|max:255',
            'tanggal_rekrutmen' => 'required|date',
            'lokasi_rekrutmen' => 'required|string|max:255',
            'status' => 'nullable|in:berjalan,selesai',
        ]);

        RekrutmenEvent::create($request->all());

        return redirect()->route('rekrutmen-event.index')->with('success', 'Rekrutmen berhasil ditambahkan.');
    }

    public function destroy(RekrutmenEvent $rekrutmenEvent)
    {
        try {
            $rekrutmenEvent->delete();
            return redirect()->route('rekrutmen-event.index')->with('success', ' Rekrutmen berhasil dihapus.');
        } catch (\Exception $e) {
            // Tangani kesalahan jika penghapusan gagal, misalnya karena ada data terkait
            return redirect()->route('rekrutmen-event.index')->with('error', 'Gagal menghapus Rekrutmen: ' . $e->getMessage());
        }
    }
}