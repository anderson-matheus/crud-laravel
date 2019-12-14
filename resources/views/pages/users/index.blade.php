@extends('layouts.default')
@section('content')
  <h1 class="d-inline"><i class="fas fa-users mr-2"></i>Usuários</h1>
  <a
    href="#"
    class="btn btn-success d-inline float-right"
    title="remover usuário">
      <i class="fas fa-user-plus"></i>
  </a>
  <hr />
  <table class="table">
    <thead class="thead-dark text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome completo</th>
        <th scope="col">E-mail</th>
        <th scope="col">Nome de usuário</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>
          <a
            href="mailto:email@email.com"
            title="email@email.com">
            email@email.com
          </a>
        </td>
        <td>Otto</td>
        <td>
          <a
            href="#"
            class="btn btn-primary"
            title="editar usuário">
              <i class="fas fa-user-edit"></i>
          </a>
          <a
            href="#"
            class="btn btn-danger"
            title="remover usuário">
              <i class="fas fa-user-minus"></i>
          </a>
        </td>
      <tr>
    </tbody>
  </table>
@stop
