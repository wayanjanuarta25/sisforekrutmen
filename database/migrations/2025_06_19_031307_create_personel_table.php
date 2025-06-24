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
        Schema::create('personel', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->date('ttl')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('prodi')->nullable();
            $table->string('asal_panda')->nullable();
            $table->string('nomor_tk_panda')->nullable();
            $table->string('nomor_tk_pusat')->nullable();
            $table->string('agama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('nomor_imei')->nullable();
            $table->string('merk_hp')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personel');
    }
};
