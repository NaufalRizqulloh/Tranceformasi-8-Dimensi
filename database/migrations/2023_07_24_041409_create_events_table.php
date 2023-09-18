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
            $table->boolean('is_answers_hold');
            $table->string('institusi');
            $table->integer('total_peserta');
            $table->dateTime('tanggal_mulai'); 
            $table->dateTime('tanggal_selesai');
            $table->string('deskripsi');
            //tujuan pengambilan test [personaldev, careerdev]
            $table->string('tujuan_tes');
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
