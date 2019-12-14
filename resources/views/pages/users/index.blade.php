@extends('layouts.default')
@section('content')
  <h1 class="d-inline"><i class="fas fa-users mr-2"></i>Usuários</h1>
  <a
    href="{{ route('users.create') }}"
    class="btn btn-success d-inline float-right"
    title="remover usuário">
      <i class="fas fa-user-plus"></i>
  </a>
  <hr />
  <div class="table-responsive">
    <table class="table">
      <thead class="thead-dark text-center">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
          <th scope="col">Username</th>
          <th scope="col">E-mail</th>
          <th scope="col">Última atualização</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody class="text-center">
          @if ($users->count() == 0)
            <div class="alert alert-warning" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Não existe(m) mais usuário(s)
            </div>
          @endif

          @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                  <a
                    href="{{ route('users.edit', ['id' => $user->id]) }}"
                    class="btn btn-primary mb-2"
                    title="editar usuário">
                      <i class="fas fa-user-edit"></i>
                  </a>
                  <a
                    href="{{ route('users.delete', ['id' => $user->id]) }}"
                    class="btn btn-danger mb-2"
                    title="remover usuário">
                      <i class="fas fa-user-minus"></i>
                  </a>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
    <div class="float-right">
        {{ $users->links() }}
    </div>
  </div>
@stop
