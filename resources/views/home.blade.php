@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
<<<<<<< HEAD
                    <div class="row">
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/usuarios') }}" class="text-center card-dashboard">
                                    Usuarios
                                    <div class="">
                                        <i class="fa fa-fw fa-user fa-4x icon-dashboard"></i>                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/servicios') }}" class="text-center card-dashboard">
                                    Servicios
                                    <div class="">
                                        <i class="fa fa-fw fa-cog fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/politicas') }}" class="text-center card-dashboard">
                                    Políticas de seguridad
                                    <div class="">
                                        <i class="fa fa-fw fa-shield fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                    @if(Auth::user()->rol != 'admin')
                    <form action="{{url('home/usuario/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        {{method_field('put')}}
                        <div class="form-group">
                            <label for="name">Nombre completo</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input id="email" type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input id="foto" type="file" class="form-control" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="sitio_web">Sitio web</label>
                            <input id="sitio_web" type="text" class="form-control" name="sitio_web" value="{{ Auth::user()->sitio_web }}">
                        </div>
                        <button class="btn btn-success">Modificar</button>
                    </form>
                    @endif
=======

                    Usted está conectado!
>>>>>>> a6960721c1e3d45580b181dc8b869c6045df058e
                </div>
            </div>
        </div>
    </div>
@endsection
