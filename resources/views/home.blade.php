@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(Auth::check() && Auth()->user()->rol == 'admin')
        <ul class="list-unstyled">
            <a href="{{ url('/admin/usuarios') }}">Usuarios</a>
        </ul>
        @endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
