<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'foto', 'sitio_web', 'rol', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'rol', 'password', 'remember_token',
    ];

    public function servicios_adquiridos()
    {
    	return $this->hasMany('App\Servicio_adquirido');
    }
}
