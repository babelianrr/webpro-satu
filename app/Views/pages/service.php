<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Layanan Eko Service</h1>
            <p class="lead text-body-secondary">Kami melayani perbaikan segala jenis alat elektronik dengan segala jenis kerusakan.</p>
            <!-- <p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal" class="btn btn-primary my-2">Pesan Jasa</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#consultModal" class="btn btn-secondary my-2">Konsultasi</a>
            </p> -->
        </div>
    </div>
</section>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                <img src="img/ac.jpg" class="card-img-top w-100" />
                    <div class="card-body">
                        <p class="card-text">Kami melayani jasa perbaikan AC.</p>
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#acModal" class="btn btn-sm btn-outline-primary my-2">Pesan Jasa</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="img/kulkas.jpg" class="card-img-top w-100" />
                    <div class="card-body">
                        <p class="card-text">Kami melayani jasa perbaikan kulkas.</p>
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#kulkasModal" class="btn btn-sm btn-outline-primary my-2">Pesan Jasa</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="img/freezer.jpg" class="card-img-top w-100" />
                    <div class="card-body">
                        <p class="card-text">Kami melayani jasa perbaikan chiller.</p>
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#chillerModal" class="btn btn-sm btn-outline-primary my-2">Pesan Jasa</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="img/showcase.jpg" class="card-img-top w-100" />
                    <div class="card-body">
                        <p class="card-text">Kami melayani jasa perbaikan showcase.</p>
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#showcaseModal" class="btn btn-sm btn-outline-primary my-2">Pesan Jasa</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="img/mesincuci.jpg" class="card-img-top w-100" />
                    <div class="card-body">
                        <p class="card-text">Kami melayani jasa perbaikan mesin cuci.</p>
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#mesincuciModal" class="btn btn-sm btn-outline-primary my-2">Pesan Jasa</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="img/tv.jpg" class="card-img-top w-100" />
                    <div class="card-body">
                        <p class="card-text">Kami melayani jasa perbaikan TV.</p>
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#tvModal" class="btn btn-sm btn-outline-primary my-2">Pesan Jasa</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
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

<div class="modal fade" id="acModal" tabindex="-1" aria-labelledby="acModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="acModalLabel">Hubungi Admin untuk Jasa Service AC</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service AC') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service AC') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kulkasModal" tabindex="-1" aria-labelledby="kulkasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="kulkasModalLabel">Hubungi Admin untuk Jasa Service Kulkas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service kulkas') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service kulkas') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="chillerModal" tabindex="-1" aria-labelledby="chillerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="chillerModalLabel">Hubungi Admin untuk Jasa Service Chiller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service chiller') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service chiller') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="showcaseModal" tabindex="-1" aria-labelledby="showcaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="showcaseModalLabel">Hubungi Admin untuk Jasa Service showcase</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service showcase') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service showcase') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tvModal" tabindex="-1" aria-labelledby="tvModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tvModalLabel">Hubungi Admin untuk Jasa Service TV</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service TV') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service TV') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mesincuciModal" tabindex="-1" aria-labelledby="mesincuciModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mesincuciModalLabel">Hubungi Admin untuk Jasa Service Mesin Cuci</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="https://wa.me/6285776011522?text=<?= urlencode('Saya ingin memesan jasa service mesin cuci') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 1</a>
                <a href="https://wa.me/6285772219292?text=<?= urlencode('Saya ingin memesan jasa service mesin cuci') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Admin 2</a>
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
</div> -->
<?= $this->endSection() ?>