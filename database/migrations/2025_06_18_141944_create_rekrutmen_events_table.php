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
        Schema::create('rekrutmen_events', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rekrutmen');
            $table->date('tanggal_rekrutmen');
            $table->string('lokasi_rekrutmen');
            $table->enum('status', ['berjalan', 'selesai'])->default('berjalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekrutmen_events');
    }
};
