<?php

namespace App\Models;

use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bl extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'num',
        'regler',
        'type',
        'tva'
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'id_fournisseur');
    }

    public function detailBls()
    {
        return $this->hasMany(DetailBl::class);
    }
}