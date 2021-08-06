<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nombre', 'raza', 'fecha_nacimiento','propietario',
        'tel_propietario','dir_propietario','email_propietario'
    ];

}
