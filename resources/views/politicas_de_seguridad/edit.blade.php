@extends('layouts.dashboard')

@section('title', 'Editar política de seguridad')

@section('content')
    <div class="dashboard-content">
        <h1>Editar servicios</h1>
    	<form action="{{ url('admin/politicas/'.$politica_de_seguridad->id) }}" method="POST">
            {!! csrf_field() !!}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required>{{$politica_de_seguridad->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Editar</button>
            </div>
        </form>
    </div>
@endsection
