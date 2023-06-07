<?php

namespace App\Models;

use App\Models\Bl;
use App\Models\DetailBl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'adresse',
        'tel',
    ];
    
    public function bls()
    {
        return $this->hasMany(Bl::class, 'id_fournisseur');
    }

    public function detailBls()
    {
        return $this->hasMany(DetailBl::class, 'id_fournisseur');
    }
}