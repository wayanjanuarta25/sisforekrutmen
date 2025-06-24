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
        Schema::table('personel', function (Blueprint $table) {
        $table->json('media_files')->nullable()->after('merk_hp');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('personel', function (Blueprint $table) {
        $table->dropColumn('media_files');
    });
    }
};
