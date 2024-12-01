@extends ('dashboard.master')
@section('titulo', 'personas')
@include('layouts/navigation')
@section('contenido')



<main>
    <div>
        <h1> Listado de personas</h1>
        <br>
        <a href="{{url('dashboard/person/create')}}"button type="button" class="btn btn-dark"></button>Nueva persona </a>
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>document_Type</th>
                    <th>idPersona</th>
                    <th>Name</th>
                    <th>Adress</th>
                    <th>telefono</th>
                    <th>email</th>
                    <th>user_id</th>
                    <th>editar</th>
                    <th>eliminar</th>
                    
                </tr>
            </thead>
            <tbody>

            @foreach($person as $person)
                <tr>
                    <td scope="row">{{$person->id}}</td>
                    <td>{{$person->type}}</td>
                    <td>{{$person->document_Type}}</td>
                    <td>{{$person->idPersona}}</td>
                    <td>{{$person->Name}}</td>
                    <td>{{$person->Adress}}</td>
                    <td>{{$person->telefono}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->user_id}}</td>
                    <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}"class="bi bi-pencil"></a></td>
                    <td>
                        <form action="{{url('dashboard/person/'.$person->id)}}"method="post">
                            @method("DELETE")
                            @csrf
                            <button class="bi bi-eraser-fill" type="submit"></button>
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