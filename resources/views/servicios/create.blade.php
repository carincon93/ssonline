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
    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
        {{ session()->get('status') }}
    </div>
    @endif
    <div class="col-md-12">
        <h1>Añadir Servicios</h1>
    </div>
    <div class="col-md-12">
    	<form action="{{ url('admin/servicios') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Añadir</button>
            </div>
        </form>
    </div>
@endsection


