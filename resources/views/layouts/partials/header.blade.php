
<header class="partie1">
    <div class="brand">
        <h2><a href="{{ url('/') }}">NovaBooks</a></h2>
        <h5>Des histoires qui restent</h5>
    </div>

    <nav>
        <ul>
            <li>
                <a href="{{ url('/inscription') }}" title="Se connecter" class="icon-nav">
                    <!-- Conserve ici ton SVG utilisateur -->
                </a>
            </li>

            <li>
                <a href="{{ url('/about') }}">À propos</a>
            </li>

            <li>
                <a href="{{ url('/books') }}">Catalogue</a>
            </li>

            <li>
                <a href="{{ url('/checkout') }}">Checkout</a>
            </li>

            <li class="panier">
                <a href="{{ url('/cart') }}">
                    🛒<span id="icon-panier"></span>
                </a>
            </li>
        </ul>
    </nav>
</header>
