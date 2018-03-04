<div class="col s12 m2 hide-on-small-only sideBack no-padding">
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
</div>
