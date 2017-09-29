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
        $servicio->user_id = $request->user_id;
        $servicio->servicio_id = $request->servicio_id;
        $servicio->save();
    }
}
