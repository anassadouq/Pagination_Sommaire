<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use App\Http\Requests\StoreFournisseurRequest;
use App\Http\Requests\UpdateFournisseurRequest;

class FournisseurController extends Controller
{
    public function index()
    {
        return view('fournisseur.index', [
            'fournisseurs' => Fournisseur::all()
        ]);
    }

    public function create()
    {
        return view('fournisseur.create');
    }

    public function store(StoreFournisseurRequest $request)
    {
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request->nom;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->tel = $request->tel;
        $fournisseur->save();
        return redirect()->route('fournisseur.index');
    }

    public function edit(Fournisseur $fournisseur)
    {
        return view('fournisseur.edit', compact('fournisseur'));
    }

    public function update(UpdateFournisseurRequest $request, Fournisseur $fournisseur)
    {
        $fournisseur->update($request->all());
        return to_route('fournisseur.index');
    }

    public function destroy($id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
        $fournisseur->delete();

        return redirect()->route('fournisseur.index')
            ->with('success', 'Le fournisseur a été supprimé avec succès.');
    }
}