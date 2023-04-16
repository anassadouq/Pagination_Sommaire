<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'position',
        'hauteur',
        'largeur',
        'profondeur',
        'qte'
    ];
    public function clientModels()
    {
        return $this->hasMany(Client::class,'id');
    }
}