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
        Schema::create('laporan_perorangan', function (Blueprint $table) {
            $table->id();
            // --- Kolom data Casis langsung di sini ---
            $table->string('nomor_pendaftaran')->unique(); // Dari Casis
            $table->string('nama_lengkap'); // Dari Casis
            $table->string('asal_sekolah'); // Dari Casis
            $table->foreignId('rekrutmen_event_id')->nullable()->constrained('rekrutmen_events')->onDelete('set null'); // Masih perlu event rekrutmen

            // --- Kolom Biodata Laporan ---
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('prodi');
            $table->string('asal_panda');
            $table->string('nomor_tk_panda');
            $table->string('nomor_tk_pusat');
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu']);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('status_perkawinan', ['kawin', 'belum-kawin']);
            $table->text('alamat_ktp');
            $table->string('nomor_hp');
            $table->string('merk_hp');
            $table->string('imei1')->nullable();
            $table->string('imei2')->nullable();
            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_perorangan');
    }
};
