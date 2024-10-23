<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importamos de spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $permisos=[
        //table presupuestoingresos
        'ver-bincomes',
        'crear-bincomes',
        'editar-bincomes',
        'eliminar-bincomes',
        //table presupuesto egresos
        'ver-bexpenses',
        'crear-bexpenses',
        'editar-bexpenses',
        'eliminar-bexpenses',
         //table ingresos
         'ver-incomes',
         'crear-incomes',
         'editar-incomes',
         'eliminar-incomes',
          //table egresos
        'ver-expenses',
        'crear-expenses',
        'editar-expenses',
        'eliminar-expenses',
         //table personas
         'ver-persona',
         'crear-persona',
         'editar-persona',
         'eliminar-persona',
        
       ];
       foreach($permisos as $permiso){
         Permission::create(['name'=> $permiso]);
       } 

    }
}
