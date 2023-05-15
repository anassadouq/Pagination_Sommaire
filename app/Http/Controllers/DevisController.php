<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class DevisController extends Controller
{
    public function index()
    {
        return view('devis.index', [
            'clients' => Client::all()
        ]);
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(StoreClientRequest $request)
    {
        $client = new Client();
        $client->nom = $request->nom;
        $client->lieu = $request->lieu;
        $client->eppMat = $request->eppMat;
        $client->eppDer = $request->eppDer;
        $client->save();
        return to_route('client.index');
    }

    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());
        return to_route('client.index');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('devis.index')
            ->with('success', 'Le client a été supprimé avec succès.');
    }
}