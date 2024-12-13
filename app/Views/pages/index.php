<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('components/carousel') ?>

<div class="container marketing">
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-6 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Tentang Eko Service</h2>
            <p class="lead"><strong>EkoService.id</strong> adalah salah satu usaha penyedia jasa service elektronik panggilan terbaik di Jakarta.</p>
            <p>Kami memiliki staf profesional dengan pengalaman bertahun-tahun. Anda pasti akan mendapatkan hasil yang cepat dan rapi dan perangkat elektronik Anda akan berfungsi seperti semula lagi.</p>
            <p>EkoService.id menyediakan jasa perbaikan <strong>kulkas, mesin cuci, AC, <em>chiller</em>, showcase, dll.</strong> dengan berbagai merek dan tipe.</p>
            <p>Kami sudah dipercaya masyarakat <strong>Jakarta dan sekitarnya</strong> untuk memperbaiki barang elektronik anda dan kami melayani konsumen dari berbagai kalangan.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="img/featurette-2.jpg" style="width: 500px; height: 500px;" alt="featurette-2" />
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row">
        <div class="col-lg-4">
            <img src="img/technician.png" alt="https://www.flaticon.com/free-icons/plumber" style="width: 140px;" />
            <h2 class="fw-normal">Teknisi Berkualitas</h2>
        </div>
        <div class="col-lg-4">
            <img src="img/reduce-cost.png" alt="https://www.flaticon.com/free-icons/cost" style="width: 140px;" />
            <h2 class="fw-normal">Harga Terjangkau</h2>
        </div>
        <div class="col-lg-4">
            <img src="img/quality-service.png" alt="https://www.flaticon.com/free-icons/guarantee" style="width: 140px;" />
            <h2 class="fw-normal">Garansi</h2>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-6">
            <h2 class="featurette-heading fw-normal lh-1">Kami Selalu Memberikan Pelayanan Terbaik</h2>
            <p class="lead">Teknisi handal dari EkoService.id</p>
            <p>
                Kami mempekerjakan teknisi profesional yang berkualifikasi dan berpengalaman untuk memastikan bahwa pekerjaan kami akurat, tepat waktu dan rapi. Sehingga alat elektronik Anda akan berfungsi seperti baru kembali.
            </p>
            <p>
                Kami telah dipercaya masyarakat Jakarta selama bertahun-tahun sebagai penyedia jasa perbaikan dan perawatan alat elektronik. Karena kami memiliki reputasi keandalan dan keramahan. Harga jasa perbaikan dari kami sangat terjangkau dan memberikan hasil yang nyaman dan memuaskan.
            </p>
        </div>
        <div class="col-md-6">
            <img src="img/featurette-2.jpg" style="width: 500px; height: 500px;" alt="featurette-2" />
        </div>
    </div>
</div>
<?= $this->endSection() ?>