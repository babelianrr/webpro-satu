<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Galeri Eko Service</h1>
            <p class="lead text-body-secondary">Dokumentasi aktivitas teknisi Eko Service.</p>
            <p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal" class="btn btn-primary my-2">Pesan Jasa</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#consultModal" class="btn btn-secondary my-2">Konsultasi</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" data-masonry='{"percentPosition": true }'>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/gallery-1.jpg" class="w-100" />
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/featurette-1.jpeg" class="w-100" />
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/featurette-2.jpeg" class="w-100" />
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/gallery-2.jpg" class="w-100" />
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/gallery-3.jpg" class="w-100" />
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/gallery-4.jpeg" class="w-100" />
                </div>
            </div>
        </div>
    </div>
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
<?= $this->endSection() ?>