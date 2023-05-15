<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avance extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'prix',
        'type'
    ];
    public function clientModels()
    {
        return $this->hasMany(Client::class,'id');
    }
}