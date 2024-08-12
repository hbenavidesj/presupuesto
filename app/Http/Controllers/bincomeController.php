<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bincome;
use App\Models\person;

class bincomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bincome = bincome::all();
        return view('dashboard.bincome.index',['bincome'=>$bincome]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=person::all();
        return view('dashboard.bincome.create',['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bincome= new bincome();
       
        $idPersona = $request->input('idPersona');
       $categoria = $request->input('categoria');
       $Año= $request->input('Año');
       $mes = $request->input('mes');
       

        $bincome->idPersona=$request->input('idPersona');
        $bincome->categoria=$request->input('categoria');
        $bincome->descripcion=$request->input('descripcion');
        $bincome->valor_presupuesto=$request->input('valor_presupuesto');
        $bincome->mes=$request->input('mes');
        $bincome->Año=$request->input('Año');
        $bincome->user_id=$request->input('user_id');
        $bincome->idPresupuesto= $idPersona.'-'.$categoria.'-'.$Año.'-'.$mes;
        $bincome->save();
        return view("dashboard.bincome.message",['msg'=>"rubro presupuesta agregado con existo"]);
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
    public function edit( $id)
    {
        
        $bincome=bincome::find($id);
        return view('dashboard.bincome.edit',['bincome'=>$bincome,'person'=>person::all() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
    
        
        $bincome=bincome::find($id);
        $bincome->idPersona=$request->input('idPersona');
        $bincome->categoria=$request->input('categoria');
        $bincome->descripcion=$request->input('descripcion');
        $bincome->valor_presupuesto=$request->input('valor_presupuesto');
        $bincome->mes=$request->input('mes');
        $bincome->Año=$request->input('Año');
        $bincome->user_id=$request->input('user_id');
        $bincome->idPresupuesto=$request->input('idPresupuesto');
        $bincome->save();
        return view("dashboard.bincome.message",['msg'=>"rubro presupuesta actualizado con existo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $bincome=bincome::find($id);
        $bincome->delete();
        return redirect("dashboard/bincome");
    }
}
