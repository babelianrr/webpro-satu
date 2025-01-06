<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <p class="text-body-secondary">&copy; <?= date('Y') ?> Eko Service</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Layanan</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal" class="nav-link p-0 text-body-secondary">Jasa Service</a></li>
                <li class="nav-item mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#consultModal" class="nav-link p-0 text-body-secondary">Konsultasi</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Media Sosial</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://facebook.com" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                <li class="nav-item mb-2"><a href="https://instagram.com" class="nav-link p-0 text-body-secondary">Instagram</a></li>
                <li class="nav-item mb-2"><a href="https://tiktok.com" class="nav-link p-0 text-body-secondary">Tiktok</a></li>
            </ul>
        </div>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Jasa Service
    </button> -->

    </footer>
</div>

<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="serviceModalLabel">Hubungi Admin untuk Jasa Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service...') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service...') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="consultModal" tabindex="-1" aria-labelledby="consultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="consultModalLabel">Hubungi Admin untuk Konsultasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin bertanya tentang...') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin bertanya tentang...') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>