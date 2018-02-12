<nav class="green accent-4">
    <div class="nav-wrapper container">
        <a href="{{ route('home') }}" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('creations') }}">Mes créations</a></li>
            <li><a href="{{ route('articles') }}">Articles</a></li>
            <li><a href="{{ route('contact') }}">Qui suis-je?</a></li>
            <li><a href="./back/back.html">Backoffice</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="creations.html">Mes créations</a></li>
            <li><a href="articles.html">Articles</a></li>
            <li><a href="info.html">Qui suis-je?</a></li>
        </ul>
    </div>
</nav>