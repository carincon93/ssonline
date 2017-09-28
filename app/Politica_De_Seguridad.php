<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politica_De_Seguridad extends Model
{
    protected $table = 'politicas_de_seguridad';
    protected $fillable = [
        'descripcion',    
    ];
}
