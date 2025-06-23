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
        Schema::create('profiling_media_sosial', function (Blueprint $table) {
            $table->id();
            // Foreign Key ke tabel laporan_perorangan
            $table->foreignId('laporan_perorangan_id')
                  ->constrained('laporan_perorangan') // Terhubung ke tabel laporan_perorangan
                  ->onDelete('cascade');              // Jika laporan dihapus, data profiling juga dihapus

            // Kolom untuk data akun media sosial (dari Step 2 form)
            $table->string('platform');       // Contoh: email, instagram, tiktok, facebook
            $table->string('link_akun')->nullable(); // Username atau URL akun media sosial

            // Kolom untuk hasil profiling (dari Step 3 form)
            $table->string('hasil_screenshot_path')->nullable(); // Path ke gambar screenshot
            $table->text('keterangan_profiling')->nullable();    // Keterangan hasil profiling

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiling_media_sosial');
    }
};
