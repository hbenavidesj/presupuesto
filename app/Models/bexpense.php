<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bexpense extends Model
{
    use HasFactory;
    public function person(){
    return $this->belongsTo(person::class,'idPersona','idPersona');
}
}