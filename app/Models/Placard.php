<?php

namespace App\Models;

use App\Models\Placard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Placard extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'lieu',
        'eppMat',
        'eppDer',
    ];

    public function placard()
    {
        return $this->belongsTo(Placard::class, 'id_placard');
    }
}