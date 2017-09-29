@extends('layouts.dashboard')

@section('title', 'Crear política de seguridad')

@section('content')
    <div class="dashboard-content">
        <h1>Añadir política de seguridad</h1>
    	<form action="{{ url('admin/politicas') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Añadir</button>
            </div>
        </form>
    </div>
@endsection
