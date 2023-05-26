<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'adresse',
        'tel',
    ];
    
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'id_fournisseur');
    }
}