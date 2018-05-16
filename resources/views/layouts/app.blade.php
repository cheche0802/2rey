<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                          @can ('users.index')
                              <li class="nav-item">  <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                          @endcan
                          @can ('roles.index')
                              <li class="nav-item">  <a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                          @endcan
                          @can ('histories.index')
                              <li>  <a href="{{ route('histories.index') }}">Historias</a></li>
                          @endcan
                        @can ('categories.index')
                          <li>  <a href="{{ route('categories.index') }}">Categorias</a></li>
                        @endcan
                        @can ('details.index')
                          <li> <a href="{{ route('details.index') }}">Detalles</a> </li>
                        @endcan
                        @can ('stores.index')
                            <li> <a href="{{ route('stores.index') }}">Almacenes</a> </li>
                        @endcan
                        @can ('products.index')
                            <li> <a href="{{ route('products.index') }}">Productos</a></li>
                        @endcan
                        @can ('moviments.index')
                          <li>  <a href="{{ route('moviments.index') }}">Movimientos</a>  </li>
                        @endcan


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if(session('info'))
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success">
                  {{ session('info') }}
                </div>
              </div>
            </div>
          </div>
        @endif

        @if (count($errors))
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error )
                      <li>
                        {{ $error }}
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endif


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    @yield('scripts')
</body>
</html>
