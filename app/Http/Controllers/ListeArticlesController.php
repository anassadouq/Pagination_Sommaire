<?php

namespace App\Http\Controllers;

use App\Models\Bl;
use App\Models\DetailBl;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class ListeArticlesController extends Controller
{
    public function index()
    {
        $detail_bls = DetailBl::all();
        $bls = Bl::all();
        $fournisseurs = Fournisseur::all();        
        return view('detail_bl.liste_articles', [
            'detail_bls' => $detail_bls,
            'bls' => $bls,
            'fournisseurs' => $fournisseurs,
        ]);
    }
}