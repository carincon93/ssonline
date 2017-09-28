@extends('layouts.app')

@section('title', 'Administracion de Politicas de seguridad')

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
        <h1>Editar Servicios</h1>
    </div>
    <div class="col-md-12">
    	<form action="{{ url('admin/politicas/'.$politica_de_seguridad->id) }}" method="post">
            {!! csrf_field() !!}
            {{method_field('put')}}
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control">{{$politica_de_seguridad->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Editar</button>
            </div>
        </form>
    </div>
@endsection


