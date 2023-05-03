<?php

namespace App\Http\Controllers;
use App\Models\Placard;
use App\Models\DetailPlacard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailPlacardRequest;
use App\Http\Requests\UpdateDetailPlacardRequest;

class DetailPlacardController extends Controller
{
    public function index()
    {
        return view('detail_placard.index', [
            'detail_placards' => DetailPlacard::all()
        ]);
    }

    public function create(Request $request)
    {
        $placardId = $request->input('placardId');
        $placard = Placard::find($placardId);
        return view('detail_placard.create', compact('placard'));
    }    

    public function store(StoreDetailPlacardRequest $request)
    {
        $detail_placard = new DetailPlacard();
        $detail_placard->id_placard = $request->id_placard;
        $detail_placard->hauteur = $request->hauteur;
        $detail_placard->largeur = $request->largeur;
        $detail_placard->profondeur = $request->profondeur;
        $detail_placard->qte = $request->qte;
        $detail_placard->appartement = $request->appartement;


        if ($request->hasFile('image')) {
            $detail_placard->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $detail_placard->image);
        }
        
        $detail_placard->save();
        return redirect()->route('placard.index');
    }

    public function edit(DetailPlacard $detail_placard)
    {
        return view('detail_placard.edit', compact('detail_placard'));
    }

    public function update(UpdateDetailPlacardRequest $request, DetailPlacard $detail_placard)
    {
        $detail_placard->update($request->except('image')); // mise à jour des autres attributs du détail
            
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/'.$detail_placard->image); // supprimez l'ancienne image
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $detail_placard->image = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $detail_placard->image);
            $detail_placard->save();
        }
            
        return redirect()->route('placard.index');
    }      

    public function show($placardId)
    {
        $placard = Placard::find($placardId);
        $detail_placards = DetailPlacard::where('id_placard', $placardId)->get();
        return view('detail_placard.show', compact('detail_placards', 'placard'));
    }

    public function destroy($id)
    {
        $detail_placard = DetailPlacard::findOrFail($id);
        $detail_placard->delete();

        return redirect()->route('placard.index')
            ->with('success', 'Le detail_placard a été supprimé avec succès.');
    }

    public function debitage($placardId)
    {
        $placard = Placard::find($placardId);        
        $detail_placards = DetailPlacard::where('id_placard', $placardId)->get();
        return view('detail_placard.debitage', compact('placard', 'detail_placards'));
    }
    
    public function allDebitage($placardId)
    {
        $placard = Placard::find($placardId);        
        $detail_placards = DetailPlacard::where('id_placard', $placardId)->get();
        return view('detail_placard.All_Debitage', compact('placard', 'detail_placards'));
    } 
}