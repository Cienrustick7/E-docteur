<?php

namespace App\Http\Controllers;

use App\Models\patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = patients::all();
        return view('Patient.liste', compact('patient'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Patient.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_pat'=>'required',
            'prenom_pat'=>'required',
            'age'=>'required',
            'sexe'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',


        ]);
       $patient = new patients();
       $patient->nom_pat = $request->nom_pat;
       $patient->prenom_pat = $request->prenom_pat;
       $patient->age = $request->age;
       $patient->sexe = $request->sexe;
       $patient->adresse = $request->adresse;
       $patient->telephone = $request->telephone;
       $patient->save();

        return redirect()->route('Patient.index')->with('status', 'patient ajouté avec succes.');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('patient.details',[

            'patient' => patients::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = patients::find($id);
        return view('patient.modifier', compact('patient'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = patients::find($id);


        $patient->update([
            'nom_pat'=>$request->nom_pat,
            'prenom_pat'=>$request->prenom_pat,
            'age'=>$request->age,
            'sexe'=>$request->sexe,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,

        ]);

        return redirect()->route('patient.index')->with('status', 'patient a été modifié avec succes.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = patients::find($id);
        $patient->delete();
        return redirect()->route('patient.index')->with('status', 'patient a été supprimé avec succes.');

    }
}
