@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')
	<form action="{{url('admin/usuario/'.$user->id)}}" method="POST">
        {!! csrf_field() !!}
        {{method_field('put')}}
        <div class="form-group">
            <label for="name">Nombre completo</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <br><br><br>
        <div class="form-group">
            <label for="sitio_web">Sitio web</label>
            <input id="sitio_web" type="text" class="form-control" name="sitio_web" value="{{ $user->sitio_web }}">
        </div>
        <button class="btn btn-success">Guardar</button>
    </form>
@endsection
