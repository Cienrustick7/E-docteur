<?php

namespace App\Http\Controllers;

use App\Models\Docteur;

use App\Models\Rendezvous;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rv = Rendezvous::all();
        return view('RV.liste', compact('rv'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docteur = Docteur::all();
        return view('RV.ajout', compact('docteur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nom' =>'required',
        //     'telephone' =>'required',
        //     'date'=>'required',
        //     'heure'=>'required',
        //     'departement'=>'required',
        //      'message'=>'required',


        // ]);
       $rv = new Rendezvous();
       $rv->nom = $request->nom;
       $rv->telephone = $request->telephone;
       $rv->date = $request->date;
       $rv->heure = $request->heure;
       $rv->departement = $request->departement;
       $rv->message = $request->message;
       $rv->save();

        return redirect('/')->with('status', 'rv a été ajouté avec succes.');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('rv.details',[

            'rv' => Rendezvous::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rv = Rendezvous::find($id);
        return view('rv.modifier', compact('rv'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rv = Rendezvous::find($id);


        $rv->update([
            'nom'=>$request->nom,
            'telephone'=>$request->telephone,
            'date'=>$request->date,
            'heure'=>$request->heure,
            'departement'=>$request->departement,
            'message'=>$request->message,


        ]);

        return redirect()->route('welcome')->with('status', 'rv a été modifié avec succes.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rv = Rendezvous::find($id);
        $rv->delete();
        return redirect()->route('welcome')->with('status', 'rv a été supprimé avec succes.');

    }
}
