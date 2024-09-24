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
        Schema::create('trans_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('jenis_radio');
            $table->date('tanggal_produksi');
            $table->string('aktivitas_saat_ini');
            $table->string('waktu_paruh_sumber');
            $table->date('perkiraan_waktu_habis');
            $table->enum('layak_reuse', ['Ya', 'Tidak']);
            $table->enum('status_saat_ini', ['Penyimpanan', 'Tidak di Penyimpanan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_inputs');
    }
};
