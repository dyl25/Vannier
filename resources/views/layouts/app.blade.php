<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Styles -->
        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body>
        <div id="app">
            <header>
                <div class="navbar-fixed">
                    @include('layouts.nav')
                </div>
            </header>
            <main>
                @yield('content')
            </main>
            <footer class="page-footer teal">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Company Bio</h5>
                            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                        </div>

                        <div class="col l3 s12">
                            <h5 class="white-text">Links</h5>
                            <ul>
                                <li>
                                    <a href="#" class="white-text">Accueil</a>
                                </li>
                                <li>
                                    <a class="white-text">Informations</a>
                                </li>
                                <li>
                                    <a class="white-text">Articles</a>
                                </li>
                                <li>
                                    <a class="white-text">Résultats</a>
                                </li>
                                <li>
                                    <a class="white-text">Mon espace</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l3 s12 reseautage">
                            <ul>
                                <li><a href="#" class="tooltipped white-text" data-position="right" data-delay="50" data-tooltip="Facebook"><i class="fab fa-facebook fa-3x"></i></a></li>
                                <li><a href="#" class="tooltipped white-text" data-position="right" data-delay="50" data-tooltip="Twitter"><i class="fab fa-twitter-square fa-3x"></i></a></li>
                                <li><a href="#" class="tooltipped white-text" data-position="right" data-delay="50" data-tooltip="Google +"><i class="fab fa-google-plus-square fa-3x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        Made by <a class="brown-text text-lighten-3" href="#">Dylan Vansteenacker</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
