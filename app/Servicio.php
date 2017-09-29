<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable = [
        'descripcion',
        'tipo_servicio',
    ];

    public function servicios_adquiridos()
    {
    	return $this->hasMany('App\Servicio_adquirido');
    }
}
