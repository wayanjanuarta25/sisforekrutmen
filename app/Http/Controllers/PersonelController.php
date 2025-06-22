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
    public $media_files = [];
    public $media_inputs = [0];


    public function create(Request $request)
    {
        //dd($request);

        $rules = [
            'media_files.*' => 'file|mimes:jpg,jpeg,png,mp4,mov|max:10240',
            // tambahkan validasi field lain di sini...
        ];
        $validated = $request->validate($rules);
        $filePaths = [];

        foreach ($validated['media_files'] as $file) {
            $path = $file->store('uploads/personel', 'public');
            $filePaths[] = $path;
        }

        $personel = Personel::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'ttl' => $request->ttl,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat_ktp' => $request->alamat_ktp,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'prodi' => $request->prodi,
            'asal_panda' => $request->asal_panda,
            'nomor_tk_panda' => $request->nomor_tk_panda,
            'nomor_tk_pusat' => $request->nomor_tk_pusat,
            'nomor_imei' => $request->nomor_imei,
            'merk_hp' => $request->merk_hp,
            'status' => $request->status,
            'media_files' => json_encode($filePaths),
        ]);
        return redirect()->route('werving.index')->with('success', 'Personel berhasil ditambahkan!');
    }

    public function addMediaInput()
    {
        $this->media_inputs[] = count($this->media_inputs);
    }

    public function removeMediaInput($index)
    {
        unset($this->media_files[$index]);
        unset($this->media_inputs[$index]);
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
