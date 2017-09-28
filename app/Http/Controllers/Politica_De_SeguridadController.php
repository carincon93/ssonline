<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Politica_De_Seguridad;
class Politica_De_SeguridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $politica_de_seguridad = politica_de_seguridad::all();
        return view('politicas_de_seguridad.index')->with('politica_de_seguridad', $politica_de_seguridad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('politicas_de_seguridad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $politica_de_seguridad               = new Politica_de_seguridad();
        $politica_de_seguridad->descripcion  = $request->descripcion;
        $politica_de_seguridad->save();
        return redirect('admin/politicas/')->with('status', 'La politica de seguridad <strong>'.$politica_de_seguridad->descripcion.'</strong>fue adicionado con exito!');
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
        $politica_de_seguridad = politica_de_seguridad::find($id);
        return view('politicas_de_seguridad.edit')->with('politica_de_seguridad', $politica_de_seguridad);
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
        $politica_de_seguridad = politica_de_seguridad::find($id);
        $politica_de_seguridad->descripcion  = $request->descripcion;
        $politica_de_seguridad->save();
        return redirect('admin/politicas/')->with('status', 'La politica de seguridad <strong>'.$politica_de_seguridad->descripcion.'</strong>fue modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        politica_de_seguridad::destroy($id);
        return redirect('admin/politicas/'); 
    }
}
