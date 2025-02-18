<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Eko Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $uri->getSegment(1) == '' ? 'active' : '' ?>" aria-current="page" href="/">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uri->getSegment(1) == 'service' ? 'active' : '' ?>" href="service">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uri->getSegment(1) == 'gallery' ? 'active' : '' ?>" href="gallery">Galeri Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uri->getSegment(1) == 'contact' ? 'active' : '' ?>" href="contact">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>