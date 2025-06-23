<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPerorangan extends Model
{
    use HasFactory;
    protected $table = 'laporan_perorangan';
    protected $fillable = [
        'nomor_pendaftaran', 'nama_lengkap', 'asal_sekolah', 'rekrutmen_event_id', // Data Casis
        'tempat_lahir', 'tanggal_lahir', 'prodi', 'asal_panda',
        'nomor_tk_panda', 'nomor_tk_pusat', 'agama', 'jenis_kelamin',
        'status_perkawinan', 'alamat_ktp', 'nomor_hp', 'merk_hp', 'imei1', 'imei2',
        'catatan',
    ];

    // Hubungkan ke RekrutmenEvent (jika perlu)
    public function rekrutmenEvent()
    {
        return $this->belongsTo(RekrutmenEvent::class);
    }

    // Relasi ke ProfilingMediaSosial (akan menggunakan laporan_perorangan_id)
    public function profilings()
    {
        return $this->hasMany(ProfilingMediaSosial::class, 'laporan_perorangan_id'); // <--- Gunakan laporan_perorangan_id
    }

    // Relasi ke Pendidikan (akan menggunakan laporan_perorangan_id)
    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'laporan_perorangan_id'); // <--- Gunakan laporan_perorangan_id
    }
}