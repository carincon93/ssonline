<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::where("rol", "=", "administrador")->get(['id', 'name', 'email', 'sitio_web']);
        return view('administrador.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->sitio_web    = $request->sitio_web;
        $user->rol          = 'administrador';
        $user->password     = bcrypt( $request->input('password') );
        $user->save();
        return redirect('admin/administrador')->with('status', 'El administrador <strong>'.$user->name.'</strong>
         fue adicionado con exito!');
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
        $user = user::find($id);
        return view('administrador.edit')->with('user', $user);
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
        $user = user::find($id);
        $user->name               = $request->get('name');
        $user->email              = $request->get('email');
        $user->sitio_web          = $request->get('sitio_web');
        $user->password           = bcrypt( $request->input('password') );
        if ($user->save()) {
            return redirect('/admin/administrador')->with('status', 'El Administrador <strong>'.$user->name.'</strong> fue modificado con exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::destroy($id);
        return redirect('admin/administrador');
    }
}
