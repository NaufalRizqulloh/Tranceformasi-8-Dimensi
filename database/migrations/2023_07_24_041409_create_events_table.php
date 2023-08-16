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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('kode_akses')->unique();
            $table->string('institusi');
            $table->integer('total_peserta');
            $table->date('tanggal_mulai'); 
            $table->date('tanggal_selesai');
            $table->string('deskripsi');
            $table->string('tujuan_tes');
            //tujuan pengambilan test [personaldev, careerdev]
            $table->boolean('is_expired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
