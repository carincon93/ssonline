@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        @if( Auth::user()->rol == 'admin')
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/usuarios') }}" class="text-center card-dashboard">
                                    Usuarios
                                    <div class="">
                                        <i class="fa fa-fw fa-user fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/servicios') }}" class="text-center card-dashboard">
                                    Servicios
                                    <div class="">
                                        <i class="fa fa-fw fa-cog fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/politicas') }}" class="text-center card-dashboard">
                                    Políticas de seguridad
                                    <div class="">
                                        <i class="fa fa-fw fa-shield fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/admin/adquirir_servicios') }}" class="text-center card-dashboard">
                                    Servicios
                                    <div class="">
                                        <i class="fa fa-fw fa-cog fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <a href="{{ url('/seguridad') }}" class="text-center card-dashboard">
                                    Políticas de seguridad
                                    <div class="">
                                        <i class="fa fa-fw fa-shield fa-4x icon-dashboard"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
