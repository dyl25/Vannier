<div class="navbar-fixed">
    <nav class="green accent-4">
        <div class="nav-wrapper container">
            <a href="{{ route('home') }}" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('creations') }}">Mes créations</a></li>
                <li><a href="{{ route('articles') }}">Articles</a></li>
                <li><a href="{{ route('contact') }}">Qui suis-je?</a></li>
                <li><a href="{{ route('admin.dashboard') }}">Backoffice</a></li>
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown-container">
                    <a href="#!" class="dropdown-button center-align" data-activates="dropdownProfileMenu" role="button">
                        {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                    </a>

                    <ul id="dropdownProfileMenu" class="dropdown-content">
                        <li>
                            <a href="#"><i class="material-icons left">person</i> Mon profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="material-icons left">power_settings_new</i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
<nav id="nav-mobile" class="side-nav">
    <ul>
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