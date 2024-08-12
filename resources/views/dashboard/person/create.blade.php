@extends('dashboard.master')
@section('titulo', 'Nuevapersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{route('person.store')}}" method="post">
        @csrf

        <div class="form-group row">
            <label for="type"class="col-sm-2 col-form-label">Persona</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="type">
                    <option value="persona natural">persona natural</option>
                    <option value="empresa">empresa</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="document_Type"class="col-sm-2 col-form-label">Tipo de documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="document_Type" id="document_Type">
                    <option value="cc">Cedula de ciudadania</option>
                    <option value="TI">Tarjeta de identidad</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Nit">NIT</option>
                    <option value="Rc">Registro Civil</option>
 
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="idPersona"class="col-sm-2 col-form-label">Identificacion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="idPersona" id="idPersona" placeholder="identificacion persona">
            </div>
        </div>

        

       

        <div class="form-group row">
            <label for="Name"class="col-sm-2 col-form-label">Nombres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Nombres">
            </div>
        </div>
        
        

      
        <div class="form-group row">
            <label for="Adress"class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Direccion">
            </div>
        </div>
        <div class="form-group row">
            <label for="telefono"class="col-sm-2 col-form-label">telefono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Numero Telefonico">
            </div>
        </div>
        <div class="form-group row">
            <label for="email"class="col-sm-2 col-form-label">Correo Electronico</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" placeholder="ejemplo@dominio.com">
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
                    <a href="{{url('dashboard/person')}}" <button type="button" class="btn btn-secondary"></button>Regresar</a>
                    
            </div>
        </div>

    </form>
</div>
@endsection