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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('email')->unique();
            $table->string('notelp');
            //kota/kabupaten
            //provinsi
            $table->smallInteger('usia');
            $table->string('pendidikan_terakhir');
            $table->smallInteger('status');
            $table->string('institusi')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('perusahaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->smallInteger('masa_kerja')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
