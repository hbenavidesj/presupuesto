<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\expense;
use App\Models\bexpense;
use App\Models\person;

class expenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expense = expense::all();
        return view('dashboard.expense.index',['expense'=>$expense]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=person::all();
        $bexpense=bexpense::all();
        return view('dashboard.expense.create',['bexpense'=>$bexpense],['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expense= new expense();
       
        $expense->idPersona=$request->input('idPersona');
        $expense->detalleEgreso=$request->input('detalleEgreso');
        $expense->valor_Egreso=$request->input('valor_Egreso');
        $expense->mes=$request->input('mes');
        $expense->Año=$request->input('Año');
        $expense->user_id=$request->input('user_id');
        $expense->idEgreso=$request->input('idEgreso');
        $expense->save();
        return view("dashboard.expense.message",['msg'=>"transaccion agregada con existo"]);
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
        $expense=expense::find($id);
        return view('dashboard.expense.edit',['expense'=>$expense,'person'=>person::all(), 'bexpense'=>bexpense::all() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expense=expense::find($id);
        
        $expense->idPersona=$request->input('idPersona');
        $expense->detalleEgreso=$request->input('detalleEgreso');
        $expense->valor_Egreso=$request->input('valor_Egreso');
        $expense->mes=$request->input('mes');
        $expense->Año=$request->input('Año');
        $expense->user_id=$request->input('user_id');
        $expense->idEgreso=$request->input('idEgreso');
        $expense->save();
        return view("dashboard.expense.message",['msg'=>"transaccion actualizada con existo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense=expense::find($id);
        $expense->delete();
        return redirect("dashboard/expense");
    }
}
