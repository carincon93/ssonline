<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::put('/home/usuario/{id}', 'UserController@update');


Auth::routes();

Route::get('/nosotros', function ()
{
    return view('nosotros');
});

Route::get('/contactanos', function ()
{
    return view('contactanos');
});

Route::get('/seguridad', function ()
{
    $politicas = App\Politica_De_Seguridad::all();
    return view('seguridad')->with('politicas', $politicas);
});

Route::get('/servicios', function ()
{
    $servicios = App\Servicio::all();
    return view('servicios')->with('servicios', $servicios);
});

Route::get('/capacidad_respuesta', function ()
{
    return view('capacidad');
});


Route::prefix('admin')->group(function ()
{
    Route::get('/home', 'HomeController@index');
    Route::get('/editar_perfil', function ()
    {
        return view('editar_perfil');
    });
    Route::get('/adquirir_servicios', function ()
    {
        $servicios = App\Servicio::all();
        return view('adquirir_servicios')->with('servicios', $servicios);
    });

    Route::get('/lista_servicios', function ()
    {
        $servicios = App\Servicio_adquirido::all();
        return view('usuario.lista_servicios')->with('servicios', $servicios);
    });
    Route::resource('/usuarios', 'UserController')->middleware('admin');
    Route::resource('/servicios', 'ServicioController')->middleware('admin');
    Route::resource('/politicas', 'Politica_De_SeguridadController')->middleware('admin');

    Route::post('/agregar_servicio', 'ServiciosController@agregar_servicio');
});

Route::get('/admin', function() {
    return redirect('/admin/home');
});
