@extends ('dashboard.master')
@section('titulo', 'presupuesto')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Detalle presupuesto de ingresos</h1>
    <a href="{{url('dashboard/bincome/create')}}"class="btn btn-primary btn-sm">Nuevo Rubro Presupuestal</a>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>id</th>
            <th>idPersona</th>
            <th>categoria</th>
            <th>descripcion</th>
            <th>valor_presupuesto</th>
            <th>mes</th>
            <th>Año</th>
            <th>user_id</th>
            <th>idPresupuesto</th>
            <th>editar</th>
            <th>eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bincome as $bincome)
                <tr>
                    <td scope="row">{{$bincome->id}}</td>
                    <td>{{$bincome->idPersona}}</td>
                    <td>{{$bincome->categoria}}</td>
                    <td>{{$bincome->descripcion}}</td>
                    <td>{{$bincome->valor_presupuesto}}</td>
                    <td>{{$bincome->mes}}</td>
                    <td>{{$bincome->Año}}</td>
                    <td>{{$bincome->user_id}}</td>
                    <td>{{$bincome->idPresupuesto}}</td>
                    <td><a href="{{url('dashboard/bincome/'.$bincome->id.'/edit')}}"class="bi bi-pencil"></a></td>
                    <td>
                        <form action="{{url('dashboard/bincome/'.$bincome->id)}}"method="post">
                            @method("DELETE")
                            @csrf
                            <button class="bi bi-eraser-fill" tupe="submit"></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection