<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Servicio_adquirido;

class ServiciosController extends Controller
{
    public function agregar_servicio(Request $request)
    {
        $servicio = new Servicio_adquirido();
        $servicio->nombre_usuario = $request->nombre_usuario;
        $servicio->email_usuario = $request->email_usuario;
        $servicio->servicio = $request->servicio;
        $servicio->save();
    }
}
