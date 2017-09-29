<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio_adquirido extends Model
{
    protected $table = 'servicios_adquiridos';

    protected $fillable = [
        'user_id',
        'servicio_id',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
}
