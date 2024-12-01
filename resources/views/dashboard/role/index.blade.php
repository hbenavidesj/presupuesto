@extends ('dashboard.master')
@section('titulo', 'roles')
@section('contenido')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{url('dashboard/role/create')}}" button type="button" class="btn btn-dark" >Nuevo Rol</a>
    </div>
    <br>
   <table class="table table-striped table-hover">
    <thead>
            <tr>
                <th>id</th>
                <th>Rol</th>
                <th>Permisos</th>
                <th>Editar</th>
                <th>Eliminar</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{$rol->id}}</td>
                    <td>{{$rol->name}}</td>
                    <td>
                     @forelse ($rol->permissions as $permission)
                         <span>{{$permission->name}}</span>
                     @empty
                       <samp>
                        No tiene permisos asignados
                        </samp>  
                     @endforelse   

                    </td>
                    <td>
                        <a href="{{url('dashboard/role/'.$rol->id.'/edit')}}"class="bi bi-pencil"></a>
                    </td>
                    <td>
                        <form action="{{url('dashboard/role/'.$rol->id)}}" method= "post">
                        @method('DELETE')
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

        </table>

</x-app-layout>