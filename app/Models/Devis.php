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
        'article',
        'qte',
        'largeur',
        'unite',
        'pu'
    ];
    public function clientModels()
    {
        return $this->hasMany(Client::class,'id');
    }
}