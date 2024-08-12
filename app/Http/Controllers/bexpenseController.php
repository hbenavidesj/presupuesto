<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bexpense;
use App\Models\person;

class bexpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bexpense = bexpense::all();
        return view('dashboard.bexpense.index',['bexpense'=>$bexpense]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=person::all();
        return view('dashboard.bexpense.create',['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bexpense= new bexpense();
       
        $idPersona = $request->input('idPersona');
        $categoria = $request->input('categoria');
        $Año= $request->input('Año');
        $mes = $request->input('mes');

        
        $bexpense->idPersona=$request->input('idPersona');
        $bexpense->categoria=$request->input('categoria');
        $bexpense->descripcion=$request->input('descripcion');
        $bexpense->valor_presupuesto=$request->input('valor_presupuesto');
        $bexpense->mes=$request->input('mes');
        $bexpense->Año=$request->input('Año');
        $bexpense->user_id=$request->input('user_id');
        $bexpense->idPresupuesto=$idPersona.'-'.$categoria.'-'.$Año.'-'.$mes;
        
        $bexpense->save();
        return view("dashboard.bexpense.message",['msg'=>"rubro presupuesta agregado con existo"]);
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
        $bexpense=bexpense::find($id);
        return view('dashboard.bexpense.edit',['bexpense'=>$bexpense,'person'=>person::all() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $bexpense=bexpense::find($id);
        $bexpense->idPersona=$request->input('idPersona');
        $bexpense->categoria=$request->input('categoria');
        $bexpense->descripcion=$request->input('descripcion');
        $bexpense->valor_presupuesto=$request->input('valor_presupuesto');
        $bexpense->mes=$request->input('mes');
        $bexpense->Año=$request->input('Año');
        $bexpense->user_id=$request->input('user_id');
        $bexpense->idPresupuesto=$request->input('idPresupuesto');
        $bexpense->save();
        return view("dashboard.bexpense.message",['msg'=>"rubro presupuesta actualizado con existo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bexpense=bexpense::find($id);
        $bexpense->delete();
        return redirect("dashboard/bexpense");
    }
}
