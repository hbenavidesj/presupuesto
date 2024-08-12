<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\person;

class personapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $people = person::all();
      return($people);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person= new person();
               
        $person->type=$request->input('type');
        $person->document_Type=$request->input('document_Type');
        $person->idPersona=$request->input('idPersona');
        $person->Name=$request->input('Name');
        $person->Adress=$request->input('Adress');
        $person->telefono=$request->input('telefono');
        $person->email=$request->input('email');
        $person->user_id=$request->input('user_id');
        $person->save();
        return $person;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $person=person::find($id);
        $person->type=$request->input('type');
        $person->document_Type=$request->input('document_Type');
        $person->idPersona=$request->input('idPersona');
        $person->Name=$request->input('Name');
        $person->Adress=$request->input('Adress');
        $person->telefono=$request->input('telefono');
        $person->email=$request->input('email');
        $person->user_id=$request->input('user_id');
        $person->save();
        return $person;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person=person::find($id);
        $person->delete();
        return ("categoria Eliminada");
    }
}
