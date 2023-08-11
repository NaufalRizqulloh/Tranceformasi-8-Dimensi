<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kode_akses',
        'institusi',
        'tujuan_tes',
        'total_peserta',
        'tanggal_mulai',
        'tanggal_selesai',
        'deskripsi',
        'is_expired'
    ];

    function jawabans(){
        return $this->hasMany(Jawaban::class);
    }
}
