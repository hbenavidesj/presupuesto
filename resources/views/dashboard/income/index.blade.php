@extends ('dashboard.master')
@section('titulo', 'incomes')
@include('layouts/navigation')
@section('contenido')

<main>
    <div>
        <h1> Transacciones de ingresos </h1>
        <br>
        <a href="{{url('dashboard/income/create')}}"<button type="button" class="btn btn-dark"></button>Nueva Transaccion </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>idPersona</th>
                    <th>detalleIngreso</th>
                    <th>valor_Ingreso</th>
                    <th>mes</th>
                    <th>Año</th>
                    <th>user_id</th>
                    <th>idIngreso</th>
                    <th>editar</th>
                    <th>eliminar</th>
                    
                </tr>
            </thead>
            <tbody>

            @foreach($income as $income)
                <tr>
                    <td scope="row">{{$income->id}}</td>
                    <td>{{$income->idPersona}}</td>
                    <td>{{$income->detalleIngreso}}</td>
                    <td>{{$income->valor_Ingreso}}</td>
                    <td>{{$income->mes}}</td>
                    <td>{{$income->Año}}</td>
                    <td>{{$income->user_id}}</td>
                    <td>{{$income->idIngreso}}</td>
                    <td><a href="{{url('dashboard/income/'.$income->id.'/edit')}}"class="bi bi-pencil"></a></td>
                    <td>
                        <form action="{{url('dashboard/income/'.$income->id)}}"method="post">
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