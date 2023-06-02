<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Fournisseur;
use App\Models\DetailFournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailFournisseurRequest;
use App\Http\Requests\UpdateDetailFournisseurRequest;

class DetailFournisseurController extends Controller
{
    public function index()
    {
        $detail_fournisseurs = DetailFournisseur::all();
        return view('detail_fournisseur.index', compact('detail_fournisseurs'));
    }

    public function create(Request $request)
    {
        $fournisseurId = $request->input('fournisseurId');
        $fournisseur = Fournisseur::find($fournisseurId);
        return view('detail_fournisseur.create', compact('fournisseur'));
    }    

    public function store(StoreDetailFournisseurRequest $request)
    {
        $detail_fournisseur = new DetailFournisseur();
        $detail_fournisseur->id_fournisseur = $request->input('id_fournisseur');
        $detail_fournisseur->code = $request->input('code');
        $detail_fournisseur->designation = $request->input('designation');
        $detail_fournisseur->qte = $request->input('qte');
        $detail_fournisseur->pu = $request->input('pu');
        $detail_fournisseur->date = $request->input('date');
        $detail_fournisseur->save();

        return redirect()->route('fournisseur.index');
    }
    
    public function edit($detail_devi)
    {
        $detail_fournisseur = DetailFournisseur::findOrFail($detail_devi);
        $fournisseur = Fournisseur::find($detail_fournisseur->id_fournisseur);
        return view('detail_fournisseur.edit', compact('detail_fournisseur', 'fournisseur'));
    }
       
    public function update(UpdateDetailFournisseurRequest $request, $id)
    {
        $detail_fournisseur = DetailFournisseur::findOrFail($id);
    
        // Mise à jour des informations du Detailfournisseur
        $detail_fournisseur->fill($request->only(['code', 'designation', 'qte', 'pu', 'date']));
        $detail_fournisseur->save();
    
        // Vérification et mise à jour des informations du fournisseur
        if ($detail_fournisseur->id_fournisseur != $request->input('id_fournisseur')) {
            $fournisseur = Fournisseur::find($request->input('id_fournisseur'));
            if ($fournisseur) {
                $fournisseur->save();
            }
        }
        return redirect()->route('fournisseur.index');
    }    
    
    public function show($fournisseurId)
    {
        $fournisseur = Fournisseur::find($fournisseurId);
        $detail_fournisseurs = DetailFournisseur::where('id_fournisseur', $fournisseurId)->get();
        return view('detail_fournisseur.show', compact('detail_fournisseurs', 'fournisseur'));
    }

    public function destroy($id)
    {
        $detail_fournisseur = DetailFournisseur::findOrFail($id);
        $detail_fournisseur->delete();

        return redirect()->route('fournisseur.index')
            ->with('success', 'Le detail_fournisseur a été supprimé avec succès.');
    }

    public function designation($fournisseurId)
    {
        $fournisseur = Fournisseur::find($fournisseurId);
        $detail_fournisseurs = DetailFournisseur::where('id_fournisseur', $fournisseurId)->get();

        $pdf = PDF::loadView('detail_fournisseur.devis', compact('detail_fournisseurs', 'fournisseur'));

        return $pdf->download('detail_fournisseur.pdf');
    }
}