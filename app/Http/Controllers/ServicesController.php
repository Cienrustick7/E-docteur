<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Services::all();
        return view('Service.liste', compact('service'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Service.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_serv'=>'required',
            'description'=>'required',



        ]);
       $service = new Services();
       $service->type_serv = $request->type_serv;
       $service->description = $request->description;
       $service->save();

        return redirect()->route('service.index')->with('status', 'service a été ajouté avec succes.');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('service.details',[

            'service' => Services::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Services::find($id);
        return view('service.modifier', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::find($id);


        $service->update([
            'type_serv'=>$request->type_serv,
            'description'=>$request->description,

        ]);

        return redirect()->route('service.index')->with('status', 'service a été modifié avec succes.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Services::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('status', 'service a été supprimé avec succes.');

    }
}
