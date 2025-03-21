<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Toko Roti</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('cake', 'cake/*') ? 'active' : '' }}" aria-current="page"
                        href="/cake">Roti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('ingredient', 'ingredient/*') ? 'active' : '' }}"
                        aria-current="page" href="/ingredient">Bahan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
