@extends ('dashboard.master')
@section('titulo', 'presupuestoEgresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Detalle presupuesto de Egresos</h1>
    <a href="{{url('dashboard/bexpense/create')}}"class="btn btn-primary btn-sm">Nuevo Rubro Presupuestal</a>
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
            @foreach($bexpense as $bexpense)
                <tr>
                    <td scope="row">{{$bexpense->id}}</td>
                    <td>{{$bexpense->idPersona}}</td>
                    <td>{{$bexpense->categoria}}</td>
                    <td>{{$bexpense->descripcion}}</td>
                    <td>{{$bexpense->valor_presupuesto}}</td>
                    <td>{{$bexpense->mes}}</td>
                    <td>{{$bexpense->Año}}</td>
                    <td>{{$bexpense->user_id}}</td>
                    <td>{{$bexpense->idPresupuesto}}</td>
                    <td><a href="{{url('dashboard/bexpense/'.$bexpense->id.'/edit')}}"class="bi bi-pencil"></a></td>
                    <td>
                        <form action="{{url('dashboard/bexpense/'.$bexpense->id)}}"method="post">
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