<?php

namespace App\Models;

use App\Models\Salarier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomSociéte',
        'adresseSociéte',
        'dateDepart',
        'dateFinale'
    ];
    public function salarier()
    {
        return $this->hasMany(Salarier::class,'id');
    }
}
