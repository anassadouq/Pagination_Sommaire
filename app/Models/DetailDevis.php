<?php

namespace App\Models;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailDevis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_client',
        'article', 
        'qte', 
        'unite', 
        'pu', 
        'date_devis'
    ];
    public function DevisModels()
    {
        return $this->hasMany(Devis::class,'id');
    }
}