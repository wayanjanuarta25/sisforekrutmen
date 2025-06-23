<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan'; // Pastikan nama tabelnya benar

    protected $fillable = [
        'laporan_perorangan_id', // Pastikan ini ada
        'pendidikan_terakhir',
        'nama_institusi',
    ];

    // Relasi ke LaporanPerorangan
    public function laporanPerorangan()
    {
        return $this->belongsTo(LaporanPerorangan::class);
    }
}