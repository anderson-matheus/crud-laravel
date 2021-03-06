<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
    <a
      class="navbar-brand"
      href="{{ route('dashboard.index') }}"
      title="{{ config('app.name') }}">
      <img
        src={{ asset('assets/images/logo.svg')}}
        alt="{{ config('app.name') }}"
        width="50"
        height="50" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">☰</button>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.index') }}" title="Listar usuário">
                Usuários
              </a>
            </li>
        </ul>
    </div>
</nav>
