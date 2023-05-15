<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAvanceRequest;
use App\Http\Requests\UpdateAvanceRequest;

class AvanceController extends Controller
{
    public function index()
    {
        $avances = Avance::all();
        $client = Client::all();
        
        return view('avance.index', [
            'avances' => $avances,
            'client' => $client
        ]);
    }

    public function create(Request $request)
    {
        $clientId = $request->input('clientId');
        $client = Client::find($clientId);

        return view('avance.create', ['client' => $client]);
    }
    
    public function store(StoreAvanceRequest $request)
    {
        $avance = new Avance();
        $avance->id_client = $request->id_client;
        $avance->date = $request->date;
        $avance->prix = $request->prix;
        $avance->type = $request->type;
        
        $avance->save();
        return redirect()->route('devis.index');
    }

    public function edit(Avance $avance)
    {
        return view('avance.edit', compact('avance'));
    }

    public function update(UpdateAvanceRequest $request, Avance $avance)
    {
        $avance->update($request->all());
        return redirect()->route('devis.index');
    }
 
    public function show($clientId)
    {
        $client = Client::find($clientId);
        $avances = Avance::where('id_client', $clientId)->get();
        return view('avance.show', compact('avances', 'client'));
    }

    public function destroy($id)
    {
        $avance = Avance::findOrFail($id);
        $avance->delete();

        return redirect()->route('devis.index')
            ->with('success', 'Le avance a été supprimé avec succès.');
    }
}