@extends('layouts.dashboard')

@section('title', 'Editar perfil')

@section('content')
<div class="dashboard-content">
    @include('layouts.messages')
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
            <input id="foto" type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
            <label for="sitio_web">Sitio web</label>
            <input id="sitio_web" type="text" class="form-control" name="sitio_web" value="{{ Auth::user()->sitio_web }}">
        </div>
        <button class="btn btn-success">Modificar</button>
    </form>
    @else
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
            <input id="foto" type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
            <label for="sitio_web">Sitio web</label>
            <input id="sitio_web" type="text" class="form-control" name="sitio_web" value="{{ Auth::user()->sitio_web }}">
        </div>
        <button class="btn btn-success">Modificar</button>
    </form>
    @endif
</div>

@endsection
