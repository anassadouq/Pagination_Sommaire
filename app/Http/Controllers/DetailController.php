<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdateDetailRequest;

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
    
        // Redirect to the same page with the detail ID
        return redirect()->route('detail.show', ['clientId' => $request->id_client]);
    }    

    public function edit(Detail $detail)
    {
        return view('detail.edit', compact('detail'));
    }

    public function update(UpdateDetailRequest $request, Detail $detail)
    {
        $detail->update($request->except('image')); // mise à jour des autres attributs du détail
    
        // mise à jour de l'image si une nouvelle a été téléchargée
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/'.$detail->image); // supprimez l'ancienne image
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $detail->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $detail->image);
        }
        
        $detail->save();
        
        // Redirect to the same page with the detail ID
        return redirect()->route('detail.show', ['clientId' => $detail->id_client]);
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
        $clientId = $detail->id_client; // Get the client ID before deleting the detail
        $detail->delete();
    
        // Redirect to the same page with the client ID
        return redirect()->route('detail.show', ['clientId' => $clientId])
            ->with('success', 'Le detail a été supprimé avec succès.');
    }    

    public function debitage($clientId)
    {
        $client = Client::find($clientId);        
        $details = Detail::where('id_client', $clientId)->get();
        return view('detail.debitage', compact('client', 'details'));
    }
    
    public function allDebitage($clientId)
    {
        $client = Client::find($clientId);        
        $details = Detail::where('id_client', $clientId)->get();
        return view('detail.All_Debitage', compact('client', 'details'));
    }   
}