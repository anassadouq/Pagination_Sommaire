<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdateDetailRequest;

use PDF;

class DetailController extends Controller
{
    public function index()
    {
        return view('detail.index', [
            'details' => Detail::all()
        ]);
    }

    public function create(Request $request)
    {
        $clientId = $request->input('clientId');
        $client = Client::find($clientId);
        return view('detail.create', compact('client'));
    }    

    public function store(StoreDetailRequest $request)
    {
        $detail = new Detail();
        $detail->position = $request->position;
        $detail->id_client = $request->id_client;
        $detail->hauteur = $request->hauteur;
        $detail->largeur = $request->largeur;
        $detail->profondeur = $request->profondeur;
        $detail->qte = $request->qte;

        if ($request->hasFile('image')) {
            $detail->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $detail->image);
        }
        $detail->save();
        return redirect()->route('client.index');
    }

    public function edit(Detail $detail)
    {
        return view('detail.edit', compact('detail'));
    }

    public function update(UpdateDetailRequest $request, Detail $detail)
    {
        $detail->update($request->all());
        return to_route('client.index');
    }

    public function show($clientId)
    {
        $client = Client::find($clientId);
        $details = Detail::where('id_client', $clientId)->get();
        return view('detail.show', compact('details', 'client'));
    }

    public function destroy($id)
    {
        $detail = Detail::findOrFail($id);
        $detail->delete();

        return redirect()->route('client.index')
            ->with('success', 'Le detail a été supprimé avec succès.');
    }

    public function debitage($clientId)
    {
        $client = Client::find($clientId);        
        $details = Detail::where('id_client', $clientId)->get();
        return view('detail.debitage', compact('client', 'details'));
    }
    
    public function downloadPDF()
    {
        $client = Client::all();
        $details = Detail::all()->toArray();
        $pdf = PDF::loadView('detail.show', compact('client', 'details'))->setPaper('a4', 'landscape');
        return $pdf->download('post.pdf');
    }
    
    
}