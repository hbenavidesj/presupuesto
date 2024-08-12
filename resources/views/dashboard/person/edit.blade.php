@extends('dashboard.master')
@section('titulo', 'ModificarPersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Persona></h1>
    <form action="{{url('dashboard/person/'.$person->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="type"class="col-sm-2 col-form-label">Persona</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="type" value="{{$person-> type}}">
                    <option value="persona natural">persona natural</option>
                    <option value="empresa">empresa</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="document_Type"class="col-sm-2 col-form-label">Tipo de documento</label>
                <div class="col-sm-10">
                    <select class="form-control" name="document_Type" id="document_Type" >
                        <option value="cc" {{$person->document_Type=="cc"? 'selected':''}}>Cedula de ciudadania</option>
                        <option value="TI"{{$person->document_Type=="TI"? 'selected':''}}>Tarjeta de identidad</option>
                        <option value="Pasaporte"{{$person->document_Type=="Pasaporte"? 'selected':''}}>Pasaporte</option>
                        <option value="Nit"{{$person->document_Type=="Nit"? 'selected':''}}>NIT</option>
                        <option value="Rc"{{$person->document_Type=="Rc"? 'selected':''}}>Registro Civil</option>
                        
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="idPersona"class="col-sm-2 col-form-label">Numero de identificacion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="idPersona" id="idPersona" value="{{$person-> idPersona}}" >
                </div>
            </div>


            <div class="form-group row">
                <label for="Name"class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Name" id="Name" value="{{$person-> Name}}" placeholder="Nombres">
                </div>
            </div>
            
        <div class="form-group row">
            <label for="Adress"class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" value="{{$person-> Adress}}" placeholder="Direccion">
            </div>
        </div>
        <div class="form-group row">
            <label for="telefono"class="col-sm-2 col-form-label">telefono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono" id="telefono" value="{{$person-> telefono}}" placeholder="Numero Telefonico">
            </div>
        </div>
        <div class="form-group row">
            <label for="email"class="col-sm-2 col-form-label">Correo Electronico</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" value="{{$person-> email}}" placeholder="ejemplo@dominio.com">
            </div>
        </div>

        <div class="form-group row">
            <label for="user_id"class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <select class="form-control" name="user_id" id="user_id" value="{{$person-> user_id}}">
                    <option value="1">1</option>
                </select>
            </div>
        </div>

    

        <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success">Modificar</button>
                    <a href="{{url('dashboard/person')}}" <button type="button" class="btn btn-secondary"></button>Regresar</a>
                    
            </div>
        </div>

    </form>
</div>
@endsection