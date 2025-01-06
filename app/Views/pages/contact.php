<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row text-center mb-5">
        <h2 class="featurette-heading">Hubungi Kami</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="img/info.png" class="mx-auto p-3" alt="https://www.flaticon.com/free-icons/info" style="width: 100px;" />
                <div class="card-body">
                    <h5 class="card-title">Tentang Kami</h5>
                    <p class="card-text"><strong>EkoService.id</strong> adalah salah satu usaha penyedia jasa service elektronik panggilan terbaik di Jakarta.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/location.png" class="mx-auto p-3" alt="https://www.flaticon.com/free-icons/location" style="width: 100px;" />
                <div class="card-body">
                    <h5 class="card-title">Alamat</h5>
                    <p class="card-text">Penggilingan, Cakung, Jakarta Timur.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/phone-call.png" class="mx-auto p-3" alt="https://www.flaticon.com/free-icons/phone" style="width: 100px;" />
                <div class="card-body">
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text"><a href="https://wa.me/6285776011522" target="_blank" rel="noopener noreferrer">Admin 1</a><br><a href="https://wa.me/6285772219292" target="_blank" rel="noopener noreferrer">Admin 2</a></p>
                </div>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row w-100 text-center">
        <div class="mapswrapper iframe-height"><iframe class="responsive-iframe" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=<?= env('GOOGLE_API_KEY') ?>&q=QWWQ%2BRX%20Penggilingan%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta&zoom=10&maptype=roadmap"></iframe>
            <style>
                .mapswrapper {
                    background: #fff;
                    position: relative
                }

                .mapswrapper iframe {
                    border: 0;
                    position: relative;
                    z-index: 2
                }

                .mapswrapper a {
                    color: rgba(0, 0, 0, 0);
                    position: absolute;
                    left: 0;
                    top: 0;
                    z-index: 0
                }
            </style>
        </div>
    </div>
</div>
<?= $this->endSection() ?>