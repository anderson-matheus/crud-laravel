@extends('layouts.default')
@section('content')
    <h1 class="d-inline"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</h1>
    <hr />
    <div class="card col-md-2">
        <div class="card-body">
            <h5 class="card-title">{{ config('app.name') }}</h5>
            <p class="card-text">Módulo de usuários com <b>{{ $users->total() }}</b> usuário(s)</p>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Visualizar usuários</a>
        </div>
    </div>
@stop
