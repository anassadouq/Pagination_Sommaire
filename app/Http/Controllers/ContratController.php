<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Salarier;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreContratRequest;
use App\Http\Requests\UpdateContratRequest;
use Illuminate\Support\Facades\Storage;
use PDF;

class ContratController extends Controller
{
    public function index()
    {
        return view('contrat.index', [
            'contrats' => Contrat::all()
        ]);
    }   

    public function create(Request $request)
    {
        $salarierId = $request->input('salarierId');
        $salarier = Salarier::find($salarierId);
        return view('contrat.create', compact('salarier'));
    }    

    public function store(StoreContratRequest $request)
    {
        $contrat = new Contrat();
        $contrat->id_salarier = $request->id_salarier;
        $contrat->nomSociéte = $request->nomSociéte;
        $contrat->adresseSociéte = $request->adresseSociéte;
        $contrat->dateDepart = $request->dateDepart;
        $contrat->dateFinale = $request->dateFinale;

        $contrat->save();
        return redirect()->route('salarier.index');
    }

    public function edit(Contrat $contrat)
    {
        return view('contrat.edit', compact('contrat'));
    }

    public function update(UpdateContratRequest $request, Contrat $contrat)
    {
        $contrat->update($request->all());
        return to_route('salarier.index');
    }

    public function show($salarierId)
    {
        $salarier = Salarier::find($salarierId);
        $contrats = Contrat::where('id_salarier', $salarierId)->get();
        return view('contrat.show', compact('contrats', 'salarier'));
    }    

    public function destroy($id)
    {
        $contrat = Contrat::findOrFail($id);
        $contrat->delete();

        return redirect()->route('salarier.index')
            ->with('success', 'Le contrat a été supprimé avec succès.');
    }

    public function generatepdf($salarierId, $contratId)
    {
        $salarier = Salarier::findOrFail($salarierId);
        $contrat = Contrat::findOrFail($contratId);
    
        $pdf = PDF::loadView('contrat.contrat', compact('salarier', 'contrat'));
        $pdfContent = $pdf->output();
        $filename = $salarier->nom . '-' . $salarier->prenom . '-Contrat.pdf';
        Storage::put('public/' . $filename, $pdfContent);
    
        return Storage::download('public/' . $filename);
    }   

    public function soldett($salarierId, $contratId)
    {
        $salarier = Salarier::findOrFail($salarierId);
        $contrat = Contrat::findOrFail($contratId);
    
        $pdf = PDF::loadView('contrat.soldett', compact('salarier', 'contrat'));
        $pdfContent = $pdf->output();
        $filename = $salarier->nom . '-' . $salarier->prenom . '-Contrat.pdf';
        Storage::put('public/' . $filename, $pdfContent);
    
        return Storage::download('public/' . $filename);
    }
}