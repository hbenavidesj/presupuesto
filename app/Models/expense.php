<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    use HasFactory;
    public function person(){
        return $this->belongsTo(person::class,'idPersona','idPersona');
        }
        public function bexpense(){
            return $this->belongsTo(bincome::class,'idEgreso','idPresupuesto');
}
}
