<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilingMediaSosial extends Model
{
    use HasFactory;

    protected $table = 'profiling_media_sosial'; // Pastikan nama tabelnya benar

    protected $fillable = [
        'laporan_perorangan_id', // Pastikan ini ada
        'platform',
        'link_akun',
        'hasil_screenshot_path',
        'keterangan_profiling',
    ];

    // Relasi ke LaporanPerorangan
    public function laporanPerorangan()
    {
        return $this->belongsTo(LaporanPerorangan::class);
    }
}