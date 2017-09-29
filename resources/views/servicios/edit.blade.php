@extends('layouts.dashboard')

@section('title', 'Editar servicio')

@section('content')

    <div class="dashboard-content">
        <h1>Editar servicios</h1>
    	<form action="{{ url('admin/servicios/'.$servicio->id) }}" method="POST">
            {!! csrf_field() !!}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required>{{$servicio->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="tipo_servicio">Tipo de servicio</label>
                <select class="form-control" name="tipo_servicio" id="tipo_servicio" required>
                    <option value="servicios estrategicos" {{ $servicio->tipo_servicio == 'servicios estrategicos' ? 'selected="selected"' : ''}}>Servicios estratégicos</option>
                    <option value="servicios tecnologicos" {{ $servicio->tipo_servicio == 'servicios tecnologicos' ? 'selected="selected"' : ''}}>Servicios tecnológicos</option>
                    <option value="servicios interactivos" {{ $servicio->tipo_servicio == 'servicios interactivos' ? 'selected="selected"' : ''}}>Servicios interactivos</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Editar</button>
            </div>
        </form>
    </div>
@endsection
