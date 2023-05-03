<?php

namespace App\Http\Controllers;

use App\Models\Placard;
use App\Http\Requests\StorePlacardRequest;
use App\Http\Requests\UpdatePlacardRequest;

class PlacardController extends Controller
{
    public function index()
    {
        return view('placard.index', [
            'placards' => Placard::all()
        ]);
    }

    public function create()
    {
        return view('placard.create');
    }

    public function store(StorePlacardRequest $request)
    {
        $placard = new Placard();
        $placard->nom = $request->nom;
        $placard->lieu = $request->lieu;
        $placard->eppMat = $request->eppMat;
        $placard->eppDer = $request->eppDer;
        $placard->save();
        return to_route('placard.index');
    }

    public function show(Placard $placard)
    {
        return view('placard.show', compact('placard'));
    }

    public function edit(Placard $placard)
    {
        return view('placard.edit', compact('placard'));
    }

    public function update(UpdatePlacardRequest $request, Placard $placard)
    {
        $placard->update($request->all());
        return to_route('placard.index');
    }

    public function destroy($id)
    {
        $placard = Placard::findOrFail($id);
        $placard->delete();

        return redirect()->route('placard.index')
            ->with('success', 'Le placard a été supprimé avec succès.');
    }
}