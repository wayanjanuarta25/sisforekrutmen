<?php
namespace App\Http\Controllers;
use App\Models\Personel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PersonelController extends Controller
{
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

    public function create(Request $request){
        //dd($request);

        $personel = Personel::create([
            'nama' => $request->nama,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'agama'=> $request->agama,
            'ttl'=>$request->ttl,
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
            'status' => $request->status
        ]);
        return redirect()->route('werving.index')->with('success', 'Personel berhasil ditambahkan!');

    }
}
