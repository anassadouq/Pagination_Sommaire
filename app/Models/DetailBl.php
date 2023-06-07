<?php

namespace App\Models;

use App\Models\Bl;
use App\Models\DetailBl;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailBl extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'designation',
        'qte',
        'pu',
        'unite'
    ];

    public function bl()
    {
        return $this->belongsTo(Bl::class, 'id_bl');
    }

    public function detail_bl()
    {
        return $this->belongsTo(Fournisseur::class, 'id_fournisseur');
    }
    
}