<?php

namespace App\Http\Controllers;

use App\Models\Reglement;
use App\Models\Fournisseur;
use App\Http\Requests\StoreReglementRequest;
use App\Http\Requests\UpdateReglementRequest;

class ReglementController extends Controller
{
    public function index()
    {
        $reglements = Reglement::with('fournisseur')->get();

        return view('reglement.index', compact('reglements'));
    }

    public function create()
    {
        $fournisseurs = Fournisseur::all();
        return view('reglement.create', compact('fournisseurs'));
    }

    public function store(StoreReglementRequest $request)
    {
        $reglement = new Reglement();
        $reglement->id_fournisseur = $request->id_fournisseur;
        $reglement->num = $request->num;
        $reglement->montant = $request->montant;
        $reglement->date = $request->date;
        $reglement->type = $request->type;
        $reglement->reglement = $request->reglement;

        $reglement->save();
        return redirect()->route('reglement.index');
    }

    public function edit(Reglement $reglement)
    {
        return view('reglement.edit', compact('reglement'));
    }

    public function update(UpdateReglementRequest $request, Reglement $reglement)
    {
        $reglement->update($request->all());
        return to_route('reglement.index');
    }

    public function destroy($id)
    {
        $reglement = Reglement::findOrFail($id);
        $reglement->delete();

        return redirect()->route('reglement.index')
            ->with('success', 'Le reglement a été supprimé avec succès.');
    }
}