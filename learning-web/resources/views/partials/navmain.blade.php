<h1>
    Daftar E-Learning SMA Nusantara Gresik
</h1>

<nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 py-0">
    <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav py-3 py-lg-0 text-center">
            <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Kategori Konten
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ ($title === 'Buku Gratis') ? 'active-custom' : '' }}" href="/buku-gratis/#menuKategori">Buku Gratis</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ ($title === 'Modul Sekolah') ? 'active-custom' : '' }}" href="/modul-sekolah/#menuKategori">Modul Sekolah</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ ($title === 'Konten Video') ? 'active-custom' : '' }}" href="/video/#menuKategori">Video</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="navbar-nav ms-auto">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

