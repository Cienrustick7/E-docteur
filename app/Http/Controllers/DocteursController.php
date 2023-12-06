<?php

namespace App\Http\Controllers;

use App\Models\Docteur;
use App\Models\specialités;
use Illuminate\Http\Request;


class DocteursController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docteur = Docteur::all();
        return view('Docteur.liste', compact('docteur'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialite = specialités::all();
        return view('Docteur.ajout', compact('specialite'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_doc'=>'required',
            'prenom_doc'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'specialites_id'=>'required',


        ]);
       $docteur = new Docteur();
       $docteur->nom_doc = $request->nom_doc;
       $docteur->prenom_doc = $request->prenom_doc;
       $docteur->adresse = $request->adresse;
       $docteur->telephone = $request->telephone;
       $docteur->email = $request->email;
       $docteur->specialites_id = $request->specialites_id;
       $docteur->save();

        return redirect()->route('Docteur.index')->with('status', 'directeur a été ajouté avec succes.');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Docteur.details',[

            'docteur' => Docteur::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $docteur = docteur::find($id);
        return view('Docteur.modifier', compact('docteur'));

    }

    /**
     * Update the specified resource in storage.
     */ 
    public function update(Request $request, string $id)
    {
        $docteur = docteur::find($id);


        $docteur->update([
            'nom_doc'=>$request->nom_doc,
            'prenom_doc'=>$request->prenom_doc,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'specialites_id'=>$request->specialites_id,

        ]);

        return redirect()->route('Docteur.index')->with('status', 'docteur a été modifié avec succes.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docteur = docteur::find($id);
        $docteur->delete();
        return redirect()->route('Docteur.index')->with('status', 'Docteur a été supprimé avec succes.');

    }
}
