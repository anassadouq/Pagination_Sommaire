<?php

namespace App\Models;

use App\Models\Devis;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'lieu',
        'eppMat',
        'eppDer',
    ];

    public function devis()
    {
        return $this->belongsTo(Devis::class, 'id');
    }
}