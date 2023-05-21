<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Devis;
use App\Models\Avance;
use App\Models\Client;
use App\Models\DetailDevis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailDevisRequest;
use App\Http\Requests\UpdateDetailDevisRequest;

class DetailDevisController extends Controller
{
    public function index()
    {
        $detail_deviss = DetailDevis::all();
        return view('detail_devis.index', compact('detail_deviss'));
    }

    public function create(Request $request)
    {
        $clientId = $request->input('clientId');
        $client = Client::find($clientId);
        return view('detail_devis.create', compact('client'));
    }    

    public function store(StoreDetailDevisRequest $request)
    {
        $detail_devis = new DetailDevis();
        $detail_devis->id_client = $request->input('id_client');
        $detail_devis->article = $request->input('article');
        $detail_devis->qte = $request->input('qte');
        $detail_devis->unite = $request->input('unite');
        $detail_devis->pu = $request->input('pu');
        $detail_devis->date_devis = $request->input('date_devis');

        $detail_devis->save();

        return redirect()->route('devis.index');
    }
    
    public function edit($detail_devi)
    {
        $detail_devis = DetailDevis::findOrFail($detail_devi);
        return view('detail_devis.edit', compact('detail_devis'));
    }    

    public function update(UpdateDetailDevisRequest $request, $id)
    {
        $detail_devis = DetailDevis::findOrFail($id);
    
        $detail_devis->fill($request->only(['id_client', 'article', 'qte', 'unite', 'pu', 'date_devis']));
    
        $detail_devis->save();
    
        return redirect()->route('devis.index');
    }
    
    public function show($clientId)
    {
        $client = Client::find($clientId);
        $detail_deviss = DetailDevis::where('id_client', $clientId)->get();
        $avances = Avance::where('id_client', $clientId)->get(); // Assuming Avance is the model for avances table
        return view('detail_devis.show', compact('detail_deviss', 'client', 'avances'));
    }

    public function destroy($id)
    {
        $detail_devis = DetailDevis::findOrFail($id);
        $detail_devis->delete();

        return redirect()->route('devis.index')
            ->with('success', 'Le detail_devis a été supprimé avec succès.');
    }

    public function devis($clientId)
    {
        $client = Client::find($clientId);
        $detail_deviss = DetailDevis::where('id_client', $clientId)->get();
        $avances = Avance::where('id_client', $clientId)->get();

        $pdf = PDF::loadView('detail_devis.devis', compact('detail_deviss', 'client', 'avances'));

        return $pdf->download('detail_devis.pdf');
    }
}