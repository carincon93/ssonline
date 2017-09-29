<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio_adquirido extends Model
{
    protected $table = 'servicios_adquiridos';

    protected $fillable = [
        'nombre_usuario',
        'email_usuario',
        'servicio',
    ];
}
