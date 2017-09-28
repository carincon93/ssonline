@extends('layouts.app')

@section('title', 'Administración de usuarios')

@section('content')
    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
        {{ session()->get('status') }}
    </div>
    @endif
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo electrónico</th>
                        <th>Sitio web</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1;
                    @endphp
                    @foreach($user as $us)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                        <td>{{ $us->sitio_web }}</td>

                        <td>
                            <a class="btn btn-round btn-link"  href="{{ url('admin/usuarios/' . $us->id.'/edit')}}">
                                <i class="fa fa-fw fa-edit"></i>
                            </a>
                            <form action="{{ url('admin/usuario/' . $us->id)}}" method="POST" style="display: inline-block;">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button type="button" class="btn btn-round btn-delete btn-link">
                                    <i class="fa fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
