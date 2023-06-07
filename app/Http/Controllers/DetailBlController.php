<?php

namespace App\Http\Controllers;
use App\Models\Bl;
use App\Models\Fournisseur;
use App\Models\DetailBl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailBlRequest;
use App\Http\Requests\UpdateDetailBlRequest;
use PDF;

class DetailBlController extends Controller
{
    public function index()
    {
        $detail_bls = DetailBl::all();
        return view('detail_bl.index', compact('detail_bls'));
    }

    public function create(Request $request)
    {
        $blId = $request->input('blId');
        $bl = Bl::find($blId);
        $fournisseur = Fournisseur::find($bl->fournisseur_id);
        return view('detail_bl.create', compact('bl', 'fournisseur'));
    }           
    
    public function store(StoreDetailBlRequest $request)
    {
        $detail_bl = new DetailBl();
        $detail_bl->id_bl = $request->input('id_bl');
        $detail_bl->id_fournisseur = $request->input('id_fournisseur');
        $detail_bl->code = $request->input('code');
        $detail_bl->designation = $request->input('designation');
        $detail_bl->qte = $request->input('qte');
        $detail_bl->pu = $request->input('pu');
        $detail_bl->unite = $request->input('unite');
        $detail_bl->save();
    
        $blId = $detail_bl->id_bl; // Obtenez l'ID du BL correspondant au détail créé
        $bl = Bl::find($blId); // Récupérer le BL correspondant au détail créé
        $fournisseur = Fournisseur::find($detail_bl->id_fournisseur); // Récupérer le fournisseur correspondant au détail créé
    
        return redirect()->route('detail_bl.show', ['blId' => $blId])->with('success', 'Le détail de BL a été créé avec succès.')
            ->with('bl', $bl)
            ->with('fournisseur', $fournisseur);
    }       
    
    public function edit($detail_devi)
    {
        $detail_bl = DetailBl::findOrFail($detail_devi);
        $bl = Bl::find($detail_bl->id_bl);
        return view('detail_bl.edit', compact('detail_bl', 'bl'));
    }
       
    public function update(UpdateDetailBlRequest $request, $id)
    {
        $detail_bl = DetailBl::findOrFail($id);
    
        // Mise à jour des informations du Detailbl
        $detail_bl->fill($request->only(['code', 'designation', 'qte', 'pu','unite']));
        $detail_bl->save();
    
        // Vérification et mise à jour des informations du bl
        if ($detail_bl->id_bl != $request->input('id_bl')) {
            $bl = Bl::find($request->input('id_bl'));
            if ($bl) {
                $bl->save();
            }
        }
    
        $blId = $detail_bl->id_bl; // Obtenez l'ID du BL correspondant au détail modifié
    
        return redirect()->route('detail_bl.show', ['blId' => $blId])->with('success', 'Le détail de BL a été mis à jour avec succès.');
    }        
    
    public function show($blId)
    {
        $bl = Bl::find($blId);
        $fournisseur = Fournisseur::all();
        $detail_bls = DetailBl::where('id_bl', $blId)->get();
        return view('detail_bl.show', compact('detail_bls', 'bl', 'fournisseur'));
    }
    

    public function destroy($id)
    {
        $detail_bl = DetailBl::findOrFail($id);
        $blId = $detail_bl->id_bl; // Obtenez l'ID du BL correspondant au détail supprimé
        $detail_bl->delete();
    
        return redirect()->route('detail_bl.show', ['blId' => $blId])->with('success', 'Le détail de BL a été supprimé avec succès.');
    }

    public function generatePDF($blId)
    {
        $bl = Bl::find($blId);
        $fournisseur = Fournisseur::find($bl->fournisseur_id);
        $detail_bls = DetailBl::where('id_bl', $blId)->get();
        $pdf = PDF::loadView('detail_bl.devis', compact('detail_bls', 'bl', 'fournisseur'));
        $pdf->setPaper('A4', 'portrait');
        $formattedDate = \Carbon\Carbon::parse($bl->date)->format('d/m/Y');
        $filename = 'facture ' . $formattedDate . '.pdf';
        return $pdf->download($filename);
    }    
}