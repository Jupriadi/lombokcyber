<?= $this->extend('/layout/templates/usertemplate') ?>
<?= $this->section('konten') ;?>

<section class="position-relative overflow-hidden my-5 py-5">
<div class="container py-5">
        <div class="text-center">
            <!-- <h2>Project Baru</h2>
            <span>Berikut Adalah Project Terbaru</span>
            <div class="garis bg-success mx-auto"></div> -->
        </div>

        <!-- list project terbaru -->
        
<!-- kelas section -->
<section id="project">
    <div class="container py-5">
        <div class="text-center">
            <h2>Kelas Online dengan Kurikulum <br>Standar Kompetensi Kerja</h2>
            <div class="text-secondary mt-3">
                Pilih Kelas Belajar Sesuai Keinginanmu Sekarang Juga
            </div>
            <div class="garis bg-success mx-auto"></div>
        </div>
        
        <!-- list project terbaru -->
        <div class="row mt-5">
            <?php 
                foreach($kelasbelajar as $kelas): 
            ?>
            <div class="col-md-4 mt-3">
                <a href="/kelas/<?= $kelas['slugKelas'] ?>">
                    <div class="card shd rounded rounded-3">
                        <div class="card-image position-relative m-3 rounded-3">
                            <img src="/assets/img/kelas_thumbnail/<?= $kelas['thumbnailKelas'] ?>" class="position-absolute top-50 start-50 translate-middle" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"><?= $kelas['namaKelas'] ?></h6>
                            <div class="text-success">
                                <strong class="me-3">
                                    <i class="bi bi-person-fill"></i> <?= $kelas['username'] ?></strong>
                                <span class="text-secondary">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <p class="card-text text-secondary"><?= substr($kelas['tentangKelas'],0,50) ?></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <?php 
                endforeach; 
            ?>
        </div>
    </div>
</section>
        
        <div class="py-5">
            <?= $pager->links() ?>
        </div>
    </div>
</section>
<script>
    $( window ).scroll( function () {

        if ( ($(document).scrollTop() > 50)) {
            // $(".share").removeClass("d-none");
            // $(".share").addClass("d-block");

            $(".share").fadeIn(2000);
        } else {
            $(".share").fadeOut();
        }
    });
</script>
<?= $this->endSection() ;?>