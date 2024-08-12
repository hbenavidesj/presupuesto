<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    use HasFactory;
    public function person(){
    return $this->belongsTo(person::class,'idPersona','idPersona');
    }
    public function bincome(){
        return $this->belongsTo(bincome::class,'idIngreso','idPresupuesto');
    }

   
}
