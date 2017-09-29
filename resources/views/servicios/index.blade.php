@extends('layouts.dashboard')

@section('title', 'Administracion de servicios')

@section('content')
    @include('layouts.modal_eliminar')
    <div class="dashboard-content">
        @include('layouts.messages')
        <a href="{{ url('admin/servicios/create') }}" class="btn btn-success">Añadir</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count =1;
                    @endphp
                    @foreach($servicio as $serv)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $serv->descripcion }}</td>
                        <td class="actions-tbl">
                            <a class="btn btn-round btn-link"  href="{{ url('admin/servicios/' . $serv->id.'/edit')}}">
                                <i class="fa fa-fw fa-edit"></i>
                            </a>
                            <form action="{{ url('admin/servicios/' . $serv->id)}}" method="POST" style="display: inline-block;">
                                {{ method_field('delete') }}
                                {!! csrf_field() !!}
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
