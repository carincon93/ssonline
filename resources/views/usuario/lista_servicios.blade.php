@extends('layouts.dashboard')

@section('title', 'Lista de servicios adquiridos')

@section('content')
    <div class="dashboard-content">
        @include('layouts.messages')
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre cliente</th>
                        <th>Correo electrónico</th>
                        <th>Nombre servicio</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1;
                    @endphp
                    @foreach($servicios as $servicio)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $servicio->user->name }}</td>
                        <td>{{ $servicio->user->email }}</td>
                        <td>{{ $servicio->servicio->descripcion }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
