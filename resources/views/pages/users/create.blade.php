@extends('layouts.default')
@section('content')
  <h1 class="d-inline"><i class="fas fa-user-plus mr-2"></i>Criar usuário</h1>
  <hr />

  <form method="post" action="{{ route('users.store') }}">
    @csrf
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="inputName"
          placeholder="Digite seu nome"
          required />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputLastName" class="col-sm-2 col-form-label">Sobrenome</label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="inputLastName"
          placeholder="Digite seu sobrenome"
          required />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputUsername" class="col-sm-2 col-form-label">Usuário</label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="inputUsername"
          placeholder="Digite seu usuário"
          required />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-10">
        <input
          type="email"
          class="form-control"
          id="inputEmail"
          placeholder="Digite seu e-mail"
          required />
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
