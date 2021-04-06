<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $fillable = [
        'nombre','sexo','cedula'
    ];
}
