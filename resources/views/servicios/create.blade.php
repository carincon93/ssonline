@extends('layouts.dashboard')

@section('title', 'Crear servicio')

@section('content')
    <div class="dashboard-content">
        <h1>Añadir servicios</h1>
    	<form action="{{ url('admin/servicios') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="tipo_servicio">Tipo de servicio</label>
                <select class="form-control" name="tipo_servicio" id="tipo_servicio" required>
                    <option value="">Seleccione una opción</option>
                    <option value="servicios estrategicos">Servicios estratégicos</option>
                    <option value="servicios tecnologicos">Servicios tecnológicos</option>
                    <option value="servicios interactivos">Servicios interactivos</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Añadir</button>
            </div>
        </form>
    </div>
@endsection
