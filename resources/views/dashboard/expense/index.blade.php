@extends ('dashboard.master')
@section('titulo', 'expenses')
@include('layouts/navigation')
@section('contenido')

<main>
    <div>
        <h1> Transacciones de egrsos </h1>
        <br>
        <a href="{{url('dashboard/expense/create')}}"<button type="button" class="btn btn-dark"></button>Nueva Transaccion </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>idPersona</th>
                    <th>detalleEgreso</th>
                    <th>valor_Egreso</th>
                    <th>mes</th>
                    <th>Año</th>
                    <th>user_id</th>
                    <th>idEgreso</th>
                    <th>editar</th>
                    <th>eliminar</th>
                    
                </tr>
            </thead>
            <tbody>

            @foreach($expense as $expense)
                <tr>
                    <td scope="row">{{$expense->id}}</td>
                    <td>{{$expense->idPersona}}</td>
                    <td>{{$expense->detalleEgreso}}</td>
                    <td>{{$expense->valor_Egreso}}</td>
                    <td>{{$expense->mes}}</td>
                    <td>{{$expense->Año}}</td>
                    <td>{{$expense->user_id}}</td>
                    <td>{{$expense->idEgreso}}</td>
                    <td><a href="{{url('dashboard/expense/'.$expense->id.'/edit')}}"class="bi bi-pencil"></a></td>
                    <td>
                        <form action="{{url('dashboard/expense/'.$expense->id)}}"method="post">
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