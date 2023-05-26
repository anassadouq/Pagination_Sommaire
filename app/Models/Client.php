<?php

namespace App\Models;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'num',
        'nom',
        'lieu',
        'eppMat',
        'eppDer',
    ];
    
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
}