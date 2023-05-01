<?php

namespace App\Models;

use App\Models\Salarier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salarier extends Model
{
    use HasFactory;
    protected $fillable = [
        'sexe',
        'nom',
        'prenom',
        'cin',
        'tel',
        'adresse',
        'salaire',
        'dateEntree'
    ];
    public function salarier()
    {
        return $this->belongsTo(Salarier::class, 'id_salarier');
    }
}
