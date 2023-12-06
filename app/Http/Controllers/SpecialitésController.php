<?php

namespace App\Http\Controllers;

use App\Models\specialités;
use Illuminate\Http\Request;

class SpecialitésController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialite = Specialités::all();
        return view('Specialité.liste', compact('specialite'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Specialité.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_spec'=>'required',




        ]);
       $spe = new specialités();
       $spe->nom_spec = $request->nom_spec;
       $spe->save();

        return redirect()->route('Specialité.index')->with('status', 'specialité a été ajouté avec succes.');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('specialité.details',[

            'specialité' => specialités::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $specialite = specialités::find($id);
        return view('specialité.modifier', compact('specialite'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $specialite = specialités::find($id);


        $specialite->update([
            'nom_spec'=>$request->nom_spec,


        ]);

        return redirect()->route('Specialité.index')->with('status', 'specialité a été modifié avec succes.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $specialite = Specialités::find($id);
        $specialite->delete();
        return redirect()->route('Specialité.index')->with('status', 'specialité a été supprimé avec succes.');

    }
}
