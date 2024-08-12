@extends('dashboard.master')
@section('titulo', 'nuevoEgreso')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1 class="mb-4">Nueva transaccion de Egreso</h1>
    <form action="{{route('expense.store')}}" method="post">
        @csrf

        <div class="form-group row">
            <label for="idPersona"class="col-sm-2 col-form-label">Identificacion</label>
            <div class="col-sm-10">
                <select name="idPersona" class="form-select" required >
                <option value="">Seleccionar una Persona</option>
                @foreach($person as $person)
                <option value="{{$person->idPersona}}">{{$person->idPersona}}</option>
                @endforeach
            </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="idEgreso"class="col-sm-2 col-form-label">clase de egreso</label>
            <div class="col-sm-10">
                <select name="idEgreso" class="form-select" required >
                <option value="">Seleccionar un rubro presupuestal</option>
                @foreach($bexpense as $bexpense)
                <option value="{{$bexpense->idPresupuesto}}">{{$bexpense->idPresupuesto}}</option>
                @endforeach
            </select>
            </div>
        </div> 


        <div class="form-group row">
            <label for="Año"class="col-sm-2 col-form-label">Año</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Año" id="Año" placeholder="Año">
            </div>
        </div>
     
        <div class="form-group row">
            <label for="mes"class="col-sm-2 col-form-label">Mes</label>
            <div class="col-sm-10">
                <select class="form-control" name="mes" id="mes">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>

                </select>
            </div>
        </div>
       
        <div class="form-group row">
            <label for="detalleEgreso"class="col-sm-2 col-form-label">Detalle egreso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="detalleEgreso" id="detalleEgreso" placeholder="detalle Egreso">
            </div>
        </div>

    
        <div class="form-group row">
            <label for="valor_Egreso"class="col-sm-2 col-form-label">valor Egreso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="valor_Egreso" id="valor_Egreso" placeholder="valor transaccion">
            </div>
        </div>

    
     

        <div class="form-group row">
            <label for="user_id"class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <select class="form-control" name="user_id" id="user_id">
                    <option value="1">1</option>
                </select>
            </div>
        </div>

    
             

        <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <a href="{{url('dashboard/expense')}}" <button type="button" class="btn btn-secondary"></button>Regresar</a>
                    
            </div>
        </div>

    </form>
</div>

@endsection