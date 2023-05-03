<?php

namespace App\Models;

use App\Models\Placard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPlacard extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'hauteur',
        'largeur',
        'profondeur',
        'qte',
        'appartement'
    ];
    public function PlacardModels()
    {
        return $this->hasMany(Placard::class,'id');
    }
}
