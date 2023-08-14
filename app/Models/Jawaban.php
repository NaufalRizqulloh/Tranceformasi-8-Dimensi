<?php

namespace App\Models;

use App\Models\Jawaban as ModelsJawaban;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = [
        'dimensi_kepemimpinan',
        'type1_formatted_value',
        'type2_formatted_value',
        'progress'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
