<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    /** @use HasFactory<\Database\Factories\SzavakFactory> */
    use HasFactory;
    protected $fillable = [
        'temaId',
        'angol',
        'magyar',
    ];

    public function tema(){
        return $this->belongsTo(Tema::class, 'tema_id');
    }
}
