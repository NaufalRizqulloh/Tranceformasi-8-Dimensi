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
            //tujuan pengambilan test [personaldev, careerdev]
            $table->string('tujuan_tes');
            $table->boolean('is_answers_hold');
            $table->string('collab_logo_base64')->nullable();
            $table->string('collab_url')->nullable();
            $table->string('collab_company_name')->nullable();
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
