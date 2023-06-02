<?php

namespace App\Models;

use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailFournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "designation",
        "qte",
        "pu",
        "date"
    ];

    public function FournisseurModels()
    {
        return $this->hasMany(Fournisseur::class,'id');
    }
}