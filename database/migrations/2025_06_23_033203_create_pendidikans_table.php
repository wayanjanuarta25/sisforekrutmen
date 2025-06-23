<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            // Foreign Key ke tabel laporan_perorangan
            // Menggunakan unique() karena asumsi setiap laporan perorangan hanya punya 1 data pendidikan
            $table->foreignId('laporan_perorangan_id')
                  ->unique()
                  ->constrained('laporan_perorangan') // Terhubung ke tabel laporan_perorangan
                  ->onDelete('cascade');              // Jika laporan dihapus, data pendidikan juga dihapus

            $table->string('pendidikan_terakhir'); // Contoh: SMA/SMK, S1, S2
            $table->string('nama_institusi');     // Contoh: Universitas Indonesia

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};