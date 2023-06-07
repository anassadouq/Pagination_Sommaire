<?php

namespace App\Http\Controllers;

use App\Models\Bl;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBlRequest;
use App\Http\Requests\UpdateBlRequest;

class BlController extends Controller
{
    public function index()
    {
        $bls = Bl::all();
        return view('bl.index', compact('bls'));
    }

    public function create(Request $request)
    {
        $fournisseurId = $request->input('fournisseurId');
        $fournisseur = Fournisseur::find($fournisseurId);
        return view('bl.create', compact('fournisseur'));
    }    

    public function store(StoreBlRequest $request)
    {
        $bl = new Bl();
        $bl->id_fournisseur = $request->input('id_fournisseur');
        $bl->date = $request->input('date');
        $bl->num = $request->input('num');
        $bl->regler = $request->input('regler');
        $bl->type = $request->input('type');
        $bl->tva = $request->input('tva');
        $bl->save();
    
        $blId = $bl->id; // Obtenez l'ID du BL nouvellement créé
    
        return redirect()->route('bl.show', ['fournisseurId' => $bl->id_fournisseur])->with('blId', $blId);
    }    
    
    public function edit($detail_devi)
    {
        $bl = Bl::findOrFail($detail_devi);
        $fournisseur = Fournisseur::find($bl->id_fournisseur);
        return view('bl.edit', compact('bl', 'fournisseur'));
    }
       
    public function update(UpdateBlRequest $request, $id)
    {
        $bl = Bl::findOrFail($id);
    
        // Mise à jour des informations du Detailfournisseur
        $bl->fill($request->only(['date', 'num', 'regler','type','tva']));
        $bl->save();
    
        // Vérification et mise à jour des informations du fournisseur
        if ($bl->id_fournisseur != $request->input('id_fournisseur')) {
            $fournisseur = Fournisseur::find($request->input('id_fournisseur'));
            if ($fournisseur) {
                $fournisseur->save();
            }
        }
    
        $blId = $bl->id; // Obtenez l'ID du BL modifié
    
        return redirect()->route('bl.show', ['fournisseurId' => $bl->id_fournisseur])->with('blId', $blId);
    }       
    
    public function show($fournisseurId)
    {
        $fournisseur = Fournisseur::find($fournisseurId);
        $bls = Bl::where('id_fournisseur', $fournisseurId)->get();
        return view('bl.show', compact('bls', 'fournisseur'));
    }

    public function destroy($id)
    {
        $bl = Bl::findOrFail($id);
        $bl->delete();
    
        return redirect()->route('bl.show', ['fournisseurId' => $bl->id_fournisseur])->with('success', 'Le bl a été supprimé avec succès.');
    }
    

    public function designation($fournisseurId)
    {
        $fournisseur = Fournisseur::find($fournisseurId);
        $bls = Bl::where('id_fournisseur', $fournisseurId)->get();

        $pdf = PDF::loadView('bl.devis', compact('bls', 'fournisseur'));

        return $pdf->download('bl.pdf');
    }
}