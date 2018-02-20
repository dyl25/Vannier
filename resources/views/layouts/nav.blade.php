<nav class="green accent-4">
    <div class="nav-wrapper container">
        <a href="{{ route('home') }}" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('creations') }}">Mes créations</a></li>
            <li><a href="{{ route('articles') }}">Articles</a></li>
            <li><a href="{{ route('contact') }}">Qui suis-je?</a></li>
            <li><a href="{{ route('dashboard') }}">Backoffice</a></li>
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
        <ul class="side-nav" id="mobile-demo">
            <li><a href="creations.html">Mes créations</a></li>
            <li><a href="articles.html">Articles</a></li>
            <li><a href="info.html">Qui suis-je?</a></li>
        </ul>
    </div>
</nav>