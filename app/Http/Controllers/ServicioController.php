<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicio = Servicio::all();
        return view('servicios.index')->with('servicio', $servicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio               = new Servicio();
        $servicio->descripcion  = $request->descripcion;
        $servicio->tipo_servicio  = $request->tipo_servicio;

        $servicio->save();
        return redirect('admin/servicios/')->with('status', 'El servicio '.$servicio->descripcion.' fue adicionado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.edit')->with('servicio', $servicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicio = Servicio::find($id);
        $servicio->descripcion  = $request->descripcion;
        $servicio->tipo_servicio  = $request->tipo_servicio;
        $servicio->save();
        return redirect('admin/servicios/')->with('status', 'El servicio '.$servicio->descripcion.' fue modificado con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicio::destroy($id);
        return redirect('admin/servicios/')->with('status', 'El servicio fue eliminado con éxito');
    }
}
