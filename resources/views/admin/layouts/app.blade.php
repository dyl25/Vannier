<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body>
        <div class="row">
            <header>
                @include('admin.layouts.sidenav')
            </header>
            <main>
                <div class="col s12 m10 offset-m2">
                    <!-- Nav mobile -->
                    <nav class="navbar-container">
                        <ul id="nav-mobile" class="side-nav">
                            <li><a href="{{ route('admin.dashboard') }}"><i class="material-icons left">dashboard</i> Dashboard</a></li>
                            <li class="no-padding">
                                <ul class="collapsible no-margin" data-collapsible="accordion">
                                    <li>
                                        <a class="collapsible-header"><i class="material-icons left">shopping_basket</i> Créations <i class="material-icons right">arrow_drop_down</i></a>
                                        <div class="collapsible-body no-padding">
                                            <ul>
                                                <li><a href="{{ route('admin.creations.index') }}">Gérer</a></li>
                                                <li><a href="{{ route('admin.creations.create') }}">Ajouter</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="collapsible-header"><i class="material-icons left">library_books</i> Articles <i class="material-icons right">arrow_drop_down</i></a>
                                        <div class="collapsible-body no-padding">
                                            <ul>
                                                <li><a href="{{ route('admin.articles.index') }}">Gérer</a></li>
                                                <li><a href="{{ route('admin.articles.create') }}">Ajouter</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('home') }}" class="darken-4waves"><i class="material-icons left">store</i> Accueil</a></li>
                            <li><a href="{{ route('logout') }}" class="darken-4waves"><i class="material-icons left">power_settings_new</i> Déconnexion</a></li>
                        </ul>
                    </nav>
                    <a href="#" data-activates="nav-mobile" class="button-collapse hide-on-med-and-up"><i class="material-icons">menu</i></a>
                    @include('admin.notification')
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>
