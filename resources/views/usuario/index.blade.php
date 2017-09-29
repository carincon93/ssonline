@extends('layouts.dashboard')

@section('title', 'Administración de usuarios')

@section('content')
    @include('layouts.modal_eliminar')
    <div class="dashboard-content">
        @include('layouts.messages')
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

                        <td class="actions-tbl">
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
