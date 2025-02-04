<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function index()
    {
        return view('summary.index', [
            'summaries' => Summary::all()
        ]);
    }

    public function create()
    {
        return view('summary.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Summary::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('summary.index')->with('success', 'Summary ajouté avec succès.');
    }

    public function edit(Summary $summary)
    {
        return view('summary.edit', compact('summary'));
    }

    public function update(Request $request, Summary $summary)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $summary->update($request->only(['title', 'description']));

        return redirect()->route('summary.index')->with('success', 'Summary mis à jour avec succès.');
    }

    public function destroy(Summary $summary)
    {
        $summary->delete();

        return redirect()->route('summary.index')->with('success', 'Le summary a été supprimé avec succès.');
    }

    public function generatepdf()
    {
        $summaries = Summary::all();
        $pdf = Pdf::loadView('summary.pdf', compact('summaries'));
        return $pdf->stream('summary.pdf');
    }
}