
<!-- Hero Section -->
    <section class="hero bg-light py-5">
        <div class="container text-center">
            <img src="img/I-Care.png" alt="" style="widht: 80px; height:80px; margin-bottom:20px;">
            <h1>I-Care</h1>
            <h2>Sigap Inovatif Aman dan Profesional.</h2>
        </div>
    </section>

    <!-- Benefits Section -->

    <section class="benefits py-5 bg-light">
        <div class="container text-center">
            <h2>Dokter I-Care</h2>
            <div class="row">
                
            <?php foreach ($data["dokter"] as $dokter) : ?>
                <div class="col-md-3 pb-4">
                    <div class="card text-bg-primary mb-3 equal-height" style="background: linear-gradient(to bottom, #4580F9, #2F64D1); color:#ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                        <div class="card-header" style="min-height: 5rem; display:flex; justify-content:center; align-items:center;"><?= $dokter['nama_Dokter']; ?></div>
                        <div class="card-body p-4">
                            <img class="img-fixed-size object-cover rounded-sm" src="<?= BASEURL ?>/img/<?= basename($dokter['image_path']); ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta py-5">
        <div class="container text-center">
            <h2>Cegah Penyakit dengan Layanan Kesehatan Terbaik</h2>
            <p>Mulai konsultasi kesehatan dengan mendaftar sekarang</p>
        </div>
    </section>
</body>
</html>
