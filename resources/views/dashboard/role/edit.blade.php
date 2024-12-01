@extends ('dashboard.master')
@section('titulo', 'roles')
@section('contenido')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
  <form action="{{url('dashboard/role/'.$role->id )}}" method="post">     
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nombre del Rol:</label>
        <div>
            <input type="text"name ="name" id="name"
            value="{{$role->name}}">
        </div>
    </div>
    <div>
        <label for="permissions">Permisos del Rol:</label>
    </div>
    <div>
        <table  class="table table-striped table-hover">
            <tbody>
                @foreach ($permission as $id =>$permission)
                <tr>
                    <td>
                        <input type="checkbox" name="permission[]" value="{{$id}}"
                        {{$role->permissions->contains($id) ? 'checked' : ''}}
                        >
                        {{$permission}}
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>
        <br>
        <div>
            <button type="submit"class="btn btn-dark">Guardar</button>
            <a href="{{url('dashboard/role')}}" class="btn btn-dark">Cancelar</a>
        </div>

    </div>



  </form>
</x-app-layout>