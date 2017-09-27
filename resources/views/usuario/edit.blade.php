@extends('layouts.app')

@section('title', 'Administracion de Usuarios')

@section('content')
    @if ($errors->has('token_error'))
    <!-- Modal -->
    <div class="modal fade" id="modalSession" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sesión expirada</h4>
                </div>
                <div class="modal-body">
                    {{ $errors->first('token_error') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn new-btn-success">
                        <a href="{{ url('/') }}">Volver a la página principal</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="col-md-12">
    	<form action="{{url('admin/usuario/'.$user->id)}}" method="post">
            {!! csrf_field() !!}
            {{method_field('put')}}
            <div class="col-md-6">
                <label for="name">Nombre Completo</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">  
            </div>
            <div class="col-md-6">
                <label for="email">Correo Electronico</label>
                <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <br><br><br>
            <div class="col-md-6">
                <label for="sitio_web">Sitio Web</label>
                <input id="sitio_web" type="text" class="form-control" name="sitio_web" value="{{ $user->sitio_web }}">
            </div>
            <br><br><br><br>
            <div class="col-md-12">
                <button class="btn btn-success"> Modificar</button>       
            </div>
        </form>
    </div>
@endsection


