<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Livewire\WithFileUploads;



class PersonelController extends Controller
{
    // use WithFileUploads;
    public function index()
    {
        // Ambil semua data personel dari database
        $personel = Personel::all();

        // Kirim data ke view 'personel.index' (sesuaikan nama view Anda)
        return response()->json([
            'status' => 'success',
            'data' => $personel
        ]);
    }

    public function create(Request $request)
    {

        $rules = [
            'media_files'    => 'nullable',
            'media_files.*'  => 'file|mimes:jpg,jpeg,png,mp4,mov|max:10240',
            'nama'           => 'required|string|max:255',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'agama'          => 'required|string|max:50',
            'ttl'            => 'required|date',
            'tempat_lahir'   => 'required|string|max:100',
            'alamat_ktp'     => 'required|string|max:255',
            'nomor_hp'       => 'required|string|max:20',
            'email'          => 'required|email|max:255',
            'prodi'          => 'required|string|max:100',
            'asal_panda'     => 'required|string|max:100',
            'nomor_tk_panda' => 'required|string|max:50',
            'nomor_tk_pusat' => 'required|string|max:50',
            'nomor_imei'     => 'required|string|max:50',
            'merk_hp'        => 'required|string|max:50',
            'status'         => 'required|string|max:50',
            // tambahkan validasi field lain di sini...
        ];

        $validated = $request->validate($rules);
        $filePaths = [];
        if (isset($validated['media_files'])) {
            foreach ($validated['media_files'] as $file) {
                $path = $file->store('uploads/personel', 'public');
                $filePaths[] = $path;
            }
        }


        $personel = Personel::create([
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama'         => $request->agama,
            'ttl'           => $request->ttl,
            'tempat_lahir'  => $request->tempat_lahir,
            'alamat_ktp'    => $request->alamat_ktp,
            'nomor_hp'      => $request->nomor_hp,
            'email'         => $request->email,
            'prodi'         => $request->prodi,
            'asal_panda'    => $request->asal_panda,
            'nomor_tk_panda' => $request->nomor_tk_panda,
            'nomor_tk_pusat' => $request->nomor_tk_pusat,
            'nomor_imei'    => $request->nomor_imei,
            'merk_hp'       => $request->merk_hp,
            'status'        => $request->status,
            'media_files'   => json_encode($filePaths),
        ]);

        return redirect()->route('werving.index')->with('success', 'Personel berhasil ditambahkan!');
    }





    // Validasi


    // public function uploadFile(Request $request, string $id)
    // {
    //     $rules = [
    //         'media_files.*' => 'file|mimes:jpg,jpeg,png,mp4,mov|max:10240',
    //         // tambahkan validasi field lain di sini...
    //     ];
    //     $validated = $request->validate($rules);
    //     $filePaths = [];

    //     foreach ($validated['media_files'] as $file) {
    //         $path = $file->store('uploads/personel', 'public');
    //         $filePaths[] = $path;
    //     }

    //     Personel::where('id', $id)->update([
    //         // Field lain...
    //         'media_files' => json_encode($filePaths),
    //     ]);

    //     // $this->dispatch('pendaftarSaved');
    //     // $this->reset();
    //     return redirect()->route('werving.index')->with('success', 'File berhasil diunggah!');
    // }

}
