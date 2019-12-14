@extends('layouts.default')
@section('content')
  <h1 class="d-inline"><i class="fas fa-user-plus mr-2"></i>Criar usuário</h1>
  <hr />

  <form method="post" action="{{ route('users.store') }}">
    @csrf
    <div class="form-group row">
        <label
            for="inputName"
            class="col-sm-2 col-form-label {{ $errors->has('name') ? 'text-danger' : '' }}">
            Nome
        </label>
        <div class="col-sm-10">
          <input
            name="name"
            value="{{ old('name') }}"
            type="text"
            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
            id="inputName"
            placeholder="Digite seu nome"
            required />
          @if ($errors->has('name'))
            <span class="text-danger">
                {{ $errors->first('name') }}
            </span>
          @endif
        </div>
    </div>
    <div class="form-group row">
        <label
            for="inputLastName"
            class="col-sm-2 col-form-label {{ $errors->has('lastname') ? 'text-danger' : '' }}">
            Sobrenome
        </label>
        <div class="col-sm-10">
          <input
            name="lastname"
            value="{{ old('lastname') }}"
            type="text"
            class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
            id="inputLastName"
            placeholder="Digite seu sobrenome"
            required />
          @if ($errors->has('lastname'))
            <span class="text-danger">
                {{ $errors->first('lastname') }}
            </span>
          @endif
        </div>
    </div>
    <div class="form-group row">
        <label
            for="inputUsername"
            class="col-sm-2 col-form-label {{ $errors->has('username') ? 'text-danger' : '' }}">
            Usuário
        </label>
        <div class="col-sm-10">
          <input
            name="username"
            value="{{ old('username') }}"
            type="text"
            class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
            id="inputUsername"
            placeholder="Digite seu usuário"
            required />
          @if ($errors->has('username'))
            <span class="text-danger">
                {{ $errors->first('username') }}
            </span>
          @endif
        </div>
    </div>
    <div class="form-group row">
        <label
            for="inputEmail"
            class="col-sm-2 col-form-label {{ $errors->has('email') ? 'text-danger' : '' }}">
            E-mail
        </label>
        <div class="col-sm-10">
          <input
            name="email"
            value="{{ old('email') }}"
            type="email"
            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
            id="inputEmail"
            placeholder="Digite seu e-mail"
            required />
          @if ($errors->has('email'))
            <span class="text-danger">
                {{ $errors->first('email') }}
            </span>
          @endif
        </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <input
          type="submit"
          class="btn btn-success float-right"
          value="Criar" />
      </div>
    </div>
  </form>
@stop
