@extends('layouts.app')

@section('content')
<section class="background-page">
    <div class="col-md-4 col-md-offset-4">
        <!-- multistep form -->
        <form action="{{ url('admin/administrador') }}" method="POST" id="administrador">
            {{ csrf_field() }}
            <h3>Administrador</h3>
            <div class="form-group">
                <label for="name">Nombre completo </label>
                <input class="form-control required" type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico </label>
                <input class="form-control required" type="text" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="sitio_web">Sitio Web</label>
                <input class="form-control required" type="text" name="sitio_web" value="{{ old('sitio_web') }}">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input class="form-control required" type="password" name="password" value="">
            </div>
            <button type="submit" class="btn new-btn-success">Añadir</button>
        </form>
    </div>
</section>
@endsection