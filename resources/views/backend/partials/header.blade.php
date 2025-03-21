<header>
    <nav
        class="navbar navbar-expand-sm navbar-dark bg-danger"
    >
        <div class="container">
            <a class="navbar-brand" href="#">Catatan Obat</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link ms-3 {{ Route::currentRouteName() == 'clasification.index' ? 'active' : '' }}"  href="{{ route('clasification.index') }}" aria-current="page"
                            >Klasifikasi
                            <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'drug.index' ? 'active' : '' }}" href="{{ route('drug.index') }}">Obat</a>
                    </li>
                </ul>
                <div class="d-flex my-2 my-lg-0">
                    <a href="{{ route('logout') }}" class="navbar-brand">Logout</a>
                </div>
            </div>
        </div>
    </nav>

</header>
