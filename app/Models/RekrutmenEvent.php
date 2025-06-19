<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekrutmenEvent extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'rekrutmen_events';

    protected $fillable = [
        'nama_rekrutmen',
        'tanggal_rekrutmen',
        'lokasi_rekrutmen',
        'status',
    ];

    // Opsional: Jika Anda ingin secara otomatis mengelola peserta rekrutmen yang terkait
    // public function peserta()
    // {
    //     return $this->hasMany(CalonTaruna::class);
    // }
}