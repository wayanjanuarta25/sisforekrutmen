<?php

namespace App\Http\Controllers;

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
        // Ambil semua Laporan Perorangan, load relasi yang diperlukan
        $laporanPerorangans = LaporanPerorangan::with('rekrutmenEvent')->orderBy('nama_lengkap')->paginate(10);
        return view('werving.index', compact('laporanPerorangans'));
    }

    /**
     * Menampilkan form multi-step untuk membuat laporan perorangan baru.
     * Tidak ada parameter Casis di URL. Selalu menampilkan input langsung.
     *
     * @return \Illuminate\View\View
     */
    public function createLaporan(Request $request)
    {
        $rekrutmenEvents = RekrutmenEvent::all(); // Untuk dropdown Event Rekrutmen di form

        // Tidak ada lagi $casis atau $allCasis yang diteruskan.
        return view('werving.create', compact('rekrutmenEvents'));
    }

    public function storeLaporan(Request $request)
    {
        // Validasi dan logika penyimpanan tetap sama.
        // TIDAK ADA VALIDASI 'casis_id' karena tidak ada lagi input casis_id yang terpisah.
        $validatedData = $request->validate([
            // Data Casis (sekarang bagian dari Laporan Perorangan)
            'nomor_pendaftaran' => 'required|string|max:255|unique:laporan_perorangan', // <-- Penting: unique di tabel ini
            'nama_lengkap' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'rekrutmen_event_id' => 'required|exists:rekrutmen_events,id',

            // Biodata Laporan (lanjutan dari data Casis)
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'prodi' => 'required|string|max:255',
            'asal_panda' => 'required|string|max:255',
            'nomor_tk_panda' => 'required|string|max:255',
            'nomor_tk_pusat' => 'required|string|max:255',
            'agama' => 'required|in:islam,kristen,katolik,hindu,budha,konghucu',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'status_perkawinan' => 'required|in:kawin,belum-kawin',
            'alamat_ktp' => 'required|string',
            'nomor_hp' => 'required|string|max:20',
            'merk_hp' => 'required|string|max:255',
            'imei1' => 'nullable|string|max:255',
            'imei2' => 'nullable|string|max:255',
            'catatan' => 'nullable|string',

            // Data Dinamis Step 2 & 3
            'social_media_type.*' => 'required|string|max:255',
            'social_media_link.*' => 'required|string|max:255',
            'profiling_media_sosial_type.*' => 'required|string|max:255',
            'hasil_screenshot.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan_profiling.*' => 'required|string',

            // Data Pendidikan
            'pendidikan_terakhir' => 'required|string|max:255',
            'nama_institusi' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            // 1. Simpan data ke tabel `laporan_perorangan`
            // Semua data Casis langsung disimpan di sini
            $laporanPerorangan = LaporanPerorangan::create([
                'nomor_pendaftaran' => $validatedData['nomor_pendaftaran'],
                'nama_lengkap' => $validatedData['nama_lengkap'],
                'asal_sekolah' => $validatedData['asal_sekolah'],
                'rekrutmen_event_id' => $validatedData['rekrutmen_event_id'], // Dari dropdown
                'tempat_lahir' => $validatedData['tempat_lahir'],
                'tanggal_lahir' => $validatedData['tanggal_lahir'],
                'prodi' => $validatedData['prodi'],
                'asal_panda' => $validatedData['asal_panda'],
                'nomor_tk_panda' => $validatedData['nomor_tk_panda'],
                'nomor_tk_pusat' => $validatedData['nomor_tk_pusat'],
                'agama' => $validatedData['agama'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'status_perkawinan' => $validatedData['status_perkawinan'],
                'alamat_ktp' => $validatedData['alamat_ktp'],
                'nomor_hp' => $validatedData['nomor_hp'],
                'merk_hp' => $validatedData['merk_hp'],
                'imei1' => $validatedData['imei1'],
                'imei2' => $validatedData['imei2'],
                'catatan' => $validatedData['catatan'],
            ]);

            // 2. Simpan data ke tabel `profiling_media_sosial` (array dinamis dari Step 2 & 3)
            // Tidak perlu menghapus yang lama karena ini selalu laporan baru
            $socialMediaTypes = $request->input('social_media_type');
            $socialMediaLinks = $request->input('social_media_link');
            if ($socialMediaTypes && $socialMediaLinks) {
                foreach ($socialMediaTypes as $key => $type) {
                    if (!empty($type) && !empty($socialMediaLinks[$key])) {
                        ProfilingMediaSosial::create([
                            'laporan_perorangan_id' => $laporanPerorangan->id,
                            'platform' => $type,
                            'link_akun' => $socialMediaLinks[$key],
                            'hasil_screenshot_path' => null,
                            'keterangan_profiling' => null,
                        ]);
                    }
                }
            }

            $profilingMediaTypes = $request->input('profiling_media_sosial_type');
            $profilingKeterangan = $request->input('keterangan_profiling');
            $profilingScreenshotFiles = $request->file('hasil_screenshot');

            if ($profilingMediaTypes && $profilingKeterangan) {
                foreach ($profilingMediaTypes as $key => $type) {
                    if (!empty($type) && !empty($profilingKeterangan[$key])) {
                        $hasilScreenshotPath = null;
                        if (isset($profilingScreenshotFiles[$key]) && $profilingScreenshotFiles[$key]->isValid()) {
                            $hasilScreenshotPath = $profilingScreenshotFiles[$key]->store('screenshots', 'public');
                        }
                        ProfilingMediaSosial::create([
                            'laporan_perorangan_id' => $laporanPerorangan->id,
                            'platform' => $type,
                            'link_akun' => null,
                            'hasil_screenshot_path' => $hasilScreenshotPath,
                            'keterangan_profiling' => $profilingKeterangan[$key],
                        ]);
                    }
                }
            }

            // 3. Simpan data ke tabel `pendidikan`
            Pendidikan::create([ // Selalu buat baru karena ini laporan baru
                'laporan_perorangan_id' => $laporanPerorangan->id,
                'pendidikan_terakhir' => $validatedData['pendidikan_terakhir'],
                'nama_institusi' => $validatedData['nama_institusi'],
            ]);

            DB::commit();
            return redirect()->route('werving.index')->with('success', 'Laporan Perorangan untuk ' . $laporanPerorangan->nama_lengkap . ' berhasil disimpan.');

        } catch (\Exception $e) {
            DB::rollBack();
            if ($request->hasFile('hasil_screenshot')) {
                foreach ($request->file('hasil_screenshot') as $file) {
                    $path = $file->hashName('screenshots');
                    if (Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            }
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan laporan: ' . $e->getMessage());
        }
    }
}