<!doctype html>
<html lang="pt-br">
<head>
    @include('includes.head')
</head>
  <body>
    <header>
        @include('includes.header')
    </header>

    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="container-fluid">
        @include('includes.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
