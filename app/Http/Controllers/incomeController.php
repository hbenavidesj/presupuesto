<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\income;
use App\Models\bincome;
use App\Models\person;

class incomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income = income::all();
        return view('dashboard.income.index',['income'=>$income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $person=person::all();
        $bincome=bincome::all();
        return view('dashboard.income.create',['bincome'=>$bincome],['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income= new income();
       
        $income->idPersona=$request->input('idPersona');
        $income->detalleIngreso=$request->input('detalleIngreso');
        $income->valor_Ingreso=$request->input('valor_Ingreso');
        $income->mes=$request->input('mes');
        $income->Año=$request->input('Año');
        $income->user_id=$request->input('user_id');
        $income->idIngreso=$request->input('idIngreso');
        $income->save();
        return view("dashboard.income.message",['msg'=>"transaccion agregada con existo"]);
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
        $income=income::find($id);
        return view('dashboard.income.edit',['income'=>$income,'person'=>person::all(), 'bincome'=>bincome::all() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income=income::find($id);
        $income->idPersona=$request->input('idPersona');
        $income->detalleIngreso=$request->input('detalleIngreso');
        $income->valor_Ingreso=$request->input('valor_Ingreso');
        $income->mes=$request->input('mes');
        $income->Año=$request->input('Año');
        $income->user_id=$request->input('user_id');
        $income->idIngreso=$request->input('idIngreso');
        $income->save();
        return view("dashboard.income.message",['msg'=>"transaccion actualizada con existo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income=income::find($id);
        $income->delete();
        return redirect("dashboard/income");
    }
}
