<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\person;

class personController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person=person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.person.create');
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
        return view("dashboard.person.message",['msg'=>"Persona agregada con existo"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person=person::find($id);
        return view('dashboard.person.edit',['person'=>$person]);
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
        return view("dashboard.person.message",['msg'=>"Persona Modificada con existo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person=person::find($id);
        $person->delete();
        return redirect("dashboard/person");
    }
}
