<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Personel extends Model
{
    use HasFactory;

    protected $table = 'personel'; // Nama tabel di database
    protected $fillable = [
    'nama', 'jenis_kelamin', 'agama', 'ttl', 'tempat_lahir',
    'alamat_ktp', 'nomor_hp', 'email', 'prodi', 'asal_panda',
    'nomor_tk_panda', 'nomor_tk_pusat', 'nomor_imei', 'merk_hp', 'status'
    ];
}
