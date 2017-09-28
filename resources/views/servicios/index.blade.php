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
        <a href="{{ url('admin/servicios/create') }}" class="btn btn-success">Añadir</a>
    </div>
    <div class="col-md-12">
    	<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicio as $serv)
                        <tr>
                            <td>{{ $serv->id }}</td>
                            <td>{{ $serv->descripcion }}</td>
                            <td>
                                <a class="btn btn-round btn-link"  href="{{ url('admin/servicios/' . $serv->id.'/edit')}}">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <form action="{{ url('admin/servicios/' . $serv->id)}}" method="POST" style="display: inline-block;">
                                    {{ method_field('delete') }}
                                    {!! csrf_field() !!}
                                    <button type="button" class="btn btn-round btn-delete btn-link">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
@endsection


